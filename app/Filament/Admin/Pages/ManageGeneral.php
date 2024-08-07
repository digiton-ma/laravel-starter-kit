<?php

namespace App\Filament\Admin\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Pages\SettingsPage;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('site_name')
                    ->label('Nom du site')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('meta_description')
                    ->label('Meta description')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('site_logo')
                    ->label('Logo du site')
                    ->required()
                    ->image(),

                Forms\Components\FileUpload::make('site_favicon')
                    ->label('Favicon du site')
                    ->image(),

                Forms\Components\FileUpload::make('og_image')
                    ->label('Image Open Graph')
                    ->image(),

                Forms\Components\TextInput::make('site_email')
                    ->label('Email du site')
                    ->email()
                    ->maxLength(255),

                Forms\Components\TextInput::make('site_phone')
                    ->label('Téléphone du site')
                    ->tel()
                    ->maxLength(255),

                Forms\Components\TextInput::make('site_address')
                    ->label('Adresse du site')
                    ->maxLength(255),
            ]);
    }
}
