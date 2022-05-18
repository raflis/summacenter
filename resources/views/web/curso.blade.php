@extends('web.layout')

@section('content')

<section class="sec22" style="background-image: url('../images/slider-ofimatica.png')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    SCM
                </p>
                <p>
                    Gestión y Optimización de la Cadena de
                </p>
                <p>
                    SUMINISTRO
                </p>
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
                                6 de Enero
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
                                Sábados de 6:00pm a 10:00pm
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
                                46 Horas Cronológicas
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
                                S/ 1800
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
                      <li class="breadcrumb-item active" aria-current="page">Categoría</li>
                      <li class="breadcrumb-item active" aria-current="page">Curso</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 presentacion">
                <h1>
                    Actualízate en las
                    tendencias del
                    sector logístico
                </h1>
                <p class="text1">
                    Este curso esta disponible en Modalidad:
                </p>
                <p class="text2">
                    <img src="{{ asset('images/icono-online.png') }}" alt="">
                    Sincrónica Online
                </p>
                <div class="botones">
                    <a href="" class="btn btn-matricula">
                        <img src="{{ asset('images/cart.png') }}" alt="">
                        MATRICULARME AHORA
                    </a>
                    <a href="" class="btn btn-descarga" data-bs-toggle="modal" data-bs-target="#video1">
                        VER VIDEO <br> INTRODUCTORIO
                    </a>
                </div>
            </div>
            <div class="col-md-5 video">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/x" 
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
                <iframe height=480 src="https://www.youtube.com/embed/x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium, architecto labore, maxime omnis dolorem sed assumenda delectus qui, ratione cupiditate corrupti quasi numquam aliquid quidem perferendis cumque repellendus reprehenderit?
                                </p>
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
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium, architecto labore, maxime omnis dolorem sed assumenda delectus qui, ratione cupiditate corrupti quasi numquam aliquid quidem perferendis cumque repellendus reprehenderit?
                                </p>
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
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_flush_1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush_1" aria-expanded="false" aria-controls="flush_1">
                                                <img src="{{ asset('images/cruz.png') }}" alt="">
                                                Introducción al Supply Chain Management
                                            </button>
                                        </h2>
                                        <div id="flush_1" class="accordion-collapse collapse" aria-labelledby="head_flush_1">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        Introducción al Supply Chain Management
                                                    </li>
                                                    <li>
                                                        Introducción al Supply Chain Management
                                                    </li>
                                                    <li>
                                                        Introducción al Supply Chain Management
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_flush_2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush_2" aria-expanded="false" aria-controls="flush_2">
                                                <img src="{{ asset('images/cruz.png') }}" alt="">
                                                Planeamiento de la Demanda y Oferta
                                            </button>
                                        </h2>
                                        <div id="flush_2" class="accordion-collapse collapse" aria-labelledby="head_flush_2">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        Planeamiento de la Demanda y Oferta
                                                    </li>
                                                    <li>
                                                        Planeamiento de la Demanda y Oferta
                                                    </li>
                                                    <li>
                                                        Planeamiento de la Demanda y Oferta
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                        <ul>
                            <li>
                                46 HORAS Cronológicas con material teórico práctico descargable
                            </li>
                            <li>
                                Obsequio de capacitación complementaria que potenciará tu Perfil Porfesional
                            </li>
                            <li>
                                Casos Prácticos y Analíticos para desarrollar luego de cada tema
                            </li>
                        </ul>
                    </div>
                    <div class="accordion-item accordion-teacher">
                        <div class="teacher">
                            <div class="image">
                                <img src="{{ asset('images/teacher.png') }}" alt="">
                            </div>
                            <div class="description">
                                <h2>
                                    Docente
                                </h2>
                                <p class="name">
                                    MBA Ing. César Huaitalla Mauricio
                                </p>
                                <p class="detail">
                                    <strong>MBA en Dirección y Administración</strong> de Empresas en la Universidad de Politécnica di Bari, Italia. Ingeniero Industrial de profesión,
                                    Titulado y Colegiado. Adicionalmente cuenta con una Maestría en Dirección Jose Cela de España y con un Diplomado en Supply Chain Management en la UPC.
                                    <br><br>
                                    <strong>Experiencia</strong> en más de 25 años trabajando en logística, producción, comercialización, administración de contratos y mejora continua en empresas transnacionales y nacionales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-certificate">
                        <div class="image">
                            <img src="{{ asset('images/certificado2.png') }}" alt="">
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
                                    Incluye el ID del certificado internacial y nacionales.
                                </li>
                            </ul>
                            <div class="buttons">
                                <a href="" class="btn-solicitar">
                                    SOLICITAR<br>
                                    INFORMACIÓN
                                </a>
                                <a href="">
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
                        <form action="{{ route('index') }}" method="POST">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="name">Nombres</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="lastname">Apellidos</label>
                            <input type="text" name="lastname" id="" class="form-control" placeholder="Apellidos" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="telephone">Celular</label>
                            <input type="text" name="telephone" id="" class="form-control" placeholder="Celular" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="course">Curso de Interés</label>
                            <select name="course" id="" class="form-select" required>
                                <option value="">Estoy interesado en</option>
                            </select>
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
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-logistica.png') }}" alt="">
                                <span>
                                    Operaciones y Logística
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    Logístico
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-mantenimiento.png') }}" alt="">
                                <span>
                                    Mantenimiento
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    Minero
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-produccion.png') }}" alt="">
                                <span>
                                    Producción
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    de Mantenimiento
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <img src="{{ asset('images/curso-recursos-humanos.png') }}" alt="">
                                <span>
                                    Talento Humano
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ asset('images/curso4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    Accede nuestros cursos
                                    Especializados en el Sector
                                    de Recursos Humanos
                                </h4>
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
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
        })
    })
</script>

@endsection