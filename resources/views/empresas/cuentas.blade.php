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
