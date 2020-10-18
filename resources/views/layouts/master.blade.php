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
    })

</script>
<script >$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
//# sourceURL=pen.js
</script>
@stack('scripts')
@include('flashy::message')
</body>
</html>
