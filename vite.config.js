import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/js/FaceChangeGame/van_gogh_camera.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': resolve(__dirname, 'resources/js')
        }
    },
    server: {
        fs: {
            allow: ['public', 'resources']
        }
    },
    build: {
        rollupOptions: {
            external: ['public/assets/js/FaceChangeGame/NN_VERYLIGHT_1.json']
        }
    }
});
