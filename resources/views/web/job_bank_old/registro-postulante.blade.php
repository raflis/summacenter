@extends('web.layout')
@section('title', $setting->meta_title[2])
@section('description', $setting->meta_description[2])
@section('keywords', $setting->meta_keyword[2])
@section('content')

<section class="sec9" style="background-size: cover;background-position: bottom">
    @include('web.partials.header')
    <div class="container-fluid content" style="height: 100vh !important">
        <div class="row content_">
        </div>
    </div>
</section>

<section class="sec42">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="tit_registro">
                    <h1>
                        Registrate Aquí
                    </h1>
                    <p>
                        Llena los siguientes datos para la creación de tu cuenta como postulante
                    </p>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-5">
                {!! Form::open(['route' => 'jobbank.person', 'class' => 'needs-validation', 'novalidate']) !!}
                <div class="alertas_div">
                    @include('web.partials.alert')
                </div>
                <div class="form_registro shadow row">
                    <div class="form-group col-md-6">
                        <label for="">Nombres</label>
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Apellidos</label>
                        {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Tipo de documento</label>
                        {{ Form::select('type_document', ['DNI' => 'DNI', 'Carnet de extranjeria' => 'Carnet de extranjeria', 'Pasaporte' => 'Pasaporte'], null, ['class' => 'form-select', 'placeholder' => 'Tipo documento', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Documento</label>
                        {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'N° documento', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Teléfono</label>
                        {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Fecha de nacimiento</label>
                        {{ Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Fecha de nacimiento', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Carrera universitaria</label>
                        {{ Form::text('career', null, ['class' => 'form-control', 'placeholder' => 'Carrera universitaria', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Puesto de trabajo actual</label>
                        {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Puesto de trabajo actual', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Dirección</label>
                        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Email</label>
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-crear">CREAR CUENTA</button>
                <h2>Ya tienes una cuenta?</h2>
                <div class="text-center">
                    <a href="{{ route('bolsa.trabajo') }}" class="back-login">
                        <i class="fa-solid fa-angle-left"></i> Bolsa de trabajo
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection