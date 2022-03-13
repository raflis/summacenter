@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec37">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.139594027511!2d-76.99606884202032!3d-12.161385997847761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b83a6e47378b%3A0x55f5cde618942060!2sJir%C3%B3n%20las%20Gaviotas%201957-1779%2C%20Santiago%20de%20Surco%2015054!5e0!3m2!1ses!2spe!4v1644994372417!5m2!1ses!2spe" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-12">
                <div class="contacto shadow">
                    <h3>Contáctate</h3>
                    <h2>CON NOSOTROS</h2>
                    <p>
                        Completa el formulario y nos pondremos en contacto rápidamente contigo.
                    </p>
                    <form action="" class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nombre completo</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Correo electrónico</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">DNI</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Número de teléfono</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Necesito apoyo en lo siguiente</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Necesito apoyo en lo siguiente</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Acepto expresamente todos los Términos y condiciones
                            </label>
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
                                    Calle Germán Schreiber
                                    Gulsmanco 246 San Isidro,
                                    cruce con Canaval y
                                    Moreyra
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/contacto_telefono.png') }}" alt="">
                            <div class="text">
                                <p class="t1">Teleféfono:</p>
                                <p class="t2">
                                    932 490 078 <br>
                                    +51 932 490 078
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/contacto_email.png') }}" alt="">
                            <div class="text">
                                <p class="t1">E-mail:</p>
                                <p class="t2">
                                    coordinacion@summacenter.net
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