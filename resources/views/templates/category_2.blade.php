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
                            <li class="breadcrumb-item active text-dark fs-7" aria-current="page">Style & Fashion</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h4 class="mb-0 ds-4">
                            <span class="text-anime-style-2"> Style & Fashion </span>
                            <span class="text-600 fw-regular fs-6 bg-white rounded-8 p-2">85</span>
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

    <!--Archive 2 Section 1-->
    <section class="sec-1-archive-2">
        <div class="container">
            <div class="row mt-5">
                <!-- prettier-ignore -->
                <div class="col-12">
                    <div class="article card-12 d-flex flex-md-row align-items-stretch flex-column">
                        <a href="single-3.html" class="card-img-top hover-effect-30 rounded-16 overflow-hidden">
                            <img src="/assets/imgs/page/img-66.png" alt="magzin" class="cover-image">
                        </a>
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

                            <div class="left">
                                <div class="mb-2">
                                    <a href="#" class="badge bg-2 fs-8">Lifestyle</a>
                                </div>
                                <a href="single-3.html" class="hover-underline">
                                    <h4 class="card-title mb-0 mt-3">Embracing the Art of Slowing Down in a Fast-Paced World</h4>
                                </a>
                                <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-3"> In an age of constant notifications and never-ending to-do lists, slowing down can feel like a luxury. But embracing a slower, more intentional lifestyle can lead to greater clarity, deeper relationships, and a stronger sense of self.</p>
                                <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                    <a href="@@link-author" class="author d-flex align-items-center gap-2">
                                        <img class="avatar avatar-md rounded-circle" src="/assets/imgs/template/author/author-8.png" alt="magzin">
                                        <span class="fs-7 text-dark fw-regular">Amelia Grant</span>
                                    </a>
                                    <ul class="d-flex align-items-center gap-4 text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">Jun 13, 2025</p>
                                        </li>
                                    </ul>
                                    <div class="ms-lg-auto ms-5 d-flex align-items-center gap-3 me-5">
                                        <a href="#" class="comment fs-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                            </svg>
                                            <span class="odometer text-nowrap" data-count="98"></span>
                                        </a>
                                        <a href="#" class="readers fs-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                            </svg>
                                            <span class="odometer text-nowrap" data-count="162"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <a href="#" class="book-mark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home 4 Section 5-->
    <section class="sec-5-home-4 pb-70 overflow-hidden">
        <div class="container">
            <div class="row g-lg-4 g-5">
                <div class="col-lg-8">
                    <div class="d-none">
                        <div class="section-title d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex">
                                <div class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                                    </svg>
                                    <h5 class="mb-0 text-anime-style-2">Latest</h5>
                                </div>
                                <p class="fs-7 ms-3 mb-2 d-none d-lg-block text-anime-style-1">Real-Time Updates That Matter</p>
                            </div>
                            <div class="d-flex d-none d-md-block">
                                <a href="#" class="view-more">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                    <span class="button-text">View More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 g-4">
                        <!-- prettier-ignore -->
                        <div class="col-12">
                            <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                                <!-- <div class="hover-effect-1"> -->
                                <a href="single-3.html" class="card-img-top">
                                        <span class="hover-effect-1">
                                            <img src="/assets/imgs/page/img-83.png" alt="magzin" class="cover-image thumbnail">
                                        </span>
                                </a>
                                <!-- </div> -->
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

                                    <div class="left">
                                        <div class="card-info d-flex align-items-center mb-3">
                                            <a href="#" class="badge bg-1 fs-8">Art</a>
                                            <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                                <li>
                                                    <p class="fs-8 m-0">6 mins read</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-3.html" class="hover-underline">
                                            <h5 class="card-title mb-0 mt-3 text-truncate-2">Embracing the Art of Slowing Down in a Fast-Paced World</h5>
                                        </a>
                                        <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of major fashion capitals.</p>
                                        <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                            <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                                <a href="#" class="comment fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="98"></span>
                                                </a>
                                                <a href="#" class="readers fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="162"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                                <!-- <div class="hover-effect-1"> -->
                                <a href="single-3.html" class="card-img-top">
                                        <span class="hover-effect-1">
                                            <img src="/assets/imgs/page/img-69.png" alt="magzin" class="cover-image thumbnail">
                                        </span>
                                </a>
                                <!-- </div> -->
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

                                    <div class="left">
                                        <div class="card-info d-flex align-items-center mb-3">
                                            <a href="#" class="badge bg-3 fs-8">Technology</a>
                                            <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                                <li>
                                                    <p class="fs-8 m-0">6 mins read</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-3.html" class="hover-underline">
                                            <h5 class="card-title mb-0 mt-3 text-truncate-2">The Emotional Impact of Architecture and Space</h5>
                                        </a>
                                        <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of major fashion capitals.</p>
                                        <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                            <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                                <a href="#" class="comment fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="98"></span>
                                                </a>
                                                <a href="#" class="readers fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="162"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                                <!-- <div class="hover-effect-1"> -->
                                <a href="single-3.html" class="card-img-top">
                                        <span class="hover-effect-1">
                                            <img src="/assets/imgs/page/img-68.png" alt="magzin" class="cover-image thumbnail">
                                        </span>
                                </a>
                                <!-- </div> -->
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

                                    <div class="left">
                                        <div class="card-info d-flex align-items-center mb-3">
                                            <a href="#" class="badge bg-2 fs-8">Science</a>
                                            <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                                <li>
                                                    <p class="fs-8 m-0">6 mins read</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-3.html" class="hover-underline">
                                            <h5 class="card-title mb-0 mt-3 text-truncate-2">Minimalist Design: Finding Beauty in Simplicity</h5>
                                        </a>
                                        <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of major fashion capitals.</p>
                                        <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                            <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                                <a href="#" class="comment fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="98"></span>
                                                </a>
                                                <a href="#" class="readers fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="162"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                                <!-- <div class="hover-effect-1"> -->
                                <a href="single-3.html" class="card-img-top">
                                        <span class="hover-effect-1">
                                            <img src="/assets/imgs/page/img-67.png" alt="magzin" class="cover-image thumbnail">
                                        </span>
                                </a>
                                <!-- </div> -->
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

                                    <div class="left">
                                        <div class="card-info d-flex align-items-center mb-3">
                                            <a href="#" class="badge bg-4 fs-8">Health</a>
                                            <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                                <li>
                                                    <p class="fs-8 m-0">6 mins read</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-3.html" class="hover-underline">
                                            <h5 class="card-title mb-0 mt-3 text-truncate-2">The Science of Happiness: What Actually Works</h5>
                                        </a>
                                        <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of major fashion capitals.</p>
                                        <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                            <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                                <a href="#" class="comment fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="98"></span>
                                                </a>
                                                <a href="#" class="readers fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="162"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                                <!-- <div class="hover-effect-1"> -->
                                <a href="single-3.html" class="card-img-top">
                                        <span class="hover-effect-1">
                                            <img src="/assets/imgs/page/img-66.png" alt="magzin" class="cover-image thumbnail">
                                        </span>
                                </a>
                                <!-- </div> -->
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

                                    <div class="left">
                                        <div class="card-info d-flex align-items-center mb-3">
                                            <a href="#" class="badge bg-5 fs-8">Lifestyle</a>
                                            <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                                <li>
                                                    <p class="fs-8 m-0">6 mins read</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="single-3.html" class="hover-underline">
                                            <h5 class="card-title mb-0 mt-3 text-truncate-2">Why Freelancers Are Changing the Future of Work</h5>
                                        </a>
                                        <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of major fashion capitals.</p>
                                        <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                            <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                                <a href="#" class="comment fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="98"></span>
                                                </a>
                                                <a href="#" class="readers fs-8">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                                    </svg>
                                                    <span class="odometer text-nowrap" data-count="162"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
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
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-12">
                            <div class="d-flex align-items-center gap-2 mt-4 mt-lg-4 mt-md-0 mb-3">
                                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                                </svg>
                                <h5 class="mb-0">Weekly trending</h5>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                                <!--prettier-ignore-->
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-1.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">Stay Informed with Global Headlines</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-2.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">The Rise of Mindful Living in a Digital World</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-14.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">The Quiet Power of Present Living</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-15.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">Minimalism in Design: Why Less is Still More</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/page/img-88.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">Minimalism in Design: Why Less is Still More</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex align-items-center gap-2 mt-lg-4 mt-4 mt-md-0 mb-3">
                                        <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                                        </svg>
                                        <h5 class="mb-0">Popular tags</h5>
                                    </div>
                                    <ul class="list-unstyled d-flex flex-wrap gap-3 ps-0">
                                        <!-- prettier-ignore -->
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Fashion</span>
                                                        <span class="text2">Fashion</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="68"></span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Technology</span>
                                                        <span class="text2">Technology</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="85"></span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Science</span>
                                                        <span class="text2">Science</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="120"></span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Lifestyle</span>
                                                        <span class="text2">Lifestyle</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="89"></span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Politics</span>
                                                        <span class="text2">Politics</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="52"></span>
                                                    </span>
                                            </a>
                                        </li>
                                        <li class="carouselTicker__item mx-0">
                                            <a href="#" class="tag-item link-effect-2">
                                                    <span class="text">
                                                        <span class="text1">Blockchain</span>
                                                        <span class="text2">Blockchain</span>
                                                    </span>

                                                <span class="number">
                                                        <span class="odometer text-nowrap" data-count="115"></span>
                                                    </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 block-gallery">
                                    <div class="swiper slider-1 mt-lg-5 mt-md-3 mt-4 rounded-16 overflow-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-90.png" alt="magzin">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-85.png" alt="magzin">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-84.png" alt="magzin">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-85.png" alt="magzin">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination mb-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <!-- prettier-ignore -->
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
    </div>
    <!-- prettier-ignore -->
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
