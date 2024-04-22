@extends('front.layout.layout')
@section('heading_title')
{{ $heading_title }}
@endsection
@section('content')
<!-- start banner -->
<section class="pb-0 top-space-margin position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="text-dark-gray fw-600 alt-font ls-minus-3px sm-ls-minus-4px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Open Eye Application Development and Design Portfolio"], "duration": 400, "delay": 0, "speed": 20, "easing": "easeOutQuad" }'></h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section -->
<section class="pt-3 pb-0 lg-pb-50px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-6 text-md-end text-center sm-mb-30px">
                <div class="position-relative" data-anime='{"translateX": [50, 0], "scale": [0.7, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <img src="{{ asset('assets/img/open-eye-round.png') }}" class="animation-rotation position-relative z-index-2" alt="">
                    <div class="absolute-middle-center w-100 z-index-1"><img src="{{ asset('assets/img/open-eye-round-center.png') }}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 last-paragraph-no-margin text-md-start text-center">
                <p class="text-dark-gray w-85 lg-w-100 sm-w-90 sm-mx-auto">Creating products with a strong knowledge and skills. We provide brilliant ideas and put it in your projects. We are excited for our work.</p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-5 filter-content">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, 50px, 0px);" data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://servbetter.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/servbetter.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-0">
                                <a href="https://servbetter.com/" target="_blank" class="text-dark-gray ls-minus-05px ls-minus-05px fw-600 fs-22 alt-font">Servbetter</a>
                                <div class="d-inline-block">[ Laravel ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
            <div class="col-xl-7 col-md-7 filter-content offset-xl-1">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, 100px, 0px)" data-top-bottom="transform: translate3d(0px, 180px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://www.rentpe.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/rentpe.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-0">
                                <a href="https://www.rentpe.com/" target="_blank" class="text-dark-gray ls-minus-05px fw-600 fs-22 alt-font">Rentpe</a>
                                <div class="d-inline-block">[ Laravel ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
            <div class="col-12 filter-content mt-20 lg-mt-0 mb-3 lg-mb-0">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, -80px, 0px);" data-top-bottom="transform: translate3d(0px, 80px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://eatstreet.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/eatstreet.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-0">
                                <a href="https://eatstreet.com/" target="_blank" class="text-dark-gray ls-minus-05px fw-600 fs-22 alt-font">EatStreet</a>
                                <div class="d-inline-block">[ Laravel ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
            <div class="col-xl-7 col-md-7 filter-content mt-5 lg-mt-0">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, 50px, 0px);" data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://www.zatpatmachines.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/zatpat.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-0">
                                <a href="https://www.zatpatmachines.com/" target="_blank" class="text-dark-gray ls-minus-05px fw-600 fs-22 alt-font">ZatPat</a>
                                <div class="d-inline-block">[ Asp.Net ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
            <div class="col-xl-4 col-md-5 filter-content offset-xl-1 mt-3 lg-mt-0">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, -50px, 0px);" data-top-bottom="transform: translate3d(0px, 50px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://rapidosell.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/rapidosell.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-0">
                                <a href="https://rapidosell.com/" target="_blank" class="text-dark-gray ls-minus-05px fw-600 fs-22 alt-font">Rapidosell</a>
                                <div class="d-inline-block">[ Asp.Net ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
            <div class="col-12 mt-5 lg-mt-0 filter-content">
                <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item grid-item-single transition-inner-all">
                        <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, -80px, 0px);" data-top-bottom="transform: translate3d(0px, 80px, 0px);">
                            <div class="portfolio-image bg-extra-medium-gray">
                                <a href="https://peafowlit.com/" target="_blank">
                                    <img src="{{ asset('assets/img/portfolio/peafowlit.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px lg-pb-0">
                                <a href="https://peafowlit.com/" target="_blank" class="text-dark-gray ls-minus-05px fw-600 fs-22 alt-font">Peafowlit</a>
                                <div class="d-inline-block">[ Wordpress ]</div>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection