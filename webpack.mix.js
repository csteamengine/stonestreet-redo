let mix = require('laravel-mix');
let webpack = require('webpack');
mix.disableNotifications();

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

mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            Popper: ['popper.js', 'default']
        })
    ]})
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/views/main.js', 'public/js/views')
    .js('resources/assets/js/views/charts.js', 'public/js/views')
    .js('resources/assets/js/views/widgets.js', 'public/js/views')
    .js('resources/assets/js/admin/projects.js', 'public/js/admin')
    .js('resources/assets/js/admin/jobs.js', 'public/js/admin')
    .js('resources/assets/js/admin/projectsIndex.js', 'public/js/admin')
    .js('resources/assets/js/admin/jobsIndex.js', 'public/js/admin')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin/projects.scss', 'public/css/admin')
    .sass('resources/assets/sass/admin/jobs.scss', 'public/css/admin')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .sass('resources/assets/sass/header.scss', 'public/css');