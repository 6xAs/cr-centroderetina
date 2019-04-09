
@extends('templateSite.principal')

@section('title', 'Membrana Epirretiniana')

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
  <div class="banner-membranaepirretiniana">
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
      <h3 class="last-updated">Membrana Epirretiniana</h3>

        <h3>Definição</h3>
        <p>
          É uma doença comum que afeta homens e mulheres, sendo mais comum após 40 anos de idade.
          É caracterizada pela formação de um tecido muito fino que enrruga a mácula. Os principais
          sintomas são a baixa acuidade visual e a visão deformada (metamorfopsia). A principal causa dessa
          doença é o descolamento do vítreo que libera células que proliferam sobre a retina.
        </p><br>

        <h3>Diagnóstico:</h3>
        <p>
            Exame oftalmológico completo, Retinografia, Angiografia, e OCT <strong>(Tomografia de Coerência Óptica)</strong>.
        </p>
        <br>
          <h3>Tratamento:</h3>
        <p>
          Cirurgia – Vitrectomia Posterior e remoção da membrana. Os pacientes evoluir para catarata após a cirurgia,
          por isso, em nosso Serviço, optamos por realizar ambas cirurgias no mesmo ato.
        </p>

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
            <img src="images/membrana_epi.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/membrana_epirre.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/membrana_epirretiniana.jpg" alt="img03"/>
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
              <h3>Membrana Epirretiana</h3>
            </figcaption>
            <img src="images/membrana_epi.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Membrana Epirretiana</h3>
            </figcaption>
            <img src="images/membrana_epirre.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
            <h3>Membrana Epirretiana</h3>
            </figcaption>
            <img src="images/membrana_epirretiniana.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Ex fashion axe</h3>
              <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Thundercats next level</h3>
              <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img04"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Bushwick selvage synth</h3>
              <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img05"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Bottle wayfarers locavore</h3>
              <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img01"/>
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
