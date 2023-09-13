/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "resources/**/*.blade.php",
    "resources/**/*.js",
  ],

  theme: {
    extend: {
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus'],
      objectFit: ['responsive'],
    },
  },
  plugins: [],
}

