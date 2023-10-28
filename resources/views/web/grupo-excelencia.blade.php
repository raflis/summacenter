@extends('web.layout')
@section('title', $setting->meta_title[14])
@section('description', $setting->meta_description[14])
@section('keywords', $setting->meta_keyword[14])
@section('image', $setting->meta_image)
@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[5]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-8">
                <p>
                    {{ $pagefield->cover_pages[5]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[5]['title2'] }}
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
                    @foreach ($course_areas as $item)
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ $item->icon }}" alt="">
                                <span>
                                    {{ $item->name }}
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ $item->image }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    {{ $item->text }}
                                </h4>
                                <a href="{{ route('programas', $item->slug) }}" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection