<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uren - Car Accessories Shop HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-stars.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ion-fonts.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}"> --}}

</head>

<body class="template-color-1">
    <div class="main-wrapper">
        <!-- Begin Uren's Newsletter Popup Area -->
        {{-- <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off"><i class="ion-android-close"></i></span>
                <div class="subscribe_area">
                    <h2>Sign Up Newsletter</h2>
                    <p>Subscribe to the our store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form class="subscribe-form" action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Uren's Newsletter Popup Area Here -->
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <!-- Barrating JS -->
    <script src="{{ asset('assets/js/plugins/jquery.barrating.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/plugins/jquery.counterup.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- Jquery-ui JS -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Lightgallery JS -->
    <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>
    <!-- Scroll Top JS -->
    <script src="{{ asset('assets/js/plugins/scroll-top.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <!-- jQuery Zoom JS -->
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
