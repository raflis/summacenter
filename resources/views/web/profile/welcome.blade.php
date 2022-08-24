@extends('web.layout')

@section('content')

<section class="sec0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="welcome">
                    <h1>
                        ¡Hola {{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->lastname) }}!
                    </h1>
                    <p>
                        Desde el panel de control de su cuenta, puede ver sus pedidos recientes, editar su contraseña y los detalles de su cuenta.
                    </p>
                    <a href="{{ route('products') }}">Iniciar mi compra</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection