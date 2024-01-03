@extends('web.layout')
@section('title', 'Crear Oferta de Empleo | Summa Center Latam')
@section('description', 'Crear Oferta de Empleo | Summa Center Latam')
@section('keywords', 'Crear Oferta de Empleo | Summa Center Latam')
@section('content')

<section class="sec18">
    @include('web.partials.header')
</section>

<section class="sec67_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('bolsa.index') }}">Bolsa de trabajo</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Crear empleo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec67">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="content_left_create">
                        @include('web.partials.alert')
                        <div class="content">
                            <h2>Crear empleo</h2>
                            <div class="create_form">
                                {!! Form::open(['route' => 'bolsa.store', 'class' => 'row needs-validation', 'novalidate']) !!}

                                <div class="form-group col-sm-12">
                                    {{ Form::label('name', 'Título del empleo:') }} <code>*</code>
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Título del empleo', 'required']) }}
                                </div>

                                <div class="form-group col-sm-12 mt-4">
                                    {{ Form::label('company', 'Nombre de la empresa:') }} <code>*</code>
                                    {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa', 'required']) }}
                                </div>

                                <div class="form-group col-sm-12 mt-4">
                                    {{ Form::label('summary', 'Breve introducción:') }} <code>*</code>
                                    {{ Form::textarea('summary', null, ['class' => 'form-control', 'required']) }}
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio
                                    </div>
                                </div>

                                <div class="form-group col-sm-4 mt-4">
                                    {{ Form::label('department', 'Lugar de trabajo:') }} <code>*</code>
                                    {{ Form::select('department', departments(), null, ['class' => 'form-select', 'placeholder' => 'Seleccione', 'required']) }}
                                </div>

                                <div class="form-group col-sm-4 mt-4">
                                    {{ Form::label('work_modality', 'Modalidad de trabajo:') }} <code>*</code>
                                    {{ Form::select('work_modality', work_modality(), null, ['class' => 'form-select', 'placeholder' => 'Seleccione', 'required']) }}
                                </div>

                                <div class="form-group col-sm-4 mt-4">
                                    {{ Form::label('workload', 'Carga horaria:') }} <code>*</code>
                                    {{ Form::select('workload', workload(), null, ['class' => 'form-select', 'placeholder' => 'Seleccione', 'required']) }}
                                </div>

                                <div class="form-group col-sm-12 mt-4">
                                    {{ Form::label('description', 'Descripción del empleo (Funciones, Requisitos, Beneficios, Horarios, ...):') }} <code>*</code>
                                    {{ Form::textarea('description', null, ['class' => 'form-control', 'required']) }}
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio
                                    </div>
                                </div>

                                <div class="form-group col-sm-12 mt-4">
                                    {{ Form::label('email', 'Correo electrónico de contacto:') }} <code>*</code>
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required']) }}
                                    <small>
                                        Por favor, ingrese la dirección de correo electrónico donde desea recibir las postulaciones de los aplicantes.<br>Este será el medio de contacto principal para la gestión de candidaturas.
                                    </small>
                                </div>

                                <div class="form-group col-sm-12 mb-2">
                                    <small><code>*</code> Campos obligatorios</small>
                                </div>

                                <div class="form-group col-sm-12">
                                    {!! htmlFormSnippet() !!}
                                </div>

                                <div class="form-group col-sm-12 mt-4">
                                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-success py-2 px-3']) !!}
                                    <a class="btn btn-danger py-2 px-3" href="{{ route('bolsa.index') }}">Atrás</a>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="content_right content_right_create">
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[1] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[0] }}" alt="">
                        </div>
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[3] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[2] }}" alt="">
                        </div>
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[5] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[4] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script0')
{!! htmlScriptTagJsApi() !!}
@endsection

@section('script')

<script src="https://cdn.tiny.cloud/1/62j93qi3g0o1s126fsr98izc8kmq51h7e49gq46wiy731igw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#summary',
    menubar: false,
    height: 200,
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | bold italic underline strikethrough | numlist bullist | removeformat',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
  });
  tinymce.init({
    selector: '#description',
    menubar: false,
    height: 400,
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | bold italic underline strikethrough | numlist bullist | removeformat',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
  });
</script>
@endsection