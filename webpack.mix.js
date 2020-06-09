const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/base.css','resources/css/layout.css','resources/css/jquery.mCustomScrollbar.css','resources/css/total_Style.css',],'public/css/all.css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/font', 'public/fonts')
    .copy(['resources/js/jquery-3.2.1.min.js','resources/js/jquery.classyloader.min.js','resources/js/jquery.mCustomScrollbar.concat.min.js'], 'public/js');


