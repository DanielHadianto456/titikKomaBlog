/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          'montserrat': ['Montserrat', 'sans-serif'],
          'sans': ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          'inter': ['Inter', 'sans-serif'],
        },
      },
    },
    plugins: [],
  }