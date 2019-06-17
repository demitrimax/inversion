<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Datos de la Cuenta</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered detail-view" id="bcuentas-table">
            <tbody>
                <!-- Id Field -->
                <tr>
                  <th>{!! Form::label('id', 'Id:') !!}</th>
                  <td>{!! $bcuentas->id !!}</td>
                </tr>


                <!-- Banco Id Field -->
                <tr>
                  <th>{!! Form::label('banco_id', 'Banco:') !!}</th>
                  <td>{!! $bcuentas->banco->nombrecorto !!}</td>
                </tr>


                <!-- Numcuenta Field -->
                <tr>
                  <th>{!! Form::label('numcuenta', 'Número de cuenta:') !!}</th>
                  <td>{!! $bcuentas->numcuenta !!}</td>
                </tr>


                <!-- Clabeinterbancaria Field -->
                <tr>
                  <th>{!! Form::label('clabeinterbancaria', 'Clabe interbancaria:') !!}</th>
                  <td>{!! $bcuentas->clabeinterbancaria !!}</td>
                </tr>


                <!-- Sucursal Field -->
                <tr>
                  <th>{!! Form::label('sucursal', 'Sucursal:') !!}</th>
                  <td>{!! $bcuentas->sucursal !!}</td>
                </tr>


                <!-- Empresa Id Field -->
                <tr>
                  <th>{!! Form::label('empresa_id', 'Empresa:') !!}</th>
                  <td><a href="{!! route('empresas.show', [$bcuentas->empresa_id]) !!}">{!! $bcuentas->empresa->nombre !!}</a></td>
                </tr>


                <!-- Swift Field -->
                <tr>
                  <th>{!! Form::label('swift', 'Swift:') !!}</th>
                  <td>{!! $bcuentas->swift !!}</td>
                </tr>

              </tbody>
          </table>
        </div>
    </div>
</div>
