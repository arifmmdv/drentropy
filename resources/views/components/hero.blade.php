@php
    $blogs = \App\Models\Blog::latest()->where('is_visible', true)->take(5)->get();
@endphp
<section class="sec-1-home-2 sec-padding @@classList" data-background="assets/imgs/page/bg-home1-sec1.png">
    <div class="container">
        <div class="row mt-2 g-4">
            @isset($blogs[0])
            <div class="col-lg-6">
                @include('components.cards.article-card-11', ['blog' => $blogs[0]])
            </div>
            @endisset
            @isset($blogs[1])
                <div class="col-lg-3">
                    <div class="row g-4">
                        <div class="col-lg-12 col-md-6">
                            @include('components.cards.article-card-5', ['blog' => $blogs[1]])
                        </div>
                        @isset($blogs[3])
                            <div class="col-lg-12 col-md-6">
                                @include('components.cards.article-card-5', ['blog' => $blogs[3]])
                            </div>
                        @endisset
                    </div>
                </div>
            @endisset
            @isset($blogs[2])
                <div class="col-lg-3">
                    <div class="row g-4">
                        <div class="col-lg-12 col-md-6">
                            @include('components.cards.article-card-5', ['blog' => $blogs[2]])
                        </div>
                        @isset($blogs[4])
                            <div class="col-lg-12 col-md-6">
                                @include('components.cards.article-card-5', ['blog' => $blogs[4]])
                            </div>
                        @endisset
                    </div>
                </div>
            @endisset
        </div>
    </div>
</section>
