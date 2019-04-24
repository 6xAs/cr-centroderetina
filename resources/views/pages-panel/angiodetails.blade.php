@include('template-admin.head')

@include('template-admin.top')

@section('title', 'Inserir Angiografia')

@include('template-admin.menu-vertical')

            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h1>
                  <h2>@yield('title')</h2>

                </h1>
                <ol class="breadcrumb">
                  <li><a href="/home-panel"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">@yield('title')</li>
                </ol>
              </section>

              <div class="col-md-12">
                <div class="box box-primary">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Inserir Angiografia</h3>
                  </div>
                  @if(count($errors) > 0)
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach($errors->all() as $error)

                                         <p><b>{!!$error!!}</b></p>

                                     @endforeach
                                 </ul>
                             </div>
                   @endif
                  <div class="box-body pad table-responsive">
                      <!-- O Form fica aqui -->
                      {!! Form::model($angiografia,['route' =>  ['angio.update', $angiografia->id], 'class' => '','method'=>'PUT','files'=>true]) !!}
                                         {{ csrf_field() }}

                                             <div class="form-group">
                                                 {!! Form::label('title', 'Título Principal da Notícia: * ' ) !!}
                                                 {!! Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Título Principal da Notícia', 'required' => 'required'] ) !!}
                                             </div>
                                             <div class="form-group">
                                                 {!! Form::label('subtitle', 'Subtitulo da Notícia: ' ) !!}
                                                 {!! Form::text('subtitle', null, ['class' => 'form-control input-lg', 'placeholder' => 'Subtitulo'] ) !!}
                                             </div>
                                             <div class="form-group">
                                                 {!! Form::label('date', 'Escolher Data: *' ) !!}
                                                 {!! Form::date('data', null, ['class' => 'form-control input-lg', 'placeholder' => '', 'required' => 'required'] ) !!}
                                             </div>
                                             <div class="form-group">
                                                 {!! Form::label('description', 'Descrição:* ' ) !!}
                                                 {!! Form::textarea('description', null, ['class' => 'form-control input-lg', 'id' => 'editor', 'placeholder' => 'Descreva o conteúdo aqui...'] ) !!}
                                                 <script>
                                                        ClassicEditor
                                                            .create( document.querySelector( '#editor' ) )
                                                            .catch( error => {
                                                                console.error( error );
                                                            } );
                                                  </script>
                                             </div>
                                             <div class="form-group">
                                                 {!! Form::label('observacao', 'Observação: ' ) !!}
                                                 {!! Form::textarea('observacao', null, ['class' => 'form-control input-lg', 'placeholder' => 'Observações...'] ) !!}

                                             </div>
                                             <table>
                                                 <tr>
                                                     <td>
                                                         <div class="form-group">
                                                             {!! Form::label('image_01', 'Imagem Principal: ' ) !!}
                                                             <div class="">
                                                                 <input type="file" id="exampleInputFile"  name="image_01" onchange="mostraUm(this);">
                                                             </div>
                                                         </div>

                                                     </td>
                                                     <td>
                                                         <div class="form-group">

                                                             <div class="row">
                                                                         <div class="col-xs-4 col-md-12">
                                                                           <a href="#" class="thumbnail">

                                                                               <img id="mostraU" src="" width="550" height="330" alt="" />
                                                                           </a>
                                                                         </div>
                                                             </div>

                                                         </div>

                                                     </td>

                                                 </tr>

                                                 <tr>
                                                     <td>
                                                         <div class="form-group">
                                                             {!! Form::label('image_02', 'Segunda Imagem: ' ) !!}
                                                             <div class="custom-file">
                                                                 <input type="file" id="exampleInputFile"  name="image_02" onchange="mostraDois(this);">
                                                             </div>
                                                         </div>

                                                     </td>

                                                     <td>
                                                         <div class="form-group">

                                                             <div class="row">
                                                                         <div class="col-xs-4 col-md-12">
                                                                           <a href="#" class="thumbnail">

                                                                               <img id="mostraD" src="" width="550" height="330" alt="" />
                                                                           </a>
                                                                         </div>
                                                             </div>

                                                         </div>

                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td>
                                                         <div class="form-group">
                                                             {!! Form::label('image_03', 'Terceira Imagem: ' ) !!}
                                                             <div class="">
                                                                 <input type="file" id="exampleInputFile"  name="image_03" onchange="mostraTres(this);">

                                                             </div>
                                                         </div>
                                                     </td>

                                                     <td>
                                                         <div class="form-group">

                                                             <div class="row">
                                                                         <div class="col-xs-4 col-md-12">
                                                                           <a href="#" class="thumbnail">

                                                                               <img id="imageTres" src="" width="550" height="330" alt="" />
                                                                           </a>
                                                                         </div>
                                                             </div>
                                                         </div>

                                                     </td>
                                                 </tr>
                                             </table>

                                             <div class="form-group">
                                                 {!! Form::label('video', 'Video Link: ' ) !!}
                                                 {!! Form::text('video', null, ['class' => 'form-control input-lg', 'placeholder' => 'Ex:https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG'] ) !!}
                                             </div>

                                             {!!Form::submit('INSERIR', ['class' => 'btn btn-primary'])!!}

                      {!! Form::close() !!}


                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->

            </div>

@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
