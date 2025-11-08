<div class="article card-7">
    <div class="card-body">
        <div class="card-corner">
            <a href="/blogs/{{$blog->slug}}" class="arrow-box">
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
                <a href="#" class="badge bg-1 fs-8">{{$blog->category->name}}</a>
                <ul class="d-flex align-items-center text-600 m-0 ps-3">
                    <li>
                        <p class="fs-8 m-0">6 mins read</p>
                    </li>
                </ul>
{{--                <a href="#" class="book-mark ms-auto">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">--}}
{{--                        <path d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z" stroke="#626568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                    </svg>--}}
{{--                </a>--}}
            </div>
            <a href="/blogs/{{$blog->slug}}" class="hover-underline">
                <h6 class="card-title mb-4">{{$blog->title}}</h6>
            </a>
            <div class="position-relative card-img">
                <div class="hover-effect-30 rounded-16 overflow-hidden">
                    <a href="/blogs/{{$blog->slug}}">
                        <img class=" cover-image w-100 h-100" src="{{ $blog->getFirstMediaUrl('default', 'thumb') }}" alt="{{$blog->title}}">
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
