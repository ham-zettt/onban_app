<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/onban-icon.png') }}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>{{ $title }} | onban</title>

</head>
<body>
    @include('partial.header-user')

    <div class="container px-4 ">
        @yield('content')
    </div>

    @include('partial.footer-user')
</body>
</html>
