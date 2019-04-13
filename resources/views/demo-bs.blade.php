<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/demo-bs.css') }}">
</head>
<body>
<div class="container d-block py-5">

    <div class="text-center">
        <h1 class="title text-center">hi Browsersync 示例</h1>
    </div>

    <div class="row">
        <div class="col-8 col-lg-6 mx-auto">
            <div>尝试修改以下文件，观察页面刷新效果</div>

            <ul class="list">
                <li class="list-item">
                    /resources/views/index-bs.blade.php
                </li>
                <li class="list-item">
                    /resources/js/app-bs.js
                </li>
                <li class="list-item">
                    /resources/scss/app-bs.scss
                </li>
            </ul>

            <div class="note">
                <p>
                    注意：上修改上述文件并保存后能直观地看到本页面自动刷新后的变化，但并不是只有这些文件才能触发 bs 自动刷新。
                </p>
                <p>
                    laravel-mix@4 默认 Browsersync 配置的 files 荐如下：
                </p>
                <pre>
                    <code>
'app/**/*.php',
'resources/views/**/*.php',
'public/js/**/*.js',
'public/css/**/*.css'
                    </code>
                </pre>
                <p>这意味着上面列出的文件变动后页面都会自动刷新。你也可以修改 Browsersync 的 files 配置项来监听更多的文件变化。在 webpack.mix.bs.js 中通过 mix.browserSync() 方法修改。</p>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('js/demo-bs.js') }}"></script>
</body>
</html>
