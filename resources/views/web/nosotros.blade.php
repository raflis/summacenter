@extends('web.layout')
@section('title', $setting->meta_title[5])
@section('description', $setting->meta_description[5])
@section('keywords', $setting->meta_keyword[5])
@section('image', $setting->meta_image)
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
                      <li class="breadcrumb-item active" aria-current="page">SUMMA</li>
                      <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec58">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 somos_">
                <div class="somos">
                    <div class="tit">
                        <h1>
                            {{ $pagefield->aboutus_title }}
                        </h1>
                        <div>
                            {!! htmlspecialchars_decode($pagefield->aboutus_description) !!}
                        </div>
                    </div>
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/{{ $pagefield->aboutus_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Nuestra Misión
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Nuestra Visión
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Nuestros Valores
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <img class="background" src="{{ $pagefield->aboutus_images[0]['mission'] }}" alt="">
                                <div class="mision_vision">
                                    <div class="tit">
                                        <h1>
                                            Nuestra Misión
                                        </h1>
                                    </div>
                                    <div class="p_top">
                                        {!! htmlspecialchars_decode($pagefield->aboutus_mission) !!}
                                    </div>
                                    <h3>
                                        DESARROLLAMOS PROGRAMAS CON
                                    </h3>
                                    <div class="items">
                                        @foreach ($pagefield->aboutus_items1 as $item)
                                        <div class="item">
                                            <div class="image">
                                                <img src="{{ $item['image'] }}" alt="">
                                            </div>
                                            <p>
                                                {{ $item['name'] }}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content1">
                                <img class="background" src="{{ $pagefield->aboutus_images[0]['vision'] }}" alt="">
                                <div class="mision_vision">
                                    <div class="tit">
                                        <h1>
                                            Nuestra Visión
                                        </h1>
                                    </div>
                                    <div class="p_top2">
                                        {!! htmlspecialchars_decode($pagefield->aboutus_vision) !!}
                                    </div>
                                    <h3>
                                        SIENDO RECONOCIDOS POR
                                    </h3>
                                    <div class="items">
                                        @foreach ($pagefield->aboutus_items2 as $item)
                                        <div class="item2">
                                            <div class="image">
                                                <img src="{{ $item['image'] }}" alt="">
                                            </div>
                                            <p>
                                                {{ $item['name'] }}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content1 text-center">
                                <div class="valores" id="nodashed">
                                    <div class="tit">
                                        <h1>
                                            Nuestros Valores
                                        </h1>
                                    </div>
                                    <img src="{{ $pagefield->aboutus_images[0]['values'] }}" alt="">
                                </div>
                                <h4 class="val">
                                    Conoce a nuestro Equipo Summa
                                </h4>
                                <a href="{{ route('equipo') }}" class="btn btn-vermas">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection