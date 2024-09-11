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

# Function to update the APP_INSTALLED key in .env
function Set-AppInstalledTrue {
    $envFilePath = ".env"

    if (Test-Path $envFilePath) {
        $envContent = Get-Content $envFilePath

        if ($envContent -match '^APP_INSTALLED=') {
            # Update the existing APP_INSTALLED key
            (Get-Content $envFilePath) -replace '^APP_INSTALLED=.*', 'APP_INSTALLED=true' | Set-Content $envFilePath
        }
        else {
            # Add the APP_INSTALLED key
            Add-Content -Path $envFilePath -Value 'APP_INSTALLED=true'
        }

        Write-Host "✅ APP_INSTALLED set to true in .env." -ForegroundColor $COLOR_GREEN
    }
    else {
        Write-Host "🚨🚨🚨 .env file not found!" -ForegroundColor $COLOR_RED
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
Execute-Command 'Copy-Item .env.example .env' '📰 Copying .env.example to .env...'
Execute-Command 'composer install' '⚗️ Running composer install...'
Execute-Command 'php artisan key:generate' '🔑 Generating application key...'
Execute-Command 'php artisan storage:link --force' '🔗 Linking storage...'
Execute-Command 'npm install' '⚗️ Installing npm packages...'
Execute-Command 'npm run build' '🏗️ Running npm build...'
Execute-Command 'php artisan migrate' '🗄️ Running migrations...'
Execute-Command 'php artisan db:seed' '🌱 Seeding database...'
Execute-Command 'php artisan optimize:clear' '🧹 Clearing cache...'
Execute-Command 'php artisan ide-helper:generate' '📝 Generating IDE helper docs...'
Execute-Command 'php artisan ide-helper:meta' '📝 Generating PHPStorm meta file...'

# Set APP_INSTALLED to true
Set-AppInstalledTrue

Write-Host "🥳 All tasks completed successfully." -ForegroundColor $COLOR_GREEN
