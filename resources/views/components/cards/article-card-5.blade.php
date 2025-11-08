<div class="article card-5">
    <div class="post-link">
        <div class="hover-effect-1">
            <div class="position-relative card-img-top thumbnail">
                <a href="/blogs/{{$blog->slug}}">
                    <img src="{{ $blog->getFirstMediaUrl('default', 'thumb') }}" alt="{{$blog->title}}" class="cover-image">
                </a>
                <a href="/blog/{{$blog->category->slug}}" class="badge bg-1 fs-8">{{$blog->category->name}}</a>
            </div>
        </div>
        <div class="card-corner @@corner-bg-color no-border">
            <a href="/blogs/{{$blog->slug}}" class="arrow-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="curve-one"></div>
            <div class="curve-two"></div>
        </div>
    </div>
    <div class="card-body mt-4">
        <a href="/blogs/{{$blog->slug}}" class="hover-underline">
            <h6 class="card-title mb-0">{{$blog->title}}</h6>
        </a>
    </div>
</div>
