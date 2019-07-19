@section('css')
<link href="{{asset('appzia/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
<link href="{{asset('airdatepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">

@endsection

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control maxlen', 'required', 'maxlength'=>'50']) !!}
</div>

<!-- Giro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control maxlen', 'maxlength'=>'13']) !!}
</div>

<!-- Giro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro', 'Giro:') !!}
    {!! Form::text('giro', null, ['class' => 'form-control maxlength', 'maxlength'=>'80']) !!}
</div>

<!-- Fcreacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fcreacion', 'Fecha de creación:') !!}
    {!! Form::text('fcreacion', null, ['class' => 'form-control datepicker-here','id'=>'fcreacion', 'data-language'=>'es', 'data-date-format'=>'yyyy-mm-dd', 'required']) !!}
</div>


<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empresas.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>

@section('scripts')
<script src="{{asset('appzia/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{asset('airdatepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('airdatepicker/dist/js/i18n/datepicker.es.js')}}"></script>
<script>
     //Bootstrap-MaxLength
        $('.maxlen').maxlength();
</script>

@endsection
