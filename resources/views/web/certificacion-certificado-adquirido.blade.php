@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec0 pt-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Verificar Certificado</li>
                      <li class="breadcrumb-item active" aria-current="page">Certificados Adquiridos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec56">
    <div class="container-fluid">
        <div class="row">
            <div class="titulo">
                <h1>
                    SAP MM Gestión de Logística y
                    Materiales (Usuario Experto) Gold
                </h1>
                <p class="text1">
                    Emitido por <span>SUMMA CENTER</span>
                </p>
                <div class="text2">
                    <p>
                        La persona acreditada posee el nivel de experto en conocimiento y habilidades necesarias para una gestión efectiva en operaciones logísticas y de almacenes en diversos procesos de negocios sobre la plataforma ERP SAP. Permite al participante conocer distintos escenarios logísticos con SAP y aplicar principales transacciones de SAP MM a nivel teórico y practico. Curso SAP enfocado 100% a soluciones del día a día con SAP dentro de grandes empresas.
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="certificado_resultado">
                    <img src="{{ asset('images/certificado_resultado.png') }}" alt="">
                    <div class="text">
                        <p>
                            <strong>Tipo: </strong>Certificación
                        </p>
                        <p>
                            <strong>Nivel: </strong>Usuario Experto
                        </p>
                        <p>
                            <strong>Tiempo: </strong>50 Horas
                        </p>
                        <div class="btn-action">
                            <a href="" class="btn btn-descargar">
                                Descargar
                            </a>
                        </div>
                    </div>
                </div>
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