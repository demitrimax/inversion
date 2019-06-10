<div class="col-lg-6">
    <div class="panel panel-color panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Movimientos de Inversiones</h3>
        </div>
        <div class="panel-body">
          @if($creditos->movcreditos->count()>0)
           <table class="table table-striped table-bordered detail-view" id="corrida-table">
           	<thead>
           		<tr>
           			<th>Num</th>
           			<th>Fecha</th>
           			<th>Monto</th>
           			<th>Tipo</th>
                <th>Empresa</th>
           		</tr>
           	</thead>
              <tbody>
              @foreach($creditos->movcreditos as $key=>$movimiento)
              	<tr>
              		<td>{{$key+1}}</td>
              		<td>{{$movimiento->fecha->format('d-m-Y')}}</td>
              		<td>${{ number_format($movimiento->monto,2) }}</td>
              		<td>{{ $movimiento->tipo }}</td>
                  <td>{{ $movimiento->empresas->nombre }}</td>
              	</tr>
                @endforeach
              </tbody>
          </table>
          @else
          No hay movimientos de inversión registrados.
          @endif

          @can('movcreditos-create')
          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Registrar Inversión </button>
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
                    {!! Form::hidden('tipo', 'Salida') !!}
                    {!! Form::label('empresa', 'Empresa:') !!}
                    {!! Form::select('empresa', $empresas, null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione un proyecto']) !!}
                </div>
                @php
                $tSalidas = 0;
                $tEntradas = 0;
                $monto = $creditos->monto_inicial;
                foreach($creditos->movcreditos as $movimiento)
                {
                  $movimiento->tipo == 'Salida' ? $tSalidas += $movimiento->monto : 0;
                  $movimiento->tipo == 'Entrada'? $tEntradas += $movimiento->monto : 0;
                }
                $saldofinal = $monto - ($tSalidas + $tEntradas);
                @endphp
                <!-- Monto Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('monto', 'Monto:') !!}
                    {!! Form::number('monto', null, ['class' => 'form-control', 'required', 'step'=>'0.01', 'max'=>$saldofinal]) !!}
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
