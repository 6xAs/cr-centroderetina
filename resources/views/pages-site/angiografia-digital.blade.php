
@extends('templateSite.principal')

@section('title', 'ANGIOFLUORESCEINOGRAFIA')

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
  <div class="banner-angio ">
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
      <h3 class="last-updated">Angiografia da Retina</h3>

      <p>
        Também conhecido como angiografia DA RETINA, ou retinografia fluorescente.
      </p>
        <p>
          Este exame tem a finalidade de estudar a circulação (PARTE VASCULAR) do fundo do olho, ou seja, a retina e a coróide.
          Estes vasos são fundamentais para a adequada perfusão sanguínea da retina e consequentemente preservação da visão.
        </p>
        <p>
          Neste exame é aplicado via injeção intravenosa, no braço ou no antebraço o contraste de fluoresceína sódica,
          que possibilitará avaliar com maior nitidez os vasos da coróide e da retina, e assim aumentar a acurácia no diagnóstico.
        </p>
        <p>
          As imagens obtidas são digitais, e a impressão das fotos são feitas no mesmo instante do exame, o qual será entregue
          para o paciente posteriormente juntamente com o diagnóstico e sugestões do médico especialista que interpretará o exame.
          O exame é indolor e pode demorar entre 5 e 10 minutoS e nada é encostado no olho do paciente.
        </p>
        <br>
        <h3>Recomendações</h3>
        <p>
          Por conta da dilatação PUPILAR NECESSÁRIA EM TODOS OS EXAMES DO FUNDO DO OLHO, CONSULTAS E PROCEDIMENTOS, é importante que o paciente esteja acompanhado, isso porque a visão do paciente FICARÁ turva durante algumas horas devido a aplicação do colírio. O ACOMPANHANTE SE TORNA IMPORTANTE TAMBÉM, PARA A ADEQUADA COMPREENSÃO DO CASO, E ASSIM ESTENDÊLO AOS DEMAIS FAMILIARES.

          Também por isso as consultas, exames e procedimentos nesta área de retina, costumam ser mais demorados do que aqueles que não necessitam de dilatação pupilar.
        </p>
        <p>
          Dispomos do seguinte equipamento para realização dos exames de retinografia, auto-fluorescência digital,
          angiofluoresceinografia digital e OCT:
          <br>
            <strong>Topcon 3D</strong>
            <br>
            <strong>OCT-2000 FA Plus</strong>
        </p>


  </div>
  <!--- /technologies ---->
</section>

</section>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Fotos do Exame</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li><!-- for Masonry column width -->
        <li>
          <figure>
            <img src="images/autofluore.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/angio_serosa.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/membrana_epirre.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/angio_normal.jpg" alt="img04"/>
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
              <h3>AUTOFLUORESCENCIA NORMAL</h3>
              <p></p>
            </figcaption>
            <img src="images/autofluore.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>ANGIO SEROSA</h3>
              <p></p>
            </figcaption>
            <img src="images/angio_serosa.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>ANGIO MEMBRANA EPIRRETINIANA</h3>
              <p></p>
            </figcaption>
            <img src="images/membrana_epirre.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Angio Normal</h3>
              <p> </p>
            </figcaption>
            <img src="images/angio_normal.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Retinógrofo</h3>
            </figcaption>
            <img src="images/retinografo.jpg" alt="img04"/>
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
