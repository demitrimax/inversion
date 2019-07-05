@extends('layouts.appv2')
@section('title',config('app.name').' | Proveedores' )

@section('breadcrum')
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{url('/')}}">Principal</a>
  <a class="breadcrumb-item" href="{{url('/proveedores')}}">Proveedores</a>
  <span class="breadcrumb-item active">{{$proveedores->nombre}}</span>
</nav>
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Proveedores
        </h1>
    </section>
    <div class="content">
        <div class="card bg-0">
            <div class="card-body">
                <div class="row" style="padding-left: 20px">
                <table class="table table-striped table-bordered detail-view" id="proveedores-table">
                  <tbody>
                    @include('proveedores.show_fields')
                    </tbody>
                  </table>
                    <a href="{!! route('proveedores.index') !!}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
