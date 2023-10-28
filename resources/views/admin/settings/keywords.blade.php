@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Meta Keywords</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Meta Keywords (separar el keyword con comas ,)
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Principal:') }} <code>*</code>
                            {{ Form::text('meta_keyword[0]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Blog:') }} <code>*</code>
                            {{ Form::text('meta_keyword[1]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Bolsa de Trabajo:') }} <code>*</code>
                            {{ Form::text('meta_keyword[2]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Soporte:') }} <code>*</code>
                            {{ Form::text('meta_keyword[3]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Contacto:') }} <code>*</code>
                            {{ Form::text('meta_keyword[4]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Nosotros:') }} <code>*</code>
                            {{ Form::text('meta_keyword[5]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Equipo Summa:') }} <code>*</code>
                            {{ Form::text('meta_keyword[6]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Modelo Educativo:') }} <code>*</code>
                            {{ Form::text('meta_keyword[7]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Distinciones:') }} <code>*</code>
                            {{ Form::text('meta_keyword[8]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Responsabilidad Social - Programa de Becas:') }} <code>*</code>
                            {{ Form::text('meta_keyword[91]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Responsabilidad Social - Biblioteca Summa:') }} <code>*</code>
                            {{ Form::text('meta_keyword[92]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Responsabilidad Social - Talleres Gratuitos:') }} <code>*</code>
                            {{ Form::text('meta_keyword[93]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Responsabilidad Social - Programa de participación:') }} <code>*</code>
                            {{ Form::text('meta_keyword[94]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Responsabilidad Social - Programa de donaciones:') }} <code>*</code>
                            {{ Form::text('meta_keyword[95]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Programas:') }} <code>*</code>
                            {{ Form::text('meta_keyword[10]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Nuestras Certificaciones:') }} <code>*</code>
                            {{ Form::text('meta_keyword[11]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Insignias Digitales:') }} <code>*</code>
                            {{ Form::text('meta_keyword[12]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Colección de Insignias:') }} <code>*</code>
                            {{ Form::text('meta_keyword[13]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Grupo de Excelencia Académica:') }} <code>*</code>
                            {{ Form::text('meta_keyword[14]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Preguntas Frecuentes:') }} <code>*</code>
                            {{ Form::text('meta_keyword[15]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Asesoría Especializada:') }} <code>*</code>
                            {{ Form::text('meta_keyword[16]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_keyword', 'Keyword para la página Capacitaciones Corporativas:') }} <code>*</code>
                            {{ Form::text('meta_keyword[17]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 my-4 px-0">
                    {!! Form::submit('Actualizar cambios',['class'=>'btn btn-success btn-sm py-2 px-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection