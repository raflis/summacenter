@extends('web.layout')
@section('title', $setting->links[0])
@section('description', $setting->links[0])
@section('keywords', $setting->links[0])
@section('image', $setting->meta_image)
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec68">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="tit">
                    {{ $pagefield->field_free_10[1] }}
                </h1>
                <div class="content">
                    {!! htmlspecialchars_decode($pagefield->field_free_10[2]) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@if (count($pagefield->field_free_11) > 0)
<section class="sec69">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="tit">
                    {{ $pagefield->field_free_10[3] }}
                </h1>
            </div>
            @foreach ($pagefield->field_free_11 as $item)
            <div class="col-md-4 d-flex">
                <div class="item">
                    <a class="image" href="{{ $item['link'] }}" target="_blank" style="background-image: url('{{ $item['image'] }}')">
                    </a>
                    <div class="content">
                        <p>
                            {{ $item['detail'] }}
                        </p>
                        <a href="{{ $item['link'] }}" target="_blank" class="btn btn-vermas">VER MÁS</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection