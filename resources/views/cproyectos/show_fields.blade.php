<table class="table table-striped table-bordered detail-view" id="cproyectos-table">
  <tbody>
<!-- Id Field -->
<tr>
  <th>{!! Form::label('id', 'Id:') !!}</th>
  <td>{!! $cproyectos->id !!}</td>
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
  <th>{!! Form::label('finicio', 'Finicio:') !!}</th>
  <td>{!! $cproyectos->finicio !!}</td>
</tr>


<!-- Clasificacion Field -->
<tr>
  <th>{!! Form::label('clasificacion', 'Clasificacion:') !!}</th>
  <td>{!! $cproyectos->clasificacion !!}</td>
</tr>

</tbody>
</table>
