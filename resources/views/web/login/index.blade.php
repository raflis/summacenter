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
                <div class="login_trabajo">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="login_trabajo_content shadow">
                                <div class="tit">
                                    <h1 class="mt-4">
                                        INICIO DE SESIÓN
                                    </h1>
                                </div>
                                <div class="alertas_div">
                                    @include('web.partials.alert')
                                </div>
                                <div class="formulario_trabajo">
                                    <form action="{{ route('login.login') }}" class="needs-validation" novalidate method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Contraseña *" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-login-trabajo">INICIAR SESIÓN</button>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ route('login.create') }}" class="btn btn-login-crear">CREAR CUENTA</a>
                                        </div>
                                        <div class="form-group text-center">
                                            <a href="{{ route('login.forget') }}" class="">¿Olvidaste tu contraseña?</a>
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