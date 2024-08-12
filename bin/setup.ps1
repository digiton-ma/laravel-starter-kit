# Define color codes
$COLOR_GREEN = "Green"
$COLOR_RED = "Red"

# Function to execute a command and check for errors
function Execute-Command {
    param (
        [string]$command,
        [string]$msg
    )

    Write-Host $msg -ForegroundColor $COLOR_GREEN
    try {
        Invoke-Expression $command
        if ($LASTEXITCODE -ne 0) { throw "Command failed with exit code $LASTEXITCODE" }
    }
    catch {
        Write-Host ""
        Write-Host "🚨🚨🚨 Error occurred while executing: $command" -ForegroundColor $COLOR_RED
        Write-Host ""
        exit 1
    }
}

# Check if composer.json exists
if (-not (Test-Path 'composer.json')) {
    Write-Host ""
    Write-Host "🚨🚨🚨 Please make sure to run this script from the root directory of this repo." -ForegroundColor $COLOR_RED
    Write-Host ""
    exit 1
}

# Run tasks
Execute-Command 'composer install' '⚗️ Running composer install...'
Execute-Command 'Copy-Item .env.example .env' '📰 Copying .env.example to .env...'
Execute-Command 'php artisan key:generate' '🔑 Generating application key...'
Execute-Command 'php artisan storage:link' '🔗 Linking storage...'
Execute-Command 'npm install' '⚗️ Installing npm packages...'
Execute-Command 'npm run build' '🏗️ Running npm build...'
Execute-Command 'php artisan migrate' '🗄️ Running migrations...'
Execute-Command 'php artisan db:seed' '🌱 Seeding database...'
Execute-Command 'php artisan optimize:clear' '🧹 Clearing cache...'
Execute-Command 'php artisan ide-helper:generate' '📝 Generating IDE helper docs...'
Execute-Command 'php artisan ide-helper:meta' '📝 Generating PHPStorm meta file...'

Write-Host "🥳 All tasks completed successfully." -ForegroundColor $COLOR_GREEN
