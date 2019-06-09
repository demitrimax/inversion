<table class="table table-striped table-bordered detail-view" id="empresas-table">
  <tbody>

<!-- Id Field -->
<tr>
  <th>{!! Form::label('id', 'Id:') !!}</th>
  <td>{!! $empresas->id !!}</td>
</tr>


<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{!! $empresas->nombre !!}</td>
</tr>


<!-- Giro Field -->
<tr>
  <th>{!! Form::label('giro', 'Giro:') !!}</th>
  <td>{!! $empresas->giro !!}</td>
</tr>


<!-- Fcreacion Field -->
<tr>
  <th>{!! Form::label('fcreacion', 'Fecha de creación:') !!}</th>
  <td>{!! $empresas->fcreacion !!}</td>
</tr>


<!-- Observaciones Field -->
<tr>
  <th>{!! Form::label('observaciones', 'Observaciones:') !!}</th>
  <td>{!! $empresas->observaciones !!}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{!! $empresas->created_at !!}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{!! $empresas->updated_at !!}</td>
</tr>


<!-- Deleted At Field -->
<tr>
  <th>{!! Form::label('deleted_at', 'Deleted At:') !!}</th>
  <td>{!! $empresas->deleted_at !!}</td>
</tr>

</tbody>
</table>
