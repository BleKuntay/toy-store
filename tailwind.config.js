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
            primary: '#EBF4F6',
            secondary: '#071952',
            btn: '#088395',
            btn2: '#37B7C3',
        },
    },
  },
  plugins: [],
}

