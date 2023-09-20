@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Configuración</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Configuración
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('address', 'Dirección:') }} <code>*</code>
                          {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese dirección', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('telephone', 'Teléfono:') }} <code>*</code>
                            {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese teléfono', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('email', 'Email:') }} <code>*</code>
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese email', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('whatsapp', 'Whatsapp:') }} <code>*</code>
                            {{ Form::text('whatsapp', null, ['class' => 'form-control', 'placeholder' => 'Ingrese whatsapp', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('facebook', 'Facebook:') }} <code>*</code>
                            {{ Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Ingrese link de facebook', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('instagram', 'Instagram:') }} <code>*</code>
                            {{ Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Ingrese link de instagram', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('linkedin', 'Linkedin:') }} <code>*</code>
                            {{ Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => 'Ingrese link de linkedin', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('youtube', 'Youtube:') }} <code>*</code>
                            {{ Form::text('youtube', null, ['class' => 'form-control', 'placeholder' => 'Ingrese link de youtube', 'required']) }}
                        </div>
                        <div class="form-group col-sm-6">
                            {{ Form::label('button_name', 'Nombre del botón:') }} <code>*</code>
                            {{ Form::text('button_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del botón', 'required']) }}
                        </div>
                        <div class="form-group col-sm-6">
                            {{ Form::label('button_link', 'Link del botón:') }} <code>*</code>
                            {{ Form::text('button_link', null, ['class' => 'form-control', 'placeholder' => 'Link del botón', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('map', 'Mapa de contacto:') }}
                            {{ Form::textarea('map', null, ['class' => 'form-control', 'placeholder' => 'Mapa de contacto', 'rows' => 4]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('script', 'Script Javascript:') }}
                            {{ Form::textarea('script', null, ['class' => 'form-control', 'placeholder' => 'Script', 'rows' => 20]) }}
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