<?php

namespace App\Filament\Admin\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Pages\SettingsPage;

class ManageGeneral extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.admin.pages.manage-general';

    public function mount()
    {
        $this->form->fill([
            'general' => [
                'site_name' => settings()->get('general.site_name'),
                'site_description' => settings()->get('general.site_description'),
                'site_author' => settings()->get('general.site_author'),
                'site_logo' => settings()->get('general.site_logo'),
                'site_logo_height' => settings()->get('general.site_logo_height'),
                'og_image' => settings()->get('general.og_image'),
                'site_favicon' => settings()->get('general.site_favicon'),
                'company_email' => settings()->get('general.company_email'),
                'company_phone' => settings()->get('general.company_phone'),
                'company_address' => settings()->get('general.company_address'),
            ]
        ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('general')
                    ->heading('General Settings')
                    ->description("Here you can set the general settings of your site.")
                    ->schema([
                        Forms\Components\TextInput::make('general.site_name')
                            ->label('Nom du site')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.site_author')
                            ->label('Auteur du site')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.site_description')
                            ->label('Meta description')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('general.site_logo')
                            ->label('Logo du site')
                            ->required()
                            ->image(),

                        Forms\Components\TextInput::make('general.site_logo_height')
                            ->label('Hauteur du Logo du site')
                            ->required()
                            ->maxLength(6),

                        Forms\Components\FileUpload::make('general.og_image')
                            ->label('Favicon du site')
                            ->image(),

                        Forms\Components\FileUpload::make('general.site_favicon')
                            ->label('Image Open Graph')
                            ->image(),

                        Forms\Components\TextInput::make('general.company_email')
                            ->label('Email du site')
                            ->email()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_phone')
                            ->label('Téléphone du site')
                            ->tel()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_address')
                            ->label('Adresse du site')
                            ->maxLength(255),
                    ])
                    ->columns(2),
            ])

            ->statePath('data');
    }

    public function save()
    {
        $data = $this->form->getState();

        settings()->set([
            'general.site_name' => $data['general']['site_name'] ?? '',
            'general.site_description' => $data['general']['site_description'] ?? '',
            'general.site_author' => $data['general']['site_author'] ?? '',
            'general.site_logo' => $data['general']['site_logo'] ?? '',
            'general.site_logo_height' => $data['general']['site_logo_height'] ?? '',
            'general.og_image' => $data['general']['og_image'] ?? '',
            'general.site_favicon' => $data['general']['site_favicon'] ?? '',
            'general.company_email' => $data['general']['company_email'] ?? '',
            'general.company_phone' => $data['general']['company_phone'] ?? '',
            'general.company_address' => $data['general']['company_address'] ?? '',
        ]);

        settings()->save();

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
}
