<div class="col-lg-6">
    <div class="panel panel-color panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Corrida Financiera</h3>
        </div>
        <div class="panel-body">
           <table class="table table-striped table-bordered detail-view" id="corrida-table">
           	<thead>
           		<tr>
           			<th>Num</th>
           			<th>Fecha</th>
           			<th>Capital</th>
           			<th>Interes</th>
           			<th>IVA Interes</th>
           			<th>Total</th>
           		</tr>
           	</thead>
              <tbody>
              	@php
					$primerpagfecha = $creditos->finicio->addMonth();
					$ultimopagfecha = $creditos->ftermino;
					$linea = 0;
					$monto = $creditos->monto_inicial;
					$tasa = $creditos->tasainteres;
					$numdias = $creditos->finicio->diffInDays($creditos->ftermino);
					$numpagos = $creditos->finicio->diffInMonths($creditos->ftermino);
					//echo $numpagos;
          //cantidad final con el interes de la tasa
          $montofinal = $monto * (($tasa/100)+1);
					$pagofijo = $monto / $numpagos;
					$interesi = $pagofijo*($tasa/100);
					$interes = 0;
					$total = 0;
              	@endphp

              	@for($i = $primerpagfecha; $i <= $ultimopagfecha; $i->addMonth() )
              	<tr>
              		<td>{{$linea+=1}}</td>
              		<td>{{$i->format('d-m-Y')}}</td>
              		<td>{{ number_format($pagofijo = ($pagofijo - $interes),2) }}</td>
              		<td>{{ number_format($interes = $pagofijo*($tasa/100),2) }}</td>
              		<td>{{ number_format($iva = ($pagofijo*($tasa/100)*0.16),2) }}</td>
              		<td>{{ number_format($total = ($monto +($interes + $iva)) - ($pagofijo),2) }}</td>
              	</tr>
              	@endfor
              </tbody>
          </table>
          @can('movcreditos-create')
          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Registrar Movimiento </button>
          @endcan
        </div>
    </div>
</div>

@can('movcreditos-create')
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myModalLabel">Registrar movimiento</h4>
              </div>
              {!! Form::open(['route' => 'movimiento.store']) !!}
              <div class="modal-body">
                <div class="row">
                <!-- Tipo Field -->
                <div class="form-group col-sm-6">
                    {!! Form::hidden('credito_id', $creditos->id) !!}
                    {!! Form::label('tipo', 'Tipo:') !!}
                    {!! Form::select('tipo', ['Entrada'=>'Entrada', 'Salida'=>'Salida'], 'Salida', ['class' => 'form-control', 'required']) !!}
                </div>

                <!-- Monto Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('monto', 'Monto:') !!}
                    {!! Form::number('monto', null, ['class' => 'form-control', 'required', 'step'=>'0.01']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('fecha', 'Fecha:') !!}
                    {!! Form::date('fecha', Date('Y-m-d'), ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-12">
                    {!! Form::label('comentario', 'Comentario:') !!}
                    {!! Form::textarea('comentario', null, ['class' => 'form-control']) !!}
                </div>
              </div>

            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Registrar movimiento</button>
              </div>
                {!! Form::close() !!}
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
  @endcan
