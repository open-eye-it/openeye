@extends('front.layout.layout')
@section('heading_title')
{{ $heading_title }}
@endsection
@section('content')
<!-- start section  -->
<section class="top-space-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px" data-bottom-top="transform: translate3d(-50px, 0px, 0px);" data-top-bottom="transform: translate3d(50px, 0px, 0px);">What we provide In</div>
            </div>
            <div class="col-12">
                <div class="row align-items-center align-items-lg-end" data-bottom-top="transform: translate3d(-30px, 0px, 0px);" data-top-bottom="transform: translate3d(30px, 0px, 0px);">
                    <div class="col-lg-2 col-md-3 text-md-end text-center md-mt-30px md-mb-20px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/open-eye-round.png') }}" class="animation-rotation position-relative z-index-2" alt="">
                            <div class="absolute-middle-center w-100 z-index-1"><img src="{{ asset('assets/img/open-eye-round-center.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px">Development Service</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="down-section" class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ " perspective": 1200 }'>
            <div class="col-lg-6 md-mb-40px" data-anime='{ "translateY": [0, 0], "zoom": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <figure class="position-relative m-0">
                    <img src="{{ asset('assets/img/what-we-do/what-we-do.png') }}" alt="" class="w-100 border-radius-5px">
                </figure>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-12" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h3 class="fw-600 text-dark-gray mb-20px ls-minus-2px alt-font">Open Eye providing different types of services.</h3>
                <p class="w-95 md-w-100 mb-35px text-justify">Welcome to <b>Open Eye</b>, our services provide Web and Mobile app development, Designing and SEO digital merketing. We specialize in crafting dynamic, interactive, and high-performance applications that engage users and drive results.</p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-600 text-dark-gray mb-20px ls-minus-2px alt-font">Our Services?</h3>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul class="p-0 m-0 list-style-06 text-dark-gray fw-500">
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>Laravel Application Development</strong>
                            </li>
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>VueJS Application Development</strong>
                            </li>
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>ReactJS Application Development</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul class="p-0 m-0 list-style-06 text-dark-gray fw-500">
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>ASP.Net Application Development</strong>
                            </li>
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>SEO Digital Marketing</strong>
                            </li>
                            <li>
                                <i class="fa-solid fa-plus fs-12 me-10px"></i> <strong>Wordpress Application Development</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section  -->
<section class="top-space-margin pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px" data-bottom-top="transform: translate3d(-50px, 0px, 0px);" data-top-bottom="transform: translate3d(50px, 0px, 0px);">Open Eye</div>
            </div>
            <div class="col-12">
                <div class="row align-items-center align-items-lg-end" data-bottom-top="transform: translate3d(-30px, 0px, 0px);" data-top-bottom="transform: translate3d(30px, 0px, 0px);">
                    <div class="col-lg-2 col-md-3 text-md-end text-center md-mt-30px md-mb-20px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/open-eye-round.png') }}" class="animation-rotation position-relative z-index-2" alt="">
                            <div class="absolute-middle-center w-100 z-index-1"><img src="{{ asset('assets/img/open-eye-round-center.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px">Development Services</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="pt-0">
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">01</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">Laravel Application Development</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">Laravel is a free open source PHP framework, used for the development of Web applications and Web API which is following the MVC pattern. The key features of Laravel include a modular packaging system with an out-and-out dependency manager, also having ecosystem/utilities like jetstream, scout, Vapor, Saile, etc.. to speed up development, deployment, maintenance & Monitoring, diverse ways for accessing different relational databases.</p>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Custom Laravel Web & API Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Design Inegration</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel eCommerce/Realestate Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Enterprise Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Website Migration</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Website Optimization</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Website SEO</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Laravel Support & Maintenance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-6" />
        <div class="row mb-6">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">02</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">VueJS Application Development</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">Vuejs is a progressive framework for building user interfaces using any backend technology like .PHP,Laravel. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy to pick up and integrate with other libraries or existing projects.</p>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Custom VueJs Front Web Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Vuejs Front Website Integration</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Vuejs eCommerce front end Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>VueJs Website Migration / Upgradation</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>VueJs Website Optimization</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>VueJs | Support & Maintenance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-6" />
        <div class="row mb-6">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">03</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">ReactJS Application Development</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes. Our core expertise team can convert your existing website into React or redevelop your existing application using the same backend & Database or create a fresh application using React JS and through backend technology Like PHP / Laravel / NodeJs </p>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Custom ReactJS Front Web Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ReactJS Front Website Integration</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ReactJS eCommerce front end Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ReactJS Website Migration / Up gradation</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ReactJS Website Optimization</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ReactJS | Support & Maintenance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-6" />
        <div class="row mb-6">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">04</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">ASP.Net Application Development</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">ASP.Net is a powerful web development framework developed by Microsoft. <b>Open Eye</b> proudly serves diverse industries like Shipping & Transportation, Insurance, Banking & Finance, and Education. Very diverse skill set which includes technical proficiency in Servers and Networking design, implementation, and support as well as troubleshooting. Very much familiar with installing, configuring and administrating operating system and software applications like Windows Server 2000/2003/2008/2012/2016/2019 Windows 7, Windows 8.1 & Windows 10, Linux Ubuntu, Centos.</p>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Sharepoint Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Power Apps Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>ASP.Net Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Office365 Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Mobile Application Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Power BI Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-6" />
        <div class="row mb-6">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">05</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">SEO Deigital Marketing</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">Digital marketing is an approach that uses electronic devices, whether or not they are connected to the internet. Even advertising on radio and TV is a type of digital marketing. Digital marketing has improved in recent years. Digital marketing is a must if you want to be competitive and relevant in your field. If your business doesn’t have a website or other digital presence, you are missing out on many ways to reach your target audience.</p>
            </div>
            <div class="col-12 mt-4">
                <div data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6>Paid Marketing</h6>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Display Ads</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Pay-Per-Click (PPC)</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Social Media Ads</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Native Advertising</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Video Ads</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Remarketing/Retargeting</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Influencer Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6>SEO Services</h6>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Code Efficiency</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Website Speed</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Mobile Responsiveness</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>SSL/HTTPS</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Fixing Broken Links</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Canonical Tags</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Schema Markup</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Robots.txt file</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Hreflang</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Sitemap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6>Link Building</h6>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Reputable link-building company</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Outreach platform</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>HARO</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Citation building service</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Facebook & Slack groups</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Podcast booking service</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Digital PR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-6" />
        <div class="row mb-6">
            <div class="col-lg-2 col-md-2 text-md-end">
                <span class="fs-130 xl-fs-100 md-fs-80 lh-100 md-lh-80 alt-font fw-700 text-sliding-line bg-extra-medium-gray">06</span>
            </div>
            <div class="col-lg-4 col-md-8 md-mt-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">Wordpress Application Development</h3>
            </div>
            <div class="col-lg-6  md-mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p class="mb-2 text-justify">Build and grow your web application with the best way to wordpress. LIghtning Speed, intuitive, flexible editing and everything you need to grow your site and audience. Maximize your WordPress website’s performance with WordPress development services. WordPress is a good choice for website creation and management for several reasons.</p>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Custom Wordpress Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Responsive Design</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Plugin Integration</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>SEO Optimization</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>E-commerce Solutions</li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <li><i class="fa-solid fa-plus fs-12 me-10px"></i>Performance Optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection