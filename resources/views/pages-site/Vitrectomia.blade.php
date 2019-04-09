
@extends('templateSite.principal')

@section('title', 'Vitrectomia')

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
  <div class="banner-vitrectomia">
    <header class="logo">
    </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6>Vitrectomia Posterior (Via Pars Plana)</h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">Cirurgias Vitreorretinianas</h3>

        <p>
          Vitrectomia posterior consiste na remoção do vítreo
          (gel transparente que preenche o olho), devendo ser realizada somente por um especialista em retina cirúrgica.
        </p>
        <p>
          Pode ser feita em clínica ou em hospital, sob anestesia local ou geral.
        </p>
        <p>
          Realizamos exclusivamente a vitrectomia 23 ou 25 gauge, considerada mais segura e eficiente, além de menos traumática.
        </p>
        <p>
          O procedimento leva, em média, de 1 a 2 horas, podendo ser associada a demais procedimentos, tais como: retinopexia com introflexão escleral
          (descrita a seguir), infusão de perfluorcarbono (líquido denso que auxilia no reposicionamento da retina), endolaser (laser de diiodo verde aplicado internamente),
          implante de óleo de silicone ou de gás expansor (depende de cada caso, e serve para preencher a cavidade vítrea, após remoção do humor vítreo).
        </p>
        <p>
          Indicada para o tratamento de doenças do fundo olho, entre elas: Descolamento de retina, Retinopatia diabética,
          Buraco Macular, Membrana Epirretiniana, Complicações da cirurgia de catarata ou de transplante de córnea, Trauma, Uveítes.
        </p>
        <br>
        <h3>Pós-operatório das cirurgias vitreorretinianas:</h3><br>
        <p>
        O paciente deve permanecer em repouso por 1-2 semanas e retornar às atividades físicas após 45-60 dias.
        <br>
        O curativo deve ser removido no dia seguinte e o paciente deve usar colírios por 6-8 semanas.
        <br>
        Os pacientes que tiveram  gás ou ar implantados nos olhos não poderão viajar de avião
        ou para lugares com grande diferença de altitude, até segunda orientação.
        <br>
        A visão geralmente melhora após algumas semanas do procedimento, mas pode levar meses até o resulado final.
        A principal complicação é o descolamento de retina primário ou recorrente. Nesse caso, os pacientes devem ser reoperados.
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
            <img src="images/foto-vitrectomia.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/vitrectomia-illustracao.png" alt="img01"/>
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
              <h3>Foto</h3>
              <p></p>
            </figcaption>
            <img src="images/foto-vitrectomia.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Vitrectomia</h3>
            </figcaption>
            <img src="images/vitrectomia-illustracao.png" alt="img01"/>
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
