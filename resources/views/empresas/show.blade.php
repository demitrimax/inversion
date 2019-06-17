@extends('layouts.app')
@section('title',config('app.name').' | Empresa '.$empresas->nombre )
@section('content')
    <section class="content-header">
        <h1>
            {{$empresas->nombre}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  <div class="col-md-6">
                    @include('empresas.show_fields')
                  </div>
                  <div class="col-lg-6">
                      <ul class="nav nav-tabs navtab-bg">
                          <li class="">
                              <a href="#cuentas" data-toggle="tab" aria-expanded="true">
                                  <span class="visible-xs"><i class="fa fa-home"></i></span>
                                  <span class="hidden-xs">Cuentas</span>
                              </a>
                          </li>
                          <li class="active">
                              <a href="#movinver" data-toggle="tab" aria-expanded="false">
                                  <span class="visible-xs"><i class="fa fa-user"></i></span>
                                  <span class="hidden-xs">Movimientos Inversión</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="#operaciones" data-toggle="tab" aria-expanded="false">
                                  <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                  <span class="hidden-xs">Operaciones</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="#settings" data-toggle="tab" aria-expanded="false">
                                  <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                  <span class="hidden-xs">Settings</span>
                              </a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane" id="cuentas">
                            @include('empresas.cuentas')
                          </div>
                          <div class="tab-pane" id="movinver">
                              @include('empresas.movimientos')
                          </div>
                          <div class="tab-pane" id="operaciones">
                              @include('empresas.operaciones')
                          </div>
                          <div class="tab-pane" id="settings">
                              <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                          </div>
                      </div>
                  </div>


                </div>
                <a href="{!! route('empresas.index') !!}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
@endsection
