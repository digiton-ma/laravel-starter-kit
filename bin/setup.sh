#!/bin/bash

# Define ANSI color codes
COLOR_GREEN="\033[32m"
COLOR_RED="\033[31m"
COLOR_RESET="\033[0m"

# Function to execute a command and check for errors
executeCommand() {
    local command="$1"
    local msg="$2"

    echo -e "${COLOR_GREEN}${msg:-"Executing: $command"}${COLOR_RESET}"
    if ! eval "$command"; then
        echo -e "${COLOR_RED}🚨🚨🚨 Error occurred while executing: $command${COLOR_RESET}"
        exit 1
    fi
}

# Function to update the APP_INSTALLED key in .env
setAppInstalledTrue() {
    if grep -q '^APP_INSTALLED=' .env; then
        sed -i 's/^APP_INSTALLED=.*/APP_INSTALLED=true/' .env
    else
        echo 'APP_INSTALLED=true' >> .env
    fi
    echo -e "${COLOR_GREEN}✅  APP_INSTALLED set to true in .env.${COLOR_RESET}"
}

# Check if composer.json exists
if [ ! -f 'composer.json' ]; then
    echo -e "${COLOR_RED}🚨🚨🚨 Please make sure to run this script from the root directory of this repo.${COLOR_RESET}"
    exit 1
fi

# Run tasks
executeCommand 'cp .env.example .env' '📰 Copying .env.example to .env...'
executeCommand 'composer install' '⚗️ Running composer install...'
executeCommand 'php artisan key:generate' '🔑 Generating application key...'
executeCommand 'php artisan storage:link --force' '🔗 Linking storage...'
executeCommand 'npm install' '⚗️ Installing npm packages...'
executeCommand 'npm run build' '🏗️ Running npm build...'
executeCommand 'php artisan migrate' '🗄️ Running migrations...'
executeCommand 'php artisan db:seed' '🌱 Seeding database...'
executeCommand 'php artisan optimize:clear' '🧹 Clearing cache...'
executeCommand 'php artisan ide-helper:generate' '📝 Generating IDE helper docs...'
executeCommand 'php artisan ide-helper:meta' '📝 Generating PHPStorm meta file...'

# Set APP_INSTALLED to true
setAppInstalledTrue

echo -e "${COLOR_GREEN}🥳 All tasks completed successfully.${COLOR_RESET}"
