@extends('web.layout')
@section('title', 'Inicio de sesión | SUMMA CENTER LATAM')
@section('description', 'Inicio de sesión | SUMMA CENTER LATAM')
@section('keywords', 'Inicio de sesión | SUMMA CENTER LATAM')
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
                        llena los siguientes datos para la creación de tu cuenta
                    </p>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-4">
                {!! Form::open(['route' => 'login.store', 'class' => 'needs-validation', 'novalidate']) !!}
                <div class="alertas_div">
                    @include('web.partials.alert')
                </div>
                <div class="form_registro shadow row">
                    <div class="form-group col-md-6">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::select('type_document', ['DNI' => 'DNI', 'Carnet de extranjeria' => 'Carnet de extranjeria', 'Pasaporte' => 'Pasaporte'], null, ['class' => 'form-select', 'placeholder' => 'Tipo documento', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'N° documento', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-crear">CREAR CUENTA</button>
                <h2>Ya tienes una cuenta?</h2>
                <div class="text-center">
                    <a href="{{ route('login.index') }}" class="back-login">
                        <i class="fa-solid fa-angle-left"></i> Iniciar sesión
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection