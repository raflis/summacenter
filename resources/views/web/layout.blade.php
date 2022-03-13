<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUMMACENTER</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png" />
    <link href="{{ asset('css/app.css?v=0') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css?v='.time()) }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/all.css') }}" rel="stylesheet">-->
</head>
<body>
    <!--<div class=loader-body id=loader>
    <div class=loader></div>
    </div>-->
    <div class="loading">
        <div id="loader" class="center-all"></div>
    </div>
    @yield('content')
    @include('web.partials.footer')
    <script src="{{ asset('js/app.js?v=0') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js?v='.time()) }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/multi-animated-counter.js') }}"></script>
    <!--<script src="{{ asset('js/all.js') }}"></script>-->
    @yield('script')
</body>
</html>