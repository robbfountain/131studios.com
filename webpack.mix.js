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
   // .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/icons.css',
        'resources/assets/css/style.css',
        'resources/assets/css/colors/blue.css',
        'resources/assets/css/custom.css',
    ],'public/css/all.css');

mix.scripts([
    'resources/assets/js/jquery.flexslider-min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/jquery.sticky-kit.min.js',
    'resources/assets/js/jquery.twentytwenty.js',
    'resources/assets/js/jquery.event.move.js',
    'resources/assets/js/jquery.tooltips.min.js',
    'resources/assets/js/jquery.stacktable.js',
    'resources/assets/js/jquery.jpanelmenu.js',
    'resources/assets/js/headroom.min.js',
    'resources/assets/js/modernizr.custom.js',
    'resources/assets/js/puregrid.js',
    'resources/assets/js/flexibility.js',
    'resources/assets/js/jquery.isotope.min.js'
], 'public/js/vendor.js')
    .copy('resources/assets/js/custom.js','public/js/custom.js');