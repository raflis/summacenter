@extends('web.layout')
@section('title', $tag->meta[1])
@section('keywords', $tag->meta[2])
@section('description', $tag->meta[3])
@section('image', $setting->meta_image)
@section('content')

<section class="sec18" style="background-image: url('{{ $pagefield->cover_pages[12]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[12]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[12]['title2'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[12]['title3'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_ pt-2 pb-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tag</li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $tag->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec19">
    <div class="container-fluid">
        <div class="row itemSearch">
            @foreach ($posts as $item_p)
            <div class="col-md-4 item" id="itemTag">
                <div class="item_">
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
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection