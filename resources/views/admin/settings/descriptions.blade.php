@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Meta Descriptions</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Meta Descriptions
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Principal:') }} <code>*</code>
                            {{ Form::text('meta_description[0]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Blog:') }} <code>*</code>
                            {{ Form::text('meta_description[1]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Bolsa de Trabajo:') }} <code>*</code>
                            {{ Form::text('meta_description[2]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Soporte:') }} <code>*</code>
                            {{ Form::text('meta_description[3]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Contacto:') }} <code>*</code>
                            {{ Form::text('meta_description[4]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Nosotros:') }} <code>*</code>
                            {{ Form::text('meta_description[5]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Equipo Summa:') }} <code>*</code>
                            {{ Form::text('meta_description[6]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Modelo Educativo:') }} <code>*</code>
                            {{ Form::text('meta_description[7]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Distinciones:') }} <code>*</code>
                            {{ Form::text('meta_description[8]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Responsabilidad Social - Programa de Becas:') }} <code>*</code>
                            {{ Form::text('meta_description[91]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Responsabilidad Social - Biblioteca Summa:') }} <code>*</code>
                            {{ Form::text('meta_description[92]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Responsabilidad Social - Talleres Gratuitos:') }} <code>*</code>
                            {{ Form::text('meta_description[93]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Responsabilidad Social - Programa de participación:') }} <code>*</code>
                            {{ Form::text('meta_description[94]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Responsabilidad Social - Programa de donaciones:') }} <code>*</code>
                            {{ Form::text('meta_description[95]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Programas:') }} <code>*</code>
                            {{ Form::text('meta_description[10]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Nuestras Certificaciones:') }} <code>*</code>
                            {{ Form::text('meta_description[11]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Insignias Digitales:') }} <code>*</code>
                            {{ Form::text('meta_description[12]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Colección de Insignias:') }} <code>*</code>
                            {{ Form::text('meta_description[13]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Grupo de Excelencia Académica:') }} <code>*</code>
                            {{ Form::text('meta_description[14]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Preguntas Frecuentes:') }} <code>*</code>
                            {{ Form::text('meta_description[15]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Asesoría Especializada:') }} <code>*</code>
                            {{ Form::text('meta_description[16]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('meta_description', 'Descripción para la página Capacitaciones Corporativas:') }} <code>*</code>
                            {{ Form::text('meta_description[17]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
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