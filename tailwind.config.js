/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.html', // Inclure tous les fichiers HTML
    './**/*.php',  // Inclure tous les fichiers PHP
  ],
  theme: {
    extend: {
      colors: {
        black: '#000000',
        primary: '#14213d', // Bleu foncé
        accent: '#fca311',  // Orange
        lightGray: '#e5e5e5', // Gris clair
        white: '#ffffff',
        greenModify: "#283618",
      },
    },
  },
  plugins: [],
}
