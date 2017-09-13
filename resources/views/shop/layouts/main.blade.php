<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/owl.css') }}">
    @yield('styles')
</head>
<body>
@include('shop.partials.header')
@yield('content')
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/b953d657bb.js"></script>
<script src="/js/nodes.js"></script>
<script src="/js/products.js"></script>
@yield('scripts')
</body>
</html>