<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this project

This is a laravel starter kit with all the necessary packages and configurations to start a new project.

Main packages used in this project:
- FilamentPHP
- Spatie Laravel Settings
- Spatie Permission
- Spatie Media Library
- Spatie Query Builder
- Spatie Laravel Activity Log
- [aymanalhattami/filament-date-scopes-filter](https://github.com/aymanalhattami/filament-date-scopes-filter)
- [aymanalhattami/filament-slim-scrollbar](https://github.com/aymanalhattami/filament-slim-scrollbar)
- [joshembling/image-optimizer](https://github.com/joshembling/image-optimizer)
- [hasnayeen/themes](https://github.com/hasnayeen/themes)

Dev packages used in this project:
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

## Main Features

## Contributing

Thank you for considering contributing to this starter kit! The contribution guide can be found in the [CONTRIBUTING.md](.github/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Laravel's Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Abdelhamid Errahmouni via [abdelhamid@digiton.ma](mailto:abdelhamid@digiton.ma), and feel free to create an issue. All security vulnerabilities will be promptly addressed.

## License

This Starter kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
