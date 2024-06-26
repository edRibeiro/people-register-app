import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const withMT = require("@material-tailwind/html/utils/withMT");

/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
});
