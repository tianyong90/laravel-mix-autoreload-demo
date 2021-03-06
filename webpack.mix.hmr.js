const mix = require('laravel-mix');

mix.disableNotifications()

mix.js('resources/js/demo-hmr.js', 'public/js')
   .sass('resources/sass/demo-hmr.scss', 'public/css');

// 使用 hmr 和时候不使用 mix.extract()
// 避免冲突
// https://github.com/laravel-enso/Enso/issues/194
if (!Mix.isUsing('hmr')) {
   mix.extract(['vue', 'axios'])
}

// 本块代码用于解决在 windows 环境下的问题
// 如果使用非 windows 系统可删除
// 参考 Issue https://github.com/JeffreyWay/laravel-mix/issues/1483#issuecomment-366685986
Mix.listen('configReady', (webpackConfig) => {
   if (Mix.isUsing('hmr')) {
      // Remove leading '/' from entry keys
      webpackConfig.entry = Object.keys(webpackConfig.entry).
        reduce((entries, entry) => {
           entries[entry.replace(/^\//, '')] = webpackConfig.entry[entry]
           return entries
        }, {})

      // Remove leading '/' from ExtractTextPlugin instances
      webpackConfig.plugins.forEach((plugin) => {
         if (plugin.constructor.name === 'ExtractTextPlugin') {
            plugin.filename = plugin.filename.replace(/^\//, '')
         }
      })
   }
})

// 配置 hmr 参数
mix.options({
   hmrOptions: {
      host: 'laravel-mix-autoreload-demo.test',
      port: 8080,
   }
})