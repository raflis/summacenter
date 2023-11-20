@extends('web.layout')
@section('title', $setting->meta_title[16])
@section('description', $setting->meta_description[16])
@section('keywords', $setting->meta_keyword[16])
@section('image', $setting->meta_image)
@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[7]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[7]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[7]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Corporativos</li>
                      <li class="breadcrumb-item active" aria-current="page">Asesorías Especializada</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec49">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 texto">
                <h1>
                    FORTALECEMOS COMPETENCIAS Y HABILIDADES
                </h1>
                <p>
                    Las organizaciones enfrentan permanentemente el reto de hacerse más eficientes y competitivas, con el objeto de estar en mejores condiciones de lograr sus objetivos y metas.
                </p>
            </div>
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach ($consultancies as $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ ($loop->iteration == 1)?'active':'' }}" id="pills_{{ $loop->iteration }}_tab" data-bs-toggle="pill" data-bs-target="#pills_{{ $loop->iteration }}" type="button" role="tab" aria-controls="pills_{{ $loop->iteration }}" aria-selected="true">
                            {{ $item->name1 }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach ($consultancies as $item)
                        <div class="tab-pane fade {{ ($loop->iteration == 1)?'show active':'' }}" id="pills_{{ $loop->iteration }}" role="tabpanel" aria-labelledby="pills_{{ $loop->iteration }}_tab">
                            <div class="content1">
                                <h1 class="tit">
                                    {{ $item->name2 }}
                                </h1>
                                <div class="detail_text">
                                    <div class="number">
                                        <p>
                                            {{ $item->order }}
                                        </p>
                                    </div>
                                    <div class="texti">
                                        {!! htmlspecialchars_decode($item->detail) !!}
                                    </div>
                                </div>
                                <div class="content_image">
                                    <div class="image">
                                        <img src="{{ $item->image }}" alt="">
                                    </div>
                                    <div class="items_">
                                        <div class="items">
                                            @foreach ($item->items as $it)
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ $it['image'] }}" alt="">
                                                    </div>
                                                    <h3>
                                                        {{ $it['name'] }}
                                                    </h3>
                                                    <p>
                                                        {!! nl2br($it['detail']) !!}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
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