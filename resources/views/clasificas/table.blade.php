<table class="table table-responsive" id="clasificas-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clasificas as $clasifica)
        <tr>
            <td>{!! $clasifica->nombre !!}</td>
            <td>{!! $clasifica->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['clasificas.destroy', $clasifica->id], 'method' => 'delete', 'id'=>'form'.$clasifica->id]) !!}
                <div class='btn-group'>
                    <a href="{!! route('clasificas.show', [$clasifica->id]) !!}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @can('clasificas-edit')
                    <a href="{!! route('clasificas.edit', [$clasifica->id]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endcan
                    @can('clasificas-delete')
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-xs', 'onclick' => "ConfirmDelete($clasifica->id)"]) !!}
                    @endcan
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@section('scripts')
<script>
function ConfirmDelete(id) {
  swal.fire({
        title: '¿Estás seguro?',
        text: 'Estás seguro de borrar este elemento.',
        type: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        }).then((result) => {
  if (result.value) {
    document.forms['form'+id].submit();
  }
})
}
</script>
@endsection
