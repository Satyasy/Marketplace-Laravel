/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'dark': '#1A1A19',
          'primary': '#31511E',
          'secondary': '#859F3D',
          'light': '#F6FCDF',
        },
      },
    },
    plugins: [],
  }
  