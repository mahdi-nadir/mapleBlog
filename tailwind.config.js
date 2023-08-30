/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "resources/**/*.blade.php"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus'],
    },
  },
  plugins: [],
}

