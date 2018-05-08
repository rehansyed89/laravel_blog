<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('header')
        <div class="container">
            @yield('main')
        </div>
    </body>
</html>
