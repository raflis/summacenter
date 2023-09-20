@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec37">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mapa">
                {!! htmlspecialchars_decode($setting->map) !!}
            </div>
            <div class="col-md-6">
                <div class="contacto shadow">
                    <h3>Contáctate</h3>
                    <h2>CON NOSOTROS</h2>
                    <p>
                        Completa el formulario y nos pondremos en contacto rápidamente contigo.
                    </p>
                    <div>
                        @include('web.partials.alert')
                    </div>
                    <form action="{{ route('postContacto') }}" method="POST" class="row needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="from" value="contacto">
                        <div class="form-group col-md-6">
                            <label for="name">Nombres</label>
                            <input type="text" name="name" id="" class="form-control" required>
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Apellidos</label>
                            <input type="text" name="lastname" id="" class="form-control" required>
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Correo electrónico</label>
                            <input type="email" name="email" id="" class="form-control" required>
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">DNI</label>
                            <input type="text" name="document" id="" class="form-control" required>
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Número de teléfono</label>
                            <input type="text" name="telephone" id="" class="form-control" required>
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Necesito apoyo en lo siguiente</label>
                            <textarea name="observation" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Acepto expresamente todos los <a target="_blank" href="{{ route('terminos-y-condiciones') }}">Términos y Condiciones</a>
                            </label>
                            <div class="invalid-feedback">
                                Acepte los términos
                            </div>
                        </div>
                        <div class="form-group col-md-12 text-center">
                            <button type="submit" class="btn btn-enviar">ENVIAR</button>
                        </div>
                    </form>
                    <div class="items">
                        <div class="item">
                            <img src="{{ asset('images/contacto_ubicacion.png') }}" alt="">
                            <div class="text">
                                <p class="t1">
                                    Encuentranos en:
                                </p>
                                <p class="t2">
                                    {{ $setting->address }}
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/contacto_telefono.png') }}" alt="">
                            <div class="text">
                                <p class="t1">Teleféfono:</p>
                                <p class="t2">
                                    {{ $setting->telephone }}<br>
                                    {{ $setting->whatsapp }}
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/contacto_email.png') }}" alt="">
                            <div class="text">
                                <p class="t1">E-mail:</p>
                                <p class="t2">
                                    {{ $setting->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection