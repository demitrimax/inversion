@extends('layouts.app')
@section('title',config('app.name').' | Empresas' )
@section('content')
    <section class="content-header">
        <h1>
            Empresas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('empresas.show_fields')

                    <a href="{!! route('empresas.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
