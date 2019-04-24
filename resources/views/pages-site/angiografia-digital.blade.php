
@extends('template-site.principal')

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
    @foreach ($angiografia as $angiografia)


    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>{{$angiografia->title}}</h2>
        <h6></h6>
      </div>
    </div>
  </div>
  <!--- technologies ---->
  <div class="technologies">
    <div class="container">
      <h3 class="last-updated">{{$angiografia->subtitle}}</h3>

      {!!$angiografia->description!!}

      <script>
        var data = CKEDITOR.instances.editor.getData();
        // Your code to save "data", usually through Ajax.
      </script>

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
            <img id="mostra" src="/../images-pages/{{$angiografia->image_01}}" width="350" height="150" alt="" />
          </figure>
        </li>
        <li>
          <figure>
            <img id="mostra" src="/../images-pages/{{$angiografia->image_02}}" width="350" height="150" alt="" />
          </figure>
        </li>
        <li>
          <figure>
            <img id="mostra" src="/../images-pages/{{$angiografia->image_03}}" width="350" height="150" alt="" />
          </figure>
        </li>



        <div class="clearfix">

        </div>
      </ul>
    </section><!-- // grid-wrap -->

  </div>
  </div><!-- // grid-gallery -->

  <div id="grid-gallery" class="grid-gallery">
    <div class="container">
    <h3 class="title text-center">Vídeo</h3>
    <iframe src="{{$angiografia->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    </div>

  @endforeach
  <script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
  </script>
  </section>

@stop
