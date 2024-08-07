import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
          "./resources/**/*.blade.php",
          "./resources/**/*.js",
          "./resources/**/*.vue",
          "./vendor/awcodes/filament-quick-create/resources/**/*.blade.php",
          "./app/Filament/**/*.php",
          "./resources/views/filament/**/*.blade.php",
          "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('tailwindcss-rtl'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

