<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home Worker</title>
</head>
<body>
    @include('partial.header-worker')

    <div class="container px-4">
        @yield('content')
    </div>

    @include('partial.footer-worker')
</body>
</html>
