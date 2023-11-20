@extends('web.layout')
@section('title', 'Manual del alumno')
@section('description', 'Manual del alumno')
@section('keywords', 'Manual del alumno')
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url({{ $pagefield->cover_pages[11]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    {{ $pagefield->cover_pages[11]['title1'] }}
                </p>
                <p class="color">
                    {{ $pagefield->cover_pages[11]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec39">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 manual_alumno">
                <h1>
                    Manual del Alumno
                </h1>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach ($manuals as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_{{ $loop->iteration }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse_{{ $loop->iteration }}">
                                {{ $loop->iteration }}. {{ $item->name }}
                            </button>
                        </h2>
                        <div id="collapse_{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="head_{{ $loop->iteration }}">
                            <div class="accordion-body">
                                {!! htmlspecialchars_decode($item->detail) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="felicitaciones">
                    <div class="image">
                        <img src="{{ asset('images/stars.png') }}" alt="">
                    </div>
                    <h2>FELICITACIONES</h2>
                    <p>
                        ¡Te damos la bienvenida como alumno de Summa Center!
                        <br><br>
                        Este manual contiene toda la información necesaria sobre los aspectos académicos, así como, los procedimientos administrativos que facilitarán cualquier trámite y/o consulta que desees realizar como alumno de Summa Center.
                        <br><br>
                        La inscripción y/o matrícula en cualquier curso, implica la aceptación y conformidad de las disposiciones contenidas en el siguiente manual.
                        <br><br>
                        Esperamos que tu desempeño académico sea constante y exitos
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection