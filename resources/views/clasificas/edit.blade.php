@extends('layouts.app')
@section('title',config('app.name').' | Editar Clasificas' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Clasifica</h3>
              </div>
              <div class="panel-body">
              {!! Form::model($clasifica, ['route' => ['clasificas.update', $clasifica->id], 'method' => 'patch']) !!}

                   @include('clasificas.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
