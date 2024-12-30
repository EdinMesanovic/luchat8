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
      colors: {
        primary: "#0071BC", // Dodaj prilagođenu boju pod imenom `primary`
        secundary: "rgba(0, 113, 188, 0.5)",
 
      },
      backgroundImage: {
        'custom-gradient': 'linear-gradient(299.72deg, #0071BC 17.65%, #00D694 98.17%)',
      },
      fontFamily: {
        bricolageGrotesque: ['"BricolageGrotesque"', "Tahoma", "sans-serif"],
        modern: ["Modern Era", "sans-serif"],
      },
      fontSize: {
        name: "14px",
        job: "12px",
      },
      lineHeight: {
        name: "24px",
        job: "16px",
      },
      letterSpacing: {
        tight: "-0.04em",
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
