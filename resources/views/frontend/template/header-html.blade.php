<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title', 'Rapadura Mônada | Compre Rapadura')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="{{ asset('resources/assets/frontend/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!--- start-mmmenu-script-->
<script src="{{ asset('resources/assets/frontend/web/js/jquery.min.js') }}" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('resources/assets/frontend/web/css/jquery.mmenu.all.css') }}" />
<script type="text/javascript" src="{{ asset('resources/assets/frontend/web/js/jquery.mmenu.js') }}"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="{{ asset('resources/assets/frontend/web/css/slider.css') }}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{ asset('resources/assets/frontend/web/js/jquery.eislideshow.js') }}"></script>
        <script type="text/javascript" src="{{ asset('resources/assets/frontend/web/js/easing.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="{{ asset('resources/assets/frontend/web/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/frontend/web/js/move-top.js') }}"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>

<body>
