<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name = '';
    public string $meta_description = '';
    public string $site_logo = '';
    public ?string $og_image = '';
    public ?string $site_favicon = '';
    public ?string $site_email = '';
    public ?string $site_phone = '';
    public ?string $site_address = '';

    public static function group(): string
    {
        return 'general';
    }
}
