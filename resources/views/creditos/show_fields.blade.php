<div class="col-lg-6">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Datos del credito</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered detail-view" id="creditos-table">
              <tbody>

          <!-- Nombre Field -->
          <tr>
            <th>{!! Form::label('nombre', 'Nombre del proyecto:') !!}</th>
            <td>{!! $creditos->nombre !!}</td>
          </tr>


          <!-- Numero Field -->
          <tr>
            <th>{!! Form::label('numero', 'Número:') !!}</th>
            <td>{!! $creditos->numero !!}</td>
          </tr>


          <!-- Finicio Field -->
          <tr>
            <th>{!! Form::label('finicio', 'Fecha de inicio:') !!}</th>
            <td>{!! $creditos->finicio->format('d-m-Y') !!}</td>
          </tr>


          <!-- Ftermino Field -->
          <tr>
            <th>{!! Form::label('ftermino', 'Fecha de termino:') !!}</th>
            <td>{!! $creditos->ftermino->format('d-m-Y') !!}</td>
          </tr>


          <!-- Tasainteres Field -->
          <tr>
            <th>{!! Form::label('tasainteres', 'Tasa de interes:') !!}</th>
            <td>{!! $creditos->tasainteres !!}%</td>
          </tr>


          <!-- Entidadfinan Field -->
          <tr>
            <th>{!! Form::label('entidadfinan', 'Entidad Financiera:') !!}</th>
            <td>{!! $creditos->entidadfinan !!}</td>
          </tr>


          <!-- Diapago Field -->
          <tr>
            <th>{!! Form::label('diapago', 'Día de pago:') !!}</th>
            <td>{!! $creditos->diapago !!}</td>
          </tr>


          <!-- Monto Inicial Field -->
          <tr>
            <th>{!! Form::label('monto_inicial', 'Monto Inicial:') !!}</th>
            <td>{!! number_format($creditos->monto_inicial,2) !!}</td>
          </tr>


          <!-- Fapertura Field -->
          <tr>
            <th>{!! Form::label('fapertura', 'Fecha de apertura:') !!}</th>
            <td>{!! $creditos->fapertura !!}</td>
          </tr>


          <!-- Diascalculo Field -->
          <tr>
            <th>{!! Form::label('diascalculo', 'Días de calculo:') !!}</th>
            <td>{!! $creditos->diascalculo !!} </td>
          </tr>

          <!-- Meses del periodo o pagos-->
          @php
          $meses = $creditos->finicio->diffInMonths($creditos->ftermino); 
          @endphp
          <tr>
            <th>{!! Form::label('meses', 'Plazo:') !!}</th>
            <td>{!! $meses !!} meses</td>
          </tr>


            </tbody>
          </table>
        </div>
    </div>
</div>



