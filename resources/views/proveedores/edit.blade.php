@extends('layouts.app')
@section('title',config('app.name').' | Editar Proveedores' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Proveedores</h3>
              </div>
              <div class="panel-body">
              {!! Form::model($proveedores, ['route' => ['proveedores.update', $proveedores->id], 'method' => 'patch']) !!}

                   @include('proveedores.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
