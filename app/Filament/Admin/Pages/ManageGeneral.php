<?php

declare(strict_types=1);

namespace App\Filament\Admin\Pages;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\HasUnsavedDataChangesAlert;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @property Forms\ComponentContainer $form
 */
final class ManageGeneral extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms,
        HasUnsavedDataChangesAlert,
        InteractsWithFormActions;

    /**
     * @var array <string, mixed>
     */
    public array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.admin.pages.manage-general';

    public function getTitle(): string|Htmlable
    {
        return 'General Settings';
    }

    public function getSubheading(): string|Htmlable|null
    {
        return 'Here you can set the general settings of your site.';
    }

    public function mount(): void
    {
        $this->form->fill([
            'general' => [
                'site_name' => settings()->get('general.site_name') ?? config('app.name'),
                'site_description' => settings()->get('general.site_description') ?? 'This is a description of the site.',
                'site_author' => settings()->get('general.site_author') ?? 'John Doe',
                'site_logo' => settings()->get('general.site_logo'),
                'site_logo_height' => settings()->get('general.site_logo_height') ?? '75px',
                'og_image' => settings()->get('general.og_image'),
                'site_favicon' => settings()->get('general.site_favicon'),
                'company_email' => settings()->get('general.company_email'),
                'company_phone' => settings()->get('general.company_phone'),
                'company_address' => settings()->get('general.company_address'),
            ],
        ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('general')
                    ->schema([
                        Forms\Components\Tabs\Tab::make('General')
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
                        Forms\Components\Tabs\Tab::make('Logos')
                            ->schema([
                                Forms\Components\FileUpload::make('general.site_logo')
                                    ->label('Logo du site')
                                    ->required()
                                    ->image()
                                    ->disk('public')
                                    ->maxSize(256)
                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => 'logo.png'),

                                Forms\Components\TextInput::make('general.site_logo_height')
                                    ->label('Hauteur du Logo du site')
                                    ->required()
                                    ->maxLength(6)
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('general.site_favicon')
                                    ->label('Favicon du site')
                                    ->image()
                                    ->maxSize(32)
                                    ->disk('public')
                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => 'favicon.png'),

                                Forms\Components\FileUpload::make('general.og_image')
                                    ->label('Image Open Graph')
                                    ->image()
                                    ->maxSize(256)
                                    ->disk('public')
                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => 'og_image.png'),
                            ])
                            ->columns(2),
                    ]),
            ])

            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        if ($data['general']['site_favicon'] === null) {
            Storage::delete('public/favicon.png');
        }

        if ($data['general']['og_image'] === null) {
            Storage::delete('public/og_image.png');
        }

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

        $this->js('window.location.reload()');
    }

    /**
     * @return array<Action | ActionGroup>
     */
    public function getFormActions(): array
    {
        return [
            $this->getSaveFormAction(),
        ];
    }

    public function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->submit('save')
            ->keyBindings(['mod+s']);
    }
}
