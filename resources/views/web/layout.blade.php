<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:site_name" content="SUMMA CENTER LATAM" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="SUMMA CENTER LATAM">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png" />
    <link href="{{ asset('css/app.css?v=0') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css?v='.time()) }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    @yield('css')
    <!--<link href="{{ asset('css/all.css') }}" rel="stylesheet">-->
    <script src="https://kit.fontawesome.com/ebf82e38ce.js" crossorigin="anonymous"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KL8NBWJZ');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    @if ($setting->floating_advertising[0] == 1 && Route::currentRouteName() == "index")
    @include('web.partials.floating_advertising')
    @endif
    @if ($setting->floating_chat == 1)
    @include('web.partials.whatsapp')
    @endif
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL8NBWJZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('content')
    @include('web.partials.footer')
    <script src="{{ asset('js/app.js?v=0') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js?v='.time()) }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/multi-animated-counter.js') }}"></script>
    <!--<script src="{{ asset('js/all.js') }}"></script>-->
    @yield('script')
    {!! htmlspecialchars_decode($setting->script) !!}
</body>
</html>