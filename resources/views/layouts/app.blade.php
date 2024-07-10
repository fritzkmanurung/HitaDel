<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/layouts/main.css') }}">
	<title>HitaDel | {{ $title }}</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	@include('partials.sidebar')
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		@include('partials.navbar')
		<!-- NAVBAR -->
		
		<!-- MAIN -->
		<main>
			<h1 class="title"></h1>
			<ul class="breadcrumbs">
				<li><a href="{{ route('home') }}">HitaDel</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">{{ $title }}</a></li>
			</ul>
			<div class="data">
				<div class="content-data" style="height: 100%">
					@yield('content')
				</div>
			</div>
			<button style="position: absolute; right:25px; bottom:10px; height:30px; width:30px; display:flex; justify-content:center; align-items:center; background:#1775F1; cursor: pointer;" onclick="scrollToTop()" id="scrollTopButton" title="Go to top">
				<i style="font-size:25px;color:" class='bx bxs-up-arrow-alt'></i>
			</button>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{ asset('js/layouts/main.js') }}"></script>
	<!-- Scroll to Top Button -->


	<script>
		function scrollToTop() {
			document.body.scrollTop = 0; 
			document.documentElement.scrollTop = 0; 
		}
		

		window.onscroll = function() { scrollFunction() };
		
		function scrollFunction() {
			var scrollTopButton = document.getElementById("scrollTopButton");
			var contentData = document.querySelector(".content-data");
		
			var contentHeight = contentData.scrollHeight;
			var viewportHeight = window.innerHeight;
		
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				scrollTopButton.style.display = (contentHeight > viewportHeight) ? "block" : "none";
			} else {
				scrollTopButton.style.display = "none";
			}
		}
		</script>
		

</body>
</html>

