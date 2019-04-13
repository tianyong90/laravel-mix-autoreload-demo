<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/demo-hmr.css') }}">
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
        </div>

        @unless(!file_exists(public_path('/hot')))
        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        @endunless

        <script src="{{ mix('/js/demo-hmr.js') }}"></script>
    </body>
</html>
