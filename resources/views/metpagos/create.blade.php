@extends('layouts.app')
@section('title',config('app.name').' | Alta de Nuevo Metpagos' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Alta de Método de pago</h3>
              </div>
              <div class="panel-body">
              {!! Form::open(['route' => 'metpagos.store']) !!}

                  @include('metpagos.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>

@endsection
