<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;
use Psr\Http\Message\UriInterface;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as IlluminateRoute;

final class GenerateSitemapCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    protected array $excludedPatterns = [
       '/storage/*',     // wildcard example
       '/reservation/*',
    ];

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

        $baseUrl = config('app.url');

        // We'll use a collection to track URLs and avoid duplicates
        $seenUrls = collect();

        SitemapGenerator::create($baseUrl)
            ->hasCrawled(function ($crawledUrl) use ($seenUrls) {

                $this->line("<fg=gray>Crawled: " . (string) $crawledUrl->url . "</>");

                // Normalize URL: remove trailing slash
                $urlString = rtrim((string) $crawledUrl->url, '/');

                // Special case: if it's the homepage, normalize to '/'
                if ($urlString === rtrim(config('app.url'), '/')) {
                    $urlString = config('app.url') . '/';
                }

                // Avoid duplicates
                if ($seenUrls->contains($urlString)) {
                    return false;
                }

                // Exclude patterns
                $path = parse_url((string) $crawledUrl->url, PHP_URL_PATH); // Extract the path from the URL

                foreach ($this->excludedPatterns as $pattern) {
                    if (fnmatch($pattern, $path)) {
                        return false;
                    }
                }

                $seenUrls->push($urlString);

                // Match path to a named route
                $path = parse_url($urlString, PHP_URL_PATH);

                $lastmod = now();

                // Try to find a matching route
                $route = collect(Route::getRoutes())->first(function ($route) use ($path) {
                    $request = \Illuminate\Http\Request::create($path);
                    return $route->matches($request);
                });

                if ($route) {
                    foreach ($route->parameterNames() as $paramName) {
                        $segments = explode('/', trim($path, '/'));
                        $slugOrId = end($segments); // naive approach

                        // Guess the model from parameter name
                        $modelClass = 'App\\Models\\' . Str::studly($paramName);

                        if (class_exists($modelClass)) {
                            // Try to resolve the model using slug or ID
                            $model = $modelClass::where('slug', $slugOrId)->first()
                                ?? $modelClass::find($slugOrId); // fallback

                            if ($model && $model->updated_at) {
                                $lastmod = $model->updated_at;
                                $this->line("<fg=gray>Resolved $modelClass: " . $model->getKey() . "</>");
                                break;
                            }
                        }
                    }
                }

                $url = Url::create($urlString)
                ->setLastModificationDate($lastmod);

                $this->info("Added");
                return $url;

            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
