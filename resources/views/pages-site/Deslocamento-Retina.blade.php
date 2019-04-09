
@extends('templateSite.principal')

@section('title', 'Descolamento de Retina')

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
  <div class="banner-descolamento">
    <header class="logo">
    </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6>Descolamento de Retina (DR): uma importante causa de cegueira</h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">Descolamento de Retina</h3>

        <h3>Definição</h3>
        <p>
          Consiste na separação entre a retina sensorial (que contem as células responsáveis por captar a luz)
          e o epitélio pigmentado da retina. Como a captação luminosa ocorre de maneira parcial,
          a visão pode ficar severamente comprometida.
        </p><br>

        <h3>Classificação</h3>
        <p>
          1-	Regmatogênico: quando há rotura na retina, provocada pela tração do vítreo (“gelatina” que preenche o olho);<br>
          2-	Tracional: Geralmente ocorre nas vasculopatias, como diabetes e prematuridade;<br>
          3-	Exsudativo: Secundários a doenças auto-imunes, eclâmpsia, hipertensão arterial maligna, tumores de coróide.<br>
          Neste artigo daremos ênfase ao DR regmatogênico, também chamado idiopático (sem causa aparente), sendo o
          mais comum a acometer os indivíduos de uma maneira geral.
        </p>
        <br>
          <h3>Epidemiologia</h3><br>
        <p>
          Estudos estimam incidência anual de 1/10.000, ou seja, ocorre em uma a cada dez mil pessoas em um ano.
          Considerando uma expectativa de vida de 75 anos, a prevalência de DR na população é em torno de 0,7%.
          Entretanto ela aumenta em alguns grupos populacionais, por exemplo: até 3% em olhos traumatizados
          ou previamente submetidos à cirurgia de catarata; até 10% no olho contralateral de pacientes que já
          apresentaram DR.<strong>Importante: 40% de todos os casos de DR ocorrem em pacientes míopes.
          Daí a importância do exame periódico da retina com o oftalmologista.</strong>
        </p>

        <br>
        <h3>Diagnóstico</h3><br>
        <p>
          O paciente pode se queixar de surgimento súbito ou aumento de moscas volantes, flashes de luz (“relâmpagos”),
          perda do campo visual, e dimuição da acuidade visual. O oftalmologista realiza o exame do fundo de olho,
          com necessidade de dilatação pupilar, podendo documentar com ultrassonografia, e retinografia.
        </p><br>
        <h3>Tratamento</h3><br>
        <p>
          Quando há somente rasgo, ainda sem descolamento, pode ser realizada a fotocoagulação / laser para previnir o DR.
          Ao ocorrer descolamento da retina, o tratamento é cirúrgico. Nos estágios iniciais pode ser utilizada uma faixa
          de silicone ao redor da esclera (“branco do olho”), injeção de gás, e aplicação de laser. Porém, nos casos mais
          avançados indicamos a vitrectomia posterior, cirurgia que consiste na remoção do vítreo, aplicação de endolaser,
          e colocação de gás ou silicone para preencher o interior do globo.
        </p><br>
        <h3>Prognóstico</h3><br>
        <p>
        <strong>
          Quanto mais rápido o paciente for tratado, menor o risco de cegueira, ou seja, o descolamento de retina pode
          ser considerado uma urgência oftalmológica, pois tem um alto potencial cegante, principalmente nos casos de demora na conduta.
        </strong>
        </p>
        <p>
        <strong>
          Mais de 90% dos casos apresentam um bom resultado anatômico, ou seja, consegue ter a retina no lugar novamente,
          se forem adequada e prontamente tratados. Mais de 80% dos pacientes evoluem com melhora da visão.
        </strong>
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
            <img src="images/descolamento1.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/descolamento2.jpg" alt="img02"/>
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
            <img src="images/descolamento1.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Descolamento de Retina</h3>
              <p></p>
            </figcaption>
            <img src="images/descolamento2.jpg" alt="img01"/>
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
