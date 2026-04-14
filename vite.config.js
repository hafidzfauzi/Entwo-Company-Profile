import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '192.168.1.5', // Samakan dengan host Laravel
        port: 5173,
        strictPort: true,
        hmr: {
            host: '192.168.1.5',
        },
    },
});
