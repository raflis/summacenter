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

<section class="sec55">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 content_">
                <div class="content">
                    <h1>
                        Betzabeth Alexandra Fernández Robles
                    </h1>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                                Certificados
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                                Insignias
                            </button>
                        </li>
                    </ul>
                    
                    <div class="content_tab">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                                <div class="items">
                                    <h4>
                                        <strong>3</strong> Certificados
                                    </h4>
                                    <div class="item">
                                        <div class="image">
                                            <img src="{{ asset('images/certificado_resultado.png') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p class="tit">
                                                Logro Orientado a
                                                Mantenimiento de
                                                Planta - SAP PM
                                            </p>
                                            <div class="btn-action">
                                                <a href="{{ route('certificado-adquirido') }}" class="btn btn-vermas">VER MÁS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="{{ asset('images/certificado_resultado.png') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p class="tit">
                                                Logro Orientado a
                                                Mantenimiento de
                                                Planta - SAP PM
                                            </p>
                                            <div class="btn-action">
                                                <a href="{{ route('certificado-adquirido') }}" class="btn btn-vermas">VER MÁS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                                <div class="items_insignias">
                                    <h4>
                                        <strong>3</strong> Insignias
                                    </h4>
                                    <div class="item_insignia">
                                        <div class="item-left">
                                            <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                        </div>
                                        <div class="item-right">
                                            <div class="item-right-head">
                                                <h3>
                                                    Logro Orientado a
                                                    Mantenimiento de
                                                    Planta - SAP PM
                                                </h3>
                                            </div>
                                            <div class="item-right-bottom">
                                                <a href="{{ route('insignia-adquirida') }}" class="btn btn-vermas">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_insignia">
                                        <div class="item-left">
                                            <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                        </div>
                                        <div class="item-right">
                                            <div class="item-right-head">
                                                <h3>
                                                    Logro Orientado a
                                                    Mantenimiento de
                                                    Planta - SAP PM
                                                </h3>
                                            </div>
                                            <div class="item-right-bottom">
                                                <a href="{{ route('insignia-adquirida') }}" class="btn btn-vermas">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_insignia">
                                        <div class="item-left">
                                            <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                        </div>
                                        <div class="item-right">
                                            <div class="item-right-head">
                                                <h3>
                                                    Logro Orientado a
                                                    Mantenimiento de
                                                    Planta - SAP PM
                                                </h3>
                                            </div>
                                            <div class="item-right-bottom">
                                                <a href="{{ route('insignia-adquirida') }}" class="btn btn-vermas">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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