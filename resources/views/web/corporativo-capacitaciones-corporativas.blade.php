@extends('web.layout')
@section('title', $setting->meta_title[17])
@section('description', $setting->meta_description[17])
@section('keywords', $setting->meta_keyword[17])
@section('image', $setting->meta_image)
@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[8]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[8]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[8]['title2'] }}
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
                      <li class="breadcrumb-item active" aria-current="page">Capacitaciones Corporativas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 texto">
                <h1>
                    {{ $pagefield->field_free_4[1] }}
                </h1>
                <div>
                    {!! htmlspecialchars_decode($pagefield->field_free_4[2]) !!}
                </div>
            </div>
            <div class="col-md-12 px-0 navdiv">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Presentación
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Propuesta de Valor
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Educación Corporativa
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Portafolio
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Contacto
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <div class="content1_1">
                                    <div class="image">
                                        <img src="{{ $pagefield->field_free_4[3] }}" alt="">
                                    </div>
                                    <div class="content_">
                                        <div class="content">
                                            {!! htmlspecialchars_decode($pagefield->field_free_4[4]) !!}
                                            <div class="btn_action">
                                                <a href="{{ $pagefield->field_free_4[6] }}" class="btn btn-conocemas">
                                                    {!! nl2br($pagefield->field_free_4[5]) !!}
                                                    <img src="{{ asset('images/arrow-right-white.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content1">
                                <div class="propuestas">
                                    <div class="academica">
                                        <h1>
                                            {{ $pagefield->field_free_4[7] }}
                                        </h1>
                                        <div class="items">
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-academica1.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    personalizado
                                                </h3>
                                                <p>
                                                    Cursos a medida orientados a
                                                    cubrir las necesidades de
                                                    la  organización
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-academica2.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    competitividad
                                                </h3>
                                                <p>
                                                    Formación por competencias
                                                    de acuerdo al mercado
                                                    laboral
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-academica3.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    experiencia
                                                </h3>
                                                <p>
                                                    Plana docente altamente
                                                    calificada y con trayectoria
                                                    profesional en el mercado
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-academica4.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    adaptabilidad
                                                </h3>
                                                <p>
                                                    Flexibilidad en tiempo,
                                                    duración y desarrollo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comercial">
                                        <h1>
                                            {{ $pagefield->field_free_4[8] }}
                                        </h1>
                                        <div class="items">
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-comercial1.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    MODALIDAD
                                                </h3>
                                                <p>
                                                    Capacitación In-House o E-Learning
                                                    ( según disponibilidad )
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-comercial2.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    RESPALDO
                                                </h3>
                                                <p>
                                                    Convenios de Cooperación
                                                    Interinstitucional por medio de
                                                    Bolsa de Trabajo
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-comercial3.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    PROMOCIONES
                                                </h3>
                                                <p>
                                                    Descuentos por
                                                    Programas de Capacitación
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{ asset('images/propuesta-comercial4.png') }}" alt="">
                                                </div>
                                                <h3>
                                                    CERTIFICACIÓN
                                                </h3>
                                                <p>
                                                    Certificados a nombres de
                                                    la Institución con valor
                                                    internacional
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content1">
                                <div class="educacion_corporativa">
                                    <h1>
                                        {{ $pagefield->field_free_4[9] }}
                                    </h1>
                                    <div>
                                        {!! htmlspecialchars_decode($pagefield->field_free_4[10]) !!}
                                    </div>
                                    <div class="steps">
                                        <div class="step">
                                            <div class="number">
                                                <p>
                                                    1
                                                </p>
                                            </div>
                                            <div class="text">
                                                Colaboración y
                                                trabajo en equipo de los colaboradores
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="number">
                                                <p>
                                                    2
                                                </p>
                                            </div>
                                            <div class="text">
                                                Creación de un
                                                lenguaje común
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="number">
                                                <p>
                                                    3
                                                </p>
                                            </div>
                                            <div class="text">
                                                Información específica y aplicalble
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="number">
                                                <p>
                                                    4
                                                </p>
                                            </div>
                                            <div class="text">
                                                Enfoques de aprendizaje personalidados
                                            </div>
                                        </div>
                                    </div>
                                    <h2>
                                        {{ $pagefield->field_free_4[11] }}
                                    </h2>
                                    <div class="image">
                                        <img src="{{ $pagefield->field_free_4[12] }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content1">
                                <div class="portafolio">
                                    <div class="portafolio_header">
                                        <div class="content_">
                                            <div class="content">
                                                <h1>
                                                    {{ $pagefield->field_free_4[13] }}
                                                </h1>
                                                <p class="pb-0">
                                                    <strong>{{ $pagefield->field_free_4[14] }}</strong>
                                                </p>
                                                <div>
                                                    {!! htmlspecialchars_decode($pagefield->field_free_4[15]) !!}
                                                </div>
                                                <div class="btn_action">
                                                    <a href="{{ $pagefield->field_free_4[17] }}" class="btn btn-conocemas">
                                                        {!! nl2br($pagefield->field_free_4[16]) !!}
                                                        <img src="{{ asset('images/arrow-right-white.png') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image">
                                        </div>
                                    </div>
                                    <div class="portafolio_carrusel">
                                        <h1>
                                            {{ $pagefield->field_free_4[20] }}
                                        </h1>
                                        <div id="carousel-confiaron-empresas" class="owl-carousel">
                                            @foreach ($pagefield->field_free_8 as $item)
                                            <div class="item">
                                                <div class="imagen">
                                                    <img src="{{ $item['image'] }}" alt="">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="portafolio2">
                                    <div class="image-bg">
                                    </div>
                                    <div class="items">
                                        @foreach ($pagefield->field_free_9 as $item)
                                        <div class="item">
                                            <div class="image">
                                                <img src="{{ $item['image'] }}" alt="">
                                            </div>
                                            <div class="counters" id="counters_1">
                                                <div class="counter">{{ $item['name'] }}</div>
                                            </div>
                                            <p>
                                                {!! nl2br($item['detail']) !!}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_5" role="tabpanel" aria-labelledby="pills_5_tab">
                            <div class="content1">
                                <div class="contacto">
                                    <div class="formulario">
                                        <h1>
                                            {{ $pagefield->field_free_4[18] }}
                                        </h1>
                                        <div class="tit">
                                            {!! htmlspecialchars_decode($pagefield->field_free_4[19]) !!}
                                        </div>
                                        <form action="{{ route('postCorporativo') }}" method="POST" class="row needs-validation" novalidate>
                                            @csrf
                                            <input type="hidden" name="from" value="corporativo">
                                            <div class="form-group col-md-6">
                                                <label for="">Nombres*</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Apellidos*</label>
                                                <input type="text" name="lastname" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Tipo de Documento*</label>
                                                <select name="type_document" id="" class="form-select" required>
                                                    <option value="DNI">Documento nacional de identidad (DNI)</option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                    <option value="Carnet de extranjería">Carnet de extranjería</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Número de Documento*</label>
                                                <input type="text" name="document" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Teléfono*</label>
                                                <input type="text" name="telephone" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Correo Electrónico*</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Empresa*</label>
                                                <input type="text" name="company" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">RUC*</label>
                                                <input type="text" name="ruc" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Cargo*</label>
                                                <input type="text" name="position" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Consulta</label>
                                                <textarea name="observation" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-check col-md-7">
                                                <input class="form-check-input" name="call_sms" type="checkbox" value="1" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Llamar y enviar mensajes de texto a este número de teléfono
                                                </label>
                                            </div>
                                            <div class="form-group col-md-7">
                                                <p class="bottom">
                                                    Al enviar el formulario con esta casilla marcada, acepto recibir llamadas (incluidas
                                                    llamadas en vivo, automáticas o grabadas), mensajes de texto y mensajes de este
                                                    es un número de teléfono celular inalámbrico.
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-guardar">GUARDAR</button>
                                                <a href="" class="btn btn-cancelar">CANCELAR</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    CAPACITACIONES QUE TE PUEDEN INTERESAR
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-cursos" class="owl-carousel">
                    @foreach ($course_areas as $item)
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <span>
                                    {{ $item->name }}
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <a class="imagen" href="{{ route('programas', $item->slug) }}">
                                <img src="{{ $item->image }}" alt="">
                            </a>
                            <div class="content">
                                <h4>
                                    {{ $item->text }}
                                </h4>
                                <a href="{{ route('programas', $item->slug) }}" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection