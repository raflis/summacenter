@extends('web.layout')

@section('content')

<section class="sec13">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    Soporte
                </p>
                <p>
                    TÉCNICO Y ACADÉMICO
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec24">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 presentacion">
                <h1>
                    Capacítate con nosotros y
                    obtén el apoyo de soporte
                    Técnico Summa 24/7
                </h1>
                <p class="text1">
                    Porque sabemos de tu esfuerzo por capacitarte
                    y que tus tiempos son limitados.
                </p>
                <p class="text2">
                    <strong>Te impulsaremos a seguir avanzando</strong>
                </p>
                <div class="botones">
                    <a href="" class="btn btn-matricula">
                        APOYO TÉCNICO
                    </a>
                    <a href="" class="btn btn-azul">
                        APOYO ACADÉMICO
                    </a>
                </div>
            </div>
            <div class="col-md-5 video">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/BsWSocrmlSI" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="sec36">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 soporte_left">
                <div class="tit">
                    <h1>
                        Como Alumno Summa tienes un espacio
                        especial para resolver dudas o problemas del curso
                    </h1>
                    <p>
                        Te ayudamos a desarrollar de manera adecuada y segura tu capacitación profesional, ofreciendo un servicio garantizado, profesional y de calidad.
                    </p>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte1.png') }}" alt="">
                        </div>
                        <h3>
                            PREGUNTAS
                        </h3>
                        <p>
                            Relacionado a los temas tratados en clases
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte2.png') }}" alt="">
                        </div>
                        <h3>
                            PLATAFORMA
                        </h3>
                        <p>
                            Dudas sobre la plataforma virtual y los webinar
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte3.png') }}" alt="">
                        </div>
                        <h3>
                            MEJORA
                        </h3>
                        <p>
                            Optimizar y mejorar el rendimiento de la plataforma
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte4.png') }}" alt="">
                        </div>
                        <h3>
                            CONSULTA DE NOTAS
                        </h3>
                        <p>
                            Consulta tus notas, proyecto, recuperación de exmanen, etc
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte5.png') }}" alt="">
                        </div>
                        <h3>
                            LICENCIA SAP
                        </h3>
                        <p>
                            Consultas sobre el estado de licencia y extenciones
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte5.png') }}" alt="">
                        </div>
                        <h3>
                            INSTALACIÓN SAP
                        </h3>
                        <p>
                            El equipo de soporte te ayudará
                            e intalará el sistema para el
                            desarrollo de tus clases
                        </p>
                        <div class="item_button">
                            <a href="" class="btn btn-contactar">CONTACTAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 soporte_right">
                <div class="items">
                    <h1 class="tit">
                        Beneficios de tener
                        un equipo a tu disposición
                    </h1>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte_r1.png') }}" alt="">
                        </div>
                        <h3>
                            Atención Inmediata
                        </h3>
                        <p>
                            Brindamos atención Inmediata
                            a todos nuestros estudiantes
                            24/7 de forma remota.
                        </p>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte_r2.png') }}" alt="">
                        </div>
                        <h3>
                            Solución de incidencias
                        </h3>
                        <p>
                            Nuestro equipo de Profesionales está disponible para brindar soluciones inmediatas a las posibles eventualidades que se presenten.
                        </p>
                    </div>
                    <hr>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte_r3.png') }}" alt="">
                        </div>
                        <h3>
                            Garantía de contacto
                        </h3>
                        <p>
                            Podrá contactarnos a través de nuestras diversas formas: Telefónicamente, Whatsapp y mail.
                        </p>
                    </div>
                    <hr>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte_r4.png') }}" alt="">
                        </div>
                        <h3>
                            Ahorra Costos
                        </h3>
                        <p>
                            El servicio de apoyo no tiene costo alguno, tus consultas y opiniones nos ayudan a mejorar para brindarte una mejor experiencia. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection