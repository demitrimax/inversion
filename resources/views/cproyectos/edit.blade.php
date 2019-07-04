@extends('layouts.appv2')
@section('title',config('app.name').' | Editar Cproyectos' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="card panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Proyectos</h3>
              </div>
              <div class="card-body">
              {!! Form::model($cproyectos, ['route' => ['cproyectos.update', $cproyectos->id], 'method' => 'patch']) !!}

                   @include('cproyectos.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
