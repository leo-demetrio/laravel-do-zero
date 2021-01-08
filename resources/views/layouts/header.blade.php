<!DOCTYPE html>
<html>
<head>
	<title>Portifolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="/resources/sass/style.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/style.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="scroll-up-btn">
		<i class="fas fa-angle-up"></i>	
	</div>
	<nav class="navbar">
		<div class="max-width">
			<div class="logo"><a href="#">Port<span>folio.</span></a></div>
			<ul class="menu">
					<li><a href="{{route('site.home')}}">Home</a></li>
					<li><a href="{{route('site.products')}}">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="{{route('site.contact')}}">Contact</a></li>
			</ul>
			<div class="menu-btn">
				<i class="fas fa-bars"></i>
			</div>			
		</div>
	</nav>
	<!-- home section start -->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Meu portifólio</div>
				<div class="text-2">Leo C. Dem</div>
				<div class="text-3">Canal<span>YouTuber</span></div>
				<a href="#">ligue</a>
			</div>
		</div>
	</section>


	@yield('content')

<!-- footer section start -->
	<footer>
		<span>Created By<a href="#"> Leopoldo</a> | <span class="far fa-copyright"></span>2020 all rights reserved</span>
	</footer>

	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
