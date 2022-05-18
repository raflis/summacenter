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

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_ pb-0 pt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Certificaciones</li>
                      <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec32">
    <div class="container-fluid">
        <div class="row">
            <!--<div class="col-md-12 px-0">
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
            </div>-->
            <h3 class="top_h3">
                En este espacio
            </h3>
            <h4 class="top_h4">
                podrás encontrar y resolver tus dudas hacerca del curso y la función de las herramientas que tenemos para ti.
            </h4>
            <div class="col-md-12">
                <div class="content">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                    1. ¿Qué es el Reconocimiento Digital?
                                </button>
                            </h2>
                            <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                                <div class="accordion-body">
                                    <p>
                                        Esta imagen digital contiene información verificada que describe tus logros y el proceso necesario para obtenerlos.
                                        Las insignias se pueden utilizar en firmas de correo electrónico, hojas de vida, y en redes sociales como LinkedIn, Facebook y Twitter mejorando tu reputación digital.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                    2. ¿Qué son Insignias Digitales?
                                </button>
                            </h2>
                            <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="head_2">
                                <div class="accordion-body">
                                    <p>
                                        Es el reconocimiento verificable en línea de una habilidad, aprendizaje o logro alcanzado que has demostrado al cumplir los criterios de acreditación de la institución Summa Center. Constan de 2 partes: 
                                    </p>
                                    <br>
                                    <ul>
                                        <li>
                                            <b>IMÁGEN:</b> Diseño de la insignia que representa graficamente el logro alcanzado.
                                        </li>
                                        <br>
                                        <li>
                                            <b>METADATA: </b> Datos específicos que permiten validar origen,  emisor, autenticidad y otras características  relevantes del logro alcanzado.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                    3. ¿Cómo las utilizaremos en la institución?
                                </button>
                            </h2>
                            <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="head_3">
                                <div class="accordion-body">
                                    <p>
                                        Las insignias digitales constituirán un sistema de acreditación complementario a la certificación tradicional.
                                        <br><br>
                                        Es un imperativo en nuestra institución. La nueva realidad del trabajo, el uso de Internet y de las redes sociales ha originado una nueva forma de reconocimiento de logros y competencias complementaria a la certificación en papel. 
                                        <br><br>
                                        Nos permiten representar logros académicos, en forma gráfica y una serie de datos asociados que aportan información adicional de gran valor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                    4. ¿Qué ventajas tienen sobre un diploma o certificado en físico o en PDF?
                                </button>
                            </h2>
                            <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="head_4">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            Cuentan la historia tras el logro alcanzado, al describir criterios de asignación y contar con evidencias el resultado del aprendizaje.
                                        </li>
                                        <br>
                                        <li>
                                            Se comparten en redes sociales en un formato atractivo e interactivo que contiene  data relevante para un potencial empleador.
                                        </li>
                                        <br>
                                        <li>
                                            Disponibles 24/7: te pertenecen de por vida y están siempre disponibles para que puedas compartirlas en los lugares que importan (Linkedin, blogs profesionales, firmas de correo).
                                        </li>
                                        <br>
                                        <li>
                                            No se pierden ni se dañan.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                    5. ¿Qué beneficios obtengo al compartirlas?
                                </button>
                            </h2>
                            <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="head_5">
                                <div class="accordion-body">
                                    <p>
                                        En una época tan competitiva, es fundamental demostrar las cualidades propias que marcan una diferencia de forma práctica, verificable y oportuna. 
                                        <br>
                                        Las insignias te ofrecen esa posibilidad:
                                    </p>
                                    <br>
                                    <ul>
                                        <li>
                                            Demuestran lo que sabes y lo que eres capaz de hacer a potenciales empleadores, reclutadores y colegas; aumentando la visibilidad para nuevas oportunidades de desarrollo laboral, profesional o académica.
                                        </li>
                                        <br>
                                        <li>
                                            Te ayudan a optar a más oportunidades de empleo: un perfil en Linkedin con insignias digitales tiene 6 veces más vistas.
                                        </li>
                                        <br>
                                        <li>
                                            Mejoran tu reputación digital al compartir tus logros en portafolios, blogs profesionales o redes sociales.
                                        </li>
                                        <br>
                                        <li>
                                            Brindan una visión más completa de tus competencias y cómo las puedes aplicar con evidencia contundente
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head_6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                                    6. ¿Cómo y dónde las puedo compartir?
                                </button>
                            </h2>
                            <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="head_6">
                                <div class="accordion-body">
                                    <p>
                                        Las puedes compartir en páginas web, blogs, correos electrónicos, portafolios digitales y redes sociales. 
                                        <br>
                                        Funciona de la siguiente manera:
                                    </p>
                                    <br>
                                    <ul>
                                        <li>
                                            Recibirás una notificación por correo indicando que has recibido la insignia.
                                        </li>
                                        <br>
                                        <li>
                                            Al aceptarla, te llevará a tu perfil donde acumularás todas tus insignias.
                                        </li>
                                        <br>
                                        <li>
                                            Desde tu perfil podrás compartirlas de diferentes maneras, entre ellas:
                                            <br>
                                            Publicarlas en Facebook, Twitter y Linkedin haciendo clic en los íconos correspondientes.
                                        </li>
                                        <br>
                                        <li>
                                            Incorporarla en la firma de tu correo electrónico, blog o página web.
                                        </li>
                                        <br>
                                        <li>
                                            Descargarla como un certificado en PDF.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection