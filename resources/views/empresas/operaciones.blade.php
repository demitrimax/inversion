
      @if($empresas->operaciones->count()>0)
      <table class="table table-striped table-bordered detail-view" id="corrida-table">
       <thead class="bg-primary">
         <tr>
           <th>Num</th>
           <th>Fecha</th>
           <th>Monto</th>
           <th>Tipo</th>
           <th>Cuenta</th>
           <th>Acciones</th>
         </tr>
       </thead>
         <tbody>
         @foreach($empresas->operaciones->slice(0,10) as $key=>$operacion)
           <tr>
             <td>{{$key+1}}</td>
             <td>{{$operacion->created_at->format('d-m-Y')}}</td>
             <td>${{ number_format($operacion->monto,2) }}</td>
             <td>{{ $operacion->tipo }}</td>
             <td>{{ $operacion->cuenta->nomcuenta }}</td>
             <td></td>
           </tr>
           @endforeach
         </tbody>
     </table>
     @else
     No Existen Operaciones Registradas<br>
     @endif
     @can('operaciones-create')
     <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#RegOperacion">Registrar Operación </button>
     @endcan


@can('operaciones-create')
<div id="RegOperacion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <h4 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="myModalLabel">Registrar Operación</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              {!! Form::open(['route' => 'operacion.store']) !!}
              <div class="modal-body">
                <div class="row">
                <!-- Tipo Field -->

                @php
                $saldofinal = abs($empresas->saldoaldia);
                @endphp

                <div class="form-group col-sm-6">
                    {!! Form::label('cuenta_id', 'Cuenta:') !!}
                    {!! Form::select('cuenta_id', $cuental, null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione']) !!}
                </div>


                <div class="form-group col-sm-6">
                    {!! Form::hidden('empresa_id', $empresas->id) !!}
                    {!! Form::label('tipo', 'Tipo:') !!}
                    {!! Form::select('tipo', ['Salida'=>'Cargo','Entrada'=>'Abono'], null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione']) !!}
                </div>

                <!-- Monto Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('monto', 'Monto:') !!}
                    {!! Form::number('monto', null, ['class' => 'form-control', 'required', 'step'=>'0.01', 'max'=>$saldofinal, 'min'=>0]) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('metpago', 'Método de Pago:') !!}
                    {!! Form::select('metpago', $metpago, null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('proveedor', 'Proveedor:') !!}
                    {!! Form::select('proveedor', $proveedores, null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('numfactura', '# de Factura:') !!}
                    {!! Form::text('numfactura', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-12">
                    {!! Form::label('concepto', 'Concepto:') !!}
                    {!! Form::text('concepto', null, ['class' => 'form-control maxlen', 'required', 'maxlength'=>'50']) !!}
                </div>

                <div class="form-group col-sm-12">
                    {!! Form::label('comentario', 'Comentario:') !!}
                    {!! Form::textarea('comentario', null, ['class' => 'form-control']) !!}
                </div>
              </div>

            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Registrar Operación</button>
              </div>
                {!! Form::close() !!}
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
@endcan
