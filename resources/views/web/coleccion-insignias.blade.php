@extends('web.layout')
@section('title', $setting->meta_title[13])
@section('description', $setting->meta_description[13])
@section('keywords', $setting->meta_keyword[13])
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url('{{ $pagefield->cover_pages[4]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[4]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[4]['title2'] }}
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