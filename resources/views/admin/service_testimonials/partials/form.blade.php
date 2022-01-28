<div class="form-group col-sm-12">
    {{ Form::label('name', 'Nombre:') }} <code>*</code>
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('short_phrase', 'Frase corta:') }} <code>*</code>
  {{ Form::text('short_phrase', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una frase corta']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('description', 'Descripción:') }} <code>*</code>
  {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción', 'rows' => 4]) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el orden']) }}
</div>