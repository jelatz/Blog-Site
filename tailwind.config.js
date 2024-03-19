import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#2E0E02',
                secondary: '#581908',
                btn: '#983628',
                border: '#E2AEDD',
                accent: '#EBCBF4'
            }
        },
    },

    plugins: [forms],
};
