@extends('layouts.app')
@section('title',config('app.name').' | Empresas' )
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
                <div class="col-md-6">
                    @include('empresas.movimientos')
              </div>
              <div class="col-md-6">
                @include('empresas.operaciones')
              </div>


                </div>
                <a href="{!! route('empresas.index') !!}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
@endsection
