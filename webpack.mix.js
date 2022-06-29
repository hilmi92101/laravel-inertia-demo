const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app/app.js', 'public/js')
    .js('resources/js/no-db/app.js', 'public/js/no-db.js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'), 
        require('postcss-import')
    ])
    .sass('resources/sass/dashboard-4/app.scss', 'public/css/dashboard-4.css')
    .sass('resources/sass/dashboard-5/app.scss', 'public/css/dashboard-5.css')
    .sass('resources/sass/resume/app.scss', 'public/css/resume.css')
    .webpackConfig(require('./webpack.config'));

    //.sass('resources/sass/dashboard3.scss', 'public/css/dashboard-3.css')
    //.sass('resources/sass/dashboard3Custom.scss', 'public/css/dashboard-3-custom.css');
