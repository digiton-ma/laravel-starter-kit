import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'
import { compression } from 'vite-plugin-compression2'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),

        compression(),
    ],
});
