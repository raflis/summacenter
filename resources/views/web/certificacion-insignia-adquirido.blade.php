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
                      <li class="breadcrumb-item"><a href="{{ route('verifica-tu-certificacion', ['email' => $issued_badge->recipient_email]) }}">Insignias de : {{ $issued_badge->issued_to }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Insignias Adquirida</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec33">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tit_badge">
                    <h1>
                        {{ $issued_badge->issued_to }}
                    </h1>
                </div>
                <div class="content">
                    <div class="content-left">
                        <img src="{{ $issued_badge->image }}" alt="">
                        <div class="text">
                            <p>
                                <strong>Tipo: </strong>{{ $issued_badge->type_category }}
                            </p>
                            <p>
                                <strong>Nivel: </strong>{{ $issued_badge->level }}
                            </p>
                            <p>
                                <strong>Tiempo: </strong>{{ $issued_badge->time_to_earn }}
                            </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <h1>
                            {{ $issued_badge->name }}
                        </h1>
                        <p class="text1">
                            Emitido por <span>SUMMA CENTER</span>
                        </p>
                        <div class="text2">
                            <p>
                                {{ $issued_badge->description }}
                            </p>
                        </div>
                        <h3>Habilidades</h3>
                        <div class="habilidades">
                            @php $skills = explode('|', $issued_badge->skills) @endphp
                            @foreach ($skills as $item)
                            <div class="item">{{ $item }}</div>
                            @endforeach
                        </div>
                        <h3>Criterios de ganancia</h3>
                        <div class="text3">
                            @php $badge_template_activities = explode('|', $issued_badge->badge_template_activities) @endphp
                            @foreach ($badge_template_activities as $item)
                            <div class="text3_item">
                                <img src="{{ asset('images/criterio1.png') }}" alt="">
                                <p>
                                    {{ $item }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12">
                <div class="btn-action">
                    <a href="" class="btn btn-credly">Ir a Credly</a>
                </div>
            </div> --}}
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