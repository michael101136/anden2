<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tour Field -->

    <!-- {!! Form::label('id_tour', 'Id Tour:') !!} -->
    @if($opcion==0)
       {!! Form::hidden('id_tour',$id, ['class' => 'form-control']) !!}
     @else
       {!! Form::hidden('id_tour',null, ['class' => 'form-control']) !!}
    @endif

<!-- Id Alojamiento Field -->


<!-- Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia', 'Dia:') !!}
    @if($opcion==0)
        {!! Form::text('dia', $nuevoNumeroDia, ['class' => 'form-control']) !!}
    @else
        {!! Form::text('dia', null, ['class' => 'form-control']) !!}
    @endif
</div>
<div class="form-group col-sm-6">
    <!--{!! Form::label('dia','')!!}-->
</div>
<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('itinerarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>


