const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js')
       .styles([
        'bootstrap.css',
       	'style.css',
       	'icons.css',
       	'revolutionslider.css',
       	'colors/blue.css',
        './node_modules/sweetalert/dist/sweetalert.css',
       	'custom.css',
       	])
       .copy('./node_modules/sweetalert/dist/sweetalert-dev.js', 'public/js')
       .copy('resources/assets/js/theme','public/js')
       .copy('resources/assets/fonts', 'public/fonts')
      // .scriptsIn('resources/assets/js');;
});
