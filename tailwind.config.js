module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'body-pattern': "url('/img/fondo.png')"
      }),
      colors: {
        "deepskyblue":"#00bfff",
        "lightskyblue":"#87cefa",
        "lightblue":"#add8e6"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
