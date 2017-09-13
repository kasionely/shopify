let mix = require('laravel-mix');


var paths = {
    'owl': 'node_modules/owl.carousel/'
};
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
   .js('resources/assets/js/main.js', 'public/js')
   .js('resources/assets/js/manage.js', 'public/js')
   .js('resources/assets/js/products.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
   "node_modules/owl.carousel/dist/owl.carousel.min.js"
], 'public/js/nodes.js', './');

mix.styles([
   "node_modules/owl.carousel/dist/assets/owl.carousel.css"
], 'public/css/owl.css');