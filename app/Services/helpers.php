<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Glide\GlideImage;

if (! function_exists('glide')) {
    function glide(string $src, array $params = []): string
    {
        // 1. Merge with default parameters from config
        $params = array_merge(config('glide.defaults', []), $params);

        // 2. Handle external URLs
        if (Str::startsWith($src, ['http://', 'https://']) && ! Str::contains($src, asset(''))) {
            return $src;
        }

        // 3. Try to resolve path from Laravel Storage
        $relativeToStorage = ltrim(Str::after($src, asset('storage')), '/');
        $storagePath = Storage::disk('public')->path($relativeToStorage);
        $sourcePath = file_exists($storagePath) ? $storagePath : null;

        // 4. Or try to resolve from public/
        if (! $sourcePath) {
            $relativeToPublic = ltrim(Str::after($src, asset('')), '/');
            $publicPath = public_path($relativeToPublic);
            $sourcePath = file_exists($publicPath) ? $publicPath : null;
        }

        // 5. Exit early if file not found
        if (! $sourcePath || ! file_exists($sourcePath)) {
            return $src;
        }

        // 6. Determine extension
        $extension = $params['fm'] ?? pathinfo($sourcePath, PATHINFO_EXTENSION);

        // 7. Hash to generate unique filename (including mod time)
        $hash = md5($sourcePath.filemtime($sourcePath).json_encode($params));
        $hashedName = "{$hash}.{$extension}";

        $outputRelativePath = config('glide.output_dir', 'manipulated')."/{$hashedName}";
        $outputPath = Storage::disk('public')->path($outputRelativePath);

        // 8. Create output dir if not exists
        Storage::makeDirectory(config('glide.output_dir', 'manipulated'));

        // 9. Generate if not already created
        if (! file_exists($outputPath)) {
            GlideImage::create($sourcePath)
                ->modify($params)
                ->save($outputPath);
        }

        return Storage::url($outputRelativePath);
    }
}
