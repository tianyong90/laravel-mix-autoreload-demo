# laravel-mix-autoreload-demo

本项目展示了 laravel-mix 工作流中如何使用 `Browsersync`, `Hot Module Replacement` 以及 `LiveReload` 进行浏览器自动刷新。

建议配合博客[《让 F5 歇一会儿——laravel-mix 自动刷新之道》](https://tianyong90.com/2019/04/12/rang-f5-xie-yi-hui-er-laravel-mix-zi-dong-shua-xin-zhi-dao/)一起查看

## 基本配置

首先你需要一个能运行 Laravel5.8 项目的环境，本人写此项目时使用 `laradock`，下面的步骤也是据此而写。可根据自己实际情况进行调整。

1. 克隆项目到本地

```bash
git clone https://github.com/tianyong90/laravel-mix-autoreload-demo.git
```

2. 安装依赖

```bash
// 后端，在 laradock workspace 容器里执行
composer install

// 前端，在宿主（本人为 windows19）中执行
yarn install
```

3. 项目配置

因为本项目仅用于前端工作流展示，.evn 中除了 APP_KEY 之外无需其它配置
```bash
cp .env-example .env

php artisan key:generate
```

4. 配置 nginx 站点

根据自己情况配置一个使用域名 laravel-mix-autoreload-demo.test 的站点，同时将它添加到 hosts 文件中。

## 查看示例效果

> **以下都在宿主（例如本人为 windows10）环境中执行。**

### Browsersync

1. 进入项目根目录执行

```bash
yarn run demo:bs
```

2. 首次编译完成后默认浏览器将自动打开页面

3. 修改文件并保存，观察刷新效果

例如：
- resources/js/ 目录下的全部 js 文件
- resources/sass/ 目录下的全部 scss 文件
- 后端控制器、模型文件等

### Hot Module Replacement

1. 进入项目根目录执行

```bash
yarn run demo:hmr
```

2. 首次编译完成后在浏览器中打开 http://laravel-mix-autoreload-demo.test/demo-hmr

3. 修改前端资源文件并保存，观察刷新效果

例如：
- resources/sass/demo-hmr.scss
- resources/js/demo-hmr.js
- resources/js/comopnents/ExampleComponent.vue

### LiveReload

1. 进入项目根目录执行

```bash
yarn run demo:livereload
```

2. 首次编译完成后在浏览器中打开 http://laravel-mix-autoreload-demo.test/demo-livereload

3. 修改前端资源文件并保存，观察刷新效果

例如：
- resources/sass/demo-livereload.scss
- resources/js/demo-livereload.js
