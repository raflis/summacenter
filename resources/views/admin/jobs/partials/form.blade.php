<div class="form-group col-md-12">
  <label for=""><strong>Mostrar oferta de trabajo</strong></label> <code>*</code>
  {{ Form::select('status', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'placeholder' => 'Seleccione', 'required']) }}
</div>


<div class="form-group col-sm-6">
  {{ Form::label('name', 'Título del empleo:') }}
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Título del empleo', 'required']) }}
</div>
<div class="form-group col-sm-6">
  {{ Form::label('company', 'Nombre de la empresa:') }}
  {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa', 'required']) }}
</div>
<div class="form-group col-sm-12">
  {{ Form::label('summary', 'Breve introducción:') }}
  {{ Form::textarea('summary', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Breve introducción', 'rows' => 5, 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('department', 'Lugar de trabajo:') }}
  {{ Form::select('department', departments(), null, ['class' => 'custom-select', 'placeholder' => 'Lugar de trabajo', 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('work_modality', 'Modalidad de trabajo:') }}
  {{ Form::select('work_modality', work_modality(), null, ['class' => 'custom-select', 'placeholder' => 'Modalidad de trabajo', 'required']) }}
</div>
<div class="form-group col-sm-4">
  {{ Form::label('workload', 'Carga horaria:') }}
  {{ Form::select('workload', workload(), null, ['class' => 'custom-select', 'placeholder' => 'Carga horaria', 'required']) }}
</div>
<div class="form-group col-sm-12">
  {{ Form::label('description', 'Descripción del empleo (Funciones, Requisitos, Beneficios, Horarios, ...):') }}
  {{ Form::textarea('description', null, ['class' => 'form-control ckeditor5', 'placeholder' => '', 'rows' => 5, 'required']) }}
</div>
<div class="form-group col-sm-12">
  {{ Form::label('email', 'Correo electrónico de contacto:') }}
  {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required', 'readonly']) }}
</div>