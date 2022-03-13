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
                      <li class="breadcrumb-item active" aria-current="page">Objetivos</li>
                    </ol>
                </nav>
            </div>
            @include('web.partials.header-responsabilidad')
            <div class="col-md-12">
                <div class="content">
                    <h1 class="tit">
                        Responsabilidad Social
                    </h1>
                    <div class="content1">
                        <div class="content1_left">
                            <img class="img1" src="{{ asset('images/respo1.png') }}" alt="">
                        </div>
                        <div class="content1_right">
                            <h2 class="tit2">
                                OBJETIVOS ESPECÍFICOS
                            </h2>
                            <p>
                                El Centro Responsabilidad Social de SUMMA CENTER presenta las normas pertinentes al desarrollo de la responsabilidad social, enriqueciendo las actividades de profesionales de la institución para contribuir con el desarrollo sostenible de la sociedad bajo las siguientes líneas de acción.
                            </p>
                            <table width="100%" class="table table-bordered table-striped">
                                <thead>
                                    <td width="20%" class="text-center">Dimensiones</td>
                                    <td width="80%" class="text-center">Objetivos</td>
                                </thead>
                                <tr>
                                    <td class="text-center" valign="middle">
                                        Gestión
                                    </td>
                                    <td>
                                        Lograr un comportamiento organizacional ética y socialmente ejemplar de todos los miembros de la comunidad institucional que aprende e interioriza normas de convivencia éticas y de conducta ecológica para el desarrollo sostenible.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" valign="middle">
                                        Extensión y proyección social
                                    </td>
                                    <td>
                                        Orientar el perfil del egresado que haya incorporado competencias ciudadas de Responsabilidad Social para el desarrollo sostenible de la sociedad.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" valign="middle">
                                        Formación
                                    </td>
                                    <td>
                                        Vincular e interrelacional a la Institución con la sociedad a fin de contribuir con el desarrollo humano sostenible y enriquecer su pertinencia social.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" valign="middle">
                                        Investigación
                                    </td>
                                    <td>
                                        Promover la orientación de la actividad científica hacia los problemas reales de carácter social, ambiental y económicos de la sociedad.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="content2">
                        <div class="content2_1">
                            <img class="img2_3" src="{{ asset('images/img2_3.png') }}" alt="">
                            <p>
                                La Responsabilidad Social en Summa Center, se desarrolla a través de un eje horizontal correspondiente a las instituciones de aprendizaje y conocimiento que incluye cuatro áreas de impacto:
                                <br><br>
                                <strong>IMPACTO ORGANIZACIONAL:</strong> En la que la Escuela se concibe como una institución que se preocupa por el bienestar de las personas que tiene a su cargo y por su huella ecológica y ética.
                                <br><br>
                                <b>IMPACTO EDUCATIVO:</b> En la que la Institución se preocupa por el tipo de profesionales y personas que forma buscando la adecuada estructuración de la enseñanza para formar ciudadanos responsables del desarrollo justo y sostenible del país
                            </p>
                            <p>
                                <strong>IMPACTOS COGNITIVOS y EPISTEMOLÓGICOS:</strong> En la que la Institución se preocupa por la producción de saber, las tecnologías, el tipo de conocimiento que produce y la orientación de sus programas de investigación con la mirada puesta en las problemáticas que afectan al desarrollo del país.
                                <br><br>
                                <strong>IMPACTO SOCIAL:</strong> En el que la Institución se preocupa por el papel que asume en el desarrollo de la sociedad y busca convertirse en un actor partícipe de un proceso social responsable, sostenible y de mejora continua.
                            </p>
                        </div>
                    </div>
                    <div class="content3">
                        <h2 class="tit2">
                            OBJETIVOS ESPECÍFICOS
                        </h2>
                        <p>
                            Los objetivos específicos indicados por el Plan de Responsabilidad Social en SUMMA CENTER son:
                            <br><br>
                            <strong>COHERENCIA INSTITUCIONAL:</strong> Propone alinear las dimensiones o funciones básicas de la Institución (gestión, formación, investigación y extensión y proyección social) hacia el cumplimiento efectivo de su Misión, Visión, principios y valores institucionales que definen su identidad.
                            <br><br>
                            <strong>MEJORA CONTINUA:</strong> Establecer programas de mejora y proyectos específicos de responsabilidad social, buscando el mejoramiento continuo de la Institución para que asuma su compromiso social en el marco de su objetivo central, el desarrollo humano sostenible.
                            <br><br>
                            <strong>PERTINENCIA SOCIAL:</strong> Mejorar la organización de la Institución y su quehacer académico para responder mejor a los requerimientos de la sociedad en la búsqueda permanente de su bienestar y desarrollo.
                            Innovación social: Busca promover soluciones innovadoras a los desafíos del entorno social y global.
                            Formación ética y responsable: Busca formar profesionales de alta calidad de manera integral, con principios y valores éticos, y con pleno sentido de responsabilidad social de acuerdo a las necesidades del país.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection