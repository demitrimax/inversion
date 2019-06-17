<table class="table table-striped table-bordered detail-view" id="cuentas-table">
 <thead>
   <tr>
     <th>Num</th>
     <th>Fecha</th>
     <th>Monto</th>
     <th>Tipo</th>
     <th>Acciones</th>
   </tr>
 </thead>
   <tbody>
   @foreach($empresas->cuentas as $key=>$cuenta)
     <tr>
       <td>{{$key+1}}</td>
       <td>{{$cuenta->numcuenta }}</td>
       <td>{{ $cuenta->banco->nombrecorto }}</td>
       <td> $saldoencuenta </td>
       <td></td>
     </tr>
     @endforeach
   </tbody>
</table>

@can('operaciones-create')
<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#RegCuenta">Registrar nueva cuenta</button>
@endcan

@can('bcuentas-create')
<div id="RegCuenta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myModalLabel">Registrar Nueva Cuenta</h4>
              </div>
              {!! Form::open(['route' => 'bcuentas.store']) !!}
              <div class="modal-body">
                <div class="row">

                  <!-- Banco Id Field -->
                  {!! Form::hidden('empresa_id', $empresas->id) !!}
                  {!! Form::hidden('redirect', 'empresas.show') !!}
                  <div class="form-group col-sm-6">
                      {!! Form::label('banco_id', 'Banco:') !!}
                      {!! Form::select('banco_id', $bancos, null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione un banco']) !!}
                  </div>

                  <!-- Numcuenta Field -->
                  <div class="form-group col-sm-6">
                      {!! Form::label('numcuenta', 'Número de cuenta:') !!}
                      {!! Form::text('numcuenta', null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Clabeinterbancaria Field -->
                  <div class="form-group col-sm-6">
                      {!! Form::label('clabeinterbancaria', 'Clabe interbancaria:') !!}
                      {!! Form::text('clabeinterbancaria', null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Sucursal Field -->
                  <div class="form-group col-sm-6">
                      {!! Form::label('sucursal', 'Sucursal:') !!}
                      {!! Form::text('sucursal', null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Swift Field -->
                  <div class="form-group col-sm-6">
                      {!! Form::label('swift', 'Swift:') !!}
                      {!! Form::text('swift', null, ['class' => 'form-control']) !!}
                  </div>

              </div>

            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Registrar Operación</button>
              </div>
                {!! Form::close() !!}
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
@endcan
