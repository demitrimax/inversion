@extends('layouts.app')
@section('title',config('app.name').' | Editar Efinancieras' )
@section('content')
<div class="row">
      <div class="col-lg-12">
          @include('adminlte-templates::common.errors')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Editar Entidad financiera</h3>
              </div>
              <div class="panel-body">
              {!! Form::model($efinanciera, ['route' => ['efinancieras.update', $efinanciera->id], 'method' => 'patch']) !!}

                   @include('efinancieras.fields')

              {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
