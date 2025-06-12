<<<<<<< Updated upstream
// tailwind.config.js
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-down': {
          '0%': { opacity: '0', transform: 'translateY(-50px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
      animation: {
        'fade-down': 'fade-down 0.8s ease-out both',
=======
module.exports = {
  darkMode: 'class', // Enable class-based dark mode
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        // Custom colors (optional)
>>>>>>> Stashed changes
      },
    },
  },
  plugins: [],
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
