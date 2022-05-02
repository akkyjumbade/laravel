const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
   content: [
      './resources/js/*.{js,jsx}',
      './admin/assets/**/*.{js,jsx}',
      './admin/assets/**/**/*.{js,jsx}',
   ],

   theme: {
      extend: {
         fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
         },
      },
   },

   variants: {
      extend: {
         opacity: ['disabled'],
      },
   },

   plugins: [
      // require('@tailwindcss/forms'),
      // require('postcss-import'),
      // require('tailwindcss'),
      // require('autoprefixer'),
   ],
};
