import { defineConfig } from 'vite'

export default defineConfig({
  server: {
    port: 8000, // Menggunakan port 8000 untuk Vite
    open: true  // Membuka browser otomatis ketika server dijalankan
  },
  css: {
    preprocessorOptions: {
      css: {
        charset: false,  // Jika ada masalah charset, kamu bisa nonaktifkan ini
      }
    }
  }
})
