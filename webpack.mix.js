const { mix } = require('laravel-mix');

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
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/style.css',
        'resources/assets/css/icons.css',
        'resources/assets/css/revolutionslider.css',
        'resources/assets/css/colors/blue.css',
        './node_modules/sweetalert/dist/sweetalert.css',
        'resources/assets/css/custom.css'
    ],'public/css/all.css')
    .copy('./node_modules/sweetalert/dist/sweetalert.min.js', 'public/js')
    .copy('resources/assets/js/theme','public/js')
    .copy('resources/assets/fonts', 'public/fonts');