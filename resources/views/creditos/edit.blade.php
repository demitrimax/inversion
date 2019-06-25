@extends('layouts.app')
@section('title',config('app.name').' | Editar Creditos' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')


        <div class="alert alert-warning alert-dismissible fade in">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        ADVERTENCIA: Modificar los datos de un credito puede afectar considerablemente la corrida financiera y los pagos efectuados.
        Asegurese de Eliminar los datos de la Corrida Financiera.
    </div>
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Credito: {{$creditos->nombre}}</h3>
              </div>
              <div class="panel-body">
              {!! Form::model($creditos, ['route' => ['creditos.update', $creditos->id], 'method' => 'patch']) !!}

                   @include('creditos.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
