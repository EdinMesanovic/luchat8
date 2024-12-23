/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./template-parts/**/*.php",
    "./blocks/**/*.php",
    "./inc/**/*.php",
    "./assets/js/**/*.js",
    "./assets/css/**/*.css",
  ],
  theme: {
    extend: {
      fontFamily: {
        bricolageGrotesque: ['"BricolageGrotesque"', "Tahoma", "sans-serif"],
      },
    },
  },
  plugins: [],
};
