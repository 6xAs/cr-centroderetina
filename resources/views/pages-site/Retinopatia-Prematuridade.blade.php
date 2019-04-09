
@extends('templateSite.principal')

@section('title', 'Retinopatia da Prematuridade')

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
  <div class="banner-retinoprema">
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
      <h3 class="last-updated">Retinopatia da Prematuridade</h3>

        <h3>Definição</h3>
        <p>
        Esta doença acomete crianças nascidas pré-termo, onde os vasos da retina não se formaram completamente, ficando parte
        da retina avascular. Em casos leves, ocorre resolução espontânea, porém, em casos muito avançados, pode apresentar
        descolamento de retina e inclusive cegueira total irreversível.
        </p><br>


        </p><br>

        <h3>Diagnóstico:</h3>
        <p>
        Todo prematuro, com peso ao nascer menor que 1700g e/ou idade gestacional no parto menor que 34 semanas,
        deve ser examinado através do mapeamento de retina no berçário ou uti neonatal. Em caso de alta hospitalar,
        o exame é realizado no consultório oftalmológico. A data do exame deve ser em torno de 30 dias de vida.<br>
        </p>
        <br>

        <h3>Tratamento:</h3>
        <p>
         Na maioria dos casos a conduta é expectante, porém, se evoluir com excesso de neovasos e a retina avascular
         persistir, a fotocoagulação / retina – laser deve ser realizada com auxílio do oftalmoscópio binocular indireto,
         sob anestesia (sedação).
        </p>
        <br>
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
            <img src="images/prematura1.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/prematura2.jpg" alt="img02"/>
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
              <h3>Retinopatia da Prematuridade</h3>
              <p></p>
            </figcaption>
            <img src="images/prematura1.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Retinopatia da Prematuridade</h3>
              <p></p>
            </figcaption>
            <img src="images/prematura2.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Photo booth skateboard</h3>
              <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img02"/>
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
