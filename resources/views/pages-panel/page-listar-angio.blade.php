@include('template-admin.head')

@include('template-admin.top')

@section('title', 'Angiografia')

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

                    <h3 class="box-title">Angiografia</h3>
                  </div>

                  <div class="box-body pad table-responsive">
                      <!-- O Form fica aqui -->
                      @if(Session::has('message'))
                          <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
                              {!! Session::get('message') !!}

                          </div>
                      @endif
                     @foreach ($angiografia as $angiografia)
                         <div class="form-group">
                             {!! Form::label('title', 'Título Principal: ' ) !!}<br>
                             {{$angiografia->title}}
                         </div>
                         <div class="form-group">
                             {!! Form::label('subtitle', 'Subtítulo:  ' ) !!}<br>
                             {{$angiografia->subtitle}}
                         </div>
                         <div class="form-group">
                             {!! Form::label('description', 'Descrição:  ' ) !!}<br>
                             {!!$angiografia->description!!}
                               <script>
                                   var data = CKEDITOR.instances.editor.getData();
                                   // Your code to save "data", usually through Ajax.
                               </script>
                         </div>
                         <div class="form-group">
                             {!! Form::label('observacao', 'Observação:  ' ) !!}<br>
                             {{$angiografia->observacao}}
                         </div>
                         <div class="form-group">
                             {!! Form::label('data', 'Data:  ' ) !!}
                             <h4>{{date('d/m/y', strtotime($angiografia->data))}}</h4>
                         </div>
                         <div class="form-group">
                             {!! Form::label('imagem_01', 'Imagem_01:  ' ) !!}<br>
                              <img id="mostra" src="/../images-pages/{{$angiografia->image_01}}" width="300" height="265" alt="" />
                         </div>
                         <div class="form-group">
                             {!! Form::label('imagem_02', 'Imagem_02:  ' ) !!}<br>
                              <img id="mostra" src="/../images-pages/{{$angiografia->image_02}}" width="300" height="265" alt="" />
                         </div>
                         <div class="form-group">
                             {!! Form::label('imagem_3', 'Imagem_03:  ' ) !!}<br>
                              <img id="mostra" src="/../images-pages/{{$angiografia->image_03}}" width="300" height="265" alt="" />
                         </div>
                         <div class="form-group">
                             {!! Form::label('video', 'Vídeo:  ' ) !!}<br>
                              <iframe src="{{$angiografia->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>

                        <a href="{{URL::to('editangio/'.$angiografia->id.'/edit')}}"> <button type="button" class="btn btn-block btn-primary" name="button"><h3><i class="fa fa-fw fa-pencil-square-o"></i></h3>Editar</button></a>
                     @endforeach

                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->

            </div>

@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
