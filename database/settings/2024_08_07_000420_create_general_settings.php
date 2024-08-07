<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Laravel');
        $this->migrator->add('general.meta_description', 'description');
        $this->migrator->add('general.og_image', '');
        $this->migrator->add('general.site_logo', '');
        $this->migrator->add('general.site_favicon', '');
        $this->migrator->add('general.site_email', 'contact@company.com');
        $this->migrator->add('general.site_phone', '0612345678');
        $this->migrator->add('general.site_address', 'address');
    }
};
