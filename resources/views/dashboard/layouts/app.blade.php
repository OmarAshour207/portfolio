<!DOCTYPE html>
<html lang="{{ session('lang') }}" dir="{{ session('lang') == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ setting('website_title') }} - {{ __('admin.dashboard') }} </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <!-- Prevent the demo from appearing in search engines -->--}}
{{--    <meta name="robots" content="noindex">--}}

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('dashboard/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    @if(session('lang') == 'ar')
        <link type="text/css" href="{{ asset('dashboard/css/app.rtl.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-flatpickr.rtl.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-flatpickr-airbnb.rtl.css') }}" rel="stylesheet">
        <!-- Dropzone -->
        <link type="text/css" href="{{ asset('dashboard/css/vendor-dropzone.rtl.css')}}" rel="stylesheet">

    @elseif(session('lang') == 'en')
        <link type="text/css" href="{{ asset('dashboard/css/app.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-material-icons.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-flatpickr.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('dashboard/css/vendor-dropzone.css') }}" rel="stylesheet">
    @endif


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-133433427-1');
    </script>

    <link href="{{ asset('dashboard/css/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('dashboard/js/noty.js') }}" type="text/javascript"></script>

    @stack('admin_styles')
</head>

<body class="layout-default">

<div class="preloader"></div>

<div class="mdk-header-layout js-mdk-header-layout">
    {{-- header --}}
    @include('dashboard.layouts.header')
    {{--End header--}}

    <div class="mdk-header-layout__content">
        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            @include('dashboard.partials.session')

            @yield('content')

            @include('dashboard.layouts.menu')
        </div>
    </div>
</div>

{{--<!-- App Settings FAB -->--}}
{{--<div id="app-settings">--}}
{{--    <app-settings layout-active="default" :layout-location="{--}}
{{--      'default': 'companies.html',--}}
{{--      'fixed': 'fixed-companies.html',--}}
{{--      'fluid': 'fluid-companies.html',--}}
{{--      'mini': 'mini-companies.html'--}}
{{--    }"></app-settings>--}}
{{--</div>--}}

<!-- jQuery -->
<script src="{{ asset('dashboard/vendor/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('dashboard/vendor/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/bootstrap.min.js') }}"></script>

<!-- Perfect Scrollbar -->
<script src="{{ asset('dashboard/vendor/perfect-scrollbar.min.js') }}"></script>

<!-- DOM Factory -->
<script src="{{ asset('dashboard/vendor/dom-factory.js') }}"></script>

<!-- MDK -->
<script src="{{ asset('dashboard/vendor/material-design-kit.js') }}"></script>

<!-- App -->
<script src="{{ asset('dashboard/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('dashboard/js/check-selected-row.js') }}"></script>
<script src="{{ asset('dashboard/js/dropdown.js') }}"></script>
<script src="{{ asset('dashboard/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>

{{--<!-- App Settings (safe to remove) -->--}}
{{--<script src="{{ asset('dashboard/js/app-settings.js') }}"></script>--}}

<script type="text/javascript" src="{{ asset('dashboard/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('dashboard/js/custom/image_preview.js') }}"></script>

<!-- Flatpickr -->
<script src="{{ asset('dashboard/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('dashboard/js/flatpickr.js') }}"></script>

<script src="{{ asset('dashboard/vendor/dropzone.min.js') }}"></script>
<script src="{{ asset('dashboard/js/dropzone.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.delete', function (e) {
            var that = $(this);
            e.preventDefault();
            var n = new Noty({
                text: "Confirm deleting record",
                killer: true,
                buttons: [
                    Noty.button('Yes', 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),
                    Noty.button('No', 'btn btn-danger', function () {
                        n.close();
                    })
                ]
            });
            n.show();
        });
    });

    CKEDITOR.config.language =  "{{ app()->getLocale() }}";
</script>
@stack('admin_scripts')

</body>

</html>
