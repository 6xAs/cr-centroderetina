
@extends('templateSite.principal')

@section('title', 'OCT - Tomografia de Coerência Óptica')

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
  <div class="banner-oct ">
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
      <h3 class="last-updated">OCT - Tomografia de Coerência Óptica</h3>
        <p>
        Este exame analisa as camadas da retina e do nervo óptico, sendo realizado por um sistema
        computadorizado através de ondas de luz, sem radiação, portanto, não há qualquer tipo de risco para a saúde do paciente.
        </p>
        <p>
          As imagens são captadas e processadas pelo aparelho proporcionando detalhes da anatomia retiniana e do nervo óptico, que permitem o diagnostico e acompanhamento de importantes doenças do fundo de olho, tais como:
          Degeneração Macular, Edema Macular relacionado ao diabetes ou oclusões venosas, Membranas Epirretinianas, Buraco Macular, Glaucoma, entre outras.
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
            <img src="images/oct_buraco.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/oct_drmi.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/membrana_epirretiniana.jpg" alt="img03"/>
          </figure>
        </li>
        <li>
          <figure>
            <img src="images/oct_serosa.jpg" alt="img04"/>
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
              <h3>OCT BURACO MACULAR</h3>
              <p></p>
            </figcaption>
            <img src="images/oct_buraco.jpg" alt="img06"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>OCT DMRI</h3>
              <p></p>
            </figcaption>
            <img src="images/oct_drmi.jpg" alt="img01"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>OCT MEMBRANA EPIRRETINIANA</h3>
              <p></p>
            </figcaption>
            <img src="images/membrana_epirretiniana.jpg" alt="img02"/>
          </figure>
        </li>
        <li>
          <figure>
            <figcaption>
              <h3>OCT Serosa</h3>
              <p> </p>
            </figcaption>
            <img src="images/oct_serosa.jpg" alt="img03"/>
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
