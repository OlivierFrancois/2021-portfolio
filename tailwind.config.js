// tailwind.config.js
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins'],
      },
      colors: {
        cyan: colors.cyan
      },
      height: {
        header: '15rem',
        fullWithoutHeader: 'calc(100vh - 15rem)',
      },
      minHeight: {
        header: '15rem',
        header: '15rem',
        fullWithoutHeader: 'calc(100vh - 15rem)',
      }
    },
  },
  variants: {},
  plugins: [],
}