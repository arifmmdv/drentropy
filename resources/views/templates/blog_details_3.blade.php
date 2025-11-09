@extends('layouts.web')

@section('content')
    <!-- prettier-ignore -->
    <!--Single 3 Section 1-->
    <section class="sec-1-single-3 pb-70 overflow-hidden">
        <div class="position-relative block-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-unstyled d-flex flex-row gap-2 align-items-center m-0 ps-0 py-4">
                                <li class="breadcrumb-item"><a href="index.html" class="text-600 fs-7 hover-dark">Home</a></li>
                                <li class="breadcrumb-item">
                                        <span class="icon-shape icon-xxs">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                                <path d="M6.125 4.5625L9.5625 7.84375L6.125 11.125" stroke="#626568" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                </li>
                                <li class="breadcrumb-item active text-dark fs-7" aria-current="page">Travel & Culture</li>
                            </ul>
                        </nav>
                        <div class="card-title">
                            <div class="article card-info d-flex flex-wrap align-items-center gap-2 mt-4">
                                <a href="#" class="badge bg-1 fs-8">Lifestyle</a>
                                <a href="#" class="badge bg-2 fs-8">Culture</a>
                                <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                    <li>
                                        <p class="fs-8 m-0">6 mins read</p>
                                    </li>
                                </ul>
                                <h3>Embracing the art of slowing down in a fast-paced world</h3>
                            </div>
                            <div class="border-top"></div>
                            <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-4">
                                <a href="#" class="author d-flex align-items-center gap-2">
                                    <img class="avatar avatar-md rounded-circle" src="/assets/imgs/template/author/author-9.png" alt="magzin" />
                                    <span class="fs-7 text-dark fw-regular">Evara Rose</span>
                                </a>
                                <ul class="d-flex align-items-center gap-4 text-600 m-0 ps-3">
                                    <li>
                                        <p class="fs-8 m-0">Jun 13, 2025</p>
                                    </li>
                                </ul>
                                <div class="ms-md-auto ms-5 d-flex align-items-center gap-3 me-5">
                                    <a href="#" class="comment d-flex align-items-center fs-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z" fill="#626568" />
                                        </svg>
                                        <span><span class="odometer text-nowrap" data-count="98"></span> Comments</span>
                                    </a>
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
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5 g-4">
                <div class="col-lg-8">
                    <img class="rounded-8 w-100 mb-4" src="/assets/imgs/page/img-116.png" alt="magzin" />
                    <!-- prettier-ignore -->
                    <div class="d-flex flex-column gap-3">
                        <p class="text-dark">In an era defined by rapid notifications, endless to-do lists, and the constant chase for productivity, slowing down can feel like a rebellious act. We’ve been conditioned to believe that faster is better—that success lies in motion, in multitasking, in the hustle. But what if the real fulfillment comes not from doing more, but from doing less, more intentionally?</p>
                        <h4 class="mb-0">The Illusion of Busyness</h4>
                        <p class="text-dark m-0">Being busy has become a badge of honor. We equate packed schedules with importance and equate stillness with laziness. But chronic busyness often leaves us feeling disconnected—from ourselves, from others, and from the present moment. Our minds race ahead to the next task while our bodies lag behind, overwhelmed and fatigued.</p>
                        <p class="text-dark m-0">Slowing down doesn’t mean giving up ambition. It means reclaiming your time, your attention, and your presence. It’s about living in alignment with what truly matters.</p>
                        <img class="rounded-8 my-4 overflow-hidden" src="/assets/imgs/page/img-115.png" alt="magzin">
                        <h4 class="mb-0">Why Slowing Down Matters</h4>
                        <p class="text-dark m-0">When we pause, we allow space for reflection. Without constant noise and motion, we gain perspective on what truly matters. Slowing down helps us make better decisions—not just faster ones. Fast living often robs us of joy. We rush through meals, conversations, and even achievements without fully experiencing them. Moving at a slower pace lets us savor small pleasures: a hot cup of tea, a sunset, a moment of silence.</p>
                        <p class="text-dark m-0">Constant urgency places immense strain on our nervous system. Slowing down restores balance. It allows our minds to reset and our bodies to heal—preventing the long-term toll of chronic stress.</p>
                        <blockquote class="blockquote">
                            <p class="text-dark m-0 fs-22 fw-medium">There’s more to life than simply increasing its speed. In quiet pauses, we reconnect with who we are, what we love, and why it all matters.</p>
                            <p class="fs-7 mb-0">By <span class="text-dark">Jimmy Dave</span></p>
                        </blockquote>
                        <h4 class="mb-0">Small Ways to Embrace Slowness</h4>
                        <ul class="list-unstyled ps-0 m-0">
                            <li>
                                <p class="text-dark m-0 fw-semi-bold">Start your day slowly:<span class="text-600 fw-regular"> Resist the urge to check your phone the moment you wake up. Take a few deep breaths, stretch, or journal. Focus on one thing at a time. Eat without distraction. Walk without headphones. Listen without interrupting.</span></p>
                            </li>
                            <li>
                                <p class="text-dark m-0 fw-semi-bold">Take mindful breaks:<span class="text-600 fw-regular"> Step away from your screen. Breathe. Step outside. Reconnect with your senses. Say no to what drains you. Prioritize rest without guilt.</span></p>
                            </li>
                            <li>
                                <p class="text-dark m-0 fw-semi-bold">Practice gratitude<span class="text-600 fw-regular"> : Slowing down helps you notice what’s already good in your life—moments often missed in the rush.</span></p>
                            </li>
                        </ul>
                        <h4 class="mb-0">Slowness as a Strength</h4>
                        <p class="text-dark m-0">The art of slowing down is not about doing less—it’s about doing better. When we take our time, we live more fully. We give ourselves the chance to savor, to reflect, to connect, and to be human in a world that constantly pushes us to be machines.</p>
                        <p class="text-dark m-0">In choosing slowness, we choose intention over impulse, meaning over momentum. We learn that life isn’t a race to the finish line—but a journey best experienced one mindful step at a time.</p>
                        <h4 class="mb-0">Conclusion</h4>
                        <p class="text-dark m-0">Slowing down is not about falling behind—it’s about catching up with yourself. In a culture that glorifies constant motion, choosing stillness is a courageous act. It's a return to intention, to presence, and to the quieter rhythms of life that often hold the greatest meaning.</p>
                        <p class="text-dark m-0">Whether it's taking a deep breath between tasks, unplugging for an afternoon, or simply savoring your morning coffee without distraction, each small act of slowness is a step toward a more mindful, fulfilling life.s</p>
                        <div class="border-top mt-5 mb-1"></div>
                        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-2">
                                <a href="#" class="tag-item">
                                    <span>Culture</span>
                                </a>
                                <a href="#" class="tag-item">
                                    <span>Sculpture</span>
                                </a>
                                <a href="#" class="tag-item">
                                    <span>Media</span>
                                </a>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-dark">Share:</span>
                                <div class="d-inline-flex group-social-icons mt-0 rounded-8">
                                    <a href="#" class="icon-shape icon-46">
                                        <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                            <path d="M8.84863 9.20312H6.5415V16.0938H3.46533V9.20312H0.942871V6.37305H3.46533V4.18896C3.46533 1.72803 4.94189 0.34375 7.1875 0.34375C8.26416 0.34375 9.40234 0.559082 9.40234 0.559082V2.98926H8.14111C6.91064 2.98926 6.5415 3.72754 6.5415 4.52734V6.37305H9.2793L8.84863 9.20312Z" fill="black"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="icon-shape icon-46">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="icon-shape icon-46">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="icon-shape icon-46">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                            <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391s.497.426.641.747c.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922s.461.957.461 1.563c0 .496-.105.922-.285 1.278a2.3 2.3 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.3 5.3 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a1 1 0 0 0-.32-.355 1.8 1.8 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305zm6.858-.035q.428.427 1.278.426c.39 0 .746-.106 1.032-.286q.426-.32.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.1 4.1 0 0 1-1.527-.285 2.8 2.8 0 0 1-1.137-.782 2.85 2.85 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4 4 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396m2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176s-.356.25-.496.39a.96.96 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @include('components.blog.newsletter')
                        @include('components.blog.comments')
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-12">
                            <div class="author-card">
                                <div class="card-img mb-4 text-center">
                                    <img class="rounded-circle avatar-154" src="/assets/imgs/template/author/author-16.png" alt="magzin" />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="mb-3">John Doe</h5>
                                    <p class="mb-4">Step into a space where thoughts bloom, stories breathe, and imagination roams free. Here, I write not just to share—but to connect, to wander, and to wonder.</p>
                                    <p class="text-dark mb-0">Follow me</p>
                                    <div class="d-inline-flex group-social-icons mt-2">
                                        <a href="#" class="icon-shape icon-46">
                                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                                <path d="M8.84863 9.20312H6.5415V16.0938H3.46533V9.20312H0.942871V6.37305H3.46533V4.18896C3.46533 1.72803 4.94189 0.34375 7.1875 0.34375C8.26416 0.34375 9.40234 0.559082 9.40234 0.559082V2.98926H8.14111C6.91064 2.98926 6.5415 3.72754 6.5415 4.52734V6.37305H9.2793L8.84863 9.20312Z" fill="black" />
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-shape icon-46">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-shape icon-46">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-shape icon-46">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                                <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391s.497.426.641.747c.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922s.461.957.461 1.563c0 .496-.105.922-.285 1.278a2.3 2.3 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.3 5.3 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a1 1 0 0 0-.32-.355 1.8 1.8 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305zm6.858-.035q.428.427 1.278.426c.39 0 .746-.106 1.032-.286q.426-.32.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.1 4.1 0 0 1-1.527-.285 2.8 2.8 0 0 1-1.137-.782 2.85 2.85 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4 4 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396m2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176s-.356.25-.496.39a.96.96 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-12">
                            <div class="d-flex align-items-center gap-2 mt-5 mt-lg-5 mt-md-0 mb-3">
                                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                                </svg>
                                <h5 class="mb-0">Weekly trending</h5>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                                <!--prettier-ignore-->
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-1.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">Stay Informed with Global Headlines</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-2.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">The Rise of Mindful Living in a Digital World</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-14.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">The Quiet Power of Present Living</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hover-up">
                                    <div class="article card-10 style-2">
                                        <div class="hover-effect-1">
                                            <a href="#" class="card-img">
                                                <img class="w-100" src="/assets/imgs/other/img-other-15.png" alt="magzin">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h6 class="fs-7 mb-2 text-truncate-2">Minimalism in Design: Why Less is Still More</h6>
                                            </a>
                                            <div class="d-flex align-items-center text-600">
                                                <span class="fs-8">16 Jul, 2025</span>
                                                <ul class="ps-4 m-0">
                                                    <li>
                                                        <span class="fs-8">6 mins read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-12">
                            <div class="d-flex align-items-center gap-2 mt-5 mb-3">
                                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z" fill="#0E0E0F" />
                                </svg>
                                <h5 class="mb-0">Popular tags</h5>
                            </div>
                            <ul class="list-unstyled d-flex flex-wrap gap-3 ps-0">
                                <!-- prettier-ignore -->
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Fashion</span>
                                                <span class="text2">Fashion</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="68"></span>
                                            </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Technology</span>
                                                <span class="text2">Technology</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="85"></span>
                                            </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Science</span>
                                                <span class="text2">Science</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="120"></span>
                                            </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Lifestyle</span>
                                                <span class="text2">Lifestyle</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="89"></span>
                                            </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Politics</span>
                                                <span class="text2">Politics</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="52"></span>
                                            </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                            <span class="text">
                                                <span class="text1">Blockchain</span>
                                                <span class="text2">Blockchain</span>
                                            </span>

                                        <span class="number">
                                                <span class="odometer text-nowrap" data-count="115"></span>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-12 col-12">
                            <div class="swiper slider-1 mt-5 rounded-16 overflow-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-84.png" alt="magzin" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-85.png" alt="magzin" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-84.png" alt="magzin" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="rounded-16 overflow-hidden cover-image" src="/assets/imgs/page/img-85.png" alt="magzin" />
                                    </div>
                                </div>
                                <div class="swiper-pagination mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $blogs = \App\Models\Blog::where('category_id', $blog->category_id)->where('id','!=',$blog->id)->latest()->take(5)->get();
    @endphp

    @if(count($blogs) > 0)
        @include('components.blog.recommended-for-you', ['blogs' => $blogs])
    @endif
@endsection
