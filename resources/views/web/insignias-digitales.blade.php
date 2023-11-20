@extends('web.layout')
@section('title', $setting->meta_title[12])
@section('description', $setting->meta_description[12])
@section('keywords', $setting->meta_keyword[12])
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url({{ $pagefield->cover_pages[3]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[3]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[3]['title2'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[3]['title3'] }}
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
                      <li class="breadcrumb-item active" aria-current="page">Insignias Digitales</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec11">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 description">
                <p>
                    <img class="insignia-digital" src="{{ $pagefield->digital_badges_image1 }}" alt="">
                    <h4>{{ $pagefield->digital_badges_title1 }}</h4>
                </p>
                {!! htmlspecialchars_decode($pagefield->digital_badges_text1) !!}
            </div>
        </div>
    </div>
</section>

<section class="sec27">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Estructura
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Importancia
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Beneficios
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Compartir
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Valoración
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_6_tab" data-bs-toggle="pill" data-bs-target="#pills_6" type="button" role="tab" aria-controls="pills_6" aria-selected="false">
                            Obtención
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_7_tab" data-bs-toggle="pill" data-bs-target="#pills_7" type="button" role="tab" aria-controls="pills_7" aria-selected="false">
                            Manual
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <p>
                                    <img src="{{ $pagefield->digital_badges_detail1[1] }}" alt="" style="float: right; width: 400px; padding-left: 40px; padding-bottom: 40px;">
                                </p>
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail1[2]) !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content1">
                                <p>
                                    <img src="{{ $pagefield->digital_badges_detail2[1] }}" alt="" style="float: right; width: 400px; padding-left: 40px; padding-bottom: 40px;">
                                </p>
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail2[2]) !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content1">
                                <p>
                                    <img src="{{ $pagefield->digital_badges_detail3[1] }}" alt="" style="float: right; width: 400px; padding-left: 40px; padding-bottom: 40px;">
                                </p>
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail3[2]) !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content1">
                                <p style="font-family:font-semibold;font-size:1rem">
                                    ¿Dónde compartir mi insignia?
                                </p>
                                <br><br><br>
                                <div class="row">
                                    @foreach ($pagefield->digital_badges_detail4 as $item)
                                    @php
                                    if($item['width'] == '6'){
                                        $d = 'col-md-6 d-flex item_share_';
                                        $h = 'img-h';
                                    }else{
                                        $d = 'col-md-12 item_share_';
                                        $h = 'img-h2';
                                    }
                                    @endphp
                                    <div class="{{ $d }}">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    {{ $item['name'] }}
                                                </h3>
                                                @if(isset($item['detail']))
                                                <p style="padding:0 70px;text-align:center">
                                                    {{ $item['detail'] }}
                                                </p>
                                                @endif
                                            </div>
                                            <img class="{{ $h }}" src="{{ $item['image'] }}" alt="">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_5" role="tabpanel" aria-labelledby="pills_5_tab">
                            <div class="content1">
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail3[3]) !!}
                                <div class="levels">
                                    @foreach ($pagefield->digital_badges_detail5 as $item)
                                    <div class="item">
                                        <img src="{{ $item['image'] }}" alt="">
                                        <h3>
                                            {{ $item['name'] }}
                                        </h3>
                                        <div class="stars">
                                            @for ($i = 1; $i <= $item['stars']; $i++)
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            @endfor
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_6" role="tabpanel" aria-labelledby="pills_6_tab">
                            <div class="content1">
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail6[1]) !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_7" role="tabpanel" aria-labelledby="pills_7_tab">
                            <div class="content1">
                                {!! htmlspecialchars_decode($pagefield->digital_badges_detail7[1]) !!}
                                <p class="text-center mt-4 fw-bold">
                                    <a target="_blank" href="{{ $pagefield->digital_badges_detail7[2] }}" class="btn btn-descargarpdf">Descargar PDF</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection