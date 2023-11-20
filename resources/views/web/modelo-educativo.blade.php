@extends('web.layout')
@section('title', $setting->meta_title[7])
@section('description', $setting->meta_description[7])
@section('keywords', $setting->meta_keyword[7])
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
                      <li class="breadcrumb-item active" aria-current="page">Modelo Educativo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec57">
    <div class="container-fluid">
        <div class="row">
            <h1>
                {{ $pagefield->educational_model_title1 }}
            </h1>
            <div class="col-md-12 px-0">
                <div class="texto">
                    <img src="{{ $pagefield->educational_model_image1 }}" alt="">
                    {!! htmlspecialchars_decode($pagefield->educational_model_text1) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="items">
                    @foreach ($pagefield->educational_model_learning as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <h3>
                            {{ $item['name'] }}
                        </h3>
                        <p>
                            {!! nl2br($item['detail']) !!}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 iconos_">
                <p class="text_icon">
                    {!! nl2br($pagefield->educational_model_text2) !!}
                </p>
                <div class="iconos">
                    @foreach ($pagefield->educational_model_models as $item)
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>{{ $item['name'] }}</strong> {!! nl2br($item['detail']) !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 modelo-back">
                <div class="details">
                    @foreach ($pagefield->educational_model_items as $item)
                    <div class="detail">
                        <p>
                            {{ $item['name'] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 competencias_">
                <div class="competencias">
                    <div class="tit_color">
                        <h1 class="color">
                            {{ $pagefield->educational_model_title2 }}
                        </h1>
                    </div>
                    <img src="{{ $pagefield->educational_model_image2 }}" alt="">
                    <h3>
                        {{ $pagefield->educational_model_title21 }}
                    </h3>
                    <div>
                        {!! htmlspecialchars_decode($pagefield->educational_model_text3) !!}
                    </div>
                    <h3>
                        {{ $pagefield->educational_model_title22 }}
                    </h3>
                    <div>
                        {!! htmlspecialchars_decode($pagefield->educational_model_text4) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12 elearning_">
                <div class="elearning">
                    <div class="tit_color">
                        <h1 class="color">
                            {{ $pagefield->educational_model_title3 }}
                        </h1>           
                    </div>
                    <img src="{{ $pagefield->educational_model_image3 }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection