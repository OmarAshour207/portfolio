<!DOCTYPE html>
<html lang="{{ session('lang') == 'ar' ? 'ar' : 'en' }}">
<head>
    @php
        session('lang') ?? session()->put('lang', app()->getLocale());
    @endphp

    <meta name="keywords" content="{{ setting('meta_keywords') }}" />
    <meta name="author" content="{{ setting('meta_author') }}" />
    <meta name="description" content="{{ setting('meta_description') }}" />
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>{{ setting('title') }}</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('site/part2/images/favicon.ico') }}"/>

    <!--== bootstrap -->
    <link href="{{ asset('site/part2/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="{{ asset('site/part2/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{ asset('site/part2/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <!--== themify-icons -->
    <link href="{{ asset('site/part2/css/themify-icons.css') }}" rel="stylesheet" type="text/css" />

    <!--== audioplayer -->
    <link href="{{ asset('site/part2/css/audioplayer/plyr.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('site/part2/css/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{ asset('site/part2/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('site/part2/css/base.css') }}" rel="stylesheet" type="text/css" />

    @if(session('lang') == 'ar')
        <link href="{{ asset('site/part2/css/shortcodes-rtl.css') }}" rel="stylesheet" type="text/css" />
        <!--== default-theme -->
        <link href="{{ asset('site/part2/css/style-rtl.css') }}" rel="stylesheet" type="text/css" />
        <!--== responsive -->
        <link href="{{ asset('site/part2/css/responsive-rtl.css') }}" rel="stylesheet" type="text/css" />
    @elseif(session('lang') == 'en')
        <!--== shortcodes -->
        <link href="{{ asset('site/part2/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />
        <!--== default-theme -->
        <link href="{{ asset('site/part2/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!--== responsive -->
        <link href="{{ asset('site/part2/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    @endif

    @php
        $colors = [
            'orange'        => 1,
            'red'           => 2,
            'yellow'        => 3,
            'blue'          => 4,
            'red_dark'      => 5,
            'green'         => 6,
            'sky'           => 7,
            'orange_dark'   => 8,
        ];
        $website_color = getColor();
    @endphp

    @foreach($colors as $color)
        @if($website_color == $color)
            <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('site/css/skin/skin-'. $color .'.min.css') }}">
            @break
        @endif
    @endforeach

    @stack('styles')

</head>
<body>
<div class="page-wraper">

    <div id="ht-preloader">
        <div class="loader clear-loader"><img src="{{ asset('site/part2/images/loader.gif') }}" alt=""></div>
    </div>

    @include('site.seventh.layouts.header')

    @yield('content')

    @include('site.seventh.layouts.footer')

<!--back-to-top start-->
<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="fas fa-chevron-up"></i></a></div>
<!--back-to-top end-->

</div>

<!-- JAVASCRIPT FILES ========================================= -->
<!--== theme -->
<script src="{{ asset('site/part2/js/theme.js') }}"></script>

<!--== audioplayer -->
<script src="{{ asset('site/part2/js/audioplayer/plyr.min.js') }}"></script>

<!--== magnific-popup -->
<script src="{{ asset('site/part2/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!--== owl-carousel -->
<script src="{{ asset('site/part2/js/owl-carousel/owl.carousel.min.js') }}"></script>

<!--== parallax -->
<script src="{{ asset('site/part2/js/parallax/parallaxie.min.js') }}"></script>

<!--== counter -->
<script src="{{ asset('site/part2/js/counter/counter.js') }}"></script>

<!--== particle -->
<script src="{{ asset('site/part2/js/particle/jquery.particleground.min.js') }}"></script>

<!--== countdown -->
<script src="{{ asset('site/part2/js/countdown/jquery.countdown.min.js') }}"></script>

<!--== isotope -->
<script src="{{ asset('site/part2/js/isotope/isotope.pkgd.min.js') }}"></script>

<!--== contact-form -->
<script src="{{ asset('site/part2/js/contact-form/contact-form.js') }}"></script>

<!--== theme-script -->
<script src="{{ asset('site/part2/js/theme-script.js') }}"></script>

</body>
</html>
