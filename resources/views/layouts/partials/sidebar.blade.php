<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('pages.index') }}" class="brand-link">
    <img src="imagen/k.png" width="160px" alt="Key Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Key</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="adminLTE/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link {{ setActiveRoute('pages.index') }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Mis marcas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('pages.index') }}" class="nav-link {{ setActiveRoute('pages.index') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Inicio</p>
              </a>
            </li>{{--
            <li>
              <a href="{{ route('pages.dashboard') }}" class="nav-link {{ setActiveRoute('pages.dashboard') }}">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Administrar</p>
              </a>
            </li> --}}
            {{-- <li>
              <a href="{{ route('pages.planes') }}" class="nav-link {{ setActiveRoute('pages.planes') }}">
                <i class="fas fa-file-contract nav-icon"></i>
                <p>Planes de Acción</p>
              </a>
            </li> --}}
          </ul>
        </li>
        <li class="nav-header">Reportes</li>
        <li class="nav-item">
          <a href="{{ route('pages.reportes') }}" class="nav-link {{ setActiveRoute('pages.reportes') }}">
            <i class="fas fa-file-pdf nav-icon"></i>
            <p>Ver Reportes</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>