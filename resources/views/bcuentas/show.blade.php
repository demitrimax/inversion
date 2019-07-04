@extends('layouts.appv2')
@section('title',config('app.name').' | Bcuentas' )
@section('content')
    <section class="content-header">
        <h1>
            Detalle de la Cuenta
        </h1>
    </section>
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
