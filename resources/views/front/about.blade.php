@extends('front.layout.layout')
@section('heading_title', $heading_title)
@section('meta_description', $meta_description)
@section('meta_keyword', $meta_keyword)
@section('meta_title', $meta_title)
@section('content')
<!-- start banner -->
<section class="p-0 top-space-margin position-relative overflow-hidden">
    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                    <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["about open eye"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                </div>
                <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                    <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">We are transform your dreams into reality.</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                <div class="overflow-hidden position-relative">
                    <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                        <img src="{{ asset('assets/img/about/about-banner.png') }}" alt="" class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section  -->
<section>
    <div class="container">
        <div class="row mb-6 sm-mb-50px">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px" data-bottom-top="transform: translate3d(-50px, 0px, 0px);" data-top-bottom="transform: translate3d(50px, 0px, 0px);">About The</div>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center align-items-lg-end" data-bottom-top="transform: translate3d(-30px, 0px, 0px);" data-top-bottom="transform: translate3d(30px, 0px, 0px);">
                            <div class="col-lg-4 col-md-4 text-md-end text-center md-mt-30px md-mb-20px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/open-eye-round.png') }}" class="animation-rotation position-relative z-index-2" alt="">
                                    <div class="absolute-middle-center w-100 z-index-1"><img src="{{ asset('assets/img/open-eye-round-center.png') }}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px">Open Eye</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 last-paragraph-no-margin md-mt-30px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <p class="w-95 md-w-80 mx-auto text-center text-lg-start sm-w-100 text-justify">Welcome to <b>Open Eye</b>, we are here to help transform your digital dreams into reality. Established with a vision to redefine the online landscape, we are a passionate team of developers, designers, and strategists committed to give you a best web solutions that empower businesses to thrive in the digital age.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-0">
    <div class="container">
        <div class="row mb-10 sm-mb-30px">
            <div class="col-lg-6 position-relative">
                <div class="row align-items-center position-relative md-mb-15" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-md-5 sm-mb-30px" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('assets/img/about/why-open-eye-3.png') }}" alt="" />
                    </div>
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        <img src="{{ asset('assets/img/about/why-open-eye-2.png') }}" alt="" class="box-shadow-quadruple-large md-w-80 sm-w-100" />
                    </div>
                    <div class="w-50 sm-w-100 overflow-hidden position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px p-0 sm-ps-15px sm-pe-15px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{ asset('assets/img/about/why-open-eye-1.png') }}" alt="" class="box-shadow-quadruple-large w-100" />
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 md-mt-20 sm-mt-0" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">About Open Eye</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 ls-minus-2px mb-20px">Why Open Eye?</h4>
                <p class="w-90 md-w-100 mb-35px sm-mb-20px text-justify"><b>Open Eye</b> have a highly experienced team which is loayl and aware about new techniques for improvement. We are committed to work for the customers mission and vision. We believe to deliver best product to our customers.</p>
                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500" data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li><i class="fa-solid fa-plus fs-12 me-10px text-justify"></i>Dedicated Resource: We provide dedicated resource, based on requirements, like hourly, project base, etc.</li>
                    <li><i class="fa-solid fa-plus fs-12 me-10px text-justify"></i>Experienced Team: We are providing highly experienced team which will give you 24x7 support.</li>
                    <li><i class="fa-solid fa-plus fs-12 me-10px text-justify"></i>Project Update: We provide project development updates on regular base with current staging server.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-6">
                <div class="outside-box-left-20 md-outside-box-left-0 overflow-hidden position-relative" data-parallax-liquid="true" data-parallax-transition="2" data-parallax-position="top">
                    <div class="liquid-parallax" data-parallax-liquid="true" data-parallax-position="bottom" data-parallax-scale="1.1" data-parallax-scale-fraction="0.0001">
                        <img class="w-100" src="{{ asset('assets/img/about/about-story.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 z-index-9 md-mt-50px" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h1 class="text-dark-gray alt-font mb-50px fw-600 ls-minus-2px md-mb-25px outside-box-left-15 md-outside-box-left-0 word-break-normal md-w-80 sm-w-100">Our Vision</h1>
                <p class="w-90 md-w-100 mb-35px text-justify">Our vision is to make a next-generation agile solution for our customers. A desire to grow while maintaining core values and mission, expanding the reach to new markets, and fostering a diverse and talented workforce. We share the dream of founders and help them to transfer their mind map into reality. </p>
                <div class="progress-bar-style-02 mb-40px">
                    <!-- start progress bar item -->
                    <div class="progress mb-15px border-radius-50px fw-600 fs-11 lh-12 text-white bg-white">
                        <div class="progress-bar bg-gradient-orange-transparent m-0" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" aria-label="business-growth">
                            <span class="progress-bar-percent text-orange fw-600">98%</span>
                        </div>
                        <div class="progress-bar-title text-uppercase">Business growth</div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress border-radius-50px fw-600 fs-11 lh-12 text-white bg-white">
                        <div class="progress-bar bg-gradient-blue-transparent m-0" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" aria-label="new-technology">
                            <span class="progress-bar-percent text-blue fw-600">94%</span>
                        </div>
                        <div class="progress-bar-title text-uppercase">Technicality</div>
                    </div>
                    <!-- end progress bar item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0 pt-4 mb-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 md-mb-20px sm-mb-0" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-600 ls-minus-2px alt-font">Our Mission</h3>
                <hr />
                <p class="text-justify">At <b>Open Eye</b>, our mission is to grow business with IT web solutions that will move growth, engagement, and success. We believe to transform the power of technology and its ability to connect, inspire and empower. Our goal is help our clients to achieve their goals, exceed their expectations and leave long lasting impact on digital world.</p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection