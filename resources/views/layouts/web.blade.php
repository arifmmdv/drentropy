<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- prettier-ignore -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dr. Entropy - Sevinc Mammadova</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/template/logo/favicon.svg">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/assets/css/vendors/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/css/vendors/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/vendors/aos.css">
    <link rel="stylesheet" href="/assets/css/vendors/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/vendors/carouselTicker.css">
    <link rel="stylesheet" href="/assets/css/vendors/odometer.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
<!-- prettier-ignore -->
<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="/assets/imgs/template/logo/logo-gradient.svg" alt="Preloader"></div>
        </div>
    </div>
</div>
<!--Preloader-end -->
<!-- Navbar -->
@include('layout-components.header')
@include('layout-components.popup-search')
@include('layout-components.sidebar')

<main>
    @yield('content')
</main>
<!-- prettier-ignore -->
<!-- Footer -->
@include('layout-components.footer')

<!-- Libs JS -->
<script src="/assets/js/vendors/jquery-3.7.1.min.js"></script>
<script src="/assets/js/vendors/swiper-bundle.min.js"></script>
<script src="/assets/js/vendors/aos.js"></script>
<script src="/assets/js/vendors/wow.min.js"></script>
<script src="/assets/js/vendors/headhesive.min.js"></script>
<script src="/assets/js/vendors/smart-stick-nav.js"></script>
<script src="/assets/js/vendors/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/vendors/gsap.min.js"></script>
<script src="/assets/js/vendors/ScrollToPlugin.min.js"></script>
<script src="/assets/js/vendors/ScrollTrigger.min.js"></script>
<script src="/assets/js/vendors/Splitetext.js"></script>
<script src="/assets/js/vendors/howler.min.js"></script>
<script src="/assets/js/vendors/jquery.carouselTicker.min.js"></script>
<script src="/assets/js/vendors/jquery.odometer.min.js"></script>
<script src="/assets/js/vendors/jquery.appear.js"></script>
<script src="/assets/js/vendors/color-modes.js"></script>

<!-- Template JS -->
<script src="/assets/js/gsap-custom.js"></script>
<script src="/assets/js/vendors/image-hover-effects.js"></script>
<script src="/assets/js/main.js"></script>
</body>

</html>




