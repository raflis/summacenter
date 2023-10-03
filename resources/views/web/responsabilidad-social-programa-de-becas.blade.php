@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec44">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb px-60">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Responsabilidad Social</li>
                      <li class="breadcrumb-item active" aria-current="page">Financiamientos</li>
                      <li class="breadcrumb-item active" aria-current="page">Programa de Becas</li>
                    </ol>
                </nav>
            </div>
            @include('web.partials.header-responsabilidad')
            <div class="col-md-12">
                <h2 class="tit_vf">
                    PROGRAMA DE BECAS
                </h2>
                <div class="content_vf">
                    <div class="content_left">
                        {!! htmlspecialchars_decode($pagefield->responsibility_text1) !!}
                    </div>
                    <div class="content_right">
                        <img class="img6" src="{{ $pagefield->responsibility_image1 }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection