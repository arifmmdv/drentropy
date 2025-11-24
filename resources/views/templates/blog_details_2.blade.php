@extends('layouts.web')

@section('title', $blog->title . ' - Dr. Entropy')
@section('meta_description', Str::limit(strip_tags($blog->content), 155))
@section('meta_keywords', $blog->category->name)

@section('og_type', 'article')
@section('og_title', $blog->title)
@section('og_description', Str::limit(strip_tags($blog->content), 200))
@section('og_image', $blog->getFirstMediaUrl('default', 'preview'))

@section('twitter_title', $blog->title)
@section('twitter_description', Str::limit(strip_tags($blog->content), 200))
@section('twitter_image', $blog->getFirstMediaUrl('default', 'preview'))

@section('canonical', url('/blog/' . $blog->slug))

@section('content')
    <section class="sec-1-single-2 pb-70 overflow-hidden">
        <div class="position-relative block-banner">
            <img class="banner start-50 position-lg-absolute d-lg-block d-none" src="{{ $blog->getFirstMediaUrl('default', 'preview') }}" alt="magzin" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pe-lg-5">
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
                                <li class="breadcrumb-item active text-dark fs-7" aria-current="page">{{$blog->category->name}}</li>
                            </ul>
                        </nav>
                        <div class="card-title">
                            <div class="article card-info d-flex flex-wrap align-items-center gap-2 mt-4">
                                <a href="/blog/{{$blog->category->slug}}" class="badge bg-2 fs-8">{{$blog->category->name}}</a>
                                <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                    <li>
                                        @php
                                            $wordCount = str_word_count(strip_tags($blog->content));
                                            $readingTime = ceil($wordCount / 200);
                                        @endphp
                                        <p class="fs-8 m-0">{{ $readingTime }} min{{ $readingTime > 1 ? 's' : '' }} read</p>
                                    </li>
                                </ul>
                                <h2 class="w-100">{{$blog->title}}</h2>
                            </div>
                            <div class="border-top"></div>
                            <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-4">
                                <a href="#" class="author d-flex align-items-center gap-2">
                                    <img class="avatar avatar-md rounded-circle" src="/assets/imgs/template/author/dr.entropy.jpg" alt="Dr. Entropy" />
                                    <span class="fs-7 text-dark fw-regular">Dr. Entropy</span>
                                </a>
                                <ul class="d-flex align-items-center gap-4 text-600 m-0 ps-3">
                                    <li>
                                        <p class="fs-8 m-0">{{ $blog->created_at->format('M d, Y') }}</p>
                                    </li>
                                </ul>
                                <div class="ms-md-auto ms-5 d-flex align-items-center gap-3 me-5">
                                    <a href="#" class="readers d-flex align-items-center fs-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2025 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2025 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z" fill="#626568" />
                                        </svg>
                                        <span><span class="odometer text-nowrap" data-count="168"></span> views</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-block d-lg-none pb-4">
                        <img class="banner" src="{{ $blog->getFirstMediaUrl('default', 'preview') }}" alt="{{$blog->title}}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10 offset-lg-1 offset-md-1">
                    <!-- prettier-ignore -->
                    <div class="d-flex flex-column rich-editor-content">
                        {!! $blog->content !!}
                        <div class="border-top mt-5 mb-1"></div>
                        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-4">
                            @if($blog->tags->isNotEmpty())
                                <div class="d-flex align-items-center gap-2">
                                    @foreach($blog->tags as $tag)
                                        <a href="/tag/{{ $tag->slug }}" class="tag-item">
                                            <span>{{ $tag->name }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            <div class="d-flex align-items-center gap-2">
                                @include('components.blog.share')
                            </div>
                        </div>
{{--                        @include('components.blog.newsletter')--}}
{{--                        @include('components.blog.comments')--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $blogs = \App\Models\Blog::where('category_id', $blog->category_id)->where('id','!=',$blog->id)->latest()->take(4)->get();
    @endphp

    @if(count($blogs) > 0)
        @include('components.blog.recommended-for-you', ['blogs' => $blogs])
    @endif
@endsection
