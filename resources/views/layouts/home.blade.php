<!DOCTYPE html>

<html lang="en">
	<head>
		<title>ATKO.UZ</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/animate.css">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/owl.carousel.min.css">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/magnific-popup.css">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/flaticon.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ env('HTTP_URL')}}/css/style.css">
	</head>
<body id="body">

  	<div class="container-fluid px-md-5  pt-4 pt-md-5">
		<div class="row justify-content-between">
			<div class="col-md-8 order-md-last">
				<div class="row">
					<div class="col-md-6 text-center">
						<a class="navbar-brand" href="{{ route('index') }}"><span>ATKO</span> KOREYS  <small>Til markazi</small></a>
					</div>
					<div class="col-md-6 d-md-flex justify-content-center d-lg-block d-none">
						<div style=" text-align:right">
							<p class="mb-0 pt-2 text-danger">
								<span class="fa fa-phone text-primary"><i class="sr-only">Telegram</i></span>
								@include('layouts.phone')
								<span class="fa fa-envelope text-primary"><i class="sr-only">Telegram</i></span>
								@include('layouts.email')
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ">
				<div class="social-media">
					<p class="mb-0 d-flex">
						<a href="@include('layouts.telegram')" class="d-flex align-items-center justify-content-center"><span class="fa fa-telegram text-primary"><i class="sr-only">Telegram</i></span></a>
						<a href="@include('layouts.facebook')" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook text-primary"><i class="sr-only">Facebook</i></span></a>
						<a href="@include('layouts.instagram')" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram text-primary"><i class="sr-only">Instagram</i></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item"><a href="{{ route('index') }}" class="nav-link"><i class="bi bi-house"></i> Bosh sahifa</a></li>
					<li class="nav-item"><a href="{{ route('cours') }}" class="nav-link"><i class="bi bi-bookmarks"></i> Online kurslar</a></li>
					<li class="nav-item"><a href="{{ route('book') }}" class="nav-link"><i class="bi bi-book"></i> Kitoblar</a></li>
					<li class="nav-item"><a href="{{ route('techer') }}" class="nav-link"><i class="bi bi-people"></i> O'qituvchilar</a></li>
					<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><i class="bi bi-chat-dots"></i> Bog'lanish</a></li>
					@guest
						<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Kirish</a></li>
					@else
						@if(Auth::user()->type=='Admin')
						<li class="nav-item"><a href="{{ route('admin') }}" class="nav-link">Admin</a></li>
						@endif
						<li class="nav-item"><a href="{{ route('profel') }}" class="nav-link"><i class="bi bi-cart3"></i> Mening kurslarim</a></li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
    


	@yield('content')



    <footer class="ftco-footer p-0 m-0">
		<div class="container-fluid px-0 py-5 bg-black text-center">
			ATKO koreys tili markazi &copy;<script>document.write(new Date().getFullYear());</script>
		</div>
    </footer>
    
  

  <!-- loader 
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
-->

	<script src="{{ env('HTTP_URL')}}/js/jquery.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/popper.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/bootstrap.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery.easing.1.3.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery.waypoints.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery.stellar.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/owl.carousel.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/jquery.animateNumber.min.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ env('HTTP_URL')}}/js/google-map.js"></script>
	<script src="{{ env('HTTP_URL')}}/js/main.js"></script>
  	<script>
        $(function(){
            $('#myvideo').bind('contextmenu',function(){return false;});
        });
        $(function(){
            $('#body').bind('contextmenu',function(){return false;});
        });
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function (e) {
            if(e.keyCode == 123) {return false;}
            if(e.ctrlKey && e.shiftKey && e.keyCode == 73){return false;}
            if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {return false;}
            if(e.ctrlKey && e.keyCode == 85) {return false;}
        }
    </script> 
  </body>
</html>