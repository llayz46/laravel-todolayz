/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'title': 'var(--text-title)',
                'body': 'var(--text-body)',
                'background': 'var(--background)',
                'primary': {
                    50: '#fff1f1',
                    100: '#ffe1e0',
                    200: '#ffc9c7',
                    300: '#ffa3a0',
                    400: '#ff6d69',
                    500: '#f9322c',
                    600: '#e7211b',
                    700: '#c31712',
                    800: '#a11713',
                    900: '#851a17',
                    950: '#490806',
                },
                'accent': {
                    50: '#f6f3ff',
                    100: '#eee9fe',
                    200: '#dfd6fe',
                    300: '#c7b5fd',
                    400: '#ac8bfa',
                    500: '#925df5',
                    600: '#8338ec',
                    700: '#7529d8',
                    800: '#6222b5',
                    900: '#521d95',
                    950: '#321065',
                },
            },
        },
    },
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
        require('postcss-custom-properties'),
        require('@tailwindcss/forms')
    ],
}
