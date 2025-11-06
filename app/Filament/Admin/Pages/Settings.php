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
final class Settings extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms,
        HasUnsavedDataChangesAlert,
        InteractsWithFormActions;

    /**
     * @var array <string, mixed>
     */
    public array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.admin.pages.settings';

    public static function getNavigationLabel(): string
    {
        return __('Paramètres');
    }

    public function getTitle(): string|Htmlable
    {
        return __('Paramètres');
    }

    public function mount(): void
    {
        $this->form->fill([
            'general' => [
                'site_name' => settings()->get('general.site_name') ?? config('app.name'),
                'site_description' => settings()->get('general.site_description') ?? 'This is a description of the site.',
                'og_image' => settings()->get('general.og_image'),
                'company_email' => settings()->get('general.company_email'),
                'company_phone' => settings()->get('general.company_phone'),
                'company_address' => settings()->get('general.company_address'),
                'company_location' => settings()->get('general.company_location'),
            ],
        ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('general.site_name')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.site_description')
                            ->label('Meta description')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_phone')
                            ->label('Téléphone')
                            ->tel()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_address')
                            ->label('Adresse')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('general.company_location')
                            ->label('Localisation')
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('general.og_image')
                            ->label('Image Open Graph')
                            ->image()
                            ->maxSize(256)
                            ->disk('public')
                            ->columnSpanFull()
                            ->getUploadedFileNameForStorageUsing(fn(TemporaryUploadedFile $file): string => 'og_image.png'),

                    ])
                    ->columns(2),
            ])

            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        if ($data['general']['og_image'] === null) {
            Storage::delete('public/og_image.png');
        }

        settings()->set([
            'general.site_name' => $data['general']['site_name'] ?? '',
            'general.site_description' => $data['general']['site_description'] ?? '',
            'general.og_image' => $data['general']['og_image'] ?? '',
            'general.company_email' => $data['general']['company_email'] ?? '',
            'general.company_phone' => $data['general']['company_phone'] ?? '',
            'general.company_address' => $data['general']['company_address'] ?? '',
            'general.company_location' => $data['general']['company_location'] ?? '',
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
            ->label('Sauvegarder')
            ->keyBindings(['mod+s']);
    }
}
