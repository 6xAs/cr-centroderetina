
@extends('templateSite.principal')

@section('title', 'Laserterapia')

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
  <div class="banner-laserterapia">
    <header class="logo">
    </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6>Laserterapia</h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">Laserterapia  com Diiodo Verde -532nm</h3>

        <p>
          É a modalidade mais usada no mundo.
          O tratamento de enfermidades da retina através do LASER revolucionou a oftalmologia há algumas décadas,
          com eficácia comprovada e milhares de estudos acadêmicos realizados comprovando sua eficiência e excelentes resultados.
        </p>
        <p>
          Consiste na aplicação de feixes de laser na região afetada visando a “micro cauterização” necessária para
          restabelecer a fixação da estrutura danificada pela doença a qual o paciente foi acometida. Ação térmica – “queima” o tecido e provoca coagulação das proteínas.
        </p>
        <p>
          O feixe de luz direcionado permite que o medico especialista em retina
          consiga aplicar o laser exatamente onde se faz necessário obtendo assim maior eficiência no resultado final.
        </p>
        <p>
          Embora seja um procedimento oftalmológico sua aplicação é feita no consultório. A anestesia é local, através da
          instilação de colírio anestésico somente no olho, para aliviar o desconforto.
        </p>
        <p>
          Esta técnica é amplamente utilizada para tratamento das doenças vasculares (retinopatia diabética, e oclusões venosas)
          e em casos de roturas retinianas, como profilático à progressão do descolamento de retina.
        </p>
        <br>

        <h3 class="last-updated">Laserterapia com Diiodo Vermelho - 810nm</h3>
        <p>
        Em nosso Serviço utilizamos esta modalidade de tratamento apenas para os casos de Retinopatia da Prematuridade, que pode severamente acometer os
        RNs prematuros, sendo realizada em ambiente Hospitalar (UTI Neonatal ou Centro Cirírgico), sob anestesia geral. Neste tipo de tratamento é utilizado o oftalmoscópio indireto,
        lente de 28 Dioptrias, e o identador escleral (para visualizar a retina periférica), além do blefarostato (aparelho para manter o olho aberto).
        </p>

  </div>
  <!--- /technologies ---->
</section>

</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Fotos</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li><!-- for Masonry column width -->
        <li>
          <figure>
            <img src="images/laser-terapia.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/laserterapia_cicatriz1.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/laserterapia_cicatriz2.jpg" alt="img03"/>
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
              <h3>Laserterapia</h3>
            </figcaption>
            <img src="images/laser-terapia.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Laserterapia Cicatrizada</h3>
            </figcaption>
            <img src="images/laserterapia_cicatriz1.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Laserterapia Cicatrizada</h3>
            </figcaption>
            <img src="images/laserterapia_cicatriz2.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Ex fashion axe</h3>
              <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
            </figcaption>
            <img src="images/l9.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Thundercats next level</h3>
              <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
            </figcaption>
            <img src="images/l10.jpg" alt="img04"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Bushwick selvage synth</h3>
              <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
            </figcaption>
            <img src="images/l11.jpg" alt="img05"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Bottle wayfarers locavore</h3>
              <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
            </figcaption>
            <img src="images/l12.jpg" alt="img01"/>
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
