<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Open Eye - @yield('heading_title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.png') }}">
    <link rel="browser-icon" sizes="16x16" href="{{ asset('assets/img/logo/openeye-favicon-16x16.png') }}">
    <link rel="taskbar-icon" sizes="32x32" href="{{ asset('assets/img/logo/openeye-favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/logo/openeye-favicon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logo/openeye-favicon-72x72.png') }}">
    <link rel="desktop-icon" sizes="96x96" href="{{ asset('assets/img/logo/openeye-favicon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logo/openeye-favicon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo/openeye-favicon-180x180.png') }}">
    <link rel="squarespace-icon" sizes="256x256" href="{{ asset('assets/img/logo/openeye-favicon-256x256.png') }}">
    <link rel="wordpress-icon" sizes="512x512" href="{{ asset('assets/img/logo/openeye-favicon-512x512.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/demo/branding-agency/branding-agency.css') }}" />
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#1d1d1d">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        @include('front.layout.header')
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start content -->
    @yield('content')
    <!-- end content -->
    <!-- start footer -->
    @include('front.layout.footer')
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>