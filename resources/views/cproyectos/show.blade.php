@extends('layouts.app')
@section('title',config('app.name').' | Detalles del Proyecto' )
@section('content')
    <section class="content-header">
        <h1>
            Detalles del proyecto
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('cproyectos.show_fields')

                    <a href="{!! route('cproyectos.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
