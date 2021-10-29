const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.lightBlue,
                blueGray: colors.blueGray,
                coolGray: colors.coolGray,
                emerald: colors.emerald,
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms')
    ],
}
