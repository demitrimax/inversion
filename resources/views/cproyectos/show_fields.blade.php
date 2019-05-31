<div class="col-lg-6">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Detalles del proyecto</h3>
        </div>
        <div class="panel-body">

<table class="table table-striped table-bordered detail-view" id="cproyectos-table">
  <tbody>
<!-- Id Field -->
<tr>
  <th>{!! Form::label('id', 'Número:') !!}</th>
  <td>{!! $cproyectos->folio !!}</td>
</tr>


<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{!! $cproyectos->nombre !!}</td>
</tr>


<!-- Descripcion Field -->
<tr>
  <th>{!! Form::label('descripcion', 'Descripcion:') !!}</th>
  <td>{!! $cproyectos->descripcion !!}</td>
</tr>


<!-- Finicio Field -->
<tr>
  <th>{!! Form::label('finicio', 'Fecha de inicio:') !!}</th>
  <td>{!! $cproyectos->finicio->format('d-m-Y') !!}</td>
</tr>


<!-- Clasificacion Field -->
<tr>
  <th>{!! Form::label('clasificacion', 'Categoría:') !!}</th>
  <td>{!! $cproyectos->clasifica->nombre !!}</td>
</tr>

</tbody>
</table>

    </div>
  </div>
</div>
