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
                      <li class="breadcrumb-item"><a href="{{ route('coleccion-insignias') }}">Colección de Insignias</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $course_area->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec31">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach ($badges as $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ ($loop->first)?'active':'' }}" id="pills_{{ $item->category }}_tab" data-bs-toggle="pill" data-bs-target="#pills_{{ $item->category }}" type="button" role="tab" aria-controls="pills_{{ $item->category }}" aria-selected="true">
                            {{ getBadge($item->category, NULL) }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach ($badges as $item)
                            <div class="tab-pane fade {{ ($loop->first)?'show active':'' }}" id="pills_{{ $item->category }}" role="tabpanel" aria-labelledby="pills_{{ $item->category }}_tab">
                                <div class="items">
                                    @foreach ($course_area->badges as $ite)
                                        @if($ite->category == $item->category)
                                        <div class="item">
                                            <div class="item-left">
                                                <img src="{{ $ite->image }}" alt="">
                                                <a href="{{ route('insignia', [$course_area->slug, Str::slug(getBadge($ite->category, NULL)), Str::slug($ite->name), $ite->id]) }}" class="btn btn-vermas">Ver más</a>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-right-head">
                                                    <h3>
                                                        {{ $ite->name }}
                                                    </h3>
                                                    <div class="stars">
                                                        @for ($i = 0; $i < getBadge($ite->category, 'stars'); $i++)
                                                        <img class="star" src="{{ asset('images/star.png') }}" alt="">
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="item-right-bottom">
                                                    <p>Área: {{ $course_area->name }}</p>
                                                    <p>Nivel: {{ getBadge($ite->category, NULL) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
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