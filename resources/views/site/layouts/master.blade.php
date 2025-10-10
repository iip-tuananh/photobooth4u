<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('site.partials.head')
    <!-- Styles Include -->
    <link rel="stylesheet" href="/site/css/main.css">
    @yield('css')


</head>

<body ng-app="App">
    @include('site.partials.header')

    @yield('content')

    @include('site.partials.footer')

    <!-- Core JS -->
    <script src="/site/js/jquery-3.6.0.min.js"></script>
    <!-- Framework -->
    <script src="/site/js/bootstrap.min.js"></script>
    <!-- WOW Scroll Effect -->
    <script src="/site/js/wow.min.js"></script>
    <!-- Swiper Slider -->
    <script src="/site/js/swiper-bundle.min.js"></script>
    <script src="/site/js/swiper-gl.min.js"></script>
    <!-- Odometer Counter -->
    <script src="/site/js/appear.js"></script>
    <script src="/site/js/odometer.js"></script>
    <!-- Projects -->
    <script src="/site/js/isotope.pkgd.min.js"></script>
    <script src="/site/js/imagesloaded.pkgd.min.js"></script>
    <!-- <script src="./js/jquery.hoverdir.js"></script>-->
    <script src="/site/js/tilt.jquery.js"></script>
    {{-- <script src="/site/js/isotope-init.js"></script> --}}
    <!-- Fancybox -->
    <script src="/site/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr -->
    <script src="/site/js/flatpickr.min.js"></script>
    <!-- Nice Select -->
    <script src="/site/js/jquery.nice-select.min.js"></script>
    <!-- Cursor Effect -->
    {{-- <script src="/site/js/cursor-effect.js"></script> --}}
    <!-- Theme Custom JS -->
    <script src="/site/js/theme.js"></script>

    @include('site.partials.angular_mix')
    @stack('scripts')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v24.0&appId=APP_ID"></script>
</body>

</html>
