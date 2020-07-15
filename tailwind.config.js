module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        opacity: {
            '0': '0',
            '10': '0.10',
            '25': '0.25',
            '50': '0.5',
            '75': '0.75',
            '100': '1',
        },
        screens: {
            xs: '320px',
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
    ],
}
