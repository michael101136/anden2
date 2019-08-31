<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Img</th>
        <th>Principal</th>
        <th>Slug</th>
        <th>Idioma</th>
                <th colspan="1">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tours as $tours)
            <tr>
                <td>{!! $tours->nombre !!}</td>
            <td>
                  <img src="{!! $tours->img !!}" style="height: 56px;">
                
            </td>
            <td>{!! $tours->principal !!}</td>
            <td>{!! $tours->slug !!}</td>
            <td>{!! $tours->languages!!}</td>
                <td>
                    {!! Form::open(['route' => ['tours.destroy', $tours->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tours.show', [$tours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tours.edit', [$tours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>                      
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        <a href="{!! route('tourItinerario', [$tours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Itinerario</a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
