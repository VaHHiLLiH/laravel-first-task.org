<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="{{ mix('/css/app.css') }}"></script>
    <link rel="stylesheet" href="{{ mix('/js/app.js') }}">
</head>
<body>
<div class="header-menu">
    <img src="#" alt="logo">
    <a href="{{ route('adminPanel') }}" class="header-link">Admin Panel</a>
    <a href="{{ route('articles.index') }}" class="header-link">User Panel</a>
    <a href="@yield('special-route')" class="header-link">@yield('special-text')</a>
</div>
<div class="container">
    @yield("content")
</div>
</body>
<footer>
    <div class="column1">

    </div>
    <div class="column2">

    </div>
    <div class="column3">

    </div>
</footer>
</html>
