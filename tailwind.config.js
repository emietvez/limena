/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
          'section':{
            200: "#BAD1D0",
            300: "#CCD1A8",
            400: "#CD9C87",
            500: "#52525A"
          }
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
