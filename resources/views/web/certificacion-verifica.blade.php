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
                      <li class="breadcrumb-item active" aria-current="page">Insignias Adquiridas</li>
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
                        @if ($result['metadata']['total_count'] > 0)
                        {{ ucwords(mb_strtolower($result['data'][0]['issued_to'])) }}
                        @else
                        Sin resultados 
                        @endif
                    </h1>
                    @if ($result['metadata']['total_count'] > 0)
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <!--<li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                                Certificados
                            </button>
                        </li>-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                                Insignias
                            </button>
                        </li>
                    </ul>
                    <div class="content_tab">
                        <div class="tab-content" id="pills-tabContent">
                            <!--<div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                                <div class="items">
                                    <h4>
                                        <strong>0</strong> Certificados
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
                                </div>
                            </div>-->
                            <div class="tab-pane fade show active" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                                <div class="items_insignias">
                                    <h4>
                                        <strong>{{ $result['metadata']['total_count'] }}</strong> Insignias
                                    </h4>
                                    @foreach ($result['data'] as $item)
                                    <div class="item_insignia">
                                        <div class="item-left">
                                            <img src="{{ $item['badge_template']['image']['url'] }}" alt="">
                                        </div>
                                        <div class="item-right">
                                            <div class="item-right-head">
                                                <h3>
                                                    {{ $item['badge_template']['name'] }}
                                                </h3>
                                            </div>
                                            <div class="item-right-bottom">
                                                <a href="{{ route('insignia-adquirida', $item['id']) }}" class="btn btn-vermas">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if ($result['metadata']['total_count'] == 0)
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
@endif

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