<?php

declare(strict_types=1);

namespace App\Traits\Seo;

use Illuminate\Support\Str;

trait HasSeo
{
    protected array $seo_fileds = [
        'seo_title',
        'seo_description',
        'seo_keywords',
        'canonical_link',
    ];

    public function initializeHasSeo(): void
    {
        $this->fillable = array_merge($this->fillable, $this->seo_fileds);
    }

    public function seoFactoryValues(): array
    {
        return [
            'seo_title' => $this->faker?->sentence,
            'seo_description' => Str::limit($this->faker?->paragraph, 160),
            'seo_keywords' => implode(',', explode(' ', (string) $this->faker?->words(5, true))),
            'canonical_link' => $this->faker?->url,
        ];
    }
}
