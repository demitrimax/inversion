
      <table class="table table-striped table-bordered detail-view" id="corrida-table">
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
         foreach($empresas->movcreditos as $key=>$movimiento)
           <tr>
             <td>$key+1</td>
             <td>$movimiento->fecha->format('d-m-Y')</td>
             <td>$ number_format($movimiento->monto,2) </td>
             <td> $movimiento->tipo = 'Salida' ? 'Entrada' : 'Salida' </td>
             <td></td>
           </tr>
           endforeach
         </tbody>
     </table>
