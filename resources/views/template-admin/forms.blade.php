@include('template-admin.head')

@include('template-admin.top')

@section('title', 'Forms')

@include('template-admin.menu-vertical')

            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h1>
                  <h2>@yield('title')</h2>

                </h1>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Forms</a></li>
                  <li class="active">@yield('title')</li>
                </ol>
              </section>

              <div class="col-md-12">
                <div class="box box-primary">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Form</h3>
                  </div>
                  <div class="box-body pad table-responsive">
                      <!-- O Form fica aqui -->
                      <form role="form">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                          </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->
              <div class="col-md-6">
                <div class="box box-success">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Form</h3>
                  </div>
                  <div class="box-body pad table-responsive">
                      <!-- O Form fica aqui -->
                      <div class="box-body">
                        <input class="form-control input-lg" type="text" placeholder=".input-lg">
                        <br>
                        <input class="form-control" type="text" placeholder="Default input">
                        <br>
                        <input class="form-control input-sm" type="text" placeholder=".input-sm">
                      </div>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->
              <div class="col-md-6">
                <div class="box box-danger">
                  <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Form</h3>
                  </div>
                  <div class="box-body pad table-responsive">
                      <!-- O Form fica aqui -->
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-3">
                            <input type="text" class="form-control" placeholder=".col-xs-3">
                          </div>
                          <div class="col-xs-4">
                            <input type="text" class="form-control" placeholder=".col-xs-4">
                          </div>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder=".col-xs-5">
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!--//col m-12 -->
            </div>




@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
