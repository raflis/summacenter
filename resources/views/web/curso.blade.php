@extends('web.layout')
@section('title', $course->meta[1])
@section('keywords', $course->meta[2])
@section('description', $course->meta[3])
@section('image', (isset($course->meta[4]))?$course->meta[4]:$setting->meta_image)
@section('content')

<section class="sec22" style="background-image: url('{{ $course->slider }}')!important">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $course->title1 }}
                </p>
                @if($course->title2)
                <p>
                    {{ $course->title2 }}
                </p>
                @endif
                @if($course->title3)
                <p>
                    {{ $course->title3 }}
                </p>
                @endif
                @if($course->title3_image)
                <img src="{{ $course->title3_image }}" alt="">
                @endif
            </div>
        </div>
    </div>
</section>

<section class="sec23">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 info">
                <div class="info_">
                    <div class="info-item">
                        <div class="image">
                            <img src="{{ asset('images/icono-inicio.png') }}" alt="">
                        </div>
                        <div class="text">
                            <p class="text1">
                                Inicio:
                            </p>
                            <p class="fecha">
                                {{ $course->start_of_classes }}
                            </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="image">
                            <img src="{{ asset('images/icono-horario.png') }}" alt="">
                        </div>
                        <div class="text">
                            <p class="text1">
                                Horario:
                            </p>
                            <p class="horario">
                                {{ $course->schedule }}
                            </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="image">
                            <img src="{{ asset('images/icono-duracion.png') }}" alt="">
                        </div>
                        <div class="text">
                            <p class="text1">
                                Duración:
                            </p>
                            <p class="duracion">
                                {{ $course->duration }}
                            </p>
                        </div>
                    </div>
                    <div class="info-item precio">
                        <div class="image">
                            <img src="{{ asset('images/icono-inversion.png') }}" alt="">
                        </div>
                        <div class="text">
                            <p class="text1">
                                Inversión:
                            </p>
                            <p class="inversion">
                                Monto Regular
                                S/ {{ $course->price }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec24">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb__">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 mt-3">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('programas') }}">Programas</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('programas', $course->course_category->course_area->slug) }}">{{ $course->course_category->course_area->name }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $course->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 presentacion">
                <h1>
                    {{ $course->subtitle }}
                </h1>
                <p class="text1">
                    Este curso esta disponible en Modalidad:
                </p>
                <p class="text2">
                    <img src="{{ asset('images/icono-online.png') }}" alt="">
                    {{ $course->modality }}
                </p>
                <div class="botones">
                    <a href="" class="btn btn-matricula btn-add" id_product="{{ $course->id }}">
                        <img src="{{ asset('images/cart_buy.png') }}" alt="">
                        MATRICULARME AHORA
                    </a>
                    <a href="" class="btn btn-descarga" data-bs-toggle="modal" data-bs-target="#video1">
                        VER VIDEO <br> INTRODUCTORIO
                    </a>
                </div>
            </div>
            <div class="col-md-5 video">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/{{ $course->video_id }}" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<div class="modal fade videomodal" id="video1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe height=480 src="https://www.youtube.com/embed/{{ $course->download_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<section class="sec28">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 contenido">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                Objetivos
                            </button>
                        </h2>
                        <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                            <div class="accordion-body">
                                {!! htmlspecialchars_decode($course->objective) !!}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                Público
                            </button>
                        </h2>
                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="head_2">
                            <div class="accordion-body">
                                {!! htmlspecialchars_decode($course->audience) !!}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                Estructura Curricular
                            </button>
                        </h2>
                        <div id="collapse_3" class="accordion-collapse collapse show" aria-labelledby="head_3">
                            <div class="accordion-body">
                                <div class="accordion" id="accordion_flush">
                                    @foreach ($course->topics as $item)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_flush_{{ $item->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush_{{ $item->id }}" aria-expanded="false" aria-controls="flush_{{ $item->id }}">
                                                <img src="{{ asset('images/cruz.png') }}" alt="">
                                                {{ $item->name }}
                                            </button>
                                        </h2>
                                        <div id="flush_{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="head_flush_{{ $item->id }}">
                                            <div class="accordion-body">
                                                <ul>
                                                    @foreach ($item->sessions as $ses)
                                                        <li>{{ $ses['name'] }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-only">
                        <h2>
                            BENEFICIOS
                        </h2>
                        <p>
                            Este curso incluye:
                        </p>
                        {!! htmlspecialchars_decode($course->benefits) !!}
                    </div>
                    <div class="accordion-item accordion-teacher">
                        <div id="carousel-curso-profesor" class="owl-carousel">
                            @foreach ($course->workers as $item)
                            <div class="item">
                                <div class="teacher">
                                    <div class="image">
                                        <img src="{{ $item->image_course }}" alt="">
                                    </div>
                                    <div class="description">
                                        <h2>
                                            Docente
                                        </h2>
                                        <p class="name">
                                            {{ $item->fullname }}
                                        </p>
                                        <div class="detail">
                                            {!! htmlspecialchars_decode($item->item_course) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="accordion-item accordion-certificate">
                        <div class="image">
                            <img src="{{ $course->certificate }}" alt="">
                        </div>
                        <div class="content">
                            <h2>
                                Certificación
                            </h2>
                            <p>
                                Los participantes que completen
                                exitosamente el curso, recibirán la
                                siguiente certificación:
                            </p>
                            <ul>
                                <li>
                                    Recibirás una insignia digital enfocada al curso
                                </li>
                                <li>
                                    Obtendrás validación mediante un código QR en linea
                                </li>
                                <li>
                                    Contiene un URL que te direcciona al portal de insignias y acreditaciones
                                </li>
                                <li>
                                    Incluye el ID del certificado internacional y nacional.
                                </li>
                            </ul>
                            <div class="buttons">
                                <a href="" class="btn-solicitar">
                                    SOLICITAR<br>
                                    INFORMACIÓN
                                </a>
                                <a href="{{ $course->brochure }}" target="_blank">
                                    DESCARGAR<br>
                                    BROCHURE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 formu">
                <div class="formulario">
                    <p class="tit1">Para más información</p>
                    <p class="tit2">INGRESA TUS DATOS</p>
                    <div class="formulario_ row">
                        <form action="{{ route('postCurso') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="from" value="curso">
                        <input type="hidden" name="interested_course" value="{{ $course->name }}">
                        <div class="form-group col-md-12" id="fieldname">
                            <label for="name">Nombres</label>
                            <input type="text" name="name" class="form-control" placeholder="Nombres" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="lastname">Apellidos</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Apellidos" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="document">DNI</label>
                            <input type="text" name="document" class="form-control" placeholder="DNI" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="telephone">Teléfono</label>
                            <div class="phone_contact d-flex">
                                <div class="dropdown drop_flags">
                                    <button class="btn btn-flag dropdown-toggle drop_flagsW" type="button" id="drop_flags" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="flag_user" src="{{ asset('images/flags/pe.png') }}" alt="">
                                        <input type="hidden" name="flag_id" value="12">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="drop_flags">
                                        @foreach ($flags as $flag)
                                        <li>
                                            <button id="flag_selec" class="dropdown-item" type="button" flag_id="{{ $flag->id }}" imagen_bandera="{{ asset('images/flags/'.$flag->image) }}" placeholder_bandera="{{ $flag->placeholder }}">
                                                <img src="{{ asset('images/flags/'.$flag->image) }}" alt="">
                                                <p class="name_flag">{{ $flag->name }} <span>({{ $flag->dial_code }})</span></p>
                                            </button>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <p class="texto">
                                *Consulte por nuestros financiemientos <br>
                                personalizados y/o descuentos corporativos*
                            </p>
                        </div>
                        <div class="form-group col-md-12 enviar">
                            <input type="submit" class="btn btn-enviar shadow" value="Contactar">
                        </div>
                        </form>
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
                    PROGRAMAS QUE TE PUEDEN INTERESAR
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-cursos" class="owl-carousel">
                    @foreach ($course_areas as $item)
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ $item->icon }}" alt="">
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

@section('script')

<script>
    $(function(){
        $('.btn-solicitar').click(function(e){
            e.preventDefault();
            $('input[name=name]').focus();
            $('#fieldname').addClass('fieldname');
            setTimeout(function() {
                $('#fieldname').removeClass('fieldname');
            }, 5000);
        })
    })
</script>

@endsection