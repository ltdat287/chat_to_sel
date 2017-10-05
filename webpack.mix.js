let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/bower_components/components-bootstrap/css/bootstrap.css',
    'resources/assets/bower_components/font-awesome/css/font-awesome.css',
    'resources/assets/bower_components/animate.css/animate.css'
], 'public/css/vendors.css')
    .styles([
    'resources/assets/css/style.css'
], 'public/css/app.css')
    .scripts([
        'resources/assets/bower_components/jQuery/dist/jquery.js',
        'resources/assets/bower_components/components-bootstrap/js/bootstrap.js',
        'resources/assets/bower_components/metisMenu/dist/metisMenu.js',
        'resources/assets/bower_components/jquery-slimscroll/jquery.slimscroll.js',
        'resources/assets/js/inspinia.js',
        'resources/assets/bower_components/PACE/pace.js'
    ], 'public/js/vendors.js')
    .version()
    .copy('resources/assets/bower_components/font-awesome/fonts', 'public/fonts')
    .copy('resources/assets/img', 'public/img');
