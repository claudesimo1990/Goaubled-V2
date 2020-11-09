<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>goaubled</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="{{asset('/img/logo.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Libraries CSS Files -->
     <!-- Custom styles for this template -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Main Stylesheet File -->
    <link href="{{'/css/profile/style.css'}}" rel="stylesheet">
    <link href="{{'/css/app.css'}}" rel="stylesheet">
</head>
<body id="body">

    <div id="app">

      <b-overlay :show="getShow" rounded="sm">

        @include("layouts/includes/topbar")
        @include("layouts/includes/nav")

        <main>
            @yield('content')
        </main>

        <!-- #footer -->
        @include('layouts.includes.footer')
        <!-- #footer -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      </b-overlay>
    </div>

<!-- JavaScript Libraries -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>
<script src="{{asset("/js/app.js")}}"></script>
<script defer src="{{asset('/lib/superfish/superfish.min.js')}}"></script>
<script defer src="{{asset('/lib/wow/wow.min.js')}}"></script>
<script defer src="{{asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script defer src="{{asset('/lib/magnific-popup/magnific-popup.min.js')}}"></script>
<script defer src="{{asset('/lib/sticky/sticky.js')}}"></script>
<!-- Template Main Javascript File -->
<script defer src="{{asset("/js/main.js")}}"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<script defer src="{{ asset('./js/script.js') }}"></script>
@stack('scripts')
@include('flashy::message')
    
</body>
</html>
