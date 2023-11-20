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
                    {{ $pagefield->distinctions_title1 }}
                </h1>
            </div>
            <div class="col-md-12">
                <div class="texto1">
                    <div class="image">
                        <img src="{{ $pagefield->distinctions_image1 }}" alt="">
                    </div>
                    <div class="texto">
                        {!! htmlspecialchars_decode($pagefield->distinctions_text1) !!}
                        <div class="text_">
                            <img src="{{ $pagefield->distinctions_image2 }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 video">
                <div class="video_">
                    <iframe src="https://www.youtube.com/embed/{{ $pagefield->distinctions_youtube }}" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-12 premiacion">
                <h1>
                    {{ $pagefield->distinctions_title2 }}
                </h1>
                <p>
                    {!! nl2br($pagefield->distinctions_text2) !!}
                </p>
                <div class="items">
                    @foreach ($pagefield->distinctions_items as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <div class="texto">
                            <p>
                                {{ $item['name'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 fuentes">
                <p>
                    {!! nl2br($pagefield->distinctions_text3) !!}
                </p>
                <div class="items">
                    <div class="item_left">
                        @foreach ($pagefield->distinctions_images as $item)
                        <div class="image p-1">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="item_right">
                        <img src="{{ $pagefield->distinctions_image3 }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection