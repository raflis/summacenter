@extends('web.layout')

@section('content')

<section class="sec13">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-8">
                <p>
                    RECONOCIMIENTO A LA 
                </p>
                <p>
                    EXCELENCIA ACADÉMICA (REA)
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_ pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Certificado</li>
                      <li class="breadcrumb-item active" aria-current="page">Grupo de Excelencia Académica</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec62">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="detail">
                    <div class="detail_left">
                        <h1>
                            Summa Center inicia el Programa de Reconocimiento a la Excelencia Académica (REA)
                        </h1>
                        <p>
                            Distinción que busca premiar a los estudiantes con calificaciones sobresalientes en nuestras capacitaciones. Este Reconocimiento a la Excelencia Académica (REA) se otorga a los estudiantes de Summa Center cuyo promedio final ponderado sea mayor o igual a 17.00 puntos en su capacitación.
                        </p>
                    </div>
                    <div class="detail_right">
                        <img src="{{ asset('images/img-reconocimiento.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 items_">
                <h1>
                    BENEFICIOS
                </h1>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-grupo1.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                <strong>Certificaciones
                                internacionales</strong> que 
                                respaldan el logro
                                sobresaliente del 
                                estudiante
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-grupo2.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                <strong>Becas y
                                financiamientos</strong>
                                especiales a nuevoS
                                cursos
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-grupo3.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Participación en
                                <strong>videoconferencias
                                gratuitas</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0 bg1">
                <img class="reco1" src="{{ asset('images/imagen1-reco.png') }}" alt="">
                <img class="reco2" src="{{ asset('images/imagen2-reco.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec51">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    CAPACITACIONES QUE TE PUEDEN INTERESAR
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