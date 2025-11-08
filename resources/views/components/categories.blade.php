<section class="sec-2-home-2">
    <div class="container">
        <div class="row g-3">
            @foreach (\App\Models\Category::all() as $category)
            <div class="col-lg-2 col-md-4 col-12">
                <div class="category-card style-2 w-100 hover-up" data-background="assets/imgs/page/img-20.png">
                    <div class="post-content text-center">
                        <a href="/blog/{{$category->slug}}" class="d-block">
                            <h6 class="mb-0 changeless">{{$category->name}}</h6>
                            <p class="fs-8 mt-2 mb-0 text-nowrap fw-medium"><span class="post-count"><span class="odometer text-nowrap" data-count="{{count($category->blogs)}}"></span> posts</span></p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
