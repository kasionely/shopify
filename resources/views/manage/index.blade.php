<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    @yield('styles')
</head>
<body>
@include('manage.partials.navbar')
<div class="manage-page">
    @yield('content')
</div>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/b953d657bb.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/app.js"></script>
@yield('scripts')
</body>
</html>