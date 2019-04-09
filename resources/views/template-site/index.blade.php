
<!DOCTYPE html>
<html>
		<!-- Head -->
		@include('template-site.head')
		<!-- /Fim Head -->
<body>
	<!-- header -->
		  <!-- Inicio Topo -->
			@include('template-site.topo')
		  <!-- /Fim Topo do Site -->

		  <!-- Inicio Menu -->
				@include('template-site.menu')

		  <!-- /Fim Menu -->

	<!-- //header -->

		<!-- Slide Principal -->
		@include('template-site.slide_principal')
		<!-- /Fim Slide Principal-->


   <!-- Scripts do slide Principal -->
	 @include('scriptsSite.script_slider')

	 <!-- /Fim Scrip do Slide Principal -->


    <!-- section Dr -->
			@include('template-site.section_dr')
    <!-- /Fim section Dr -->


    <!-- Up Clinica -->
		@include('template-site.up_clinica')
    <!-- /Fim Up Clinica -->



    <!-- Noticias -->
		@include('template-site.tratamentos')

    <!-- /Fim Noticias -->


    <!-- Slider2 -->
		@include('template-site.slider2')

    <!-- /Fim Slider2 -->





		<!-- Contato Express -->

		<!-- /Contato Express -->



		<!-- footer -->
			@include('template-site.footer')
		<!-- //footer -->

		<!-- Script Footer -->
		@include('scriptsSite.script_footer')

		<!-- /Fim Script Footer -->
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
