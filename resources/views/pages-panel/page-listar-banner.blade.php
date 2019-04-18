@include('template-admin.head')
<!-- DataTables -->
<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@include('template-admin.top')

@include('template-admin.menu-vertical')

@section('title', 'Listar Banner')

            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h1>
                  <h2>@yield('title')</h2>

                </h1>
                <ol class="breadcrumb">
                  <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">@yield('title')</li>
                </ol>
              </section>

              <div class="col-md-12">
                <div class="box box-primary">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Listar Banner</h3>
                  </div>
                  @if(Session::has('message'))
                      <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
                          {!! Session::get('message') !!}
                          <a href="page-inserir-banner" class="alert-link">Inserir outro Banner?</a>
                      </div>
                  @endif
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Ações</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach( $banner as $banner )

                                    <tr>
                                      <th scope="row">{{$banner->id}}</th>
                                      <td>{{$banner->title}}</td>
                                      <td><img class="img-responsive " src="images-banner/{{$banner->image_01}}" width="350" height="215" alt="" /></td>
                                      <td> <a href="{{URL::to('banner/'.$banner->id.'/edit')}}"><h3><i class="fa fa-fw fa-pencil-square-o"></i></h3></a> </td>
                                    </tr>

                                @endforeach

                            </tbody>
                    </table>
                  </div>
                  <!-- /.box -->
                </div>
              </div>

            </div>

            <!-- jQuery 3 -->
            <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- DataTables -->
            <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="../../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../../dist/js/demo.js"></script>
            <!-- page script -->
            <script>
              $(function () {
                $('#example1').DataTable()
                $('#example2').DataTable({
                  'paging'      : true,
                  'lengthChange': false,
                  'searching'   : false,
                  'ordering'    : true,
                  'info'        : true,
                  'autoWidth'   : false
                })
              })
            </script>

@include('template-admin.footer')

@include('template-admin.control-sidebar')
