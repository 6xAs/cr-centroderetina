
@extends('templateSite.principal')

@section('title', 'Uveítes Toxoplasmose')

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
  <div class="banner-uvites">
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
      <h3 class="last-updated">Uveítes Toxoplasmose</h3>

        <h3>Definição</h3>
        <p>
        Processo inflamatório intraocular, que acomete o trato uveal, correspondente à íris, coróide e corpo ciliar.
        As principais causas são infecciosas e auto-imunes. No brasil, cerca de 80% das uveítes são devido à toxoplasmose.
        O gato é o hospedeiro natural deste parasita, e nos afeta ao ingerirmos água e alimentos contaminados.
        A transmissão também pode se dar de forma transplacentária, onde a mãe contaminada, transmite a doença ao filho durante a gestação.

        </p><br>

        <h3>Diagnóstico</h3><br>
        <p>
         O diagnóstico das uveítes é realizado através de exames de sangue (sorologias e provas reumatológicas), e exame
         oftalmológico completo, com biomicroscopia e mapeamento de retina. Também documentamos com retinografia,
         angiofluoresceinografia, oct e usg.
        </p><br>
        <h3>Tratamento</h3><br>
        <p>
        O tratamento é feito com antibióticos, corticóides, e imunossupressores, dependendo da causa.
        As principais complicações são catarata, glaucoma, descolamento de retina e turvação vítrea, podendo haver indicação de cirurgias.

        </p><br>

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
            <img src="images/toxo-ativa.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/toxo-cica.jpg" alt="img02"/>
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
              <h3>Descolamento de Retina</h3>
              <p></p>
            </figcaption>
            <img src="images/toxo-ativa.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Descolamento de Retina</h3>
              <p></p>
            </figcaption>
            <img src="images/toxo-cica.jpg" alt="img01"/>
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
