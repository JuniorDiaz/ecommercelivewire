<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Ecommerce</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> --}}
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="template-index home2-default">
<div id="pre-loader">
    <img src="assets/images/loader.gif" alt="Loading..."/>
</div>

@include('layouts.partials.frontend.navbar')

<div class="pageWrapper">
    @yield('content')
</div>


@include('layouts.partials.frontend.footer')
@livewireScripts
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<!-- Including Javascript -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
{{-- <script src="{{asset('assets/js/lazysizes.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}
@vite('resources/js/app.js')
</body>

</html>
