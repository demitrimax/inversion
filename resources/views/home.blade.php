@extends('layouts.appv2')

@section('breadcrum')
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{url('/')}}">Principal</a>
  <span class="breadcrumb-item active">Dashboard</span>
</nav>
@endsection

@section('content')

<div class="">
    <div class="page-header-title">
        <h4 class="page-title">Dashboard</h4>
    </div>
</div>

    <div class="page-content-wrapper ">

        <div class="container">

          <div class="card panel-default">
            <div class="card-header card-header-default">
                <h3 class="card-title">Dashboard</h3>
            </div>
            <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              Ha iniciado sesión correctamente!
            </div>
        </div>

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

@endsection
