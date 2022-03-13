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
                      <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                      <li class="breadcrumb-item active" aria-current="page">Misión</li>
                    </ol>
                </nav>
            </div>
            @include('web.partials.header-responsabilidad')
            <div class="col-md-12">
                <div class="content">
                    <h1 class="tit">
                        Responsabilidad Social
                    </h1>
                    <div class="content_">
                        <img class="img4" src="{{ asset('images/img4.png') }}" alt="">
                        <h2 class="tit2">
                            MISIÓN
                        </h2>
                        <p>
                            Gestionar el impacto generado por la universidad en la sociedad debido a sus funciones y desarrollar programas integrales y focalizados de educación y salud, promoviendo e impulsando actividad preventiva promocional en sectores rurales y urbanos marginales del ámbito local y regional; promueve la ejecución de eventos de extensión, orientados al desarrollo sostenible de capacidades humanas, del arte, cultura y ambiente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection