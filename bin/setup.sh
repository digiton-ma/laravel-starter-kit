#!/bin/bash

# Define ANSI color codes
COLOR_GREEN="\033[32m"
COLOR_RED="\033[31m"
COLOR_RESET="\033[0m"

# Function to print usage instructions
printUsage() {
    echo "Usage: $0 [--without COMMAND1,COMMAND2] [--skip COMMAND1,COMMAND2] [--only COMMAND1,COMMAND2]"
    echo
    echo "Available commands:"
    echo "  cp_env          - Copy .env.example to .env"
    echo "  composer        - Run composer install"
    echo "  key_generate    - Generate application key"
    echo "  storage_link    - Link storage"
    echo "  npm_install     - Install npm packages"
    echo "  npm_build       - Run npm build"
    echo "  migrate         - Run database migrations"
    echo "  seed            - Seed database"
    echo "  optimize        - Clear cache"
    echo "  ide_helper      - Generate IDE helper docs"
}

# Function to execute a command and check for errors
executeCommand() {
    local command_id="$1"
    local command="$2"
    local msg="$3"

    # Check if ONLY_COMMANDS is set and command is not in the list
    if [[ -n "${ONLY_COMMANDS[*]}" && ! " ${ONLY_COMMANDS[@]} " =~ " ${command_id} " ]]; then
        return 0
    fi

    # Check if command should be skipped
    if [[ " ${SKIP_COMMANDS[@]} " =~ " ${command_id} " ]]; then
        echo -e "${COLOR_GREEN}⏩ Skipping: ${msg}${COLOR_RESET}"
        return 0
    fi

    echo -e "${COLOR_GREEN}${msg:-"Executing: $command"}${COLOR_RESET}"
    if ! eval "$command"; then
        echo -e "${COLOR_RED}🚨🚨🚨 Error occurred while executing: $command${COLOR_RESET}"
        exit 1
    fi
}

# Function to update the APP_INSTALLED key in .env
setAppInstalledTrue() {
    # Only set if no ONLY_COMMANDS are specified or APP_INSTALLED is in ONLY_COMMANDS
    if [[ -z "${ONLY_COMMANDS[*]}" || " ${ONLY_COMMANDS[@]} " =~ " app_installed " ]]; then
        if grep -q '^APP_INSTALLED=' .env; then
            sed -i 's/^APP_INSTALLED=.*/APP_INSTALLED=true/' .env
        else
            echo 'APP_INSTALLED=true' >> .env
        fi
        echo -e "${COLOR_GREEN}✅  APP_INSTALLED set to true in .env.${COLOR_RESET}"
    fi
}

# Parse command line arguments
SKIP_COMMANDS=()
ONLY_COMMANDS=()
while [[ $# -gt 0 ]]; do
    case "$1" in
        --without|--skip)
            # Split comma-separated commands into array
            IFS=',' read -r -a SKIP_COMMANDS <<< "$2"
            shift 2
            ;;
        --only)
            # Split comma-separated commands into array
            IFS=',' read -r -a ONLY_COMMANDS <<< "$2"
            shift 2
            ;;
        -h|--help)
            printUsage
            exit 0
            ;;
        *)
            echo -e "${COLOR_RED}Unknown argument: $1${COLOR_RESET}"
            printUsage
            exit 1
            ;;
    esac
done

# Check if composer.json exists
if [ ! -f 'composer.json' ]; then
    echo -e "${COLOR_RED}🚨🚨🚨 Please make sure to run this script from the root directory of this repo.${COLOR_RESET}"
    exit 1
fi

# Run tasks with command identifiers
executeCommand 'cp_env' 'cp .env.example .env' '📰 Copying .env.example to .env...'
executeCommand 'composer' 'composer install' '⚗️ Running composer install...'
executeCommand 'key_generate' 'php artisan key:generate' '🔑 Generating application key...'
executeCommand 'storage_link' 'php artisan storage:link' '🔗 Linking storage...'
executeCommand 'npm_install' 'npm install' '⚗️ Installing npm packages...'
executeCommand 'npm_build' 'npm run build' '🏗️ Running npm build...'
executeCommand 'migrate' 'php artisan migrate' '🗄️ Running migrations...'
executeCommand 'seed' 'php artisan db:seed' '🌱 Seeding database...'
executeCommand 'optimize' 'php artisan optimize:clear' '🧹 Clearing cache...'
executeCommand 'ide_helper' 'php artisan ide-helper:generate && php artisan ide-helper:meta' '📝 Generating IDE helper docs...'

# Set APP_INSTALLED to true
setAppInstalledTrue

# If ONLY_COMMANDS is set, we've already executed only those commands
# If no ONLY_COMMANDS, then we've already done everything
if [[ -z "${ONLY_COMMANDS[*]}" ]]; then
    echo -e "${COLOR_GREEN}🥳 All tasks completed successfully.${COLOR_RESET}"
fi
