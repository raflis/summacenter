@extends('web.layout')

@section('content')

<section class="sec13">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    Egresados 
                </p>
                <p>
                    SUMMA
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb__ pt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Egresados</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text_">
                <div class="text">
                    <h1>
                        TE DAMOS LA BIENVENIDA A EGRESADOS SUMMA
                    </h1>
                    <p>
                        Un espacio creado para fortalecer la comunidad de egresados y donde compartiremos información actualizada del sector laboral. Entérate de las últimas novedades, casos de éxito y beneficios exclusivos para ti.
                    </p>
                    <a href="">
                        Conoce más sobre nuestros<br>Egresados Summa
                        <img src="http://127.0.0.1:8000/images/arrow-right-white.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec53">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 beneficios">
                <h1>
                    BENEFICIOS
                </h1>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado3.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Noticias de Egresados
                            </h3>
                            <p>
                                Entérate de las últimas novedades que tenemos para nuestra comunidad de egresados.
                            </p>
                            <div class="btn-action">
                                <a href="" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado1.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Bolsa de Trabajo
                            </h3>
                            <p>
                                Como <strong>Egresado SUMMA</strong> tienes acceso a la Bolsa de Trabajo para toda la vida. Ingresa hoy y conoce a las empresas que publican sus ofertas laborales con nosotros.
                            </p>
                            <div class="btn-action">
                                <a href="" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado2.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Capacitación continua
                            </h3>
                            <p>
                                Continúa aprendiendo en la Escuela <strong>SUMMA CENTER</strong> donde encontrarás diferentes programas que te ayudarán a potenciar tu perfil profesional.
                                <br>
                                <strong>Nuestra comunidad de egresados tienen un descuento especial de 15% en todos nuestros programas.</strong>
                            </p>
                            <div class="btn-action">
                                <a href="" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec54">
    <div class="container-fluid">
        <div class="row content">
            <h1>
                NOVEDADES
            </h1>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                        <div class="tags">
                            <a href="" class="btn btn-tag">Online</a>
                            <a href="" class="btn btn-tag">SAP</a>
                            <a href="" class="btn btn-tag">Educación</a>
                            <a href="" class="btn btn-tag">Online</a>
                            <a href="" class="btn btn-tag">SAP</a>
                            <a href="" class="btn btn-tag">Educación</a>
                            <a href="" class="btn btn-tag">Online</a>
                            <a href="" class="btn btn-tag">SAP</a>
                            <a href="" class="btn btn-tag">Educación</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 btn-action">
                <a href="{{ route('blog') }}" class="btn btn-vermas">VER MÁS</a>
            </div>
        </div>
    </div>
</section>

@endsection