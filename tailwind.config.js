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
      keyframes: {
        fadeInDown: {
            '0%': { opacity: '0', transform: 'translateY(-20px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          },
        },
        animation: {
            'fade-in-down': 'fadeInDown 0.5s ease-out',
        },
    },
  },
  plugins: [],
};
