<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        @yield('title')
        @yield('meta')
        @yield('og')
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="{{ asset('store/image/home2/favicon.png') }}">
        @yield('styles')
        <script src="https://t.contentsquare.net/uxa/18a5d462b73a6.js"></script>
    </head>
    <body>
        @yield('content')
        @yield('scripts')
        <!-- plugin js -->
        <script src="{{ asset('store/js/plugin.js') }}"></script>
        <!-- theme js -->
        <script src="{{ asset('store/js/main.js') }}"></script>
    </body>
</html>
