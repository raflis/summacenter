@extends('web.layout')
@section('title', $title)
@section('description', $title)
@section('keywords', $title)
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
                    {{ $title }}
                </h1>
                <div class="content">
                    {!! htmlspecialchars_decode($detail) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection