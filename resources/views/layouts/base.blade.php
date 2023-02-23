<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Do-It PC</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="https://kit.fontawesome.com/268c8277db.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('layouts.header')
      
        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </body>
</html>