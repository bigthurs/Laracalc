<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laracalc</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200 mb-6">
        @include('calc.flash-message')

        @yield('content')
    </body>
</html>