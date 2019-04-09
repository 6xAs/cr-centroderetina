
@extends('templateSite.principal')

@section('title', 'Retinopatia-Diabetica')

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
      <h3 class="last-updated">Retinopatia-Diabetica</h3>

        <h3>Definição</h3>
        <p>
        O diabetes é a doença sistêmica que mais causa segueira no mundo, sendo em muitos casos irreversível.

        <p>
        O aumento crônico do açúcar no sangue causa lesões nos microvasos da retina. Isto leva hemorragias,
        edema("inchaço"), e formação de neovasos, o que pode evoluir com grande sangramento, e descolamento de retina.
        </p>

        </p><br>

        <h3>Fatores de Risco:</h3>
        <p>
        Tempo prolongado de diabetes, mal controle das taxas de glicose, pressão arterial e colesterol.
        Outros fatores que contribuem para piora do dano visual são: tabagismo, obesidade, gravidez e doença renal.

        <p>
        O aumento crônico do açúcar no sangue causa lesões nos microvasos da retina. Isto leva hemorragias,
        edema("inchaço"), e formação de neovasos, o que pode evoluir com grande sangramento, e descolamento de retina.
        </p>
        </p><br>

        <h3>Diagnóstico:</h3>
        <p>
            Exame oftalmológico completo, Retinografia, Angiografia, OCT e USG.<br>

        </p>
        <br>

        <h3>Tratamento:</h3>
        <p>
             Anti-VEGF –  Bevacizumab (Avastin), Ranibizumab (Lucentis), Aflibercept (Eylia)<br>
             Esteróides como adjuvantes – Triancinolona, Dexametasona (Ozurdex)<br>
             Laser micropulso <br>
             Laser convencional – Fotocoagulação <br>
             Cirurgia – Vitrectomia Posterior <br>
        </p>
        <br>
          <h3>Prevenção:</h3>
        <p>
            Controle clínico dos fatores de risco (diabetes, hipertensão arterial).
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
            <img src="images/angio-retino.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/retino-retino.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/retinografo.jpg" alt="img04"/>
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
              <h3>Retinopatia Diabética</h3>
            </figcaption>
            <img src="images/angio-retino.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Retinopatia Diabética</h3>
            </figcaption>
            <img src="images/retino-retino.jpg" alt="img01"/>
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
