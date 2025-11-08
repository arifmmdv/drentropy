@php
    $blogs = \App\Models\Blog::latest()->take(5)->get();
@endphp
<section class="sec-5-home-2 sec-padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex">
                        <div class="d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                            </svg>
                            <h5 class="mb-0 text-anime-style-2">Latest blogs</h5>
                        </div>
                        <p class="fs-7 ms-3 mb-2 d-none d-lg-block text-anime-style-1">Fresh Stories. Fast Updates.</p>
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
        </div>
        <div class="row mt-2 g-4">
            @foreach($blogs as $blog)
                <div class="col-12">
                    @include('components.cards.article-card-12', ['blog' => $blog])
                </div>
            @endforeach
        </div>
    </div>
</section>
