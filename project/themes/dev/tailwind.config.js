module.exports = {
  content: ["./assets/src/**/*.{html,js,css}", "./**/*.html"],
  theme: {
    extend: {},
  },
  plugins: [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer')
  ]
}
