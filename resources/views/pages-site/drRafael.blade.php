
@extends('templateSite.principal')

@section('title', 'Dr. Rafael Cardoso')

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

<!-- laboratory-section -->
<section class="laboratory">
  <div class="banner-olho">
    <header class="logo">
    </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6>CR Centro de Retina</h6>
      </div>
    </div>
  </div>
    <div class="cd-image-block">
      <ul class="cd-images-list">
        <li class="is-selected">
          <a href="#0">
            <h3></h3>
          </a>
        </li>

        <li>
          <a href="#0">
            <h3>Dr. Rafael Cardoso</h3>
          </a>
        </li>

        <li>
          <a href="#0">
            <h3></h3>
          </a>
        </li>


      </ul> <!-- .cd-images-list -->
    </div> <!-- .cd-image-block -->

    <div class="cd-content-block">
      <ul>
        <li class="is-selected">
          <div>
          <h2>Dr. Rafael Cardoso Oliveira</h2>

          <p>Doutor em Ciências Médicas – USP - Ribeirão Preto – SP</p>
          <p>
            Fellow em Retina e Vítreo Clínica e Cirúrgica – USP - Ribeirão Preto – SP
          </p>
          <p>
            Graduação em Medicina / UEL - Londrina – PR

          </p>
          <p>
            Residência em Oftalmologia / UEL – Londrina – PR

          </p>
          <p>
            Fellow Retina Service / Bascom Palmer Eye Institute  University of Miami – EUA
          </p>
          <p>
            Chefe do Serviço de Retinopatia da Prematuridade / Hospital de Base – Porto Velho-RO
          </p>
          <p>
            Professor Adjunto Oftalmologia / Uiversidade Federal de Rondônia - UNIR
          </p>
          <p>
              Membro Titular da Sociedade Brasileira de Retina e Vítreo.
          </p>

          </div>
        </li>

        <li>
          <div>
            <h3>Equipe</h3>

            <p>
                Contamos com uma equipe profissional multidisciplinar experiente e altamente capacitada, nas áreas de atendimento ao cliente e de enfermagem, que auxiliam os pacientes e familiares desde o agendamento de
                consultas e exames, programação de procedimentos e cirurgias, até orientações sobre o pós-operatório.
            </p>

          </div>
        </li>



      </ul>

    </div> <!-- .cd-content-block -->



    </div>

<div class="clearfix"></div>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Um Tour pela clínica</h3>
    <section class="grid-wrap">
      <ul class="grid">
        <li class="grid-sizer"></li><!-- for Masonry column width -->
        <li>
          <figure>
            <img src="images/l2.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/l2.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/l3.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/l4.jpg" alt="img04"/>
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
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar.</p>
            </figcaption>
            <img src="images/l2.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar.</p>
            </figcaption>
            <img src="images/l2.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar.</p>
            </figcaption>
            <img src="images/l3.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar.</p>
            </figcaption>
            <img src="images/l4.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar.</p>
            </figcaption>
            <img src="images/l2.jpg" alt="img04"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Nossa Clínica - Ambiente</h3>
              <p>Ambiente de espera tranquilo e confortável. Melhor atendimento e profissionais atenciosos e dispostos a ajudar..</p>
            </figcaption>
            <img src="images/l3.jpg" alt="img05"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Bottle wayfarers locavore</h3>
              <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
            </figcaption>
            <img src="images/l4.jpg" alt="img01"/>
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
<!-- //laboratory-section -->

@stop
