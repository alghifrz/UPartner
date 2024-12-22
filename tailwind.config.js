import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#09425F',
                secondary: '#06739C',
                tertiary: '#16B0CA',
                background: '#F3F8FF',
                abubiru: '#6796AB'
            },
            keyframes: {
                shake: {
                    '0%, 100%': { transform: 'translateX(0) translateY(0)' },
                    '25%': { transform: 'translateY(-5px)' },
                    '50%': { transform: 'translateY(5px)' },
                    '75%': { transform: 'translateY(-5px)' },
                },
            },
            animation: {
                shake: 'shake 3s infinite',
            },
        },
    },

    plugins: [forms, typography],
};
