<!doctype html>
<html>
<head>
    <title>Toy Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class='min-h-screen flex flex-col bg-primary'>
    @if(Auth::check())
        @include('partials.header')
    @else
        @include('partials.header_guest')
    @endif

    <div class="w-full">
        @yield('container')
    </div>

    @include('partials.footer')
</body>
</html>
