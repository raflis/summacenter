@extends('web.layout')

@section('content')

<section class="sec1">
    @include('web.partials.header')
    <div class="formulario">
        <p>Para más información</p>
        <p>INGRESA TUS DATOS</p>
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
            <div class="form-group col-md-12 enviar">
                <input type="submit" class="btn btn-enviar shadow" value="ENVIAR">
            </div>
            </form>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div id="carousel-slider" class="owl-carousel">
            <div class="item">
                <div class="text">
                    <h1>
                        EL MUNDO NO PARA 
                        <br>
                        <span>CAPACÍTATE AHORA EN</span>
                    </h1>
                    <h2>
                        SUMMA CENTER
                    </h2>
                    <a href="" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
            <div class="item">
                <div class="text">
                    <h1>
                        EL MUNDO NO PARA 
                        <br>
                        <span>CAPACÍTATE AHORA EN</span>
                    </h1>
                    <h2>
                        SUMMA CENTER
                    </h2>
                    <a href="" class="btn btn-vermas">VER MÁS</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    NUESTROS PARTNERS
                </h1>
            </div>
            <div class="col-md-12 carousel">
                <div id="carousel-partners" class="owl-carousel">
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ asset('images/sap.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ asset('images/microsoft.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ asset('images/credly.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ asset('images/acreditta.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ asset('images/certiprof.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="title">
                    <h1>
                        ¿Porqué <span>elegirnos?</span>
                    </h1>
                    <p>
                        Especializado en brindar cursos de capacitación en
                        tecnologías de la información, innovación y gestión
                        empresarial con altos estándares de calidad
                        educativa.
                    </p>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/partners.png') }}" alt="">
                        </div>
                        <div class="description">
                            <h3>PARTNERS</h3>
                            <p>
                                Más de 4000 certificaciones
                                de nuestros Business Partners
                                nos respaldan
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/acreditacion.png') }}" alt="">
                        </div>
                        <div class="description">
                            <h3>ACREDITACIÓN</h3>
                            <p>
                                Más de 4000 certificaciones
                                de nuestros Business Partners
                                nos respaldan
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/planadocente.png') }}" alt="">
                        </div>
                        <div class="description">
                            <h3>PLANA DOCENTE</h3>
                            <p>
                                Más de 4000 certificaciones
                                de nuestros Business Partners
                                nos respaldan
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/calidadeducativa.png') }}" alt="">
                        </div>
                        <div class="description">
                            <h3>CALIDAD EDUCATIVA</h3>
                            <p>
                                Más de 4000 certificaciones
                                de nuestros Business Partners
                                nos respaldan
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/soporte.png') }}" alt="">
                        </div>
                        <div class="description">
                            <h3>SOPORTE</h3>
                            <p>
                                Más de 4000 certificaciones
                                de nuestros Business Partners
                                nos respaldan
                            </p>
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
                    +60 CURSOS EN 6 CATEGORÍAS
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

<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    ARTÍCULOS DESTACADOS
                </h1>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    RECOMENDACIONES
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-recomendaciones" class="owl-carousel">
                    <div class="item">
                        <div class="content">
                            <div class="cara">
                                <div class="image">
                                    <img src="{{ asset('images/recomendacion1.png') }}" alt="">
                                </div>
                                <p class="name">
                                    Nieves Marisol Bautista Huaman
                                </p>
                                <p class="description">
                                    Egresada: SAP HCM y Excel
                                </p>
                            </div>
                            <div class="detras">
                                <div class="first">
                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                    <p>
                                        técnicA En
                                        administración DE
                                        EMPRESAS
                                    </p>
                                </div>
                                <div class="second">
                                    <img src="{{ asset('images/icon-reco2.png') }}" alt="">
                                    <p>
                                        "El desarrollo de las clases fueron muy
                                        <span>dinámicas y entendibles.</span> Durante el curso hubo un 
                                        <span>trato coordial y apoyo inmediato </span>
                                        de parte de coordinación académica ante mis consultas”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="cara">
                                <div class="image">
                                    <img src="{{ asset('images/recomendacion2.png') }}" alt="">
                                </div>
                                <p class="name">
                                    Pedro Flores Ipanaque
                                </p>
                                <p class="description">
                                    Egresado: SAP PM
                                </p>
                            </div>
                            <div class="detras">
                                <div class="first">
                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                    <p>
                                        técnico Electricista
                                    </p>
                                </div>
                                <div class="second">
                                    <img src="{{ asset('images/icon-reco2.png') }}" alt="">
                                    <p>
                                        “Me sorprendió que <span>no era díficil aprender SAP.</span> 
                                        Con mi capacitación en Summa Center <span>logré postular al 
                                        área de planeamiento</span> de mi empresa, aportando mis conocimentos de 
                                        SAP PM <span>pude mejorar</span> los puntos de medición correctamente”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="cara">
                                <div class="image">
                                    <img src="{{ asset('images/recomendacion3.png') }}" alt="">
                                </div>
                                <p class="name">
                                    Jean Paul Martínez Paula
                                </p>
                                <p class="description">
                                    Egresado: SAP PM
                                </p>
                            </div>
                            <div class="detras">
                                <div class="first">
                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                    <p>
                                        supervisor de despacho y Logística
                                    </p>
                                </div>
                                <div class="second">
                                    <img src="{{ asset('images/icon-reco2.png') }}" alt="">
                                    <p>
                                        “Gracias al curso que llevé <span>escalé rápidamente a 
                                        un nuevo cargo profesional</span>, ya que le dió un mayor 
                                        peso a mi currículum frente a los reclutadores, los 
                                        cuales <span>me promovieron al demostrarles mis nuevos 
                                        conocimientos</span> adquiridos. Valoro mucho la atención especial 
                                        que la institución le presta al alumno”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <div class="cara">
                                <div class="image">
                                    <img src="{{ asset('images/recomendacion4.png') }}" alt="">
                                </div>
                                <p class="name">
                                    Marco Piero Aarón Gonzáles Uscamayta
                                </p>
                                <p class="description">
                                    Egresado: SAP PM
                                </p>
                            </div>
                            <div class="detras">
                                <div class="first">
                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                    <p>
                                        técnicA En
                                        administración DE
                                        EMPRESAS
                                    </p>
                                </div>
                                <div class="second">
                                    <img src="{{ asset('images/icon-reco2.png') }}" alt="">
                                    <p>
                                        "El desarrollo de las clases fueron muy
                                        <span>dinámicas y entendibles.</span> Durante el curso hubo un 
                                        <span>trato coordial y apoyo inmediato </span>
                                        de parte de coordinación académica ante mis consultas”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec7">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 title">
                <h1>
                    NUESTROS LOGROS
                </h1>
            </div>
            <div class="col-md-12 logros">
                <div class="logros_">
                    <img src="{{ asset('images/mundo.png') }}" alt="">
                    <div class="texto">
                        Más de 4 000
                        alumnos certificados
                        a nivel mundial
                    </div>
                </div>
            </div>
            <div class="col-md-3 item" id="counters_1">
                <div class="image">
                    <img src="{{ asset('images/docentes.png') }}" alt="">
                </div>
                <div class="counters" id="counters_1">
                    <span class="plus">+ </span><div class="counter" data-TargetNum="10">0</div>
                </div>
                <p>
                    DOCENTES
                </p>
                <span>Especializados</span>
            </div>
            <div class="col-md-3 item" id="counters_1">
                <div class="image">
                    <img src="{{ asset('images/cursos.png') }}" alt="">
                </div>
                <div class="counters" id="counters_1">
                    <span class="plus">+ </span><div class="counter" data-TargetNum="15">0</div>
                </div>
                <p>
                    CURSOS
                </p>
                <span>profesionales</span>
            </div>
            <div class="col-md-3 item" id="counters_1">
                <div class="image">
                    <img src="{{ asset('images/alumnos.png') }}" alt="">
                </div>
                <div class="counters" id="counters_1">
                    <span class="plus">+ </span><div class="counter" data-TargetNum="4000">0</div>
                </div>
                <p>
                    ALUMNOS
                </p>
                <span>Certificados</span>
            </div>
            <div class="col-md-3 item" id="counters_1">
                <div class="image">
                    <img src="{{ asset('images/insignias.png') }}" alt="">
                </div>
                <div class="counters" id="counters_1">
                    <span class="plus">+ </span><div class="counter" data-TargetNum="100">0</div>
                </div>
                <p>
                    INSIGNIAS
                </p>
                <span>Digitales</span>
            </div>
        </div>
    </div>
</section>

<section class="sec8">
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

@endsection