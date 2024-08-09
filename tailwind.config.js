/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    fontFamily: {
      'manrope': ['Manrope', 'ui-sans-serif']
    },
    extend: {
      colors: { 
        'main': {
          DEFAULT: '#22262E',
          100: '#495261', 
          200: '#444d5b', 
          300: '#404855', 
          400: '#3b434f', 
          500: '#373e49', 
          600: '#292f39', 
          700: '#323943', 
          800: '#2e343e', 
          900: '#252b34', 
          1000: '#21262f', 
          1100: '#1c222a', 
          1200: '#181d26'
        },
        'dark-main':'#181D26',
      },
      container: {
        padding: {
          DEFAULT: '1rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem'
        },
      },
      keyframes: {
        flash: {
          "0%": {
            left: "-30%",
          },
          "16%": {
            left: "40px",
            bottom: "40px"
          },
          "50%": {
            left: "40px",
            bottom: "40px"
          },
          "80%": {
            left: "40px",
            bottom: "40px"
          },
          "100%": {
            bottom: "-30%"
          },
        },
      },
      animation: {
        "flash-slide": "flash 6s"
      },
    },
  },
  plugins: [],
}

