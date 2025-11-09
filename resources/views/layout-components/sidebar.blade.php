<div class="sidebar-left">
    <div class="header-sidebar d-flex align-items-center justify-content-between py-3">
        <a href="/" class="sidebar-brand fw-bold fs-3 dark-mode-invert">
            <img src="/assets/imgs/template/logo/logo-dark.svg" alt="Logo" />
        </a>
        <a href="#" class="close-sidebar">
            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M17.25 6.75L6.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.75 6.75L17.25 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
    <ul class="sidebar-nav list-unstyled ps-0">
        @foreach (\App\Models\Category::where('is_visible', true)->get() as $category)
            <li class="nav-item py-1">
                <a class="mb-1 fw-medium link-effect-1 " href="/blog/{{$category->slug}}"><span>{{$category->name}}</span></a>
            </li>
        @endforeach
    </ul>
    <div class="sidebar-footer">
        <div class="">
            <div class="d-flex align-items-center">
                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="fs-7 fw-semibold">Newsletter</span>
            </div>
            <h5 class="my-2">Subscribe our newsletter</h5>
            <p>You’ll only receive updates on new templates, no spam, just what you signed up for.</p>
        </div>
        <form action="#" class="w-auto">
            <input type="email" class="form-control fs-7 mb-2 w-100" placeholder="Your email address" />
            <button type="submit" class="btn btn-dark w-100  button-effect-1">Subscribe</button>
        </form>
    </div>
    <div class="text-center">
        <p class="fs-7">
            <?php echo date('Y') ?> Copyright @ <span class="text-dark">Dr. Entropy</span> <br class="d-none d-lg-block" />
            <span> All Rights Reserved </span>
        </p>
    </div>
</div>
<div class="sidebar-overlay"></div>
