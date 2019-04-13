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

mix.js('resources/js/app-bs.js', 'public/js')
   .sass('resources/sass/app-bs.scss', 'public/css');

mix.browserSync({
   proxy: 'laravel-mix-autoreload-demo.test/',
   startPath: '/index-bs',
   open: true,
   reloadOnRestart: true,
   watchOptions: {
      usePolling: true,
   },
})