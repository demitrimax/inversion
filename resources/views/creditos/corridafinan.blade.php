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
        
        </div>
    </div>
</div>
