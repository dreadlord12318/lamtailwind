const mix = require('laravel-mix');

mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');


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
 .vue()
 .postCss('resources/css/app.css', 'public/css', [
   require('postcss-import'),
   require('tailwindcss'),
   require('postcss-nested'),
   require('autoprefixer'),
 ]);

if (mix.inProduction()) {
 mix
   .version();
}
