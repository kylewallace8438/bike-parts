import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
    base: './',
    plugins: [
        vue(),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./src', import.meta.url))
        }
    },
    build: {
        outDir: '../public/app',
        reportCompressedSize: true,
        rollupOptions: {
            output: {
                entryFileNames: 'app.js',
                assetFileNames: '[name].[ext]',
                chunkFileNames: '[name].js'
            },
        },
        emptyOutDir: true
    },
})
