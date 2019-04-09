<head>
<title>CR Centro de Retina | @yield('title')</title>
<link href="{{ asset('css/pignose.layerslider.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="google-site-verification" content="045elkjHC0RZgyvzAp6Gr6qMHHFadxq0YYux_qsAzsI" />
<!-- gallery css -->
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet" type="text/css" media="all" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
		<script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
		<!-- js for news -->
		<script src="{{ asset('public/js/jquery.easing.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/pignose.layerslider.js') }}"></script>
		<script type="text/javascript">
			//<![CDATA[
				$(window).load(function() {
					$('#visual').pignoseLayerSlider({
						play    : '.btn-play',
						pause   : '.btn-pause',
						next    : '.btn-next',
						prev    : '.btn-prev'
					});
				});
			//]]>
			</script>
		<!-- /js for news -->

		<!-- for smooth scrolling -->
		<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
		</script>
		<!-- //for smooth scrolling -->

    <!-- Scripts Galeria de Imagens - Quem Somos -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('/js/cbpGridGallery.js') }}"></script>

    <script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('js/main1.js') }}"></script> <!-- Resource jQuery -->

    <!-- // Fim Scripts -->
</head>
