
      <table class="table table-striped table-bordered detail-view" id="movcuentas-table">
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
         @foreach($empresas->cuentas as $cuentas)
          @foreach($cuentas->movcreditos as $key=>$movimiento)
           <tr>
             <td>{{$key+1}}</td>
             <td>{{$movimiento->fecha->format('d-m-Y')}}</td>
             <td>${{number_format($movimiento->monto,2) }}</td>
             <td>{{ $movimiento->tipo = 'Salida' ? 'Entrada' : 'Salida' }}</td>
             <td></td>
           </tr>
            @endforeach
           @endforeach
         </tbody>
     </table>

     @can('movcreditos-create')
     <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#MovInver">Registrar pago de inversión </button>
     @endcan

@can('movcreditos-create')
<div id="MovInver" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <h4 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="myModalLabel">Registrar pago de Inversión</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              {!! Form::open(['route' => 'credito.pay']) !!}
              <div class="modal-body">
                <div class="row">
                <!-- Tipo Field -->

                @php
                $saldofinal = abs($empresas->saldoaldia);
                @endphp
                {!! Form::hidden('empresa_id', $empresas->id) !!}
                {!! Form::hidden('concepto', 'pago credito') !!}
                <div class="form-group col-sm-6">
                    {!! Form::label('cuenta_id', 'Cuenta:') !!}
                    {!! Form::select('cuenta_id', $empresas->cuentas->pluck('nomcuentasaldo','id'), null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('credito_id', 'Crédito:') !!}
                    {!! Form::select('credito_id', $creditos, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('concepto', 'Referencia:') !!}
                    {!! Form::text('concepto', null, ['class' => 'form-control', 'maxlength'=>'']) !!}
                </div>

                <!-- Monto Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('monto', 'Monto:') !!}
                    {!! Form::number('monto', null, ['class' => 'form-control', 'required', 'step'=>'0.01', 'max'=>$saldofinal, 'min'=>0]) !!}
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
