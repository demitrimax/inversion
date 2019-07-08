
@section('css')
<link href="{{asset('airdatepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
@endsection
      <table class="table table-striped table-bordered detail-view" id="movcuentas-table">
       <thead class="bg-primary">
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
             <td>{{ $movimiento->tipo == 'Salida' ? 'Entrada' : 'Salida' }}</td>
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
                    {!! Form::select('cuenta_id', $cuental, null, ['class' => 'form-control', 'required', 'placeholder'=>'Seleccione']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('credito_id', 'Crédito:') !!}
                    {!! Form::select('credito_id', $creditos, null, ['class' => 'form-control', 'placeholder'=>'Seleccione']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('pagoref', 'Pago:') !!}
                    {!! Form::select('pagoref', [], null, ['class' => 'form-control', 'placeholder'=>'Seleccione un pago']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('metpago', 'Método de Pago:') !!}
                    {!! Form::select('metpago', $metpago, null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group col-sm-6">
                    {!! Form::label('fecha', 'Fecha:') !!}
                    {!! Form::date('fecha', null, ['class' => 'form-control datepicker-here', 'required', 'data-language'=>'es', 'data-date-format'=>'yyyy-mm-dd']) !!}
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

@section('scripts')
<script src="{{asset('airdatepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('airdatepicker/dist/js/i18n/datepicker.es.js')}}"></script>
<script>
$('#credito_id').on('change', function(e) {
  //console.log(e);
  var creditoid = e.target.value;
  //ajax
  $.get('{{url('getCreditoPagos')}}/' + creditoid, function(data) {
    //exito al obtener los datos
    console.log(data);
    $('#pagoref').empty();
    $.each(data, function(index, pagos) {
      console.log(pagos);
      $('#pagoref').append('<option value ="' + pagos.id + '">'+pagos.nombre+'</option>' );
    });

  });
});
</script>
@endsection
