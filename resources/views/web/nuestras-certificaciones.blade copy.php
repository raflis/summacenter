@extends('web.layout')

@section('content')

<section class="sec13">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    NUESTRAS
                </p>
                <p>
                    CERTIFICACIONES
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 index-nav_">
                <div class="index-nav">
                    <div class="index-item" tab="bloc1">
                        <a href="#bloc1" class="nav-index">Anatomía de tu <br>certificación</a>
                    </div>
                    <div class="index-item" tab="bloc2">
                        <a href="#bloc2" class="nav-index">Beneficios de <br>nuestra certificación</a>
                    </div>
                    <div class="index-item" tab="bloc3">
                        <a href="#bloc3" class="nav-index">Verifica<br> tu certificación</a>
                    </div>
                    <div class="index-item" tab="bloc4">
                        <a href="#bloc4" class="nav-index">¿Dónde encuentro<br> mi certificado?</a>
                    </div>
                    <div class="index-item" tab="bloc5">
                        <a href="#bloc5" class="nav-index">¿Cómo agregar tu<br> certificado a LinkedIn?</a>
                    </div>
                </div>
                <div class="index-bar">
                    <div class="bar-item" tab="bloc2"></div>
                    <div class="bar-item" tab="bloc3"></div>
                    <div class="bar-item" tab="bloc4"></div>
                    <div class="bar-item" tab="bloc5"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec14 ancre" id="bloc1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 title">
                <h1>
                    ¡LA EDUCACIÓN DIGITAL ESTÁ EVOLUCIONANDO
                    Y LAS CERTIFICACIONES TAMBIÉN!
                </h1>
            </div>
            <div class="col-md-10 description">
                <p class="text-justify">
                    <div class="imagen">
                        <p>ANATOMÍA DE TU CERTIFICADO</p>
                        <img class="certificado" src="{{ asset('images/certificado.png') }}" alt="">
                    </div>
                    <span class="text">
                        Al aprobar las evaluaciones de tu capacitación con Summa Center, recibirás una certificación digital que te permitirá compartir tus logros académicos y profesionales mediante una evidencia verificable en tiempo real con validez internacional, de esta manera obtienes mayor visibilidad ante los reclutadores de talento y mejoras tu reputación digital con una certificación líder del siglo XXI.
                        Summa Center es una de las instituciones pioneras en ofrecer esta innovadora forma de acreditación, contando actualmente con más de 40 insignias digitales para certificar nuestros programas educativos en distintos niveles.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec15 ancre" id="bloc2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    Beneficios de nuestra Certificación Internacional
                </h1>
            </div>
            <div class="col-md-10 description">
                <div class="items">
                    <div class="item">
                        <div class="item_">
                            <img src="{{ asset('images/descargable.png') }}" alt="">
                            <p class="title">
                                DESCARGABLE
                            </p>
                            <p class="description">
                                Es de descarga inmediata desde la Plataforma E-learning una vez aprobado el curso.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_">
                            <img src="{{ asset('images/unico.png') }}" alt="">
                            <p class="title">
                                ÚNICO
                            </p>
                            <p class="description">
                                El certificado está asociado a tu insignia digital, el cual posee un código ID único para la validación del curso en tiempo real.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_">
                            <img src="{{ asset('images/linkable.png') }}" alt="">
                            <p class="title">
                                LINKABLE
                            </p>
                            <p class="description">
                                El certificado está asociado a tu insignia digital, el cual posee un código ID único para la validación del curso en tiempo real.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_">
                            <img src="{{ asset('images/verificable.png') }}" alt="">
                            <p class="title">
                                VERIFICABLE
                            </p>
                            <p class="description">
                                Está integrado un código QR que acreditará tus conocimientos adquiridos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 text">
                <p>
                    <strong>Revoluciona la</strong> forma en la que presentas
                    tu <strong>certificación</strong> con las <span>herramientas
                    dígitales del siglo XXI.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec8 ancre" id="bloc3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="content">
                    <h5>
                        VERIFICA TU CERTIFICACIÓN
                    </h5>
                    <p>
                        Como alumno Summa puedes ingresar tu documento
                        de identidad y verificar tu certificación emitida por
                        nuestra institución, respaldada internacionalmente
                        por Credly.
                    </p>
                    <form action="" method="POST">
                        <input type="text" class="form-control shadow" name="document" placeholder="Nro. Documento de Identidad">
                        <input type="submit" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec16 ancre" id="bloc4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    ¿Dónde encuentro mi certificado?
                </h1>
            </div>
            <div class="col-md-10 description">
                <p>
                    Summa Center emite automáticamente los certificados para los estudiantes aprobados tan pronto como culminan el curso. Cuando el certificado esté listo, podrás ver los enlaces del certificado en tu panel de control y en la página Progreso del curso.
                </p>
                <p class="text-center">
                    <img src="{{ asset('images/encuentro-certificado.png') }}" alt="">
                </p>
                <p>
                    Si no tienes una calificación de aprobado y el curso no ha finalizado, es posible que puedas completar más tareas en el curso para mejorar tu calificación. Si tienes preguntas sobre esto, escribe tu duda en el foro de discusión del curso, donde el equipo del curso puede ayudarte.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec17 ancre" id="bloc5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 title">
                <h1>
                    ¿Cómo agregar tu Certificado a linkedin?
                </h1>
            </div>
            <div class="col-md-10 description">
                <p>
                    LinkedIn, es una red social -profesional- donde empleadores buscan prospectos para ocupar cargos dentro de sus empresas, te mostramos como actualizarlo compartiendo tu certificación.
                </p>
                <p class="text-center">
                    <img src="{{ asset('images/agregar-certificado.png') }}" alt="">
                </p>
            </div>
            <div class="col-md-10">
                <div class="row pasos justify-content-center">
                    <div class="col-md-4 paso d-flex">
                        <div class="paso_">
                            <div class="titulo">
                                <h3>
                                    PASO 1
                                </h3>
                            </div>
                            <div class="detalle">
                                <p>
                                    En tu perfil de Linked In selecciona Añadir Sección y en la sección Trayectoria Profesional y academica selecciona Licencias y Certificaciones.
                                </p>
                            </div>
                            <div class="imagen">
                                <img src="{{ asset('images/paso1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 paso d-flex">
                        <div class="paso_">
                            <div class="titulo">
                                <h3>
                                    PASO 2
                                </h3>
                            </div>
                            <div class="detalle">
                                <p>
                                    Se abrirá una ventana donde debes completar los siguientes campos:
                                    Nombre del curso, Empresa emisora, Fecha de expedición e ID de la credencial que es el código de validación que se encuentra en tu certificado.
                                </p>
                            </div>
                            <div class="imagen">
                                <img src="{{ asset('images/paso2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 paso d-flex">
                        <div class="paso_">
                            <div class="titulo">
                                <h3>
                                    PASO 3
                                </h3>
                            </div>
                            <div class="detalle">
                                <p>
                                    Y listo, ya se encuentra tu certificado de Summa Center del curso que finalizaste exitosamente.
                                    Este certificado ayudará a cualquier persona interesada en adquirir tus servicios y asegurarse que realmente estas calificado para el puesto.
                                </p>
                            </div>
                            <div class="imagen">
                                <img src="{{ asset('images/paso3.png') }}" alt="">
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
    /* Variable initialisation */
    var classeDuLienSDmooth = "a.nav-index";
    var dureeDuSmooth = 500;

    var navHeight = $(".sec10").height();
    var hauteurFenetre = $(window).height();
    var hauteurDocument = $(document).height();
    var navigation = $(".sec10"); 
    var navOffsetTop = $(".sec10").offset().top;

    var stick = "sticky";
    var unstick = "unsticky";
    var active = "active";

    /* SmoothScroll */
    $(classeDuLienSDmooth).click(function(){  
        var idAncre = $(this).attr("href");
        $('html, body').stop().animate({
            scrollTop:$(idAncre).offset().top - navHeight
        }, dureeDuSmooth); 
    return false;
    }); 

    $(window).scroll(function() {
    var scrollPosition = $(window).scrollTop();
    /* Sticky menu */
    if (scrollPosition >= navOffsetTop) { 
        navigation.removeClass(unstick);
        navigation.addClass(stick);
    } 
    else {
        navigation.removeClass(stick);
        navigation.addClass(unstick);
    } 
    
    $(".ancre").each(function(){
        var ancrePositionId = "#"+$(this).attr("id");
        var ancrePositionId_ = $(this).attr("id");
        var ancrePosition = $(ancrePositionId).offset().top;
        if(scrollPosition >= (ancrePosition - navHeight - 10)) {
            $(".index-nav .index-item").removeClass(active);
            //document.querySelector('div[tab=' + ancrePositionId_ +']').addClass(active);
            $("div[tab=\""+ancrePositionId_+"\"]").addClass(active);
        }
        else if ((scrollPosition+hauteurFenetre) == hauteurDocument){
            $(".index-nav .index-item").removeClass(active);
            //document.querySelector('div[tab=' + ancrePositionId_ +']').addClass(active);
            $("div[tab=\""+ancrePositionId_+"\"]").addClass(active);   
        }
        else {
            $("div[tab=\""+ancrePositionId_+"\"]").removeClass(active);
            //document.querySelector('div[tab=' + ancrePositionId_ +']').removeClass(active);
        }
    }); 
    });
</script>

@endsection