@extends('web.layout')

@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="color2">
                    COLECCIONES DE INSIGNIAS
                </p>
                <p class="blanco2">
                    HAZ CLICK PARA OBTENER MÁS INFORMACIÓN
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
                      <li class="breadcrumb-item active" aria-current="page">Colección de Insignias</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec30">
    <div class="container-fluid">
        <div class="row insignias">
            <h3>
                Haz click en el área de especialización para
                obtener más información de la ruta de insignias
            </h3>
            @foreach ($course_areas as $item)
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            {{ count($item->badges) }}
                        </div>
                        <a href="{{ route('coleccion-insignias.area', [Str::slug($item->name), $item->id]) }}">
                            <img src="{{ $item->badge }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="{{ route('coleccion-insignias.area', [Str::slug($item->name), $item->id]) }}">
                            {{ $item->name }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection