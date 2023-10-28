@extends('web.layout')
@section('title', 'Términos y condiciones | SUMMA CENTER LATAM')
@section('description', 'Términos y condiciones | SUMMA CENTER LATAM')
@section('keywords', 'Términos y condiciones | SUMMA CENTER LATAM')
@section('image', $setting->meta_image)
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec38">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 terminos">
                <h1>
                    TÉRMINOS Y CONDICIONES DE USO DEL SITIO WEB
                </h1>
                <div class="content">
                    {!! htmlspecialchars_decode($pagefield->terms_and_conditions) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection