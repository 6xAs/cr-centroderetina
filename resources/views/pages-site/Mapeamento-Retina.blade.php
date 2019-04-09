
@extends('templateSite.principal')

@section('title', 'Mapeamento de Retina')

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
  <div class="inner-banner demo-2 text-center">
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
      <h3 class="last-updated">Mapeamento de Retina</h3>

        <p>
          Este exame é realizado em todos os pacientes com suspeita de doenças do fundo do olho.
          Através de uma fonte de luz adaptada à cabeça do médico, associada à uma lente, é possível avaliar o fundo do olho do paciente com a sua periferia, permitindo o diagnostico de várias doenças.
          O exame dura no máximo 10 minutos, e não há nenhum contato direto com o olho do paciente, sendo portanto indolor para o mesmo.
        </p>

  </div>
  <!--- /technologies ---->
</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Fotos do Exame</h3>
    <section class="grid-wrap">
      
    </section><!-- // grid-wrap -->
    <section class="slideshow">
      <ul>

        <li>
          <figure>
            <figcaption>
              <h3>RETINOGRAFIA BURACO MACULAR</h3>
              <p></p>
            </figcaption>
            <img src="images/retino_buraco.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>RETINOGRAFIA MEMBRANA EPIRRETINIANA</h3>
              <p></p>
            </figcaption>
            <img src="images/membrana_epi.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Retinografia Normal</h3>
              <p></p>
            </figcaption>
            <img src="images/retinografia_normal.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>RETINOGRAFIA RETINOPATIA DIABETICA</h3>
              <p> </p>
            </figcaption>
            <img src="images/retinopatia_diabetica.jpg" alt="img03"/>
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
