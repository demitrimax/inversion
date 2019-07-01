@extends('layouts.app')
@section('title',config('app.name').' | Editar Metpagos' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Método de pago</h3>
              </div>
              <div class="panel-body">
              {!! Form::model($metpago, ['route' => ['metpagos.update', $metpago->id], 'method' => 'patch']) !!}

                   @include('metpagos.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
