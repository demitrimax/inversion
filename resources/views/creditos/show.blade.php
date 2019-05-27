@extends('layouts.app')
@section('title',config('app.name').' | Creditos' )
@section('content')

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
               
                    @include('creditos.show_fields')

                    @include('creditos.corridafinan')
                </div>
                <a href="{!! route('creditos.index') !!}" class="btn btn-default">Regresar</a>
            </div>
        </div>
    </div>
@endsection
