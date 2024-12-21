import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/bootstrap.min.css',
                'resources/css/skin-1.css',
                'resources/css/swiper.min.css',
                'resources/css/style.css'
            ],
            refresh: true,
        }),
    ],
});
