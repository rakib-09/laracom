/**
 * Created by rakib on 3/3/2018.
 */
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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/sass/bootstrap.css',
    'resources/assets/sass/font_awesome.css',
    'resources/assets/sass/bookopen.css',
    'resources/assets/sass/ie.css',
    'resources/assets/sass/mystyles.css',
    'resources/assets/sass/styles.css'
], 'public/css/all.css');