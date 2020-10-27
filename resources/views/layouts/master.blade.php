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

@include("layouts/includes/topbar")
@include("layouts/includes/nav")

<main id="app">
    @yield('content')
</main>

<!-- #footer -->
@include('layouts.includes.footer')
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script  src="{{asset("/js/app.js")}}"></script>
<script src="{{asset('/lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('/lib/magnific-popup/magnific-popup.min.js')}}"></script>
<script src="{{asset('/lib/sticky/sticky.js')}}"></script>
<!-- Template Main Javascript File -->
<script src="{{asset("/js/main.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<script type="text/javascript">
    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        
    const ratio = .1;
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: ratio
    };
    const handleIntersect = function (entries,observer) {
        entries.forEach(function (entry) {
            if (entry.intersectionRatio > ratio){
                entry.target.classList.add('reveal-visible');
                observer.unobserve(entry.target)
            }
        })
    };
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('[class*="reveal-"]').forEach(function (r) {
        observer.observe(r);
    });
});
$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@stack('scripts')
@include('flashy::message')
</body>
</html>
