@extends('layouts.appv2')
@section('title',config('app.name').' | Bcuentas' )
@section('breadcrum')
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{url('/')}}">Principal</a>
  <a class="breadcrumb-item" href="{{url('/cuentas')}}">Cuentas</a>
  <span class="breadcrumb-item active">{{$bcuentas->numcuenta}}</span>
</nav>
@endsection

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('bcuentas.show_fields')


                </div>
                <a href="{!! route('bcuentas.index') !!}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </div>
@endsection
