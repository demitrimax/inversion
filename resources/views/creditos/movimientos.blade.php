<div class="col-lg-6">
    <div class="panel panel-color panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Movimientos del credito</h3>
        </div>
        <div class="panel-body">
           <table class="table table-striped table-bordered detail-view" id="corrida-table">
           	<thead>
           		<tr>
           			<th>Num</th>
           			<th>Fecha</th>
           			<th>Monto</th>
           			<th>Tipo</th>
           		</tr>
           	</thead>
              <tbody>
              @foreach($creditos->movcreditos as $key=>$movimiento)
              	<tr>
              		<td>{{$key+1}}</td>
              		<td>{{$movimiento->fecha->format('d-m-Y')}}</td>
              		<td>${{ number_format($movimiento->monto,2) }}</td>
              		<td>{{ $movimiento->tipo }}</td>
              	</tr>
                @endforeach
              </tbody>
          </table>

        </div>
    </div>
</div>
