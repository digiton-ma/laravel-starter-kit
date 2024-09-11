:: Name:     setup.bat
:: Purpose:  Set up a Laravel project and install default packages
:: Requires: PHP available from CLI on the current system
::           composer available from CLI on the current system
:: Author:   abdelhamid.errahmouni@gmail.com
:: Revision: August 2024 - Initial script
::

@echo off

echo --- Copying .env.example to .env...
copy .env.example .env

echo --- Running composer install...
call composer install

echo --- Generating application key...
call php artisan key:generate

echo --- Linking storage...
call php artisan storage:link --force

echo --- Installing npm packages...
call npm install

echo --- Running npm build...
call npm run build

echo --- Running migrations...
call php artisan migrate

echo --- Seeding database...
call php artisan db:seed

echo --- Clearing cache...
call php artisan optimize:clear

echo --- Generating IDE helper docs...
call php artisan ide-helper:generate

echo --- Generating PHPStorm meta file...
call php artisan ide-helper:meta

:: Uncomment the following lines if needed:
:: echo --- Publishing vendor assets...
:: call php artisan vendor:publish

echo --- Laravel setup successfully finished...
