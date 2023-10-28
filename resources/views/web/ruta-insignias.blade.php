@extends('web.layout')
@section('title', $badge->meta[1])
@section('keywords', $badge->meta[2])
@section('description', $badge->meta[3])
@section('image', $setting->meta_image)
@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    RUTA
                </p>
                <p class="color">
                    DE INSIGNIAS
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
                      <li class="breadcrumb-item"><a href="{{ route('coleccion-insignias') }}">Colección de Insignias</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('coleccion-insignias.area', [$badge->course_area->slug, $badge->course_area->id]) }}">{{ $badge->course_area->name }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $badge->name }}</li>
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
                <div class="content">
                    <div class="content-left">
                        <img src="{{ $badge->image }}" alt="">
                        <div class="text">
                            <p>
                                <strong>Tipo: </strong>{{ $badge->type }}
                            </p>
                            <p>
                                <strong>Nivel: </strong>{{ $badge->level }}
                            </p>
                            <p>
                                <strong>Tiempo: </strong>{{ $badge->time }}
                            </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <h1>
                            {{ $badge->name }} {{ getBadge($badge->category, NULL) }}
                        </h1>
                        <p class="text1">
                            Emitido por <span>SUMMA CENTER</span>
                        </p>
                        <div class="text2">
                            <p>
                                {{ $badge->detail }}
                            </p>
                        </div>
                        @if (count($badge->skills)>0)
                        <h3>Habilidades</h3>
                        @endif
                        <div class="habilidades">
                            @foreach ($badge->skills as $item)
                            <div class="item">{{ $item['name'] }}</div>
                            @endforeach
                        </div>
                        <h3>Criterios de ganancia</h3>
                        <div class="text3">
                            <div class="text3_item">
                                <img src="{{ asset('images/criterio1.png') }}" alt="">
                                <p>
                                    {{ $badge->criterion1 }}
                                </p>
                            </div>
                            <div class="text3_item">
                                <img src="{{ asset('images/criterio2.png') }}" alt="">
                                <p>
                                    {{ $badge->criterion2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 rutainsignia">
                <h1>
                    Ruta de Insignias {{ $badge->name }}
                </h1>
                <img src="{{ $badge->image2 }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection