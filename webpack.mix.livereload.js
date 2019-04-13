const mix = require('laravel-mix');
const LiveReloadPlugin = require('webpack-livereload-plugin')

mix.disableNotifications();

mix.webpackConfig({
   plugins: [
     new LiveReloadPlugin({
       host: 'laravel-mix-autoreload-demo.test',
     })
   ]
})

mix.js('resources/js/demo-livereload.js', 'public/js')
   .sass('resources/sass/demo-livereload.scss', 'public/css');
