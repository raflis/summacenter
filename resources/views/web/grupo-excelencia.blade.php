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
                            {{ $pagefield->field_free_2[1] }}
                        </h1>
                        <div>
                            {!! htmlspecialchars_decode($pagefield->field_free_2[2]) !!}
                        </div>
                    </div>
                    <div class="detail_right">
                        <img src="{{ $pagefield->field_free_2[3] }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 items_">
                <h1>
                    {{ $pagefield->field_free_2[4] }}
                </h1>
                <div class="items">
                    @foreach ($pagefield->field_free_3 as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <div class="texto">
                            <p class="font-medium">
                                {!! nl2br($item['detail']) !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 px-0 bg1">
                <img class="reco1" src="{{ $pagefield->field_free_2[5] }}" alt="">
                <img class="reco2" src="{{ $pagefield->field_free_2[6] }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec4">
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
                                <span>
                                    {{ $item->name }}
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <a class="imagen" href="{{ route('programas', $item->slug) }}">
                                <img src="{{ $item->image }}" alt="">
                            </a>
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