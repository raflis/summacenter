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
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Responsabilidad Social</li>
                      <li class="breadcrumb-item active" aria-current="page">Financiamientos</li>
                      <li class="breadcrumb-item active" aria-current="page">Programa de Becas</li>
                    </ol>
                </nav>
            </div>
            @include('web.partials.header-responsabilidad')
            <div class="col-md-12">
                <div class="content">
                    <h1 class="tit">
                        Financiamiento
                    </h1>
                    <h2 class="tit2">
                        PROGRAMA DE BECAS
                    </h2>
                    <div class="content_">
                        <img class="img6" src="{{ asset('images/img6.png') }}" alt="">
                        <p>
                            <strong>SOBRE EL PROGRAMA</strong>
                            <br><br>
                            El programa de Becas SUMMA CENTER brinda acceso a los diversos cursos profesionales que ofrece, a diferentes jóvenes dentro y fuera de Perú. 
                            <br><br>
                            <strong>¿QUÉ INCLUYEN LAS BECAS?</strong>
                            <br><br>
                            El programa de Becas SUMMA CENTER reconoce el esfuerzo de jóvenes talentosos de universidades públicas y privadas que no cuenten con los recursos necesarios para acceder a cursos de reforzamiento profesional de calidad. Esta iniciativa cuenta con tres componentes:
                            <br><br>
                            <strong>FINANCIAMIENTO</strong>
                            <br><br>
                            Cubre costos académicos del 50% y 100%, costos de certificación y acreditación.
                            Empleabilidad: Se coordina y comparte perfiles con una red de prestigiosas empresas con la finalidad de impulsar el desarrollo profesional de los egresados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection