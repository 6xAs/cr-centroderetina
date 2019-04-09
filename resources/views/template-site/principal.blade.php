
<!DOCTYPE html>
<html>
		<!-- Head -->
		@include('templateSite.head')
		<!-- /Fim Head -->
<body>
	<!-- header -->
		  <!-- Inicio Topo -->
			@include('templateSite.topo')
		  <!-- /Fim Topo do Site -->

		  <!-- Inicio Menu -->
				@include('templateSite.menu')

		  <!-- /Fim Menu -->

	  <!--Conteúdo -->
    @yield('content')

		<!-- footer -->
			@include('templateSite.footer')
		<!-- //footer -->

		<!-- Script Footer -->
		@include('scriptsSite.script_footer')

		<!-- /Fim Script Footer -->
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
