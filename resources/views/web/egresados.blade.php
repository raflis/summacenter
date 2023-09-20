@extends('web.layout')

@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[9]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[9]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[9]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec60" style="background-image: url('{{ $pagefield->graduates_images[0]['desktop'] }}')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb__ pt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Egresados</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text_">
                <div class="text">
                    <h1>
                        {{ $pagefield->graduates_titles[0]['title'] }}
                    </h1>
                    <p>
                        {!! htmlspecialchars_decode(nl2br($pagefield->graduates_titles[0]['detail'])) !!}
                    </p>
                    <a href="{{ $pagefield->graduates_titles[0]['button_link'] }}">
                        {!! htmlspecialchars_decode(nl2br($pagefield->graduates_titles[0]['button_name'])) !!}
                        <img src="{{ asset('images/arrow-right-white.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec53">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 beneficios">
                <h1>
                    BENEFICIOS
                </h1>
                <div class="items">
                    @foreach ($pagefield->graduates_items as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                {{ $item['name'] }}
                            </h3>
                            <p>
                                {!! htmlspecialchars_decode(nl2br($item['detail'])) !!}
                            </p>
                            <div class="btn-action">
                                <a href="{{ $item['link'] }}" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec54">
    <div class="container-fluid">
        <div class="row content">
            <h1>
                NOVEDADES
            </h1>
            @foreach ($posts as $item)
                @foreach($item->blog_posts as $ite)
                @if($loop->iteration <= 3)
                <div class="col-md-4 item">
                    <div class="item_">
                        <div class="image">
                            <a href="{{ route('post', [$ite->blog_category->slug, $ite->slug, $ite->id]) }}">
                                <img src="{{ $ite->image1 }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('post', [$ite->blog_category->slug, $ite->slug, $ite->id]) }}" class="btn btn-leer">
                                ARTÍCULO COMPLETO
                            </a>
                            <p class="category">
                                {{ $ite->blog_category->name }}
                            </p>
                            <p class="tit">
                                {{ $ite->name }}
                            </p>
                            <p class="description">
                                {{ $ite->summary }}
                            </p>
                            <div class="tags">
                                @foreach ($ite->blog_tags as $item_t)
                                <a href="{{ route('tag', $item_t->slug) }}" class="btn btn-tag">{{ $item_t->name }}</a> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            @endforeach
            <div class="col-md-12 btn-action">
                <a href="{{ route('blog') }}" class="btn btn-vermas">VER MÁS</a>
            </div>
        </div>
    </div>
</section>

@endsection