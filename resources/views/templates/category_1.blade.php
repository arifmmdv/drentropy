@extends('layouts.web')

@section('content')
    <!-- prettier-ignore -->
    <!-- Breadcrumb -->
    <section class="sec-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb list-unstyled d-flex flex-row gap-2 align-items-center m-0 ps-0 py-4">
                            <li class="breadcrumb-item"><a href="index.html" class="text-600 fs-7 hover-dark">Home</a></li>
                            <li class="breadcrumb-item">
                                    <span class="icon-shape icon-xxs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M6.125 4.5625L9.5625 7.84375L6.125 11.125" stroke="#626568" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                            </li>
                            <li class="breadcrumb-item active text-dark fs-7" aria-current="page">Travel & Culture</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h4 class="mb-0 ds-4">
                            <span class="text-anime-style-2"> Travel & Culture </span>
                            <span class="text-600 fw-regular fs-6 bg-white rounded-8 p-2">187 articles</span>
                        </h4>
                        <p class="fs-7 mb-0 text-anime-style-1">Journey across the globe to uncover the stories, traditions, and beauty that shape our shared human experience.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-flex justify-content-end">
                        <div class="block-author align-items-center position-relative">
                            <span class="position-absolute bottom-100 start-0 p-2 fs-8">Top Authors</span>
                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-5 hover-up">
                                <a href="page-author.html">
                                    <img src="/assets/imgs/template/author/author-11.png" alt="magzin" />
                                </a>
                            </div>
                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-4 hover-up">
                                <a href="page-author.html">
                                    <img src="/assets/imgs/template/author/author-12.png" alt="magzin" />
                                </a>
                            </div>
                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-3 hover-up">
                                <a href="page-author.html">
                                    <img src="/assets/imgs/template/author/author-13.png" alt="magzin" />
                                </a>
                            </div>
                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-1 hover-up">
                                <a href="page-author.html">
                                    <img src="/assets/imgs/template/author/author-14.png" alt="magzin" />
                                </a>
                            </div>
                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-0 hover-up">
                                <a href="page-author.html">
                                    <img src="/assets/imgs/template/author/author-15.png" alt="magzin" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Archive 1 Section 1-->
    <section class="sec-1-archive-1">
        <div class="container">
            <div class="row g-4 mt-4">
                <!-- prettier-ignore -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-1 fs-8">Lifestyle</a>
                                    <a href="#" class="badge bg-3 fs-8">Model</a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins read</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">The Revival of Classical Art in a Digital Age</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-28.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="#" class="d-none play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">When brushstrokes inspire hemlines and canvases shape silhouettes, the result is a striking fusion of visual art and fashion design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Lifestyle</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins read</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Sustainable Eating in a Climate-Conscious World</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-87.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Lifestyle</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins read</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Eco-Friendly Fashion for the Modern</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-96.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="newsletter">
                        <div class="decorate-1" data-background="assets/imgs/template/decorate-1.png"></div>
                        <div class="">
                            <div class="d-flex align-items-center">
                                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="fs-7 fw-semibold">Newsletter</span>
                            </div>
                            <h5 class="my-2">
                                Weekly updates? <br class="d-none d-lg-block">
                                We've got you covered. Subscribe now
                            </h5>
                            <p class="m-0 fs-7">You’ll only receive updates on new templates, no spam, just what you signed up for.</p>
                        </div>
                        <form action="#" class="w-auto">
                            <input type="email" class="form-control fs-7 mb-2 w-100" placeholder="Your email address">
                            <button type="submit" class="btn btn-dark w-100 button-effect-1">Subscribe</button>
                        </form>
                        <div class="d-flex align-items-center gap-3">
                            <a href="#" class="text-600 fs-8">Term & Condition</a>
                            <a href="#" class="text-600 fs-8">Private policy</a>
                        </div>
                    </div>
                </div>
                <!-- prettier-ignore -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Lifestyle</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Wellness Rituals for a Fast-Paced Life</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-60.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Lifestyle</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Rethinking Consumption in a Minimalist Era</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-97.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="block-ads bg-200">
                        <div class="banner-ads" data-background="assets/imgs/page/bg-archive1.png">
                            <img src="/assets/imgs/template/logo/logo-gradient.svg" alt="magzin">
                            <h4 class="mt-3">
                                Modern Magazine & Blog <br class="d-none d-lg-block">
                                with <span>Outstanding</span> performance
                            </h4>
                            <div class="d-flex flex-wrap align-items-center gap-lg-4 gap-3">
                                <div class="tag-ads">
                                    <img src="/assets/imgs/template/icons/icon-1.svg" alt="magzin">
                                    <div class="tag-ads__content">
                                        <h6 class="fw-medium fs-18 m-0">Google</h6>
                                        <p class="fs-7 m-0">PageSpeed Insidghts</p>
                                    </div>
                                </div>
                                <div class="tag-ads">
                                    <img src="/assets/imgs/template/icons/icon-2.svg" alt="magzin">
                                    <div class="tag-ads__content">
                                        <h6 class="fw-medium fs-18 m-0">Core Web Vitals</h6>
                                        <p class="fs-7 m-0">Assessment Passed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-1">
                <!-- prettier-ignore -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-1 fs-8">Lifestyle</a>
                                    <a href="#" class="badge bg-3 fs-8">Model</a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Music and Mental Health: The Healing Power of Sound</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-86.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="#" class="d-none play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">When brushstrokes inspire hemlines and canvases shape silhouettes, the result is a striking fusion of visual art and fashion design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-1 fs-8">Lifestyle</a>
                                    <a href="#" class="badge bg-3 fs-8">Model</a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">The Rise of Indie Films: Why Small Productions Make Big Impact</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-98.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="#" class="d-none play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-2 fs-8">Health</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">The Golden Age of Animation: How Cartoons Shape Pop Culture</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-87.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-2 fs-8">Health</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">The Power of Photography: Capturing Moments That Matter</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-100.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">When brushstrokes inspire hemlines and canvases shape silhouettes, the result is a striking fusion of visual art and fashion design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Culture</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">The Cultural Significance of Dance in Different Societies</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-88.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="article card-7">
                        <div class="card-body">
                            <div class="card-corner">
                                <a href="single-3.html" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                    <a href="#" class="badge bg-3 fs-8">Culture</a>
                                    <a href="#" class="badge d-none fs-8"></a>
                                    <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">6 mins readTime</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="book-mark ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-4">Exploring the Relationship Between Art and Technology</h6>
                                </a>
                                <div class="position-relative card-img">
                                    <div class="hover-effect-30 rounded-16 overflow-hidden">
                                        <a href="single-3.html">
                                            <img class=" cover-image w-100 h-100" src="/assets/imgs/page/img-99.png" alt="magzin">
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E" class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns grow, our plates are becoming powerful tools for change. Sustainable eating—centered on plant-based choices, local sourcing, and reducing food waste.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- prettier-ignore -->
                <div class="col-12 d-flex justify-content-start align-items-center">
                    <nav>
                        <ul class="pagination gap-2">
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#" aria-label="Previous">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M9.49993 6.5L4.78564 11L9.49993 15.5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.2143 11H5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold current" href="#"> 1 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 2 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 3 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 4 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 5 </a>
                            </li>
                            <li class="page-item d-none d-md-block">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> ... </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#" aria-label="Next">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M12.5 6.5L17.2143 11L12.5 15.5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9999 11H4.78564" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--Home 4 Section 6-->
    <section class="sec-6-home-4">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="block-newsletter bg-transparent border-0 position-relative">
                        <div class="newsletter text-center">
                            <div class="block-title">
                                <h4 class="mb-3 text-anime-style-3">Subscribe to our newsletter</h4>
                                <p class="mb-4">
                                    Subscribe to our email newsletter to get the latest <br class="d-none d-lg-block">
                                    posts delivered right to your email.
                                </p>
                            </div>
                            <form action="#" class="position-relative">
                                <div class="d-flex flex-wrap flex-md-nowrap justify-content-center gap-2 align-items-center mb-4">
                                    <input class="form-control" type="text" placeholder="Your email address">
                                    <button class="btn btn-dark button-effect-1" type="submit">Subscribe</button>
                                </div>
                                <span class="fs-7 fw-regular">You’ll only receive valuable news updates—no spam.</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
