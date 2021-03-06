const mix = require('laravel-mix');

mix.disableNotifications();

mix.js('resources/js/demo-bs.js', 'public/js')
   .sass('resources/sass/demo-bs.scss', 'public/css');

/**
 *下面方法启用 bs，不传参则使用 laravel-mix 的默认配置
 * 根据实际使用环境配置参数以获得更好体验
 * bs 配置选项参考 https://www.browsersync.io/docs/options
 */
mix.browserSync({
   proxy: 'laravel-mix-autoreload-demo.test/',
   startPath: '/demo-bs',
   open: true,
   reloadOnRestart: true,
   watchOptions: {
      usePolling: true,
   },
})