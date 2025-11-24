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
                            <li class="breadcrumb-item active text-dark fs-7" aria-current="page">{{$tag}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h4 class="mb-0 ds-4">
                            <span class="text-anime-style-2"> {{$tag}}</span>
                            <span class="text-600 fw-regular fs-6 bg-white rounded-8 p-2">{{count($blogs)}} articles</span>
                        </h4>
                        <p class="fs-7 mb-0 text-anime-style-1">Posts by tag: {{$tag}}</p>
                    </div>
                </div>
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
                @endforeach
            </div>
        </div>
    </section>
@endsection
