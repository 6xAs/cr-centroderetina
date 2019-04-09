
@extends('templateSite.principal')

@section('title', 'Quem Somos')

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
  <div class="banner-olho ">
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
            <h3>Exames</h3>
          </a>
        </li>

        <li>
          <a href="#0">
            <h3></h3>
          </a>
        </li>

        <li>
          <a href="#0">
            <h3>Cirurgias</h3>
          </a>
        </li>
      </ul> <!-- .cd-images-list -->
    </div> <!-- .cd-image-block -->

    <div class="cd-content-block">
      <ul>
        <li class="is-selected">
          <div>
            <h3>Dr. Rafael Cardoso</h3>

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

        <li>
          <div>
            <h3>Estrutura</h3>

            <p>
                Texto Estrutura
            </p>

          </div>
        </li>

        <li>
          <div>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cum quisquam, sint praesentium dolores, harum! Aliquam sequi impedit corrupti, numquam maiores ipsa commodi excepturi eligendi cupiditate adipisci atque sint iste aspernatur, hic sed modi at voluptatum nihil incidunt, fugiat repellendus beatae debitis, soluta blanditiis culpa! Magnam quisquam tempore exercitationem molestias cupiditate quam aut eum perferendis deleniti doloribus et quos dolore excepturi, rem incidunt consectetur quia accusantium placeat quae officiis in ab. Veniam sapiente aut est asperiores nihil reprehenderit incidunt cupiditate, voluptatibus nemo iste. Quos, ullam. Cupiditate, sed.
            </p>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing cupiditate adipisci atque sint iste aspernatur, hic sed modi at voluptatum nihil incidunt, fugiat repellendus beatae debitis, soluta blanditiis culpa! Magnam quisquam tempore exercitationem molestias cupiditate quam aut eum perferendis deleniti doloribus et quos dolore excepturi, rem incidunt consectetur quia accusantium placeat quae officiis in ab. Veniam sapiente aut est asperiores nihil reprehenderit incidunt cupiditate, voluptatibus nemo iste. Quos, ullam. Cupiditate, sed.
            </p>

          </div>
        </li>
      </ul>

      <button class="cd-close">Close</button>
    </div> <!-- .cd-content-block -->

    <ul class="block-navigation">
      <li><button class="cd-prev inactive">&larr; Prev</button></li>
      <li><button class="cd-next">Next &rarr;</button></li>
    </ul> <!-- .block-navigation -->

    <div class="">


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
            <img src="images/l12.jpg" alt="img01"/>
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
              <h3>Exercitation occaecat</h3>
              <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
            </figcaption>
            <img src="images/l6.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Selfies viral four</h3>
              <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
            </figcaption>
            <img src="images/l7.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>Photo booth skateboard</h3>
              <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
            </figcaption>
            <img src="images/l8.jpg" alt="img02"/>
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
<!-- //laboratory-section -->

@stop
