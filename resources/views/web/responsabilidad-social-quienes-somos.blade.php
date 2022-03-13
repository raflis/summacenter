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
                      <li class="breadcrumb-item active" aria-current="page">Quiénes Somos</li>
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
                        <img class="img5" src="{{ asset('images/img5.png') }}" alt="">
                        <h2 class="tit2">
                            QUIÉNES SOMOS
                        </h2>
                        <p>
                            El departamento de Responsabilidad Social en Summa Center se encarga de gestionar las diversas acciones de proyección social con el objetivo de contribuir al desarrollo sostenible de la sociedad en la que se encuentra inmersa. Para lograr sus objetivos, la Oficina gestiona el apoyo de las diversas áreas administrativas de la institución y de sus alumnos, así como el contacto con diversas organizaciones como municipalidades y hospitales para la realización de las distintas actividades de desarrollo social que gestiona.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection