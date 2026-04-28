import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

import { cloudflare } from "@cloudflare/vite-plugin";

export default defineConfig({
    plugins: [laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
    }), tailwindcss(), cloudflare()],
    server: {
        host: '172.22.17.92', // Samakan dengan host Laravel
        port: 5173,
        strictPort: true,
        hmr: {
            host: '172.22.17.92',
        },
    },
});