@extends('web.layout')

@section('content')

<section class="sec13" style="background-image: url({{ $pagefield->cover_pages[2]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[2]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[2]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_ pb-0 pt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Certificaciones</li>
                      <li class="breadcrumb-item active" aria-current="page">Nuestras Certificaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec14">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 title">
                <h1>
                    {{ $pagefield->certifications_title1 }}
                </h1>
            </div>
            <div class="col-md-10 description">
                <p class="text-justify">
                    <div class="imagen">
                        <p>{{ $pagefield->certifications_subtitle1 }}</p>
                        <img class="certificado" src="{{ asset('images/certificado.png') }}" alt="">
                    </div>
                    <div class="text">
                        {!! htmlspecialchars_decode($pagefield->certifications_text1) !!}
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec15">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    {{ $pagefield->certifications_title2 }}
                </h1>
            </div>
            <div class="col-md-10 description">
                <div class="items">
                    @foreach ($pagefield->certifications_items2 as $item)
                    <div class="item">
                        <div class="item_">
                            <img src="{{ $item['image'] }}" alt="">
                            <p class="title">
                                {{ $item['name'] }}
                            </p>
                            <p class="description">
                                {{ $item['detail'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 text">
                <p>
                    <strong>Revoluciona la</strong> forma en la que presentas
                    tu <strong>certificación</strong> con las <span>herramientas
                    dígitales del siglo XXI.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec8">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="content">
                    <h5>
                        VERIFICA TU CERTIFICACIÓN
                    </h5>
                    <p>
                        Como alumno Summa puedes ingresar tu correo de
                        usuario y verificar tu insignia emitida por nuestra
                        institución, respaldada internacionalmente
                        por Credly.
                    </p>
                    <form action="{{ route('verifica-tu-certificacion') }}" method="GET" class="needs-validation" novalidate>
                        <input type="email" class="form-control shadow" name="email" placeholder="Ingrese su email" required>
                        <input type="submit" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec16">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    {{ $pagefield->certifications_title3 }}
                </h1>
            </div>
            <div class="col-md-10 description">
                {!! htmlspecialchars_decode($pagefield->certifications_text3) !!}
                <div class="video_">
                    <iframe src="https://www.youtube.com/embed/{{ $pagefield->certifications_youtube3 }}" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec17">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    {{ $pagefield->certifications_title4 }}
                </h1>
            </div>
            <div class="col-md-10 description">
                {!! htmlspecialchars_decode($pagefield->certifications_text4) !!}
                <div class="video_">
                    <iframe src="https://www.youtube.com/embed/{{ $pagefield->certifications_youtube4 }}" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row pasos justify-content-center">
                    @foreach ($pagefield->certifications_items4 as $item)
                    <div class="col-md-4 paso d-flex">
                        <div class="paso_">
                            <div class="titulo">
                                <h3>
                                    {{ $item['name'] }}
                                </h3>
                            </div>
                            <div class="detalle">
                                <p>
                                    {{ $item['detail'] }}
                                </p>
                            </div>
                            <div class="imagen">
                                <img src="{{ $item['image'] }}" alt="">
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