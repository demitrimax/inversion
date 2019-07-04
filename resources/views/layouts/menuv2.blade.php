<a href="{{url('/home')}}" class="sl-menu-link {{ Request::is('home*') ? 'active' : '' }}">
  <div class="sl-menu-item">
    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
    <span class="menu-item-label">Dashboard</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
@can('cproyectos-list')
<a href="{!! route('cproyectos.index') !!}" class="sl-menu-link {{ Request::is('cproyectos*') ? 'active' : '' }}">
  <div class="sl-menu-item">
    <i class="menu-item-icon icon ion-ios-videocam-outline tx-20"></i>
    <span class="menu-item-label">Proyectos</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
@endcan
@can('empresas-list')
<a href="{!! route('empresas.index') !!}" class="sl-menu-link {{ Request::is('empresas*') ? 'active' : '' }}">
  <div class="sl-menu-item">
    <i class="menu-item-icon icon ion-ios-videocam-outline tx-20"></i>
    <span class="menu-item-label">Empresas</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
@endcan
<a href="widgets.html" class="sl-menu-link">
  <div class="sl-menu-item">
    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
    <span class="menu-item-label">Cards &amp; Widgets</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<a href="#" class="sl-menu-link">
  <div class="sl-menu-item">
    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
    <span class="menu-item-label">Charts</span>
    <i class="menu-item-arrow fa fa-angle-down"></i>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<ul class="sl-menu-sub nav flex-column">
  <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
  <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
  <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
  <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
  <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
</ul>
  @hasrole('administrador')
  @php
  if( Request::is('user*') || Request::is('permissions*') || Request::is('roles*')  ) {
      $varActive = "active show-sub";
  } else {
    $varActive = "";
  }
  @endphp
<a href="#" class="sl-menu-link {{$varActive}}">
  <div class="sl-menu-item">
    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
    <span class="menu-item-label">Configuración</span>
    <i class="menu-item-arrow fa fa-angle-down"></i>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<ul class="sl-menu-sub nav flex-column">
  <li class="nav-item"><a href="{{url('user')}}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">Usuarios</a></li>
  <li class="nav-item"><a href="{{url('roles')}}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">Roles</a></li>
  <li class="nav-item"><a href="{{url('permissions')}}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">Permisos</a></li>
</ul>
@endhasrole
