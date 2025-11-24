@extends('layouts.web')

@section('content')
    <section class="sec-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb list-unstyled d-flex flex-row gap-2 align-items-center m-0 ps-0 py-4">
                            <li class="breadcrumb-item"><a href="/" class="text-600 fs-7 hover-dark">Home</a></li>
                            <li class="breadcrumb-item">
                                    <span class="icon-shape icon-xxs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M6.125 4.5625L9.5625 7.84375L6.125 11.125" stroke="#626568" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                            </li>
                            <li class="breadcrumb-item active text-dark fs-7" aria-current="page">{{$category->name}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h4 class="mb-0 ds-4">
                            <span class="text-anime-style-2"> {{$category->name}}</span>
                            <span class="text-600 fw-regular fs-6 bg-white rounded-8 p-2">{{count($category->blogs)}} articles</span>
                        </h4>
                        <p class="fs-7 mb-0 text-anime-style-1">{{$category->description}}</p>
                    </div>
                </div>
                {{-- TOP AUTHORS--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="d-none d-lg-flex justify-content-end">--}}
{{--                        <div class="block-author align-items-center position-relative">--}}
{{--                            <span class="position-absolute bottom-100 start-0 p-2 fs-8">Top Authors</span>--}}
{{--                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-5 hover-up">--}}
{{--                                <a href="page-author.html">--}}
{{--                                    <img src="/assets/imgs/template/author/author-11.png" alt="magzin" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-4 hover-up">--}}
{{--                                <a href="page-author.html">--}}
{{--                                    <img src="/assets/imgs/template/author/author-12.png" alt="magzin" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-3 hover-up">--}}
{{--                                <a href="page-author.html">--}}
{{--                                    <img src="/assets/imgs/template/author/author-13.png" alt="magzin" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-1 hover-up">--}}
{{--                                <a href="page-author.html">--}}
{{--                                    <img src="/assets/imgs/template/author/author-14.png" alt="magzin" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="avatar avatar-md rounded-circle overflow-hidden border-3 border-white z-0 hover-up">--}}
{{--                                <a href="page-author.html">--}}
{{--                                    <img src="/assets/imgs/template/author/author-15.png" alt="magzin" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!--Archive 1 Section 1-->
    <section class="sec-1-archive-1">
        <div class="container">
            <div class="row g-4 mt-4">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.cards.article-card-7', ['blog' => $blog])
                    </div>
{{--                    @if($loop->iteration === 3)--}}
{{--                        <div class="col-lg-4 col-md-6 col-12">--}}
{{--                            <div class="newsletter">--}}
{{--                                <div class="decorate-1" data-background="assets/imgs/template/decorate-1.png"></div>--}}
{{--                                <div class="">--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--                                            <path d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                            <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                        </svg>--}}
{{--                                        <span class="fs-7 fw-semibold">Newsletter</span>--}}
{{--                                    </div>--}}
{{--                                    <h5 class="my-2">--}}
{{--                                        Weekly updates? <br class="d-none d-lg-block">--}}
{{--                                        We've got you covered. Subscribe now--}}
{{--                                    </h5>--}}
{{--                                    <p class="m-0 fs-7">You'll only receive updates on new templates, no spam, just what you signed up for.</p>--}}
{{--                                </div>--}}
{{--                                <form action="#" class="w-auto">--}}
{{--                                    <input type="email" class="form-control fs-7 mb-2 w-100" placeholder="Your email address">--}}
{{--                                    <button type="submit" class="btn btn-dark w-100 button-effect-1">Subscribe</button>--}}
{{--                                </form>--}}
{{--                                <div class="d-flex align-items-center gap-3">--}}
{{--                                    <a href="#" class="text-600 fs-8">Term & Condition</a>--}}
{{--                                    <a href="#" class="text-600 fs-8">Private policy</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                @endforeach
            </div>
{{--            Pagination--}}
{{--            <div class="row mt-5">--}}
{{--                <!-- prettier-ignore -->--}}
{{--                <div class="col-12 d-flex justify-content-start align-items-center">--}}
{{--                    <nav>--}}
{{--                        <ul class="pagination gap-2">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#" aria-label="Previous">--}}
{{--                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">--}}
{{--                                        <path d="M9.49993 6.5L4.78564 11L9.49993 15.5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                        <path d="M17.2143 11H5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold current" href="#"> 1 </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 2 </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 3 </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 4 </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> 5 </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item d-none d-md-block">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold" href="#"> ... </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#" aria-label="Next">--}}
{{--                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">--}}
{{--                                        <path d="M12.5 6.5L17.2143 11L12.5 15.5" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                        <path d="M16.9999 11H4.78564" stroke="#0E0E0F" stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!--Home 4 Section 6-->
{{--    <section class="sec-6-home-4">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 d-flex justify-content-center">--}}
{{--                    <div class="block-newsletter bg-transparent border-0 position-relative">--}}
{{--                        <div class="newsletter text-center">--}}
{{--                            <div class="block-title">--}}
{{--                                <h4 class="mb-3 text-anime-style-3">Subscribe to our newsletter</h4>--}}
{{--                                <p class="mb-4">--}}
{{--                                    Subscribe to our email newsletter to get the latest <br class="d-none d-lg-block">--}}
{{--                                    posts delivered right to your email.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <form action="#" class="position-relative">--}}
{{--                                <div class="d-flex flex-wrap flex-md-nowrap justify-content-center gap-2 align-items-center mb-4">--}}
{{--                                    <input class="form-control" type="text" placeholder="Your email address">--}}
{{--                                    <button class="btn btn-dark button-effect-1" type="submit">Subscribe</button>--}}
{{--                                </div>--}}
{{--                                <span class="fs-7 fw-regular">You’ll only receive valuable news updates—no spam.</span>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
