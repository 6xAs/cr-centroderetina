
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

	  <!--Conteúdo -->
    @yield('content')

		<!-- footer -->
			@include('template-site.footer')
		<!-- //footer -->

		<!-- Script Footer -->
		@include('scriptsSite.script_footer')

		<!-- /Fim Script Footer -->
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
