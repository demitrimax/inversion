@extends('layouts.app')
@section('title',config('app.name').' | Bcuentas' )
@section('content')
    <section class="content-header">
        <h1>
            Bcuentas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                <table class="table table-striped table-bordered detail-view" id="bcuentas-table">
                  <tbody>
                    @include('bcuentas.show_fields')
                    </tbody>
                  </table>
                    <a href="{!! route('bcuentas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
