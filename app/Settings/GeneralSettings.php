<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name = '';
    public string $site_description = '';
    public string $site_author;
    public string $site_logo = '';
    public string $site_logo_height = '';
    public ?string $og_image = '';
    public ?string $site_favicon = '';
    public ?string $company_email = '';
    public ?string $company_phone = '';
    public ?string $company_address = '';

    public static function group(): string
    {
        return 'general';
    }
}
