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
                      <li class="breadcrumb-item active" aria-current="page">SUMMA</li>
                      <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec58">
    <div class="col-md-12 somos_">
        <div class="somos">
            <div class="tit">
                <h1>
                    Somos Summa Center
                </h1>
                <p>
                    Escuela de Formación Profesional avalada por SAP Open Ecosystem, Certiproft, Microsoft Partner Network, Acreditta, Credly y la Cámara de Comercio de Lima. Especializada en brindar cursos de capacitación en tecnologías de la información, innovación y gestión empresarial con altos estándares de calidad educativa. Comprometidos con formar e impulsar profesionales que contribuyan al desarrollo de la sociedad.
                </p>
            </div>
            <img src="{{ asset('images/video-somos.png') }}" alt="">
        </div>
    </div>
    <div class="col-md-12 px-0">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                    Nuestra Misión
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                    Nuestra Visión
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                    Nuestros Valores
                </button>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="content">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                    <div class="content1">
                        <img class="background" src="{{ asset('images/background-mision.jpg') }}" alt="">
                        <div class="mision_vision">
                            <div class="tit">
                                <h1>
                                    Nuestra Misión
                                </h1>
                            </div>
                            <p class="p_top">
                                <span>SUMMA CENTER</span> es un centro de formación empresarial con vocación de excelencia académica, especializado en formar e impulsar profesionales exitosos y responsables, que contribuyan a su transformación profesional con sentido de competitividad al servicio de la sociedad.
                            </p>
                            <h3>
                                DESARROLLAMOS PROGRAMAS CON
                            </h3>
                            <div class="items">
                                <div class="item">
                                    <div class="image">
                                        <img src="{{ asset('images/icon-mision1.png') }}" alt="">
                                    </div>
                                    <p>
                                        Altos estándares de calidad
                                    </p>
                                </div>
                                <div class="item">
                                    <div class="image">
                                        <img src="{{ asset('images/icon-mision2.png') }}" alt="">
                                    </div>
                                    <p>
                                        Innovación continua
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                    <div class="content1">
                        <img class="background" src="{{ asset('images/background-vision.jpg') }}" alt="">
                        <div class="mision_vision">
                            <div class="tit">
                                <h1>
                                    Nuestra Visión
                                </h1>
                            </div>
                            <p class="p_top2">
                                Ser el centro de formación empresarial más prestigioso de América Latina comprometido con la innovación y el desarrollo sostenible.
                            </p>
                            <h3>
                                SIENDO RECONOCIDOS POR
                            </h3>
                            <div class="items">
                                <div class="item2">
                                    <div class="image">
                                        <img src="{{ asset('images/icon-vision1.png') }}" alt="">
                                    </div>
                                    <p>
                                        Excelencia en metodologías de enseñanza
                                    </p>
                                </div>
                                <div class="item2">
                                    <div class="image">
                                        <img src="{{ asset('images/icon-vision2.png') }}" alt="">
                                    </div>
                                    <p>
                                        Liderazgo Académico
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                    <div class="content1 text-center">
                        <div class="valores">
                            <div class="tit">
                                <h1>
                                    Nuestros Valores
                                </h1>
                            </div>
                            <img src="{{ asset('images/valores-imagen.png') }}" alt="">
                        </div>
                        <h4 class="val">
                            Conoce a nuestro Equipo Summa
                        </h4>
                        <a href="{{ route('equipo') }}" class="btn btn-vermas">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection