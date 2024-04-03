import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.css',
                'resources/css/styles.css',
                'resources/css/responsive.css',
                'resources/js/app.js',
                'resources/js/scripts.js',
            ],
            refresh: true,
        }),
    ],
});
