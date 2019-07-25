<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	@include('layout_home.layout.css')
</head>
<body>

	<div id="header">
		 <!-- .header-top -->
		 @include('layout_home.layout.header-top')
		 <!-- .header-body -->
		 @include('layout_home.layout.cart')
		 <!-- .header-bottom -->
		 @include('layout_home.layout.header-bottom')
	</div> <!-- #header -->
	<div class="rev-slider">
	@yield('sildeshow')
				<!--slider-->
	</div>
	 <!-- .container -->
	@yield('content')
	 <!-- .copyright -->

	@include('layout_home.layout.footer')
	<!-- include js files -->
	
	@include('layout_home.layout.js')
</body>
</html>
