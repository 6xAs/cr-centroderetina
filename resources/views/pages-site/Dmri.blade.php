
@extends('templateSite.principal')

@section('title', 'DMRI')

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
        <h6>Degeneração Macular Relacionada com a Idade</h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">A DMRI </h3>

        <p>
          A DMRI (Degeneração Macular Relacionada com a Idade) consiste na causa mais comum de cegueira irreversível
          em países industrializados. Nos EUA  é responsável por aproximadamente 54% das perdas visuais graves.
          Esta doença acomete a retina e mácula, estruturais localizadas no fundo do olho, responsáveis pela captação da luz.
        </p>
        <p>
          Acomete indivíduos geralmente acima de 50 anos, sendo a idade o principal fator de risco. Tabagismo,
          raça caucasiana, hereditariedade, hipertensão arterial, obesidade, dieta rica em gorduras, podem estar relacionado aos portadores de DMRI.
        </p>
        <br>
          <h3>Esta patologia é classificada em dois tipos:</h3><br>
        <p>
           1. Forma seca: é a mais comum, e corresponde a 90% dos casos. Neste tipo encontra-se a presença de
           lesões chamadas drusas, que consistem em depósitos metabólicos na retina, ou numa fase mais adiantada, a atrofia retiniana:
           <br>

          2. Forma úmida ou exsudativa: neste tipo nota-se presença de cresimento de neovasos patológicos, podendo
          levar a hemorragias e deslocamentos da retina.
        </p>
        <br>
        <h3>Os principais exames diagnósticos realizados para estudar a DMRI são:</h3><br>
        <p>
        1.	Exame oftalmológico completo;,<br>
        2.	Retinografia;<br>
        3.	Angioflurecinografia (injeção emdovenosa de contraste de fluoresceína sódica);<br>
        4.	OCT (Tomografia de Coerência Óptica).<br>
        </p>
        <p>
          Sempre que diagnosticamos um caso de DMRI, encorajamos o paciente a adotar hábitos de vida saudáveis, e principalmente abandonar
          o tabagismo e fastar-se da presença dos fumantes. Além disso, sugerimos exame oftalmológico aos parentes de primeiro grau do paciente.
        </p>
        <p>
          Aliás, recomenda-se à população em geral um exame oftalmológico anual, pois nos casos iniciais, o tratamento com vitaminas e
          antioxidantes pode ser iniciado, podendo evitar a progressão da doença. Quando há presença de neovascularização (forma úmida),
          o tratamento é feito através da administração de injeções intraoculares de medicamentos quimioterápiticos, que agem na “destruição” dos
          neovasos doentes. Podem ser necessárias várias aplicações no mesmo olho, com o objeto de estabilizar e/ou melhorar a visão.
          Nos estágios mais avançados, onde há fibrose (cicatriz) e atrofia, pode ser tentado uso de auxílios ópticos para visão subnormal, como lupas por exemplo.
        </p>
        <p>

        </p>
        <br>
        <img class="img-responsive" src="images/drmi.jpg" alt="" />




  </div>
  <!--- /technologies ---->
</section>

</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Imagens</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li>

        <li>
          <figure>
            <img src="images/oct_drmi.jpg" alt="img01"/>
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
              <h3>OCT DRMI</h3>
            </figcaption>
            <img src="images/oct_drmi.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Selfies viral four</h3>
              <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
            </figcaption>
            <img src="images/img_cr.jpg" alt="img01"/>
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
