
@extends('templateSite.principal')

@section('title', 'Contato')

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

<!-- Contact-section -->
<section class="contact">
  <div class="inner-banner demo-2 text-center">
    <header class="logo">
        </header>
    <div id="breadcrumb_wrapper">
      <div class="container">
        <h2>@yield('title')</h2>
        <h6>Entre em contato conosco!</h6>
      </div>
    </div>
  </div>
  <!--contact-->
<div class="contact">
<div class="container">
  <div class="contact-form">
    <h4>Entre em Contato:</h4>
    {!! Form::open(['route' => 'mail.store', 'method' => 'POST']) !!}

        {!! Form::text('nome_cliente', null, ['class' => 'text', 'placeholder' => 'Nome Completo'] ) !!}
        {!! Form::text('email', null, ['class' => 'text', 'placeholder' => 'Ex:email@mail.com', 'type' => 'email'] ) !!}

        {!! Form::text('assunto', null, ['class' => 'text', 'placeholder' => 'Assunto'] ) !!}

        {!! Form::textarea('mensagem', null, ['class' => '', 'placeholder' => 'Mensagem...'] ) !!}

        {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
  </div>

</div>
</div>
</section>
<!-- //contact-section -->

@stop
