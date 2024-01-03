<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre de la oferta:') }}
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la oferta', 'required']) }}
</div>
<div class="form-group col-sm-3">
  {{ Form::label('job_type', 'Tipo de empleo:') }}
  {{ Form::select('job_type', job_types(), null, ['class' => 'form-select', 'placeholder' => 'Tipo de empleo', 'required']) }}
</div>
<div class="form-group col-sm-3">
  {{ Form::label('salary', 'Salario:') }}
  {{ Form::text('salary', null, ['class' => 'form-control', 'placeholder' => 'Salario', 'required']) }}
</div>
<div class="form-group col-sm-12">
  {{ Form::label('title', 'Texto de vista previa:') }}
  {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Texto de vista previa', 'maxlength' => 250, 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('department', 'Departamento:') }}
  {{ Form::select('department', departments(), null, ['class' => 'form-select', 'placeholder' => 'Departamento', 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('address', 'Dirección:') }}
  {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('end_offer', 'Fecha de termino de la oferta:') }}
  {{ Form::date('end_offer', null, ['class' => 'form-control', 'placeholder' => 'Fecha de termino de la oferta', 'required']) }}
</div>
<div class="form-group col-sm-12">
  {{ Form::label('requirements', 'Requisitos:') }}
  {{ Form::textarea('requirements', null, ['class' => 'form-control', 'placeholder' => 'Requisitos', 'rows' => 10, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('responsibilities', 'Responsabilidades:') }}
  {{ Form::textarea('responsibilities', null, ['class' => 'form-control', 'placeholder' => 'Responsabilidades', 'rows' => 10, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('benefits', 'Beneficios:') }}
  {{ Form::textarea('benefits', null, ['class' => 'form-control', 'placeholder' => 'Beneficios', 'rows' => 10, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('detail', 'Detalle extra:') }}
  {{ Form::textarea('detail', null, ['class' => 'form-control', 'placeholder' => 'Detalle extra', 'rows' => 10, 'required']) }}
</div>

