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
    <!-- screen-bg start -->
    <div class="screen-bg"></div>
    <!-- screen-bg end -->
    <!-- preloader start -->
    <div class="preloader"></div>
    <!-- preloader end -->
    <x-common.top-notification :message="$message" />
    <x-common.header />
    <x-common.menu-main />
    @yield('content')
    <x-common.footer />
    <x-common.mobile-vega />
    <x-common.mobile-menu />
    <x-common.search-modal />
    <x-common.cart-drawer />
    <x-common.bottom-menu />
    {{-- <x-common.quickview-modal /> --}}
    <!-- fullscreen start -->
    <div class="bg-screen"></div>
    <!-- fullscreen end -->
    <!-- back-to-top start -->
    <a href="javascript:void(0)" id="top" class="scroll"><span><i class="feather-arrow-up"></i></span></a>
    <!-- back-to-top end -->
    @yield('scripts')
    <!-- plugin js -->
    <script src="{{ asset('store/js/plugin.js') }}"></script>
    <!-- theme js -->
    <script src="{{ asset('store/js/main.js') }}"></script>
</body>

</html>
