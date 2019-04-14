<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/demo-livereload.css') }}">
</head>
<body>
<div class="container d-block py-5">

    <div class="text-center">
        <h1 class="title text-center">LiveReload 示例</h1>
    </div>

    <div class="row">
        <div class="col-8 col-lg-6 mx-auto">
            <div>尝试修改以下文件，观察页面刷新效果</div>

            <ul class="list">
                <li class="list-item">
                    /resources/js/demo-livereload.js
                </li>
                <li class="list-item">
                    /resources/sass/demo-livereload.scss
                </li>
            </ul>

            <div class="note">
                <p>
                    Live Reload 仅响应当前页面所加载的前端资源变化，对于本页前说也就是仅当编辑上面两个文件会触发自动刷新。编辑 demo-livereload.blade.php 模板及其它文件不会自动刷新。这与 BrowserSync 不同。
                </p>


                <h1>哈哈</h1>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/demo-livereload.js') }}"></script>

    @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif
</div>
</body>
</html>
