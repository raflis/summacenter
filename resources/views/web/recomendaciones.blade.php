@extends('web.layout')

@section('content')

<section class="sec63" style="background-image: url(../images/slider-recomendaciones.jpg);">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="tit">
                    OPINIONES Y TESTIMONIOS
                </p>
                <p class="subtit">
                    de nuestros Egresados 
                </p>
                <p class="subtit">
                    Summa
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
                      <li class="breadcrumb-item active" aria-current="page">Recomendaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec64">
    <div class="container fluid">
        <div class="row">
            <div class="col-md-12 items_">
                <div class="items">
                    @foreach ($testimonials as $item)
                    <div class="item {{ ($loop->even)?'item2':'' }}">
                        <div class="item_">
                            <div class="item_left">
                                <div class="image">
                                    <img src="{{ $item->image }}" alt="">
                                </div>
                            </div>
                            <div class="item_right">
                                <div class="stars">
                                    @for ($i = 1; $i <= $item->stars; $i++)
                                    <img src="{{ asset('images/star1.png') }}" alt="">
                                    @endfor
                                    @for ($i = 1; $i <= 5- $item->stars; $i++)
                                    <img src="{{ asset('images/star0.png') }}" alt="">
                                    @endfor
                                </div>
                                <h2>
                                    {{ $item->name }}
                                </h2>
                                <h3>
                                    Egresada: {{ $item->graduated_career }}
                                </h3>
                                <div class="detail">
                                    {!! htmlspecialchars_decode($item->comment) !!}
                                </div>
                            </div>
                        </div>
                        <div class="item_right2">
                            <div class="triangle"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection