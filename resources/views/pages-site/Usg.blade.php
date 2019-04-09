
@extends('templateSite.principal')

@section('title', 'Ultrassonografia (USG)')

@section('content')

@if(count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)

          <p><b>{!!$error!!}</b></p>

          @endforeach
      </ul>
  </div>
@endif

<!-- Section Pagina1 -->
<section class="laboratory">
  <div class="banner-usg">
    <header class="logo">
    </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6></h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">Ultrassonografia (USG)</h3>
        <p>
          Também conhecido como Ultrassom (US), é um exame não invasivo, rápido e indolor, capaz de avaliar as estruturas internas do globo ocular através de ondas de ultrassom emitidas pelo transdutor (sonda).
          Não há qualquer tipo de risco para a saúde do paciente. É bastante útil nos casos onde há opacidades dos meios ópticos (catarata, hemorragias, doenças corneanas, uveítes),
          ou seja, quando a visualização do fundo do olho através do mapeamento de retina se encontra prejudicada.

        </p>
  </div>
  <!--- /technologies ---->
</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Fotos do Exame</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li><!-- for Masonry column width -->
        <li>
          <figure>
            <img src="images/banner-usg.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/ultra_usg.jpg" alt="img01"/>
          </figure>
        </li>

        <div class="clearfix"></div>
      </ul>
    </section><!-- // grid-wrap -->
    <section class="slideshow">
      <ul>

        <li>
          <figure>
            <figcaption>
              <h3>Usg</h3>
              <p></p>
            </figcaption>
            <img src="images/banner-usg.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Aparelho USG</h3>
              <p></p>
            </figcaption>
            <img src="images/ultra_usg.jpg" alt="img06"/>
          </figure>
        </li>

      </ul>
      <nav>
        <span class="icon nav-prev"></span>
        <span class="icon nav-next"></span>
        <span class="icon nav-close"></span>
      </nav>
      <div class="info-keys icon">Navigate with arrow keys</div>
    </section><!-- // slideshow -->
  </div>
  </div><!-- // grid-gallery -->
  <script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
  </script>
  </section>

@stop
