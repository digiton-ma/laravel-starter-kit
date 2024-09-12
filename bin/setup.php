<?php

declare(strict_types=1);

// Define ANSI color codes
define('COLOR_GREEN', "\033[32m");
define('COLOR_RED', "\033[31m");
define('COLOR_RESET', "\033[0m");

// Function to execute a command and check for errors
function executeCommand($command, ?string $msg = null)
{
    echo COLOR_GREEN.($msg ?? "Executing: $command").COLOR_RESET."\n";
    exec($command, $output, $returnStatus);
    if ($returnStatus !== 0) {
        echo COLOR_RED."🚨🚨🚨 Error occurred while executing: $command".COLOR_RESET."\n";
        exit(1);
    }
    if (is_array($output)) {

        foreach ($output as $line) {
            echo $line.PHP_EOL;
        }

        return;
    }

    return $output;
}

// Function to update the APP_INSTALLED key in .env
function setAppInstalledTrue(bool $status = true)
{
    $envFile = '.env';
    $envKey = 'APP_INSTALLED';

    // Check if .env file exists
    if (! file_exists($envFile)) {
        echo COLOR_RED.'🚨🚨🚨 .env file not found.'.COLOR_RESET."\n";
        exit(1);
    }

    $envContent = file_get_contents($envFile);

    // Check if APP_INSTALLED key exists in .env
    if (mb_strpos($envContent, "$envKey=") !== false) {
        // Update the existing key
        $envContent = preg_replace("/^$envKey=.*/m", "$envKey=".($status ? 'true' : 'false'), $envContent);
    } else {
        // Add the key if it doesn't exist
        $envContent .= "\n$envKey=".($status ? 'true' : 'false');
    }

    // Write the updated content back to .env
    file_put_contents($envFile, $envContent);

    echo COLOR_GREEN.'✅ APP_INSTALLED set to '.($status ? 'true' : 'false').' in .env.'.COLOR_RESET."\n";
}

// Check if composer.json exists
if (! file_exists('composer.json')) {
    echo COLOR_RED.'🚨🚨🚨 Please make sure to run this script from the root directory of this repo.'.COLOR_RESET."\n";
    exit(1);
}

// Set APP_INSTALLED to false before installation
setAppInstalledTrue(false);

// Copy .env.example to .env
echo COLOR_GREEN.'📰 Copying .env.example to .env...'.COLOR_RESET."\n";
copy('.env.example', '.env');

// Run composer install
executeCommand('composer install', '⚗️ Running composer install...');

// Generate application key
executeCommand('php artisan key:generate', '🔑 Generating application key...');

// Link storage
executeCommand('php artisan storage:link --force', '🔗 Linking storage...');

// Install npm packages
executeCommand('npm install', '⚗️ Installing npm packages...');

// Run npm build
executeCommand('npm run build', '🏗️ Running npm build...');

// Run migrations
executeCommand('php artisan migrate', '🗄️ Running migrations...');

// Seed database
executeCommand('php artisan db:seed', '🌱 Seeding database...');

// Clear cache
executeCommand('php artisan optimize:clear', '🧹 Clearing cache...');

// Generate IDE helper files
executeCommand('php artisan ide-helper:generate', '📝 Generating IDE helper docs...');

// Generate PHPStorm meta file
executeCommand('php artisan ide-helper:meta', '📝 Generating PHPStorm meta file...');

// Set APP_INSTALLED to true after installation
setAppInstalledTrue(true);

echo COLOR_GREEN.'🥳 All tasks completed successfully.'.COLOR_RESET."\n";
