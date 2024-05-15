<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logoUser.svg') }}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <style>
        * {
            /* border: 1px solid black; */
        }
    </style>
    <title>{{ $title }} | onban</title>

</head>

<body>
    @include('partial.header-user')

    <div class="container px-4 ">
        @yield('content')
    </div>
</body>

</html>
