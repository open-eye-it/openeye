@extends('front.layout.layout')
@section('heading_title', $heading_title)
@section('meta_description', $meta_description)
@section('meta_keyword', $meta_keyword)
@section('meta_title', $meta_title)
@section('content')
<!-- start banner -->
<section class="p-0 full-screen ipad-top-space-margin position-relative overflow-hidden md-h-auto">
    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row h-100 g-0">
            <div class="media_container_576_767 col-xl-5 col-lg-6 d-flex justify-content-center flex-column ps-10 xxl-ps-5 xl-ps-2 md-ps-0 position-relative order-2 order-lg-1">
                <div class="vertical-title-center align-items-center w-75px justify-content-center position-absolute h-auto d-none d-md-flex">
                    <div class="title fs-16 alt-font text-dark-gray fw-700 text-uppercase ls-05px text-uppercase" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["open eye it solutions"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></div>
                </div>
                <div class="border-start border-color-extra-medium-gray ps-60px ms-100px lg-ps-30px lg-ms-70px position-relative z-index-9 sm-ps-15px sm-pe-15px sm-ms-0 border-0" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 ls-minus-4px sm-ls-minus-2px md-me-0">Provide innovative solutions to grow your business.</h1>
                    <p class="w-75 mb-35px lg-w-90 sm-w-100 text-justify"><b>Open Eye</b> is dedicated to transform your business which will operate through innovative IT solutions.</p>
                    <a href="contact" class="btn btn-extra-large btn-gradient-fuel-yellow-blue fw-400">Let's talk - Send a message</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 position-relative swiper-number-pagination-progress md-h-500px order-1 order-lg-2 md-mb-50px">
                <div class="swiper h-100 banner-slider magic-cursor drag-cursor" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number-line-pagination", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "stopOnLastSlide": true, "disableOnInteraction": false },"keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }' data-swiper-number-pagination-progress="true">
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background background-position-center-top" style="background-image:url('assets/img/home/banner/open-eye-banner-4.png');"></div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background background-position-center-top" style="background-image:url('assets/img/home/banner/open-eye-banner-2.png');"></div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="position-absolute left-0px top-0px w-100 h-100 cover-background background-position-center-top" style="background-image:url('assets/img/home/banner/open-eye-banner-3.png');"></div>
                        </div>
                        <!-- end slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-sm-none"></div>
                    <!-- end slider pagination -->
                </div>
                <!-- start slider pagination -->
                <div class="swiper-pagination-wrapper d-none d-lg-flex align-items-center justify-content-center position-absolute bottom-40px md-bottom-30px sm-bottom-20px left-minus-45 md-left-30px sm-left-20px z-index-9">
                    <div class="number-prev fs-14 fw-600 text-dark-gray"></div>
                    <div class="swiper-pagination-progress bg-extra-medium-gray">
                        <span class="swiper-progress"></span>
                    </div>
                    <div class="number-next fs-14 fw-600 text-dark-gray"></div>
                </div>
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section -->
<section class="pt-0 mt-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 position-relative">
                <div class="row align-items-center position-relative md-mb-15" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-md-5 sm-mb-30px" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img class="w-100" src="{{ asset('assets/img/home/open-eye-about-3.png') }}" alt="" />
                    </div>
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        <img src="{{ asset('assets/img/home/open-eye-about-2.png') }}" alt="" class="box-shadow-quadruple-large md-w-100" />
                    </div>
                    <div class="w-50 sm-w-100 overflow-hidden position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px p-0 sm-ps-15px sm-pe-15px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{ asset('assets/img/home/open-eye-about-1.png') }}" alt="" class="box-shadow-quadruple-large w-100" />
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 md-mt-20 sm-mt-0" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">About open eye</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 ls-minus-2px mb-20px">Our concept is dare to dream and our innovative brains will execute.</h4>
                <p class="w-90 md-w-100 mb-35px sm-mb-20px text-justify">Unlock the full potential of your online presence with our expert web development services. At <b>Open Eye</b> we specialize in smart cutting-edge websites that not only attract audiences but also attract results. From attractive corporate websites to dynamic e-commerce platforms, we are here to change your vision into reality.</p>
                <a href="about" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow border-1 left-icon me-10px sm-mb-15px sm-mt-15px">
                    <span>
                        <span><i class="feather icon-feather-edit"></i></span>
                        <span class="btn-double-text" data-text="Explore details">Explore details</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 border-top border-color-extra-medium-gray mt-6 md-mt-0 sm-border-top-0">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 g-0" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start process step item -->
            <div class="col process-step-style-06 last-paragraph-no-margin hover-box sm-mb-50px">
                <div class="process-step-icon-box position-relative top-minus-14px">
                    <span class="progress-step-separator bg-light-gray w-100 separator-line-1px opacity-1"></span>
                    <div class="step-box d-flex align-items-center justify-content-center bg-white border-radius-100 w-25px h-25px position-relative border border-color-extra-medium-gray box-shadow-large">
                        <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                    </div>
                </div>
                <span class="d-block alt-font text-dark-gray fw-600 mb-10px mt-15px fs-22 lh-28 ls-minus-05px w-60 lg-w-75 md-w-100">Strategic Approach.</span>
                <p class="w-60 lg-w-75 md-w-80 sm-w-100 text-justify"><b>Open Eye</b> give you a strategic approach on web development and we are focusing to understand your business ideas and target audience.</p>
            </div>
            <!-- end process step item -->
            <!-- start process step item -->
            <div class="col process-step-style-06 last-paragraph-no-margin hover-box sm-mb-50px">
                <div class="process-step-icon-box position-relative top-minus-14px">
                    <span class="progress-step-separator bg-light-gray w-100 separator-line-1px opacity-1"></span>
                    <div class="step-box d-flex align-items-center justify-content-center bg-white border-radius-100 w-25px h-25px position-relative border border-color-extra-medium-gray box-shadow-large">
                        <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                    </div>
                </div>
                <span class="d-block alt-font text-dark-gray fw-600 mb-10px mt-15px fs-22 lh-28 ls-minus-05px w-60 lg-w-75 md-w-100">Creative Excellence.</span>
                <p class="w-60 lg-w-75 md-w-80 sm-w-100 text-justify"><b>Open Eye</b> designers and developers teams are masters in their craft with creativity and technical expertise to deliver stunning websites.</p>
            </div>
            <!-- end process step item -->
            <!-- start process step item -->
            <div class="col process-step-style-06 last-paragraph-no-margin hover-box">
                <div class="process-step-icon-box position-relative top-minus-14px">
                    <span class="progress-step-separator bg-light-gray w-100 separator-line-1px opacity-1"></span>
                    <div class="step-box d-flex align-items-center justify-content-center bg-white border-radius-100 w-25px h-25px position-relative border border-color-extra-medium-gray box-shadow-large">
                        <span class="w-7px h-7px bg-dark-gray border-radius-100"></span>
                    </div>
                </div>
                <span class="d-block alt-font text-dark-gray fw-600 mb-10px mt-15px fs-22 lh-28 ls-minus-05px w-60 lg-w-75 md-w-100">Custom Solutions.</span>
                <p class="w-60 lg-w-75 md-w-80 sm-w-100 text-justify"><b>Open Eye</b> understand that every business is unique, so offer custom web development solutions to your specific needs and requirements.</p>
            </div>
            <!-- end process step item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden position-relative pt-0 lg-pb-0">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col swiper swiper-width-auto feather-shadow text-center" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":40, "speed": 20000, "loop": true, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "reverseDirection": false }, "effect": "slide" }'>
                <div class="swiper-wrapper pb-30px marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-130 md-fs-90 sm-fs-70 alt-font text-dark-gray fw-600 ls-minus-6px sm-ls-minus-2px word-break-normal">Provide IT solutions to grow your business <span class="ms-20px">-</span></div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-130 md-fs-90 sm-fs-70 alt-font text-dark-gray fw-600 ls-minus-6px sm-ls-minus-2px word-break-normal">Dare to dreams and out innovative brains will execute <span class="ms-20px">-</span></div>
                    </div>
                    <!-- end client item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="stack-box py-0 z-index-99">
    <div class="stack-box-contain">
        <!-- start stack item -->
        <div class="stack-item stack-item-01 bg-white lg-pt-8 lg-pb-8 md-pb-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url(assets/img/home/open-eye-development-1.png)">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">01</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-15 alt-font text-uppercase text-dark-gray bg-white pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-15px sm-pe-15px position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and design</span>
                            </div>
                            <h1 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Web Development</h1>
                            <p class="w-95 md-w-100 mb-35px text-justify"><b>Open Eye</b> have an expertise to deliver best websites where you need static web app, dynamic web app or an e-commerce platform web app. Our teams will bring your designs to attractive by clean and efficient code.</p>
                            <a href="portfolio" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow fw-400">
                                <span>
                                    <span class="btn-double-text" data-text="Explore project">Explore project</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
        <!-- start stack item -->
        <div class="stack-item stack-item-02 bg-linen md-pt-0 md-pb-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url(assets/img/home/open-eye-development-1.png)">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">02</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-15 alt-font text-uppercase text-dark-gray bg-linen pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-15px sm-pe-15px position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and design</span>
                            </div>
                            <h1 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Mobile App Development</h1>
                            <p class="w-95 md-w-100 mb-35px text-justify"><b>Open Eye</b> specialized in mobile app development and it's creating innovative and user friendly app for your business or individuals by cutting edge technologies and skilled team of developers.</p>
                            <a href="portfolio" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow fw-400">
                                <span>
                                    <span class="btn-double-text" data-text="Explore project">Explore project</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
        <!-- start stack item -->
        <div class="stack-item stack-item-03 bg-white lg-pt-8 md-pb-0 md-pt-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url(assets/img/home/open-eye-development-1.png)">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">03</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-15 alt-font text-uppercase text-dark-gray bg-white pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-15px sm-pe-15px sm-pb-0 position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Branding and design</span>
                            </div>
                            <h1 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Graphic Design</h1>
                            <p class="w-95 md-w-100 mb-35px text-justify">Our designing team helps you enhance your design that will bring professionalism in the business image & optimize marketing.</p>
                            <a href="portfolio" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow fw-400">
                                <span>
                                    <span class="btn-double-text" data-text="Explore project">Explore project</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row mb-6">
            <div class="col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">Laravel Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">Laravel is an open source and based on PHP web framework. Laravel framework provide Web Application Development and Web API. Laravel provide best features and functionality fro the web application ad it's a modular packaging system with dependency manager, also laravel providing utilities like, jetstream, scount, vapor, etc.</p>
            </div>
            <div class="offset-xl-1 col-xl-5 col-md-6">
                <img class="w-100 mt-3" src="{{ asset('assets/img/home/laravel-development.png') }}" alt="" />
            </div>
        </div>
        <div class="row mb-6">
            <div class="order-xl-2 order-lg-2 offset-xl-1 col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">React JS Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">React create interactive UIs to make it painless. React providing result with less programming from scratch and faster development, becasue it's a component base methodology which is allow development team to build and reuse components throughout project.</p>
            </div>
            <div class="order-xl-1 order-md-1 col-xl-5 col-md-6">
                <img class="w-100" src="{{ asset('assets/img/home/reactjs-development.png') }}" alt="" />
            </div>
        </div>
        <div class="row mb-6">
            <div class="col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">Vue JS Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">Vue is a progressive framework for building user interfaces using any backend technology like PHP, Laravel, NodeJs. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.</p>
            </div>
            <div class="offset-xl-1 col-xl-5 col-md-6">
                <img class="w-100" src="{{ asset('assets/img/home/vuejs-development.png') }}" alt="" />
            </div>
        </div>
        <div class="row mb-6">
            <div class="order-xl-2 order-lg-2 offset-xl-1 col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">ASP.Net Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">ASP.NET is a free and open-source application platform which is supported by Microsoft. We design, develop and deliver complete solutions using the state-of-the-art features of ASP.NET.</p>
            </div>
            <div class="order-xl-1 order-md-1 col-xl-5 col-md-6">
                <img class="w-100" src="{{ asset('assets/img/home/asp.net-development.png') }}" alt="" />
            </div>
        </div>
        <div class="row mb-6">
            <div class="col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">SEO Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">Digital marketing provides best approach for peopole who uses electronic devices, whether or not they are connected to the internet. Plus advertising og TV and Radio is type of digital marketing. Digital marketing is more improved in recent years.</p>
            </div>
            <div class="offset-xl-1 col-xl-5 col-md-6">
                <img class="w-80" src="{{ asset('assets/img/home/seo.png') }}" alt="" />
            </div>
        </div>
        <div class="row mb-6">
            <div class="order-xl-2 order-lg-2 offset-xl-1 col-xl-5 col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Development and Design</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 w-90 ls-minus-2px">WordPress Development.</h4>
                <p class="w-90 sm-w-100 sm-ps-0 sm-pe-0 text-justify">WordPress is a free open-source content management system that allows users to create, customize, and manage websites and blogs. We develop, design and deliver complete solutions using the state-of-the-art features of WordPress.</p>
            </div>
            <div class="order-xl-1 order-md-1 col-xl-5 col-md-6">
                <img class="w-100" src="{{ asset('assets/img/home/wordpress-development.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection