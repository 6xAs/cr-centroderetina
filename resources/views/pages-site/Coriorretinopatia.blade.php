
@extends('templateSite.principal')

@section('title', 'Coriorretinopatia')

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
  <div class="banner-oct">
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
      <h3 class="last-updated">Coriorretinopatia Serosa Central</h3>

        <h3>Definição</h3>
        <p>
        O diabetes é a doença sistêmica que mais causa segueira no mundo, sendo em muitos casos irreversível.
        <p>
        O aumento crônico do açúcar no sangue causa lesões nos microvasos da retina. Isto leva hemorragias,
        edema("inchaço"), e formação de neovasos, o que pode evoluir com grande sangramento, e descolamento de retina.
        </p>
        </p><br>

        <h3>Diagnóstico:</h3>
        <p>
            Exame oftalmológico completo, Retinografia, Angiografia, e OCT (Tomografia de Coerência Óptica). br>

        </p>
        <br>

        <h3>Tratamento:</h3>
        <p>
             Observação nos casos inicias (até 2-3 meses);
             Fotocoagulação com laser convencional (verde) ou Laser micropulso amarelo ou vermelho. <br>
        </p>
        <br>
          <h3>Prevenção:</h3>
        <p>
            Minimizar as possíveis causas de “stress”.
        </p>
        <br>

  </div>
  <!--- /technologies ---->
</section>

</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Imagens</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li><!-- for Masonry column width -->
        <li>
          <figure>
            <img src="images/angio_serosa.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/oct_serosa.jpg" alt="img02"/>
          </figure>


        <div class="clearfix"></div>
      </ul>
    </section><!-- // grid-wrap -->
    <section class="slideshow">
      <ul>

        <li>
          <figure>
            <figcaption>
              <h3>Angio Serosa</h3>
            </figcaption>
            <img src="images/angio_serosa.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>OCT Serosa</h3>
            </figcaption>
            <img src="images/oct_serosa.jpg" alt="img01"/>
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
