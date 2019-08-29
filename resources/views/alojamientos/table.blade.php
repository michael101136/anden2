<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Id Ubigeo</th>
        <th>Id Categoria</th>
        <th>Id Tipo Alojamiento</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alojamientos as $alojamiento)
            <tr>
                <td>{!! $alojamiento->nombre !!}</td>
            <td>{!! $alojamiento->departamento !!}</td>
            <td>{!! $alojamiento->nameCategoria !!}</td>
            <td>{!! $alojamiento->nameTipoAlo !!}</td>
                <td>
                    {!! Form::open(['route' => ['alojamientos.destroy', $alojamiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('alojamientos.show', [$alojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('alojamientos.edit', [$alojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
