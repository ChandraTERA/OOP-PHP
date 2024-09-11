/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./*.php",  // Untuk file PHP di root proyek
    "./templates/**/*.php",  // Jika Anda memiliki folder templates
    "./components/**/*.php"  // Jika Anda memiliki folder components
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}