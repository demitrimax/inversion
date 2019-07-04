@extends('layouts.appv2')
@section('title',config('app.name').' | Proveedores' )
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
