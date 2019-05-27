<li class="menu-title">Menu</li>
<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{url('home')}}" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary pull-right">1</span></span></a>
</li>
@can('proyectos-list')
<li class="{{ Request::is('proyectos*') ? 'active' : '' }}">
    <a href="{{route('proyectos.index')}}" class="waves-effect"><i class="mdi mdi-basket"></i><span> Proyectos <span class="badge badge-primary pull-right">NEW</span></span></a>
</li>
@endcan
@can('creditos-list')
<li class="{{ Request::is('creditos*') ? 'active' : '' }}">
    <a href="{!! route('creditos.index') !!}" class="waves-effect"><i class="ion ion-social-usd"></i><span> Creditos</span></a>
</li>
@endcan



<li class="has_sub">
  @php
  if( Request::is('catpaisdivisions*') || Request::is('catareaciudads*') || Request::is('contratistas*')  ) {
      $varActive = "active";
  } else {
    $varActive = "";
  }
  @endphp
    <a href="javascript:void(0);" class="waves-effect {{$varActive}}"><i class="mdi mdi-assistant"></i><span> Catálogos </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
    <ul class="list-unstyled">
        @can('catpaisdivisions-list')
        <li class="{{ Request::is('catpaisdivisions*') ? 'active' : '' }}"><a href="#">Clientes</a></li>
        @endcan
        <li class="{{ Request::is('efinancieras*') ? 'active' : '' }}">
              <a href="{!! route('efinancieras.index') !!}"><i class="fa fa-edit"></i><span> Financieras</span></a>
        </li>
    </ul>
</li>

<li class="has_sub">
  @hasrole('administrador')
    @php
    if( Request::is('user*') || Request::is('permissions*') || Request::is('roles*')  ) {
        $varActive = "active";
    } else {
      $varActive = "";
    }
    @endphp
    <a href="javascript:void(0);" class="waves-effect {{$varActive}}"><i class="mdi mdi-album"></i> <span> Configuración </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
    <ul class="list-unstyled">
        <li class="{{ Request::is('user*') ? 'active' : '' }}"><a href="{{url('user')}}">Usuarios</a></li>
        <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{url('roles')}}">Roles</a></li>
        <li class="{{ Request::is('permissions*') ? 'active' : '' }}"><a href="{{url('permissions')}}">Permisos</a></li>
    </ul>
</li>
@endhasrole



