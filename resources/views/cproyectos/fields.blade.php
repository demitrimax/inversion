<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Finicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('finicio', 'Finicio:') !!}
    {!! Form::date('finicio', null, ['class' => 'form-control','id'=>'finicio']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#finicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Clasificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clasificacion', 'Clasificacion:') !!}
    {!! Form::number('clasificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cproyectos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
