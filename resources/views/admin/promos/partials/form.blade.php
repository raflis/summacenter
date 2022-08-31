<div class="form-group col-sm-4">
  {{ Form::label('name', 'Código del descuento:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Código del descuento', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('start', 'Fecha de inicio:') }} <code>*</code>
  {{ Form::date('start', null, ['class' => 'form-control', 'placeholder' => 'Fecha de inicio', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('end', 'Fecha de fin:') }} <code>*</code>
  {{ Form::date('end', null, ['class' => 'form-control', 'placeholder' => 'Fecha de fin', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('discount', 'Descuento [0 -100%]:') }} <code>*</code>
  {{ Form::number('discount', null, ['class' => 'form-control', 'placeholder' => 'Descuento [0 -100%]', 'required', 'min' => 0, 'max' => 100]) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('active', '¿Activo?:') }} <code>*</code>
  {{ Form::select('active', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control', 'required']) }}
</div>

<div class="col-sm-4"></div>
