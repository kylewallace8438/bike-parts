import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueDevTools from 'vite-plugin-vue-devtools'

// https://vite.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    vueDevTools(),
  ],
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
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    },
  },
})
