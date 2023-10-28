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

<section class="sec42_2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="tit_registro">
                    <h1>
                        RESTAURAR CONTRASEÑA
                    </h1>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-4">
                {!! Form::open(['route' => 'login.reset', 'class' => 'needs-validation', 'novalidate']) !!}
                <div class="alertas_div">
                    @include('web.partials.alert')
                </div>
                {{ Form::hidden('email', $email) }}
                <div class="form_registro shadow row">
                    <div class="form-group col-md-12">
                        {{ Form::password('newpassword', ['class' => 'form-control', 'placeholder' => 'Nueva contraseña', 'required']) }}
                    </div>
                    <div class="form-group col-md-12">
                        {{ Form::password('renewpassword', ['class' => 'form-control', 'placeholder' => 'Repite contraseña', 'required']) }}
                    </div>
                </div>
                <button type="submit" class="btn btn-crear">Restaurar contraseña</button>
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