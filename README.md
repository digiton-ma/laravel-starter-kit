<p align="center">
    <a href="https://digiton.ma" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/108480560?s=200&v=4" width="150" alt="Digiton Logo">
    </a>
</p>

<p align="center">
<a href="https://github.com/digiton-ma/laravel-starter-kit/actions"><img src="https://github.com/digiton-ma/laravel-starter-kit/workflows/run-tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/digiton-ma/laravel-starter-kit"><img src="https://img.shields.io/packagist/dt/digiton-ma/laravel-starter-kit" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/digiton-ma/laravel-starter-kit"><img src="https://img.shields.io/packagist/v/digiton-ma/laravel-starter-kit" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/digiton-ma/laravel-starter-kit"><img src="https://img.shields.io/packagist/l/digiton-ma/laravel-starter-kit" alt="License"></a>
</p>

## About this project

This is a laravel starter kit with all the necessary packages and configurations to start a new project.

Main packages used in this project:
- [FilamentPHP](https://filamentphp.com)
- Spatie Laravel Settings
- Spatie Permission
- Spatie Media Library
- Spatie Query Builder
- [aymanalhattami/filament-date-scopes-filter](https://github.com/aymanalhattami/filament-date-scopes-filter)
- [aymanalhattami/filament-slim-scrollbar](https://github.com/aymanalhattami/filament-slim-scrollbar)
- [joshembling/image-optimizer](https://github.com/joshembling/image-optimizer)
- [hasnayeen/themes](https://github.com/hasnayeen/themes)
- [awcodes/filament-quick-create](https://github.com/awcodes/filament-quick-create)
- [filament/spatie-laravel-media-library-plugin:"^3.2"](https://github.com/filamentphp/spatie-laravel-media-library-plugin)
- [spatie/laravel-sitemap](https://github.com/spatie/laravel-sitemap)
- [spatie/laravel-responsecache](https://github.com/spatie/laravel-responsecache)

Dev dependencies used in this project:
- Laravel Debugbar
- Laravel ide-helper
- Laravel pint
- Laravel pest

### Notes
If you want to set theme per user then you'll need to run the package migration. You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="themes-migrations"
php artisan migrate
```
_You need to publish config file and change 'mode' => 'user' in order to set theme for user separately._

You can publish the config file with:
```bash
php artisan vendor:publish --tag="themes-config"
```

## Usage
You can create a new project using composer create-project command:

```bash
composer create-project digiton-ma/laravel-starter-kit my-project
```
then run one of the setup scripts within the project directory:

```bash
cd my-project # if you are not already in the project directory
chmod +x ./bin/setup.sh # if you get permission denied error
./bin/setup.sh 
#or
php bin/setup.php

# for windows
./bin/setup.bat
#or
./bin/setup.ps1 # this one needs windows script execution permission, open powershell as admin and run this command: Set-ExecutionPolicy RemoteSigned
```

## Main Features

### FilamentPHP
FilamentPHP is a Laravel package that provides a simple and elegant way to build admin panels for your Laravel applications.

### Settings Management
using Spatie Laravel Settings to store settings in the database and retrieve them globally.

### Permissions Management
using Spatie Permission to manage user permissions and roles.

### Media Management and Optimization
using Spatie Media Library to manage media files and joshembling/image-optimizer to optimize images.

### Themes Management (for filament panels only)
using hasnayeen/themes to manage themes for filament panels and aymanalhattami/filament-slim-scrollbar for slim scrollbar.

### Extra forms and tables plugins
using filamentphp's plugins to add extra forms and tables features.

### SEO Management
using spatie/laravel-sitemap to generate sitemap...

### Caching Responses
using spatie/laravel-responsecache to cache responses.

---

### Testing
using larastan and pest for testing

### Code formatting
using laravel-pint for code formatting

### Debugging
using laravel-debugbar for debugging

### IDE Integration
using laravel-ide-helper for better IDE integration

---

## Upcoming Features
- [ ] Payments Management: filament resource and front end urls for payments management or using plugins.
- [ ] Social Sign-in: using Google, Facebook, Twitter, and Github.
- [ ] Social Sharing: to easily share links from the project to social media.
- [ ] Social Media posts Integration: to get posts from social media accounts.
- [ ] Better Settings Management: to manage settings for different parts of the project, website information, email configs, social media links, navigation management and builders...
- [ ] Standard tests for all features using pest, like url tests, form tests and more.

## Contributing

Thank you for considering contributing to this starter kit! The contribution guide can be found in the [CONTRIBUTING.md](.github/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Laravel's Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Abdelhamid Errahmouni via [abdelhamid@digiton.ma](mailto:abdelhamid@digiton.ma), and feel free to create an issue. All security vulnerabilities will be promptly addressed.

## License

This Starter kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
