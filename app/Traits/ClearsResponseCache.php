<?php

declare(strict_types=1);

namespace App\Traits;

use Spatie\ResponseCache\Facades\ResponseCache;

trait ClearsResponseCache
{
    public static function bootClearsResponseCache(): void
    {
        self::created(function (): void {
            ResponseCache::clear();
        });

        self::updated(function (): void {
            ResponseCache::clear();
        });

        self::deleted(function (): void {
            ResponseCache::clear();
        });
    }
}
