@extends('web.layout')
@section('title', $setting->meta_title[2])
@section('description', $setting->meta_description[2])
@section('keywords', $setting->meta_keyword[2])
@section('content')

<section class="sec9" style="background-size: cover;background-position: bottom">
    @include('web.partials.header')
    <div class="container-fluid content" style="height: 60vh !important">
        <div class="row content_">
        </div>
    </div>
</section>

<section class="sec61">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 anuncio_seleccionar_">
                <div class="anuncio_seleccionar">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                Anuncios de<br>
                                POSTULANTES
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Anuncios de<br>
                                EMPRESAS
                            </button>
                        </li>
                        <li class="nav-item anuncio_izq" role="presentation">
                            <img class="anuncio-img" src="{{ asset('images/anuncio-postulante.png') }}" alt="">
                            <a href="{{ route('bolsa.ver-anuncios.postulantes') }}" class="btn btn-ver">Ver Ahora</a>
                        </li>
                        <li class="nav-item anuncio_der" role="presentation">
                            <img class="anuncio-img" src="{{ asset('images/anuncio-empresa.png') }}" alt="">
                            <a href="{{ route('bolsa.ver-anuncios.empresas') }}" class="btn btn-ver">Ver Ahora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection