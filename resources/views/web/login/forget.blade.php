@extends('web.layout')

@section('content')

<section class="sec9" style="background-size: cover;background-position: bottom">
    @include('web.partials.header')
    <div class="container-fluid content" style="height: 100vh !important">
        <div class="row content_">
        </div>
    </div>
</section>

<section class="sec42_2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="tit_registro">
                    <h1>
                        RESTAURAR CONTRASEÑA
                    </h1>
                    <p>
                        Ingresa tu correo electrónico y te enviaremos las instrucciones para restaurar tu contraseña.
                    </p>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-4">
                {!! Form::open(['route' => 'login.forget', 'class' => 'needs-validation', 'novalidate']) !!}
                <div class="alertas_div">
                    @include('web.partials.alert')
                </div>
                <div class="form_registro shadow row">
                    <div class="form-group col-md-12">
                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
                    </div>
                </div>
                <button type="submit" class="btn btn-crear">Restablecer contraseña</button>
                <p class="aviso">
                    <small>Recuerda revisar tu bandeja de spam.</small>
                </p>
                <h2>¿Recordaste tu contraseña?</h2>
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