import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { fileURLToPath, URL } from 'node:url';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/app/products-sidebar.js',
            ],
            refresh: true,
        }),
        vue({
            customElement: true,
        }),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./resources/app', import.meta.url)),
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: 'localhost',
        },
    },
});
