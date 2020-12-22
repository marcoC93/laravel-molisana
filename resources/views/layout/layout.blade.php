<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            @yield('header')
        </header>

        @yield('main')

        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
