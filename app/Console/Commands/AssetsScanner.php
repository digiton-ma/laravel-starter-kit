<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class AssetsScanner extends Command
{
    protected $signature = 'asset:scan
        {--show-used : Show used images}
        {--show-unused : Show unused images}
        {--assets-path=public : Path to assets folder relative to base path}
        {--scan-paths=resources/views,resources/css,resources/js : Comma-separated paths to scan for image usage}';

    protected $description = 'Scan and manage unused images in your Laravel project to optimize storage and improve performance';

    private $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'];
    private $assetsPath;
    private $searchPaths;

    public function handle()
    {
        $this->setupPaths();

        $this->info('Analyzing image usage...');
        $this->line('Assets path: ' . $this->assetsPath);
        $this->line('Scanning in: ' . implode(', ', $this->searchPaths));

        // Get all images from assets
        $images = $this->getAllImages();
        if (empty($images)) {
            $this->error('No images found in assets!');
            return;
        }

        // Find usage of each image
        $usedImages = [];
        $unusedImages = [];

        $bar = $this->output->createProgressBar(count($images));
        $bar->start();

        foreach ($images as $image) {
            $isUsed = $this->isImageUsed($image);

            if ($isUsed) {
                $usedImages[] = $image;
            } else {
                $unusedImages[] = $image;
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();

        // Display results based on options
        if ($this->option('show-used')) {
            $this->info("\nUsed images (" . count($usedImages) . "):");
            foreach ($usedImages as $image) {
                $this->line("✓ " . $image);
            }
        }

        if ($this->option('show-unused') || (!$this->option('show-used') && !$this->option('show-unused'))) {
            $this->info("\nUnused images (" . count($unusedImages) . "):");
            foreach ($unusedImages as $image) {
                $this->line("✗ " . $image);
            }
        }

        // Summary
        $this->info("\nSummary:");
        $this->line("Total images: " . count($images));
        $this->line("Used images: " . count($usedImages));
        $this->line("Unused images: " . count($unusedImages));

        // Ask about deletion if there are unused images
        if (!empty($unusedImages) && $this->confirm("\nWould you like to delete unused images?", false)) {
            $this->deleteUnusedImages($unusedImages);
        }
    }

    private function setupPaths(): void
    {
        // Setup assets path
        $this->assetsPath = rtrim($this->option('assets-path'), '/');
        if (!File::exists(base_path($this->assetsPath))) {
            throw new \RuntimeException("Assets path '{$this->assetsPath}' does not exist!");
        }

        // Setup search paths
        $scanPaths = $this->option('scan-paths');
        $this->searchPaths = array_filter(
            explode(',', $scanPaths),
            function ($path) {
                $fullPath = base_path(trim($path));
                return File::exists($fullPath);
            }
        );

        if (empty($this->searchPaths)) {
            throw new \RuntimeException("None of the specified scan paths exist!");
        }
    }

    private function getAllImages(): array
    {
        $images = [];
        $assetsFullPath = base_path($this->assetsPath);

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($assetsFullPath)
        );

        foreach ($iterator as $file) {
            if ($file->isDir()) continue;

            $extension = strtolower($file->getExtension());
            if (in_array($extension, $this->imageExtensions)) {
                $relativePath = str_replace($assetsFullPath . '/', '', $file->getPathname());
                $images[] = $relativePath;
            }
        }

        return $images;
    }

    private function isImageUsed(string $imagePath): bool
    {
        $pattern = preg_quote($imagePath, '/');

        foreach ($this->searchPaths as $searchPath) {
            $path = base_path(trim($searchPath));
            $files = File::allFiles($path);

            foreach ($files as $file) {
                $content = File::get($file->getPathname());
                if (preg_match("/$pattern/", $content)) {
                    return true;
                }
            }
        }

        return false;
    }

    private function deleteUnusedImages(array $unusedImages): void
    {
        $this->info("\nDeleting unused images...");
        $bar = $this->output->createProgressBar(count($unusedImages));
        $bar->start();

        $deletedCount = 0;
        $errorCount = 0;

        foreach ($unusedImages as $image) {
            $fullPath = base_path($this->assetsPath . '/' . $image);

            try {
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                    $deletedCount++;
                }
            } catch (\Exception $e) {
                $errorCount++;
                $this->newLine();
                $this->error("Failed to delete: {$image}");
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        $this->info("Deletion complete:");
        $this->line("Successfully deleted: {$deletedCount} images");
        if ($errorCount > 0) {
            $this->warn("Failed to delete: {$errorCount} images");
        }
    }
}
