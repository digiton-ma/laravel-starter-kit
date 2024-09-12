<?php

declare(strict_types=1);

namespace App\Traits\Seo\Database;

use Illuminate\Database\Schema\Blueprint;

trait HasSeoFields
{
    public function addSeoFields(
        Blueprint $table,
        array $items = ['seo_title', 'seo_description', 'seo_keywords', 'canonical_link']
    ): void {
        if (in_array('seo_title', $items, true)) {
            $table->string('seo_title')->nullable();
        }

        if (in_array('seo_description', $items, true)) {
            $table->string('seo_description')->nullable();
        }

        if (in_array('seo_keywords', $items, true)) {
            $table->string('seo_keywords')->nullable();
        }

        if (in_array('canonical_link', $items, true)) {
            $table->string('canonical_link')->nullable();
        }
    }
}
