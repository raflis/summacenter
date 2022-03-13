@extends('web.layout')

@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    PREGUNTAS
                </p>
                <p class="color">
                    FRECUENTES
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec32">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Admisión
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Docentes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Metodología
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Insignias Digitales
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Certificaciones
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_6_tab" data-bs-toggle="pill" data-bs-target="#pills_6" type="button" role="tab" aria-controls="pills_6" aria-selected="false">
                            Accesos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_7_tab" data-bs-toggle="pill" data-bs-target="#pills_7" type="button" role="tab" aria-controls="pills_7" aria-selected="false">
                            General
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content">

                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                                ¿Para qué sirven las insignias digitales?
                                            </button>
                                        </h2>
                                        <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                                            <div class="accordion-body">
                                                <p>
                                                    Las insignias fueron pensadas para reconocer a cualquier persona que tenga o haya obtenido destrezas, cualidades y logros que merezcan ser validados y comunicados en el mundo digital.
                                                    <br><br>
                                                    Los trabajadores o estudiantes las utilizan para hacer visible su trayectoria académica y profesional, y obtener el reconocimiento que merecen.
                                                </p>
                                                <br>
                                                <h4>
                                                    ¿Quiénes las otorgan y con qué finalidad?
                                                </h4>
                                                <br>
                                                <h5>
                                                    INSTITUCIONES EDUCATIVAS
                                                </h5>
                                                <br>
                                                <p>
                                                    Para crear trayectos de aprendizaje atractivos, dar visibilidad de las competencias y conocimientos de sus estudiantes y conectarlos con oportunidades de trabajo.
                                                </p>
                                                <br>
                                                <h5>
                                                    ALGUNOS CASOS DE USO:
                                                </h5>
                                                <br>
                                                <ul>
                                                    <li>
                                                        Reconocer y comunicar competencias específicas como “ pensamiento crítico o transversales” o “community manager”.
                                                    </li>
                                                    <li>
                                                        Acreditar diplomados a cursos, talleres y demás logros académicos.
                                                    </li>
                                                    <li>
                                                        Reconocer docentes o alumnos por comportamientos positivos.mbros
                                                    </li>
                                                </ul>
                                                <br>
                                                <h5>
                                                    ORGANIZACIONES
                                                </h5>
                                                <br>
                                                <p>
                                                    Para reconocer de manera innovadora a sus colaboradores e impulsar la productividad, motivación y el desarrollo de competencias clave en sus equipos.
                                                </p>
                                                <br>
                                                <h5>
                                                    ALGUNOS CASOS DE USO:
                                                </h5>
                                                <br>
                                                <ul>
                                                    <li>
                                                        Motivar mediante el reconocimiento coma el cumplimiento de metas, proyectos y otras iniciativas relevantes en la organización.
                                                    </li>
                                                    <li>
                                                        Acreditar la participación en cursos, talleres, entre otros.
                                                    </li>
                                                    <li>
                                                        Fomentar trayectos de aprendizaje que contribuya al reconocimiento profesional.
                                                    </li>
                                                    <li>
                                                        Gestionar el conocimiento y talento coma para identificar brechas de competencias en tiempo real.
                                                    </li>
                                                    <li>
                                                        Asociaciones y gremios
                                                    </li>
                                                    <li>
                                                        Para atraer y retener a sus afiliados al brindarles credenciales que demuestren su compromiso con la actualización continua de sus conocimientos y habilidades.
                                                    </li>
                                                </ul>
                                                <br>
                                                <h5>
                                                    ALGUNOS CASOS DE USO:
                                                </h5>
                                                <br>
                                                <ul>
                                                    <li>
                                                        Acreditar membresía.
                                                    </li>
                                                    <li>
                                                        Fomentar y reconocer la especialización dentro del gremio profesional.
                                                    </li>
                                                    <li>
                                                        Reconocer participación en congresos, foros y demás actividades de formación continua de sus miembros
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                                ¿Cómo accedo a la plataforma de insignias?
                                            </button>
                                        </h2>
                                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="head_2">
                                            <div class="accordion-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                                ¿Cómo acepto una insignia?
                                            </button>
                                        </h2>
                                        <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="head_3">
                                            <div class="accordion-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="head_4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                                ¿Cómo compartir una insignia?
                                            </button>
                                        </h2>
                                        <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="head_4">
                                            <div class="accordion-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_5" role="tabpanel" aria-labelledby="pills_5_tab">
                            <div class="content">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_6" role="tabpanel" aria-labelledby="pills_6_tab">
                            <div class="content">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_7" role="tabpanel" aria-labelledby="pills_7_tab">
                            <div class="content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection