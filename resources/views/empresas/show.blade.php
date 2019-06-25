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
                          <li class="active">
                              <a href="#cuentas" data-toggle="tab" aria-expanded="true">
                                  <span class="visible-xs"><i class="fa fa-home"></i></span>
                                  <span class="hidden-xs">Cuentas</span>
                              </a>
                          </li>
                          <li class="">
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

                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="cuentas">
                            @include('empresas.cuentas')
                          </div>
                          <div class="tab-pane" id="movinver">
                              @include('empresas.movimientos')
                          </div>
                          <div class="tab-pane" id="operaciones">
                              @include('empresas.operaciones')
                          </div>

                      </div>
                  </div>


                </div>
                <a href="{!! route('empresas.index') !!}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
@endsection
