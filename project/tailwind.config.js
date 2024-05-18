/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
],
  theme: {
    extend: {
        colors: {
            'custom-gray': '#3b4252',
            'gray-menu':'#4c566a',
            'master':'#434c5e'
        },
    },
  },
  plugins: [],
}
