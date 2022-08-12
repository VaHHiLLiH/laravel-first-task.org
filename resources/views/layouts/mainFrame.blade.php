<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="{{ mix('/js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <body>
        <div class="header-menu">
            <img src="#" alt="logo">
            <a href="{{ route('adminPanel') }}" class="header-link">Admin Panel</a>
            <a href="{{ route('userPanel') }}" class="header-link">User Panel</a>
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
