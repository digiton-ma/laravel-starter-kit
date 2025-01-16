<?php

declare(strict_types=1);

// Define ANSI color codes
const COLOR_GREEN = "\033[32m";
const COLOR_RED = "\033[31m";
const COLOR_RESET = "\033[0m";

// Function to print usage instructions
function printUsage(): void
{
    echo "Usage: php bin/setup.php [--without COMMAND1,COMMAND2] [--skip COMMAND1,COMMAND2] [--only COMMAND1,COMMAND2]\n\n";
    echo "Available commands:\n";
    echo "  cp_env          - Copy .env.example to .env\n";
    echo "  composer        - Run composer install\n";
    echo "  key_generate    - Generate application key\n";
    echo "  storage_link    - Link storage\n";
    echo "  npm_install     - Install npm packages\n";
    echo "  npm_build       - Run npm build\n";
    echo "  migrate         - Run database migrations\n";
    echo "  seed            - Seed database\n";
    echo "  optimize        - Clear cache\n";
    echo "  ide_helper      - Generate IDE helper docs\n";
}

// Function to execute a command and check for errors
function executeCommand(string $command, ?string $msg = null)
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
    }

    return $output;
}

// Function to update the APP_INSTALLED key in .env
function setAppInstalledTrue(bool $status = true, array $onlyCommands = []): void
{
    // Only set if no ONLY_COMMANDS are specified or APP_INSTALLED is in ONLY_COMMANDS
    if (! empty($onlyCommands) && ! in_array('app_installed', $onlyCommands, true)) {
        return;
    }

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

// Parse command line arguments
$skipCommands = [];
$onlyCommands = [];
$argc = $_SERVER['argc'];
$argv = $_SERVER['argv'];

for ($i = 1; $i < $argc; $i++) {
    switch ($argv[$i]) {
        case '--without':
        case '--skip':
            if (isset($argv[$i + 1])) {
                $skipCommands = explode(',', $argv[$i + 1]);
                $i++;
            }
            break;
        case '--only':
            if (isset($argv[$i + 1])) {
                $onlyCommands = explode(',', $argv[$i + 1]);
                $i++;
            }
            break;
        case '-h':
        case '--help':
            printUsage();
            exit(0);
        default:
            echo COLOR_RED."Unknown argument: {$argv[$i]}".COLOR_RESET."\n";
            printUsage();
            exit(1);
    }
}

// Check if composer.json exists
if (! file_exists('composer.json')) {
    echo COLOR_RED.'🚨🚨🚨 Please make sure to run this script from the root directory of this repo.'.COLOR_RESET."\n";
    exit(1);
}

// Prepare array of tasks with direct command strings
$tasks = [
    ['cp_env', 'cp .env.example .env', '📰 Copying .env.example to .env...'],
    ['composer', 'composer install', '⚗️ Running composer install...'],
    ['key_generate', 'php artisan key:generate', '🔑 Generating application key...'],
    ['storage_link', 'php artisan storage:link --force', '🔗 Linking storage...'],
    ['npm_install', 'npm install', '⚗️ Installing npm packages...'],
    ['npm_build', 'npm run build', '🏗️ Running npm build...'],
    ['migrate', 'php artisan migrate', '🗄️ Running migrations...'],
    ['seed', 'php artisan db:seed', '🌱 Seeding database...'],
    ['optimize', 'php artisan optimize:clear', '🧹 Clearing cache...'],
    ['ide_helper', 'php artisan ide-helper:generate && php artisan ide-helper:meta', '📝 Generating IDE helper docs...'],
];

// Set APP_INSTALLED to false before installation
setAppInstalledTrue(false, $onlyCommands);

// Execute tasks based on flags
foreach ($tasks as $task) {
    // Check if task should be executed
    if (
        (empty($onlyCommands) || in_array($task[0], $onlyCommands)) &&
        ! in_array($task[0], $skipCommands, true)
    ) {
        executeCommand($task[1], $task[2]);
    }
}

// Set APP_INSTALLED to true after installation
setAppInstalledTrue(true, $onlyCommands);

// Only show completion message if no specific commands were selected or if ALL commands were selected
if (empty($onlyCommands)) {
    echo COLOR_GREEN.'🥳 All tasks completed successfully.'.COLOR_RESET."\n";
}
