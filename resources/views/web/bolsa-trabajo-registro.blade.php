@extends('web.layout')

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
                <div class="form_registro shadow">
                    <form action="" class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Nombre de la empresa">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="RUC">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Nro de contacto">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Nivel de estudios">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Carrera universitaria">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Puesto de trabajo">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                    </form>
                </div>
                <button class="btn btn-crear">CREAR CUENTA</button>
            </div>
        </div>
    </div>
</section>

@endsection