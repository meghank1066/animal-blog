module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'custom-pink': '#EF5454',
        'cool-toned-pink': '#FF9090',
        'pale-orange': '#F6C49C',
        'dark-brown': '#a27754',
        'new-brown': '#865630',
        'ed-brown': '#75563d',
        'cool-orange': '#EFB07D',
        'button-orange': '#ea9856',
        'grey': '#737373',
        'red': '#EF5454',
        'green': '#3ec16d',
        'baby-pink': '#ffd5d4',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
