const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .extract([
        'vue',
        'axios',
    ])
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    }).purgeCss({
        whitelistPatterns: [/language/, /hljs/, /[\w-/:]*[\w-/:]/g, /category-.*?/],
    });

if (mix.inProduction()) {
    mix.version();
}

// mix.browserSync('131studios.test');
