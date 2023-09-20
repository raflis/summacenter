@extends('web.layout')

@section('content')

<section class="sec18">
    @include('web.partials.header')
</section>

<section class="sec35">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb___ pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $post->blog_category->name }}</li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $post->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="header_post">
                    <div class="fecha">
                        <img src="{{ asset('images/fecha.png') }}" alt="">
                        <p>
                            {{ mb_strtoupper(\Carbon\Carbon::parse($post->created_at)->formatLocalized('%A, %d DE %B %Y'), 'UTF-8') }}
                        </p>
                    </div>
                    <div class="redes">
                        <p>
                            COMPARTE ESTE ARTICULO EN:
                        </p>
                        <div class="images">
                            <a href="">
                                <img src="{{ asset('images/facebook.png') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('images/twitter.png') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('images/whatsapp.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 post_body">
                <h1>
                    {{ $post->name }}
                </h1>
                <img class="post_head" src="{{ $post->image2 }}" alt="">
                <div class="content0">
                    {!! htmlspecialchars_decode($post->body) !!}
                </div>
            </div>
            <div class="col-md-12 navegacion">
                <h3>
                    NOTICIAS QUE TE PUEDEN INTERESAR
                </h3>
            </div>
            <div class="col-md-12">
                <div id="carouselblog-related" class="owl-carousel">
                    @foreach ($related as $item_p)
                    <div class="item">
                        <div class="image">
                            <a href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}">
                                <img src="{{ $item_p->image1 }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}" class="btn btn-leer">
                                ARTÍCULO COMPLETO
                            </a>
                            <p class="category">
                                {{ $item_p->blog_category->name }}
                            </p>
                            <p class="tit">
                                {{ $item_p->name }}
                            </p>
                            <p class="description">
                                {{ $item_p->summary }}
                            </p>
                            <div class="tags">
                                @foreach ($item_p->blog_tags as $item_t)
                                <a href="{{ route('tag', $item_t->slug) }}" class="btn btn-tag">{{ $item_t->name }}</a> 
                                @endforeach
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