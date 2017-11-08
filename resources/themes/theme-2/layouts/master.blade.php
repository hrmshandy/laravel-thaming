<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme 2</title>
    <style>
        body {
            background: blue;
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('theme::partials.header')
    <main>
        @yield('content')
    </main>


    @yield('scripts')
</body>
</html>