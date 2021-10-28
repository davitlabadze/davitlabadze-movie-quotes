module.exports = {
  purge: [
    './resources/view/**/*.blade.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      backgroundColor: ['active','focus','group-focus'],
    },
  },
  plugins: [],
}
