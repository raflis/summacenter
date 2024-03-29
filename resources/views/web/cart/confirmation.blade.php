@extends('web.layout')
@section('title', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('description', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('keywords', 'Gracias por tu compra | SUMMA CENTER LATAM')
@section('content')

<section class="sec9_1" style="background-image: url({{ asset('images/slider-gracias.png') }});">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-11">
                <p class="gracias">
                    <strong>
                        Gracias por tu compra
                    </strong>
                    <br>
                    Nombre y apellido: {{ $recorded->invoice_name }}
                    <br>
                    Número de pedido: {{ $recorded->purchase_number }}
                    <br>
                    Fecha y hora de pedido: {{ \Carbon\Carbon::parse($recorded->transaction_date)->format('d/m/Y H:i:s') }}
                    <br>
                    Importe pagado: {{ $recorded->amount }} {{ $recorded->currency }}
                    <br>
                    Tarjeta usada: {{ $recorded->brand }} {{ $recorded->card }}
                    <br><br>
                    Te hemos enviado más información de tu compra al email {{ $recorded->invoice_email }}
                    <br><br>
                    Summa Center
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec34">
    <div class="container-fluid">
        <div class="row content">
            <h1>
                INFORMACIÓN DESTACADA
            </h1>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/nosotros-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            NOSOTROS
                        </h3>
                        <p>
                            Conoce sobre nuestra visión, misión y valores. 
                        </p>
                    </div>
                    <a href="{{ route('nosotros') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/equipo-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            EQUIPO SUMMA
                        </h3>
                        <p>
                            Conoce la experiencia de nuestros docentes. 
                        </p>
                    </div>
                    <a href="{{ route('equipo') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/metodologia-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            METODOLOGÍA
                        </h3>
                        <p>
                            Conoce nuestros métodos de enseñanza.
                        </p>
                    </div>
                    <a href="{{ route('modelo-educativo') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/programas-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            TODOS LOS PROGRAMAS
                        </h3>
                        <p>
                            Conoce los cursos que potenciarán tu carrera profesional.
                        </p>
                    </div>
                    <a href="{{ route('programas') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/preguntas-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            PREGUNTAS FRECUENTES
                        </h3>
                        <p>
                            Resuelve tus dudas sobre insignias, certificaciones y más.
                        </p>
                    </div>
                    <a href="{{ route('preguntas-frecuentes') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <img src="{{ asset('images/noticias-img.png') }}" alt="">
                    <div class="detail">
                        <h3>
                            NOTICIAS INSTITUCIONALES
                        </h3>
                        <p>
                            Conoce acerca de nuestros eventos y novedades más importantes.
                        </p>
                    </div>
                    <a href="{{ route('blog') }}" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection