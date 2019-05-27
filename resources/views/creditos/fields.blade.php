@section('css')
<link href="{{asset('appzia/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
@endsection
<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control maxlen', 'required', 'maxlength'=>'35', 'placeholder'=>'Nombre del proyecto de credito']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero de credito:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control maxlen', 'required', 'maxlength'=>'10', 'placeholder'=>'Referencia númerica del credito']) !!}
</div>
@php
//conversion de fecha
$fecinicio = null;
$fectermino = null;
$fecapertura = null;
if(isset($creditos->finicio)){
    $fecinicio = $creditos->finicio->format('Y-m-d');
}
if(isset($creditos->ftermino)){
    $fectermino = $creditos->ftermino->format('Y-m-d');
}
if(isset($creditos->fapertura)){
    $fecapertura = $creditos->fapertura->format('Y-m-d');
}
@endphp
<!-- Finicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('finicio', 'Fecha de inicio:') !!}
    {!! Form::date('finicio', $fecinicio, ['class' => 'form-control','id'=>'finicio']) !!}
</div>


<!-- Ftermino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ftermino', 'Fecha de termino:') !!}
    {!! Form::date('ftermino', $fectermino, ['class' => 'form-control','id'=>'ftermino']) !!}
</div>


<!-- Tasainteres Field -->
<div class="form-group col-sm-6">
            {!! Form::label('tasainteres', 'Tasa de interes: %') !!}
     <div class="input-group bootstrap-touchspin">
        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
        {!! Form::number('tasainteres', null, ['class' => 'form-control', 'style'=>'display:block;','required', 'placeholder'=>'Porcentaje', 'min'=>'0.01', 'step'=>'0.01']) !!}
        <span class="input-group-addon bootstrap-touchspin-postfix">%</span>
    </div>
</div>

<!-- Entidadfinan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidadfinan', 'Entidad Financiera:') !!}
    {!! Form::select('entidadfinan', $financieras, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Diapago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diapago', 'Dia de pago:') !!}
    {!! Form::number('diapago', null, ['class' => 'form-control','id'=>'diapago', 'min'=>'1', 'max'=>'30']) !!}
</div>

<!-- Monto Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto_inicial', 'Monto Inicial:') !!}
    {!! Form::number('monto_inicial', null, ['class' => 'form-control', 'required', 'min'=>'0.01', 'step'=>'0.01']) !!}
</div>

<!-- Fapertura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fapertura', 'Fecha de apertura:') !!}
    {!! Form::date('fapertura', $fecapertura, ['class' => 'form-control','id'=>'fapertura', 'required', 'placeholder'=>'Fecha de apertura del credito']) !!}
</div>

<!-- Diascalculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diascalculo', 'Dias de calculo:') !!}
    {!! Form::number('diascalculo', 30, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('creditos.index') !!}" class="btn btn-default">Cancelar</a>
</div>


@section('scripts')
<script src="{{asset('appzia/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script>
     //Bootstrap-MaxLength
        $('.maxlen').maxlength();
</script>
@endsection