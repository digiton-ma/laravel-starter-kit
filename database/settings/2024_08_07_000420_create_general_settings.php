<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Project');
        $this->migrator->add('general.site_description', 'Project description');
        $this->migrator->add('general.site_author', 'Project');
        $this->migrator->add('general.site_logo', 'logo.png');
        $this->migrator->add('general.og_image', '');
        $this->migrator->add('general.site_logo_height', '50px');
        $this->migrator->add('general.site_favicon', 'favicon.png');
        $this->migrator->add('general.company_email', '');
        $this->migrator->add('general.company_phone', '');
        $this->migrator->add('general.company_address', '');
    }
};
