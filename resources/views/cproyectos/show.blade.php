@extends('layouts.app')
@section('title',config('app.name').' | Detalles del Proyecto' )
@section('content')

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('cproyectos.show_fields')


                </div>
                <a href="{!! route('cproyectos.index') !!}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
@endsection
