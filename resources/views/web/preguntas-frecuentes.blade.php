@extends('web.layout')
@section('title', $setting->meta_title[15])
@section('description', $setting->meta_description[15])
@section('keywords', $setting->meta_keyword[15])
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url({{ $pagefield->cover_pages[6]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    {{ $pagefield->cover_pages[6]['title1'] }}
                </p>
                <p class="color">
                    {{ $pagefield->cover_pages[6]['title2'] }}
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
                      <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec32">
    <div class="container-fluid">
        <div class="row">
            <!--<div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Admisión
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Docentes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Metodología
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Insignias Digitales
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Certificaciones
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_6_tab" data-bs-toggle="pill" data-bs-target="#pills_6" type="button" role="tab" aria-controls="pills_6" aria-selected="false">
                            Accesos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_7_tab" data-bs-toggle="pill" data-bs-target="#pills_7" type="button" role="tab" aria-controls="pills_7" aria-selected="false">
                            General
                        </button>
                    </li>
                </ul>
            </div>-->
            <h3 class="top_h3">
                En este espacio
            </h3>
            <h4 class="top_h4">
                podrás encontrar y resolver tus dudas hacerca del curso y la función de las herramientas que tenemos para ti.
            </h4>
            <div class="col-md-12">
                <div class="content">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        @foreach ($frequent_questions as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_{{ $loop->iteration }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse_{{ $loop->iteration }}">
                                    {{ $loop->iteration }}. {{ $item->name }}
                                </button>
                            </h2>
                            <div id="collapse_{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="head_{{ $loop->iteration }}">
                                <div class="accordion-body">
                                    {!! htmlspecialchars_decode($item->detail) !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection