<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Goaubled</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    @yield('css')

    <link href="{{'/css/app.css'}}" rel="stylesheet">
</head>
<body id="body">

    <div id="app">

      <alert-chat></alert-chat>

        <card-user></card-user>

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
@yield('js')
<script src="{{ asset("/js/app.js") }}"></script>
<script defer src="{{ asset('./js/script.js') }}"></script>
@stack('scripts')
@include('flashy::message')

</body>
</html>
