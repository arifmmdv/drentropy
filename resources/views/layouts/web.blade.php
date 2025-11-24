<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YQCH57N7PJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YQCH57N7PJ');
    </script>
    <!-- prettier-ignore -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title', 'Dr. Entropy - Sevinc Mammadova')</title>
    <meta name="description" content="@yield('meta_description', 'Dr. Entropy is a medical and health blog sharing evidence-based insights, wellness tips, and everyday health advice. Explore topics on medicine, natural remedies, skincare, and more—written to make complex health topics simple and accessible.')">
    <meta name="keywords" content="@yield('meta_keywords', 'medicine blog, health blog, medical advice, wellness tips, skincare, acne causes, menstruation delay, natural remedies, women`s health, medical insights, health education, lifestyle medicine, evidence-based medicine, Dr. Entropy')">
    <meta name="author" content="Dr. Entropy">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Dr. Entropy is a medical and health blog sharing evidence-based insights, wellness tips, and everyday health advice. Explore topics on medicine, natural remedies, skincare, and more—written to make complex health topics simple and accessible.')">
    <meta property="og:image" content="@yield('og_image', asset('/og.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', config('app.name'))">
    <meta property="twitter:description" content="@yield('twitter_description', 'Dr. Entropy is a medical and health blog sharing evidence-based insights, wellness tips, and everyday health advice. Explore topics on medicine, natural remedies, skincare, and more—written to make complex health topics simple and accessible.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('/og.jpg'))">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">

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
    <link rel="stylesheet" href="/assets/css/styles.css">
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




