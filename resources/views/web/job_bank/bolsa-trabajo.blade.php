@extends('web.layout')

@section('content')

<section class="sec9" style="background-size: cover;background-position: bottom">
    @include('web.partials.header')
    <div class="container-fluid content" style="height: 60vh !important">
        <div class="row content_">
        </div>
    </div>
</section>

<section class="sec41">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 login_trabajo_">
                <div class="alertas_div">
                    @include('web.partials.alert')
                </div>
                <div class="login_trabajo">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                Postulante
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Empresa
                            </button>
                        </li>
                      </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="login_trabajo_content shadow">
                                <div class="tit">
                                    <h1>
                                        Bolsa de <br>
                                        <span>TRABAJO</span>
                                    </h1>
                                    <img class="logo" src="{{ asset('images/logo_form.png') }}" alt="">
                                </div>
                                <div class="formulario_trabajo">
                                    <form action="{{ route('login.login.job') }}" class="needs-validation" novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Contraseña*">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-login-trabajo">INICIAR SESIÓN</button>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ route('bolsa.trabajo.registro.postulante') }}" class="btn btn-login-crear">CREAR CUENTA</a>
                                        </div>
                                        <div class="form-group text-center">
                                            {{-- <a href="" class="">¿Olvidaste tu contraseña?</a> --}}
                                            <p>*Campo obligatorio</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="login_trabajo_content">
                                <div class="tit">
                                    <h1>
                                        Bolsa de <br>
                                        <span>TRABAJO</span>
                                    </h1>
                                    <img class="logo" src="{{ asset('images/logo_form.png') }}" alt="">
                                </div>
                                <div class="formulario_trabajo">
                                    <form action="{{ route('login.login.job') }}" class="needs-validation" novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Contraseña*">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-login-trabajo">INICIAR SESIÓN</button>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ route('bolsa.trabajo.registro.empresa') }}" class="btn btn-login-crear">CREAR CUENTA</a>
                                        </div>
                                        <div class="form-group text-center">
                                            {{-- <a href="" class="">¿Olvidaste tu contraseña?</a> --}}
                                            <p>*Campo obligatorio</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection