<!--Related Post-->
<section class="related-post sec-padding bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-0">Recommended for You</h5>
            </div>
            @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-3">
                    @include('components.cards.article-card-5', ['blog' => $blog])
                </div>
            @endforeach
        </div>
    </div>
</section>
