@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec29">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 cart-left">
                <div class="tit">
                    <h1>
                        <img src="{{ asset('images/formaspago.png') }}" alt="">
                        Formas de Pago
                    </h1>
                    <p>
                        <strong>PAGAR</strong> a través de <strong>nuestro sitio web</strong>
                        con los siguientes medios de pago
                    </p>
                </div>
                <div class="tarjetas">
                    <h2>
                        TARJETAS:
                    </h2>
                    <div class="tarjetas-img tarjetas-img1">
                        <div class="img1">
                            <img src="{{ asset('images/visa.png') }}" alt="">
                            <img src="{{ asset('images/mastercard.png') }}" alt="">
                            <img src="{{ asset('images/american.png') }}" alt="">
                            <img src="{{ asset('images/diners.png') }}" alt="">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('images/flecha-derecha.png') }}" alt="">
                        </div>
                    </div>
                    <h2>
                        PAYPAL:
                    </h2>
                    <div class="tarjetas-img">
                        <div class="img3">
                            <img src="{{ asset('images/paypal.png') }}" alt="">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('images/flecha-derecha.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 cart-right">
                <div class="content">
                    <div class="items">
                        <div class="item">
                            <div class="detail-left">
                                <div class="image">
                                    <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h3>
                                        Curso Sap s/4hana mm
                                    </h3>
                                    <p>
                                        Por George Henríquez
                                    </p>
                                </div>
                            </div>
                            <div class="detail-right">
                                <div class="price">
                                    <div class="price-before">
                                        S/ 1000
                                    </div>
                                    <div class="price-now">
                                        S/ 700
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="detail-left">
                                <div class="image">
                                    <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h3>
                                        Curso Sap s/4hana mm
                                    </h3>
                                    <p>
                                        Por George Henríquez
                                    </p>
                                </div>
                            </div>
                            <div class="detail-right">
                                <div class="price">
                                    <div class="price-before">
                                        S/ 1000
                                    </div>
                                    <div class="price-now">
                                        S/ 700
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subtotal">
                        <div class="item">
                            <p>Subtotal</p>
                            <p>S/ 1900</p>
                        </div>
                        <div class="item">
                            <div class="envios">
                                Envíos <div class="signo">?</div>
                            </div>
                            <p>Calculado en el siguiente paso</p>
                        </div>
                    </div>
                    <div class="total">
                        <div class="price">
                            <div class="price-left">
                                <p>Total</p>
                                <p>Incluye S/ 28,27 de impuestos</p>
                            </div>
                            <div class="price-right">
                                S/ 1900
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('checkout') }}" class="btn btn-pagar">PAGAR</a>
                        </div>
                    </div>
                    <div class="promo">
                        <h3>Promociones</h3>
                        <div class="info">
                            <span class="close">X</span>
                            <span class="text">Se ha aplicado <strong>DESCSUMMA</strong></span>
                        </div>
                        <form action="">
                            <input type="text" name="" class="form-control">
                            <button class="btn btn-cupon">Aplicar</button>
                        </form>
                        <p>
                            El código de cupón introducido no es válido para este curso. ¿Es posible que hayas
                            utilizado el código de cupón equivocado?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    PROGRAMAS QUE TE PUEDEN INTERESAR
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-cursos" class="owl-carousel">
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-logistica.png') }}" alt="">
                                <span>
                                    Operaciones y Logística
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    Logístico
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-mantenimiento.png') }}" alt="">
                                <span>
                                    Mantenimiento
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    Minero
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-produccion.png') }}" alt="">
                                <span>
                                    Producción
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    de Mantenimiento
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-recursos-humanos.png') }}" alt="">
                                <span>
                                    Talento Humano
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    de Recursos Humanos
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection