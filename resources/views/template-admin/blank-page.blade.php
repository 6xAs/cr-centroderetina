@include('template-admin.head')

@include('template-admin.top')

@section('title', 'Home blank page')

@include('template-admin.menu-vertical')

            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h1>
                  <h2>@yield('title')</h2>

                </h1>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">@yield('title')</li>
                </ol>
              </section>

              <div class="col-md-12">
                <div class="box box-primary">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Blank Page</h3>
                  </div>
                  <div class="box-body pad table-responsive">

                  </div>
                  <!-- /.box -->
                </div>
              </div>


            </div>


@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
