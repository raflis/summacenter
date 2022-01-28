@extends('web.layout')

@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    INSIGNIAS DIGITALES
                </p>
                <p>
                    Revoluciona la forma en la que
                    presentas tu CV en el
                </p>
                <p>
                    MERCADO LABORAL
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec11">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 description">
                <p class="text-justify">
                    <img class="insignia-digital" src="{{ asset('images/insignia-digital.png') }}" alt="">
                    Es una representación visual de una habilidad, competencia, reconocimiento o un aprendizaje adquirido. Miles de organizaciones a nivel mundial utilizan hoy insignias digitales para reconocer los logros de sus miembros. Más que un reconocimiento a diferencia de otros reconocimientos tradicionales, las insignias digitales pueden enfocarse en logros más inmediatos, como demostrar la rapidez en la lectura en el ámbito educativo, o haber demostrado cualidades como la perseverancia en el ámbito laboral. Summa Center es un ente registrado y emisor de credenciales desde la plataforma Credly
                </p>
                <p>
                    <a href="https://www.credly.com/org/summa-center" target="_blank" class="text-decoration-none" style="color: #009BDB">➜ www.credly.com/org/summa-center</a>
                </p>
                <p class="text-justify">
                    Sus aplicaciones y casos de uso son amplias, ya que pueden apegarse a lo tradicional o innovar; es quien otorga la insignia quien define para qué se utiliza. Las insignias digitales conectan el mundo académico con los profesionales acreditados con insignias digitales son más visibles en el mercado laboral, facilitando su ubicación a los empleadores que buscan individuos con competencias específicas – a través de redes como Linkedin, Facebook, Twitter, etc.
                    <br><br>
                    Con este modelo de reconocimiento el estudiante va construyendo una identidad digital que demuestra lo que ha hecho, lo que sabe y sus intereses. Quienes las otorgan y cómo funcionan muchas son ya las universidades (Yale, el MIT, Tecnológico de Monterrey y la Universidad Javeriana de Colombia), la NASA, empresas (SAP, Oracle, Ibm, Microsoft, Oracle) y distintas organizaciones en el mundo que reconocen a sus miembros bajo este formato.
                    <br><br>
                    Las credenciales digitales están sobre código abierto y enmarcadas en un estándar global de reconocimiento conocido como los open badges 2.0.se otorgan de manera escalable, masiva y confiable mediante plataformas especializadas que brindan estos servicios. En Latinoamérica este servicio lo ofrecemos en Acreditta, que es partner de Acclaim.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec27">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            ¿Para qué sirven?
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Estructura
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            ¿Por qué son importantes?
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Beneficios
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Compartir
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_6_tab" data-bs-toggle="pill" data-bs-target="#pills_6" type="button" role="tab" aria-controls="pills_6" aria-selected="false">
                            Valoración
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_7_tab" data-bs-toggle="pill" data-bs-target="#pills_7" type="button" role="tab" aria-controls="pills_7" aria-selected="false">
                            ¿Cómo obtenerla?
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <p style="font-family:font-semibold;font-size:1rem">
                                    ¿Para qué sirven las insignias digitales?
                                </p>
                                <p>
                                    Las insignias fueron pensadas para reconocer a cualquier persona que tenga o haya obtenido destrezas, cualidades y logros que merezcan ser validados y comunicados en el mundo digital.
                                    <br>
                                    Los trabajadores o estudiantes las utilizan para hacer visible su trayectoria académica y profesional, y obtener el reconocimiento que merecen.
                                </p>
                                <p style="font-family:font-extrabold;color:#F1CC7F;text-transform: uppercase">
                                    Instituciones educativas
                                </p>
                                <p>
                                    Para crear trayectos de aprendizaje atractivos, dar visibilidad de las competencias y conocimientos de sus estudiantes y conectarlos con oportunidades de trabajo.
                                </p>
                                <p style="font-family:font-semibold">
                                    Algunos casos de uso:
                                </p>
                                <ul>
                                    <li>
                                        Reconocer y comunicar competencias específicas como “ pensamiento crítico o transversales” o “community manager”.
                                    </li>
                                    <li>
                                        Acreditar diplomados a cursos, talleres y demás logros académicos.
                                    </li>
                                    <li>
                                        Reconocer docentes o alumnos por comportamientos positivos.
                                    </li>
                                </ul>
                                <br>
                                <p style="font-family:font-extrabold;color:#F1CC7F;text-transform: uppercase">
                                    Organizaciones
                                </p>
                                <p>
                                    Para reconocer de manera innovadora a sus colaboradores e impulsar la productividad, motivación y el desarrollo de competencias clave en sus equipos.
                                </p>
                                <p style="font-family:font-semibold">
                                    Algunos casos de uso:
                                </p>
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
                                </ul>
                                <br>
                                <p style="font-family:font-extrabold;color:#F1CC7F;text-transform: uppercase">
                                    Asociaciones y gremios
                                </p>
                                <p>
                                    Para atraer y retener a sus afiliados al brindarles credenciales que demuestren su compromiso con la actualización continua de sus conocimientos y habilidades.
                                </p>
                                <p style="font-family:font-semibold">
                                    Algunos casos de uso:
                                </p>
                                <ul>
                                    <li>
                                        Acreditar membresía.
                                    </li>
                                    <li>
                                        Fomentar y reconocer la especialización dentro del gremio profesional.
                                    </li>
                                    <li>
                                        Reconocer participación en congresos, foros y demás actividades de formación continua de sus miembros.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content2">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content3">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content4">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_5" role="tabpanel" aria-labelledby="pills_5_tab">
                            <div class="content5">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_6" role="tabpanel" aria-labelledby="pills_6_tab">
                            <div class="content6">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_7" role="tabpanel" aria-labelledby="pills_7_tab">
                            <div class="content7">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection