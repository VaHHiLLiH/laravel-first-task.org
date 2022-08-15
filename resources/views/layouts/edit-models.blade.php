<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="{{ mix('/js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="header-menu">
                <img src="/image/logo.jpg" alt="logo">
                <a href="{{ route('adminPanel') }}" class="header-link">Admin Panel</a>
                <a href="{{ route('userPanel') }}" class="header-link">User Panel</a>
                <a href="@yield('special-route')" class="header-link">@yield('special-text')</a>
            </div>
        </header>
        <div class="admin-container">
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
