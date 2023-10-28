@extends('web.layout')
@section('title', $setting->meta_title[8])
@section('description', $setting->meta_description[8])
@section('keywords', $setting->meta_keyword[8])
@section('image', $setting->meta_image)
@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[1]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[1]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[1]['title2'] }}
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
                      <li class="breadcrumb-item active" aria-current="page">Summa</li>
                      <li class="breadcrumb-item active" aria-current="page">Distinciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec59">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 titulo">
                <h1>
                    Empresa Peruana Del Año
                </h1>
            </div>
            <div class="col-md-12">
                <div class="texto1">
                    <div class="image">
                        <img src="{{ asset('images/distincion.png') }}" alt="">
                    </div>
                    <div class="texto">
                        <p>
                            La Asociación Civil Empresa Peruana del Año es una institución sin fines de lucro creada con el propósito de estimular e incentivar una sana competencia entre las empresas, promoviendo a través de premiaciones el reconocimiento a la eficiencia en la gestión gerencial y administrativa en el logro de la excelencia en el desarrollo empresarial y la calidad total en los productos y servicios que brindan la empresas en el Perú.
                            <br><br>
                            La Comisión Organizadora, con los miembros de la Asociación, luego de diversas evaluaciones entre distintas empresas premió a <strong>Summa Center como la Empresa Peruana del Año 2021 en la Categoría Educación Empresarial en su XVII Convención Nacional de Líderes Empresarios.</strong>
                        </p>
                        <div class="text_">
                            <p>
                                Éste se encarga de realizar los estudios técnicos, análisis y calificación de las diversas categorías consideradas: Comercio, Industria, Comunicación, Educación y Salud; y de seleccionar a las empresas que han destacado por su liderazgo y profesionalismo, siendo consideradas como las mejores en sus respectivos rubros
                            </p>
                            <img src="{{ asset('images/distincion-insignia.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 video">
                <div class="video_">
                    <iframe src="https://www.youtube.com/embed/MasvBYy68Bk" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-12 premiacion">
                <h1>
                    PREMIACIÓN OTORGADA A SUMMA CENTER
                </h1>
                <p>
                    Los índices de calificación en los cuales SUMMA CENTER fue evaluada y sobrepasó exitosamente fueron: 
                </p>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion1.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                LIDERAZGO<br>
                                EMPRESARIAL
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion2.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                VENTAS BRUTAS
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion3.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                POSICIONAMIENTO<br>
                                DE MARCA
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion4.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                TRAYECTORIA
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion5.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Calidad de producto<br>
                                o servicio
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion6.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Crecimiento<br>
                                patrimonial
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion7.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Estándares de calidad,<br>
                                productividad y<br>
                                competitividad
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion8.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Apoyo social<br>
                                y laboral 
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/premiacion9.png') }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                Entre otros
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 fuentes">
                <p>
                    Y las fuentes de información consideradas para dicha evaluación son:
                </p>
                <div class="items">
                    <div class="item_left">
                        <div class="image">
                            <img src="{{ asset('images/fuente1.png') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/fuente2.png') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/fuente3.png') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/fuente4.png') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/fuente5.png') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/fuente6.png') }}" alt="">
                        </div>
                        <div class="image p-3">
                            <img src="{{ asset('images/fuente7.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item_right">
                        <img src="{{ asset('images/premio_global.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection