@include('template-admin.head')

@include('template-admin.top')

@include('template-admin.menu-vertical')

@section('title', 'Simple Table')

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

                    <h3 class="box-title">Simple Table</h3>
                  </div>
                  <div class="box-body pad table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Clean database</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-yellow">70%</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Cron job running</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-blue">30%</span></td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Fix and squish bugs</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-green">90%</span></td>
                        </tr>
                      </table>

                  </div>
                  <!-- /.box -->
                </div>
              </div>

            </div>

@include('template-admin.footer')

@include('template-admin.control-sidebar')

@include('template-admin.scripts-js')
