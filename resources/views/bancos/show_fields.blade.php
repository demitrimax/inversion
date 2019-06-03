<div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Panel Primary</h3>
                                        </div>
                                        <div class="panel-body">
                                            
<table class="table table-striped table-bordered detail-view" id="bancos-table">
  <tbody>
<!-- Id Field -->
<tr>
  <th>{!! Form::label('id', 'Id:') !!}</th>
  <td>{!! $bancos->id !!}</td>
</tr>


<!-- Nombre Field -->
<tr>
  <th>{!! Form::label('nombre', 'Nombre:') !!}</th>
  <td>{!! $bancos->nombre !!}</td>
</tr>


<!-- Denominacionsocial Field -->
<tr>
  <th>{!! Form::label('denominacionsocial', 'Denominacionsocial:') !!}</th>
  <td>{!! $bancos->denominacionsocial !!}</td>
</tr>


<!-- Nombrecorto Field -->
<tr>
  <th>{!! Form::label('nombrecorto', 'Nombrecorto:') !!}</th>
  <td>{!! $bancos->nombrecorto !!}</td>
</tr>


<!-- Rfc Field -->
<tr>
  <th>{!! Form::label('RFC', 'Rfc:') !!}</th>
  <td>{!! $bancos->RFC !!}</td>
</tr>


<!-- Entidad Field -->
<tr>
  <th>{!! Form::label('Entidad', 'Entidad:') !!}</th>
  <td>{!! $bancos->Entidad !!}</td>
</tr>


<!-- Grupofinancierto Field -->
<tr>
  <th>{!! Form::label('grupofinancierto', 'Grupofinancierto:') !!}</th>
  <td>{!! $bancos->grupofinancierto !!}</td>
</tr>


<!-- Paginainternet Field -->
<tr>
  <th>{!! Form::label('paginainternet', 'Paginainternet:') !!}</th>
  <td>{!! $bancos->paginainternet !!}</td>
</tr>


<!-- Logo Field -->
<tr>
  <th>{!! Form::label('logo', 'Logo:') !!}</th>
  <td>{!! $bancos->logo !!}</td>
</tr>


<!-- Email Field -->
<tr>
  <th>{!! Form::label('email', 'Email:') !!}</th>
  <td>{!! $bancos->email !!}</td>
</tr>


<!-- Created At Field -->
<tr>
  <th>{!! Form::label('created_at', 'Created At:') !!}</th>
  <td>{!! $bancos->created_at !!}</td>
</tr>


<!-- Updated At Field -->
<tr>
  <th>{!! Form::label('updated_at', 'Updated At:') !!}</th>
  <td>{!! $bancos->updated_at !!}</td>
</tr>


<!-- Deleted At Field -->
<tr>
  <th>{!! Form::label('deleted_at', 'Deleted At:') !!}</th>
  <td>{!! $bancos->deleted_at !!}</td>
</tr>
</tbody>
</table>

</div>
</div>
