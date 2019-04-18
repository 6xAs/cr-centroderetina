<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVEGAÇÃO</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Página Inicial</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Angiografia Digital</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Banner Principal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="/page-inserir-banner"><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href="/page-listar-banner"><i class="fa fa-circle-o"></i> Listar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Buraco Mocular</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Coriorretinopatia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Deslocamento da Retina</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>DMRI</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Injeção Intravitrea</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Laserterapia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Laserterapia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Notícia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Mapeamento da Retina</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Membrana Epirretiana</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Oclusões Vasculares</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>OCT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Retinografia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Retinopatia Diabética</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Retinopatia da Prem...</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Retinopexia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>USG</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Uvites Toxoplasmose</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Vitrectomia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Yag Laser</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Inserir</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Detalhes</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
