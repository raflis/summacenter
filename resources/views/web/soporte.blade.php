@extends('web.layout')

@section('content')

<section class="sec13" style="background-image: url({{ $pagefield->cover_pages[10]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[10]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[10]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec24">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb__ pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Soporte</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 presentacion">
                <h1>
                    {{ $pagefield->support_text[0]['title1'] }}
                </h1>
                <p class="text1">
                    {{ $pagefield->support_text[0]['title2'] }}
                </p>
                <div class="botones">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $pagefield->support_button1_telephone }}&text={{ $pagefield->support_button1_text }}" class="btn btn-matricula">
                        {{ $pagefield->support_button1_name }}
                    </a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $pagefield->support_button2_telephone }}&text={{ $pagefield->support_button2_text }}" class="btn btn-azul">
                        {{ $pagefield->support_button2_name }}
                    </a>
                </div>
            </div>
            <div class="col-md-5 video">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/{{ $pagefield->support_text[0]['video'] }}" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="sec36">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 soporte_left">
                <div class="tit">
                    <h1>
                        {{ $pagefield->support_text[0]['title3'] }}
                    </h1>
                    <p>
                        {{ $pagefield->support_text[0]['title4'] }}
                    </p>
                </div>
                <div class="items">
                    @foreach ($pagefield->support_items1 as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <h3>
                            {{ $item['name'] }}
                        </h3>
                        <p>
                            {{ $item['detail'] }}
                        </p>
                        <!--<div class="item_button">
                            <a href="#" class="btn btn-contactar">CONTACTAR</a>
                        </div>-->
                    </div>  
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 soporte_right">
                <div class="items">
                    <h1 class="tit">
                        {{ $pagefield->support_text[0]['title5'] }}
                    </h1>
                    @foreach ($pagefield->support_items2 as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <h3>
                            {{ $item['name'] }}
                        </h3>
                        <p>
                            {{ $item['detail'] }}
                        </p>
                    </div>
                    @if(!$loop->last)
                    <hr>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection