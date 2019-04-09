
@extends('templateSite.principal')

@section('title', 'Estrutura CR')

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
  <div class="inner-banner demo-2 text-center">
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

         <img class="img-responsive" src="images/estrutura.jpg" height="600" width="800" alt="" />

    </ul> <!-- .cd-images-list -->
  </div> <!-- .cd-image-block -->


    <div class="cd-content-block">
      <ul>
        <li class="is-selected">
          <div>
            <h3>Estrutura</h3>

                <p>
                    CENTRO DE RETINA E VÍTREO DE RONDÔNIA Rua José Bonifácio Nº663 SALA: 202, Olaria Porto Velho RO

                </p>

          </div>
        </li>


      </ul>

    </div> <!-- .cd-content-block -->



    </div>

<div class="clearfix"></div>
<div id="grid-gallery" class="grid-gallery">
  <div class="container">
  <h3 class="title text-center">Nossa Estrutura</h3>
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

      </ul>
      <nav>
        <span class="icon nav-prev"></span>
        <span class="icon nav-next"></span>
        <span class="icon nav-close"></span>
      </nav>

    </section><!-- // slideshow -->
  </div>
  </div><!-- // grid-gallery -->

<script>
  new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
</section>
<!-- //laboratory-section -->

@stop
