@include('template-admin.head')

@include('template-admin.top')

@section('title', 'Inserir Banner')

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

                    <h3 class="box-title">Inserir Banner</h3>
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
                      <form method="POST" action="/input-banner" enctype="multipart/form-data">
                      @csrf
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Título: *</label>
                          <input type="text" name="title" class="form-control"  placeholder="Título do Banner">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sutítulo: </label>
                          <input type="text" name="subtitle" class="form-control"  placeholder="Subtítulo">
                        </div>
                        <div class="form-group">

                            <div class="row">
                                        <div class="col-xs-4 col-md-12">
                                          <a href="#" class="thumbnail">

                                              <img id="visualizar"  src="" width="840" height="740" alt="" />
                                          </a>
                                        </div>
                            </div>

                        </div>

                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" name="image_01" id="exampleInputFile"  onchange="imagePrincipal(this);">

                        </div>

                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Inserir</button>
                        </div>
                      </div>

                    </form>

                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->

            </div>


@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
