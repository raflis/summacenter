@extends('web.layout')

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
                      <li class="breadcrumb-item active" aria-current="page">{{ $blog_subcategory->blog_category->name }}</li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $blog_subcategory->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec19">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @php $i = 0 @endphp
                    @foreach ($blog_categories as $item)
                    @if(count($item->blog_posts) > 0)
                    @php $i++ @endphp
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ ($blog_subcategory->blog_category->id == $item->id)?'active':'' }}" id="pills_{{ $item->id }}_tab" data-bs-toggle="pill" data-bs-target="#pills_{{ $item->id }}" type="button" role="tab" aria-controls="pills_{{ $item->id }}" aria-selected="true">
                            {{ $item->name }}
                        </button>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        @php $j = 0 @endphp
                        @foreach ($blog_categories as $item)
                        @if(count($item->blog_posts) > 0)
                        @php $j++ @endphp
                        <div class="tab-pane fade {{ ($blog_subcategory->blog_category->id == $item->id)?'show active':'' }}" id="pills_{{ $item->id }}" role="tabpanel" aria-labelledby="pills_{{ $item->id }}_tab">
                            <div class="content1">
                                <div class="row">
                                    <div class="col-md-12 filtros">
                                        <div class="busq">
                                            <img class="embudo" src="{{ asset('images/embudo2.png') }}" alt="">
                                            <button data-toggle="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#categoriasCol{{ $item->id }}" aria-expanded="false" aria-controls="categoriasCol{{ $item->id }}">
                                                <span>Categorías</span>
                                                <img src="{{ asset('images/abajo-blanco.png') }}" alt="">
                                            </button>
                                            <!--<button data-toggle="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#tagsCol{{ $item->id }}" aria-expanded="false" aria-controls="tagsCol{{ $item->id }}">
                                                <span>Tags</span>
                                                <img src="{{ asset('images/abajo-blanco.png') }}" alt="">
                                            </button>-->
                                            <div class="multi-collapse shadow collapse" id="categoriasCol{{ $item->id }}" style="">
                                                <div class="card card-body">
                                                    @foreach ($item->blog_subcategories as $item_)
                                                    @if(count($item_->blog_posts) > 0)
                                                    <a class="btn-link {{ ($blog_subcategory->id == $item_->id)?'active':'' }}" href="{{ route('subcategory', [$item_->blog_category->slug, $item_->slug, $item_->id]) }}">{{ $item_->name }}</a>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!--<div class="multi-collapse shadow collapse" id="tagsCol{{ $item->id }}" style="">
                                                <div class="card card-body">
                                                    <a class="btn-link" href="">code</a>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    @if($blog_subcategory->blog_category->id == $item->id)
                                    @foreach ($blog_subcategory->blog_posts as $item_p)
                                    <div class="col-md-4 item">
                                        <div class="item_">
                                            <div class="image">
                                                <a href="{{ route('post', [$item_p->blog_sub_category->blog_category->slug, $item_p->blog_sub_category->slug, $item_p->slug, $item_p->id]) }}">
                                                    <img src="{{ $item_p->image1 }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="{{ route('post', [$item_p->blog_sub_category->blog_category->slug, $item_p->blog_sub_category->slug, $item_p->slug, $item_p->id]) }}" class="btn btn-leer">
                                                    ARTÍCULO COMPLETO
                                                </a>
                                                <p class="category">
                                                    {{ $item_p->blog_sub_category->name }}
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
                                    @else
                                    @foreach ($item->blog_posts as $item_p)
                                    <div class="col-md-4 item">
                                        <div class="item_">
                                            <div class="image">
                                                <a href="{{ route('post', [$item_p->blog_sub_category->blog_category->slug, $item_p->blog_sub_category->slug, $item_p->slug, $item_p->id]) }}">
                                                    <img src="{{ $item_p->image1 }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="{{ route('post', [$item_p->blog_sub_category->blog_category->slug, $item_p->blog_sub_category->slug, $item_p->slug, $item_p->id]) }}" class="btn btn-leer">
                                                    ARTÍCULO COMPLETO
                                                </a>
                                                <p class="category">
                                                    {{ $item_p->blog_sub_category->name }}
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
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection