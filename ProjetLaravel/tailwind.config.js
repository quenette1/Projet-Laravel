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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'LaBelleAurore': ['"La Belle Aurore"', 'sans-serif']
            },
            backgroundColor: {
                'beige' : '#ed8f85',
                'jaune-pastis' : '#f7f06d',
            }
        },
    },

    plugins: [forms],
};
