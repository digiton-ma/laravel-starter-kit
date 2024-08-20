<?php

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

    public function initializeHasSeo()
    {
        $this->fillable = array_merge($this->fillable, $this->seo_fileds);
    }

    public function seoFactoryValues()
    {
        return [
            'seo_title' => $this->faker?->sentence,
            'seo_description' => Str::limit($this->faker?->paragraph, 160),
            'seo_keywords' => implode(',' , explode(' ', $this->faker?->words(5, true))),
            'canonical_link' => $this->faker?->url,
        ];
    }
}
