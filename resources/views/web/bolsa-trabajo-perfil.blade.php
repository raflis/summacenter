@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="profile">
                    <div class="dropdown">
                        <a class="profile_user" id="dropdownMenuButton00" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/profile.png') }}" alt="">
                            <p>
                                Betzabeth Alexandra Fernandez Robles
                            </p>
                        </a>
                        <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton00">
                            <li>
                                <a class="dropdown-item active" href="{{ route('bolsa.trabajo.perfil') }}">
                                    <img src="{{ asset('images/icon-profile.png') }}" alt=""> Perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('bolsa.trabajo.configuracion') }}">
                                    <img src="{{ asset('images/icon-configuration.png') }}" alt=""> Configuración
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="content">
                    <div class="content_item">
                        <h1>
                            Información Personal
                        </h1>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="">Nombres - obligatorio</label>
                                    <input type="text" class="form-control" placeholder="Nombres">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Apellidos - obligatorio</label>
                                    <input type="text" class="form-control" placeholder="Apellidos">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Email - obligatorio</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Número de teléfono - obligatorio</label>
                                    <input type="text" class="form-control" placeholder="+51 926 419 764">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Resumen</label>
                                    <textarea class="form-control" placeholder="" rows=6></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Ciudad - obligatorio</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">Lima</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Código postal</label>
                                    <input type="text" class="form-control" placeholder="Código postal">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Información de contacto</label>
                                    <div class="info">
                                        <img src="{{ asset('images/icon-lock.png') }}" alt="">
                                        <p>
                                            Solo proporcionamos tu dirección de email y tu número de teléfono a las
                                            empresas a las que respondes o te postulas.
                                        </p>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Llamar y enviar mensajes de texto a este número de teléfono
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <p class="info2">
                                        Al enviar el formulario con esta casilla marcadda, acepto recibir llamadas (incluidas
                                        llamadas en vivo, automáticas o grabadas), mensajes de texto y mensajes de este
                                        es un número de teléfono celular inalámbrico.
                                    </p>
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">GUARDAR</button>
                                    <a href="" class="btn btn-cancelar">CANCELAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Público
                    </label>
                    <p>
                        Las empresas que buscan
                        candidatos pueden encontrar
                        información sobre tu CV y tu perfil en
                        Summa, de acuerdo con nuestros
                        términos.
                    </p>
                </div>
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Privado
                    </label>
                    <p>
                        Las empresas no pueden encontrar 
                        tu CV en una búsqueda de Summa.
                        Esto no afecta  las postulaciones
                        anteriores ni evita que las empresas
                        a las que respondiste te conta
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection