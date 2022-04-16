@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec0 pt-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">SUMMA</li>
                      <li class="breadcrumb-item active" aria-current="page">Modelo Educativo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec57">
    <div class="container-fluid">
        <div class="row">
            <h1>
                MODELO EDUCATIVO SUMMA CENTER
            </h1>
            <div class="col-md-12 px-0">
                <div class="texto">
                    <img src="{{ asset('images/modelo-laptop.png') }}" alt="">
                    <p>
                        Nuestro modelo educativo es una nueva forma de aprendizaje que se ajusta a las necesidades personales, de tiempo, espacio y lugar de los profesionales de ahora, desvaneciendo los límites de la educación formal e informal a través de la enseñanza en línea por medio de las Tecnologías de la información y la Comunicación.
                        <br><br>
                        Somos una empresa a favor de la revolución tecnológica y el aprendizaje natural en la era, donde la información es el recurso más valioso que se tiene; y la formación se ha convertido en una necesidad de crecimiento personal. Summa Center ha apostado hacía el futuro de la educación, por ello adquirimos el compromiso de ofertar una opción diferente de formación que contribuya a la realización personal y profesional sin ninguna limitante.
                        El módelo educativo del Centro de Formación Continua y Distancia SUMMA, busca satisfacer la demanda de actualización y desarrollo profesional de la sociedad mediante la oferta de cursos modulares flexibles.
                        <br><br>
                        El eje rector del modelo educativo es el estudiante como principal gestor de su aprendizaje. Alrededor del estudiante se ubican los elementos que interactúan en el entorno como un apoyo al proceso;  estos son: el tutor, las herramientas tecnológicas y los materiales de consulta.
                        <br><br>
                        La dinámica entre todos estos elementos se sustenta en dos principios actuales del aprendizaje:
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-modelo1.png') }}" alt="">
                        </div>
                        <h3>
                            Aprendizaje
                            Social
                        </h3>
                        <p>
                            Proceso mediante el cual aprendemos de otros; y que constituyen una metodología didáctica efectiva a través del incremento de la participación y el fenómeno a la colaboración entre iguales.
                        </p>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-modelo2.png') }}" alt="">
                        </div>
                        <h3>
                            Aprendizaje
                            PERSONALIZADO
                        </h3>
                        <p>
                            Es un enfoque de la formación que hace énfasis en el estudiante como individuo, lo que permite ajustar la orientación y el desarrollo del contenido a las necesidades de aprendizaje detectadas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 iconos_">
                <p class="text_icon">
                    El modelo se vincula con el contexto social desde un enfoque basado en el desarrollo de competencias y conocimientos adecuados al contexto del estudiante.
                    <br><br>
                    Las principales características del modelo educativo son:
                </p>
                <div class="iconos">
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ asset('images/modelo-icon1.png') }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>Centrado en el estudiante:</strong> Coloca al estudiante como el centro del quehacer educativo, al concebirlo como el actor principal del mismo.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ asset('images/modelo-icon2.png') }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>Interactividad:</strong> Desarrollada a partir de la incorporación de actividades colaborativas que permiten que todos los agentes del proceso interactuen con el fin de generar aprendizaje.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ asset('images/modelo-icon3.png') }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>Flexibilidad:</strong> El estudiante organiza y decide su ritmo de estudio; además que tiene la libertad de elegir entre una variedad de cursos de acuerdo a sus necesidades personales.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ asset('images/modelo-icon4.png') }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>Vanguardia:</strong> Los recursos ofertados se desarrollan en condiciones que optimizan los procesos de aprendizaje a través de la incorporación de una infraestructura tecnológica y programas de vanguardia.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <div class="icon_left">
                            <img src="{{ asset('images/modelo-icon5.png') }}" alt="">
                        </div>
                        <div class="icon_right">
                            <p>
                                <strong>Accesibilidad:</strong> Los estudiantes pueden realizar sus actividades desde cualquier lugar y en cualquier momento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 modelo-back">
                <div class="details">
                    <div class="detail">
                        <p>
                            Pasión por 
                            El Servicio
                        </p>
                    </div>
                    <div class="detail">
                        <p>
                            Integridad
                        </p>
                    </div>
                    <div class="detail">
                        <p>
                            Espíritu
                            de equipo
                        </p>
                    </div>
                    <div class="detail">
                        <p>
                            Excelencia
                        </p>
                    </div>
                    <div class="detail">
                        <p>
                            Innovación
                            Creativa
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 competencias_">
                <div class="competencias">
                    <div class="tit_color">
                        <h1 class="color">
                            Formación por Competencias
                        </h1>
                    </div>
                    <img src="{{ asset('images/modelo-woman.png') }}" alt="">
                    <h3>
                        Aprendizaje activo
                    </h3>
                    <p>
                        Dentro de la formación por competencias, el aprendizaje activo es fundamental. En la educación actual el alumno cumple un rol en su aprendizaje, conduciéndolo y gestionándolo. De ese modo, es responsable de su formación y del desarrollo de las competencias que lo preparan para el mundo real. El aprendizaje activo le permite aprender mediante la práctica, con casos reales y vigentes. Así, es cocreador de la experiencia de aprendizaje junto con el profesor, quien asume un rol mucho más preponderante como guía, orientador y motivador en este proceso. Los alumnos interactúan permanentemente con profesores y alumnos de otros de diversas áreas profesionales; viven ese aprendizaje aplicado por medio de proyectos, investigaciones o evaluaciones prácticas.
                    </p>
                    <h3>
                        Aprendizaje Digital
                    </h3>
                    <p>
                        Summa Center ha incorporado una tecnología de vanguardia que consolida las diversas innovaciones realizadas a través de los años, para crear una nueva experiencia de aprendizaje. Mediante esta experiencia de aprendizaje digital desde una novedosa plataforma e-learning, el alumno aprende con dispositivos móviles, aplicando el conocimiento adquirido como si estuvieran ejerciendo la profesión en el mundo real. Esta tecnología facilita el aprendizaje autónomo, personalizado, colaborativo y en red.Por otro lado, el profesor es evaluado antes del inicio de su vida docente en Summa Center y luego ingresa a un proceso de formación continua por competencias: personal, de gestión, didáctica y de innovación. De la misma manera, es capacitado en la aplicación de la formación por competencias y en el uso de tecnologías aplicadas a la educación.
                    </p>
                </div>
            </div>
            <div class="col-md-12 elearning_">
                <div class="elearning">
                    <div class="tit_color">
                        <h1 class="color">
                            Formación por Competencias
                        </h1>           
                    </div>
                    <img src="{{ asset('images/modelo-elearning.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection