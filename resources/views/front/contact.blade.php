@extends('front.layout.layout')
@section('heading_title')
{{ $heading_title }}
@endsection
@section('content')
<!-- start banner -->
<section class="p-0 top-space-margin position-relative overflow-hidden">
    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                    <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["contact us"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                </div>
                <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                    <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">Curious! Let's Talk, We would love to hear from you</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                <div class="overflow-hidden position-relative">
                    <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                        <img src="{{ asset('assets/img/contact/contact-banner.png') }}" alt="" class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-md-6 sm-mb-30px">
                <span class="fs-30 alt-font ls-minus-05px fw-700 text-dark-gray">India</span>
                <p class="w-70 mb-10px lg-w-90">403, Hari Krishna Arcade, 150 Feet Ring Rd, nr. Aashtha Residency Gate, Rajkot, Gujarat 360004</p>
            </div>
            <div class="col-md-6 sm-mb-30px">
                <div class="d-block">
                    <span class="text-dark-gray fw-600">E:</span>
                    <a href="mailto:sales@openeyeit.com">sales@openeyeit.com</a>
                </div>
                <div class="d-block mb-5px">
                    <span class="text-dark-gray fw-600">T:</span>
                    <a href="tel:12345678910">+91 8460637745</a>
                </div>
                <a href="https://www.google.com/maps/place/Hari+krishna+arcade/@22.2706986,70.7807167,18.67z/data=!4m6!3m5!1s0x3959cbebd97f00f1:0x1f2d8708b5f1afd6!8m2!3d22.2702732!4d70.7804556!16s%2Fg%2F11hzkxlqds?entry=ttu" target="_blank" class="fs-14 text-dark-gray text-uppercase fw-600">
                    <span class=""><i class="feather icon-feather-map-pin fs-14 me-5px"></i>View on google map</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xl-6 col-lg-7 cover-background md-h-500px sm-h-400px md-mb-50px" style="background-image:url('{{ asset('assets/img/contact/contact-with-open-eye.png') }}')">
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-5 position-relative">
                <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="mb-10px">
                        <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                        <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Get in touch with us</span>
                    </div>
                    <h2 class="text-dark-gray alt-font fw-600 w-90 xxl-w-100 ls-minus-2px">Connect with Open Eye</h2>
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person icon-extra-medium text-dark-gray"></i></span>
                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray form-control required" type="text" name="uname" placeholder="Your name*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope icon-extra-medium text-dark-gray"></i></span>
                            <input class="ps-0 border-radius-0px border-bottom border-color-extra-medium-gray form-control required" type="email" name="email" placeholder="Your email*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                            <input class="ps-0 border-radius-0px border-bottom border-color-extra-medium-gray form-control required" type="text" name="subject" placeholder="How We Can Help You*" />
                        </div>
                        <div class="position-relative form-group form-textarea mt-15px mb-0 pb-10">
                            <textarea class="ps-0 border-radius-0px border-bottom border-color-extra-medium-gray form-control" name="message" placeholder="Your message" rows="3"></textarea>
                            <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-medium btn-dark-gray btn-round-edge btn-box-shadow mb-20px mt-25px submit w-100 left-icon" type="submit"><i class="fa-regular fa-envelope"></i>Send message</button>
                            <p class="fs-14 lh-24 w-100 mb-0 text-center text-lg-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<!-- <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06">
                <div class="fs-22 mb-30px text-dark-gray">Connect with <span class="fw-600">social media</span></div>
                <ul class="extra-large-icon fw-600" data-anime='{ "el": "childs", "translateX": [10, 0], "opacity": [0,1], "duration": 300, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <li><a class="facebook" href="https://www.facebook.com" target="_blank"><span class="brand-label text-dark-gray">Fb</span><span class="brand-icon fa-brands fa-facebook-f"></span></a></li>
                    <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><span class="brand-label text-dark-gray">Db</span><span class="brand-icon fa-brands fa-dribbble"></span></a></li>
                    <li><a class="twitter" href="http://www.twitter.com" target="_blank"><span class="brand-label text-dark-gray">Tw</span><span class="brand-icon fa-brands fa-twitter"></span></a></li>
                    <li><a class="behance" href="http://www.behance.com" target="_blank"><span class="brand-label text-dark-gray">Be</span><span class="brand-icon fa-brands fa-behance"></span></a></li>
                    <li><a class="pinterest" href="https://in.pinterest.com" target="_blank"><span class="brand-label text-dark-gray">Pt</span><span class="brand-icon fa-brands fa-pinterest-p"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->
@endsection