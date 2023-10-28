@extends('web.layout')
@section('title', $setting->meta_title[12])
@section('description', $setting->meta_description[12])
@section('keywords', $setting->meta_keyword[12])
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url({{ $pagefield->cover_pages[3]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[3]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[3]['title2'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[3]['title3'] }}
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
                      <li class="breadcrumb-item active" aria-current="page">Insignias Digitales</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec11">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 description">
                <p>
                    <img class="insignia-digital" src="{{ asset('images/insignia-digital.png') }}" alt="">
                    <h4>¿Qué son las insignias digitales?</h4>
                    <p>
                        Es una representación visual de una habilidad, competencia, reconocimiento o un aprendizaje adquirido. Miles de organizaciones a nivel mundial utilizan hoy insignias digitales para reconocer los logros de sus miembros. Más que un reconocimiento a diferencia de otros reconocimientos tradicionales, las insignias digitales pueden enfocarse en logros más inmediatos, como demostrar la rapidez en la lectura en el ámbito educativo, o haber demostrado cualidades como la perseverancia en el ámbito laboral. Summa Center es un ente registrado y emisor de credenciales desde la plataforma Credly
                    </p>
                </p>
                <p>
                    <a href="https://www.credly.com/org/summa-center" target="_blank" class="text-decoration-none" style="color: #009BDB">➜ www.credly.com/org/summa-center</a>
                </p>
                <p>
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
                            Estructura
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Importancia
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Beneficios
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Compartir
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_5_tab" data-bs-toggle="pill" data-bs-target="#pills_5" type="button" role="tab" aria-controls="pills_5" aria-selected="false">
                            Valoración
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_6_tab" data-bs-toggle="pill" data-bs-target="#pills_6" type="button" role="tab" aria-controls="pills_6" aria-selected="false">
                            Obtención
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_7_tab" data-bs-toggle="pill" data-bs-target="#pills_7" type="button" role="tab" aria-controls="pills_7" aria-selected="false">
                            Manual
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <p>
                                    <img src="{{ asset('images/insigniasap.png') }}" alt="" style="float:right;width:400px">
                                    <p style="font-family:font-semibold;font-size:1rem">
                                        Una insignia se compone de dos partes:
                                    </p>
                                    <ul>
                                        <li>
                                            Imagen: Representación visual del logro alcanzado
                                        </li>
                                        <li>
                                            Metada: Datos específicos que permiten validar su origen, emisor, autenticidad y otras características relevantes.
                                        </li>
                                    </ul>
                                    <br>
                                    <p style="font-family:font-semibold;font-size:1rem">
                                        Cada insignia es única y a través de esta se puede validar su autenticidad y veracidad.
                                    </p>
                                    <br>
                                    <p>
                                        1. Logo de la organización que emite la credencial
                                    </p>
                                    <p>
                                        2. Título de la certificación, competencia adquirida o logro
                                    </p>
                                    <p>
                                        3. Nombre del acreditado
                                    </p>
                                    <p>
                                        4. Nombre del emisor, institución educativa empresa o asociación
                                    </p>
                                    <p>
                                        5. Fecha de emisión y expiración
                                    </p>
                                    <p>
                                        6. Redes sociales donde puede compartir su insignia
                                    </p>
                                    <p>
                                        7. Descripción del logro, competencia o curso
                                    </p>
                                    <p>
                                        8. Enlace para ir al perfil del individuo acreditado
                                    </p>
                                    <p>
                                        9. Enlace para ir a perfil del emisor
                                    </p>
                                    <p>
                                        10. Requisitos: descripción del criterio o proceso de aprendizaje que el individuo debió cursar o aprobar para ser merecedor de  la insignia
                                    </p>
                                    <p>
                                        11. Evidencia: foto,texto, vídeo, audio o enlaces del conocimiento o logro alcanzado.
                                    </p>
                                    <br>
                                    <p>
                                        Cada insignia se puede compartir, mostrar o llevar a diferentes tipos de plataformas y entornos digitales fomentando la construcción de relaciones y oportunidades de desarrollo profesional en el momento oportuno.
                                    </p>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content1">
                                <p>
                                    <p style="font-family:font-semibold;font-size:1rem">
                                        ¿Por qué son importantes?
                                    </p>
                                    <img src="{{ asset('images/importancia.png') }}" alt="" style="float:right;width:480px;padding-left:40px">
                                    <p style="text-align:justify">
                                        Cómo representación un logro, una insignia digital mira hacia el pasado y el futuro al mismo tiempo: hacia atrás para validar la experiencia o el logro alcanzado y el futuro para brindar beneficios, recompensas y nuevas oportunidades aquellos que recibieron.
                                        <br><br>
                                        Como cualquier credencial, una insignia no es el fin en sí misma. Es un hito de reconocimiento que conduce a nuevas oportunidades de desarrollo profesional y personal.
                                        <br><br>
                                        Las insignias digitales son importantes porque conectan a proveedores de educación, potenciales empleadores y profesionales con nuevas oportunidades estableciendo un marco común para el reconocimiento de habilidades y competencias.
                                        <br><br>
                                        El mercado laboral y el mundo académico no dejan de transformarse; Las insignias son una muestra de ello y una respuesta a sus nuevos requerimientos.
                                    </p>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content1">
                                <p>
                                    <p style="font-family:font-semibold;font-size:1rem">
                                        Beneficios
                                    </p>
                                    <ul>
                                        <li>
                                            Reconocimiento en el mundo digital
                                        </li>
                                        <li>
                                            Mas oportunidades de empleo: un perfil en LinkedIn con credenciales digitales tiene 6 veces más visitas
                                        </li>
                                        <li>
                                            Mejor reputación digital al compartir sus logros
                                        </li>
                                    </ul>
                                    <p>
                                        Las insignias digitales son la nueva manera de reconocer y verificar competencias de estudiantes o profesionales, ya que representan una evidencia de logros verificable en tiempo real.
                                        <br><br>
                                        A continuación, el impacto positivo que pueden tener en instituciones educativas:
                                    </p>
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        Beneficios
                                    </p>
                                    <ul>
                                        <li>
                                            Como toda organización, las instituciones educativas buscan generar demanda, a través de una oferta atractiva para el estudiante.
                                        </li>
                                        <li>
                                            Una insignia digital representa un elemento innovador en la propuesta de valor de una casa de estudios, pues combina la visión dinámica de la formación, el reconocimiento y el aprendizaje con el alcance global e innovación de los medios digitales.
                                        </li>
                                        <li>
                                            Los estudiantes de la actualidad  buscan instituciones con trayectoria sólida, egresados destacados, innovación continua y planes de formación de amplio reconocimiento, sobre todo en el entorno laboral.
                                        </li>
                                        <li>
                                            Los programas de insignias digitales dan visibilidad  los logros y reconocimientos individuales, potenciando los perfiles profesionales de sus miembros activos y egresados.
                                        </li>
                                        <li>
                                            Se trata de un ciclo virtuoso que naturalmente genera reputación para la institución. Gracias al alcance que se gana con los medios digitales, esta reputación trasciende el ámbito geográfico local.
                                        </li>
                                        <li>
                                            En un mundo globalizado, esto representa un amplificador de la marca y abre múltiples oportunidades de cooperación con otros entes públicos o privados, en el ámbito educativo o en otros ámbitos.
                                        </li>
                                    </ul>
                                    <img src="{{ asset('images/beneficios.png') }}" alt="" style="float:right;width:480px;padding-left:40px">
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        Estudiantes más motivados
                                    </p>
                                    <p>
                                        Al desarrollar un programa de insignias digitales, la institución educativa reconoce habilidades necesarias para vincularse al mundo laboral actual e impulsa a sus estudiantes a formarse en ellas, documentarlas y plasmar sus logros.
                                        <br><br>
                                        Desde el estudiante de primaria que se destaca en un concurso de dibujo, hasta el estudiante universitario que gana un premio en una clase de debate, pueden ser reconocidos a través de una insignia digital. Y un estudiante que recibe reconocimiento, visibilidad y posiblemente nuevas oportunidades por un logro, es un estudiante motivado a seguir esforzándose para obtener más.
                                    </p>
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        Fortalecimiento de una oferta académica de vanguardia
                                    </p>
                                    <p>
                                        Ser una institución a la vanguardia de la oferta académica es una virtud que la diferencia del resto. Sin duda, una contundente manera en que las insignias digitales potencian a las instituciones educativas.
                                        <br><br>
                                        El programa de insignias digitales puede ser usado para generar diferenciadores importantes: <i>imagina un programa de reconocimiento de competencias paralelo al programa educativo formal o una serie de insignias, alineadas con los valores de la institución. Implementaciones como ésta generan diferenciación y entusiasmo entre estudiantes actuales y atraen a estudiantes potenciales.</i>
                                    </p>
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        El programa de insignias permite al estudiante ser un sujeto activo en su plan de estudios.
                                    </p>
                                    <p>
                                        Las instituciones que ofrecen insignias digitales ven al estudiante como un sujeto activo que puede ayuda aportar al diseño de sus trayectos de aprendizaje.
                                    </p>
                                    <br><br>
                                    <img src="{{ asset('images/beneficios2.png') }}" alt="" style="float:right;width:480px;padding-left:40px">
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        La Insignia digital es una evidencia digital de logros estudiantiles
                                    </p>
                                    <p>
                                        La palabra clave para desarrollar un programa de insignias digitales es:
                                        <br><br>
                                        <strong>RECONOCIMIENTO.</strong> Una palabra que diversifica oportunidades porque todos los estudiantes son merecedores de reconocimientos, tanto por conquistar cursos formales de la academia, como por presentar proyectos donde la evaluación está centrada en el desarrollo de una competencia que los complementa en su área de interés.
                                        <br><br>
                                        Ser buenos líderes, saber trabajar bajo presión, enfrentar la crisis con inteligencia emocional, son algunos ejemplos de estas virtudes que los pueden hacer merecedores de una insignia. O quizás ser el compañero más colaborador, o el más creativo, sean los valores dignos de ser reconocidos.
                                    </p>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content1">
                                <p style="font-family:font-semibold;font-size:1rem">
                                    ¿Dónde compartir mi insignia?
                                </p>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Redes Sociales
                                                </h3>
                                                <p style="padding:0 70px;text-align:center">
                                                    LinkedIn, Facebook, Twitter
                                                </p>
                                            </div>
                                            <img class="img-h" src="{{ asset('images/redessociales.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Correo Electrónico
                                                </h3>
                                            </div>
                                            <img class="img-h" src="{{ asset('images/correoelectronico.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Página Web
                                                </h3>
                                                <p style="padding:0 70px;text-align:center">
                                                    Copiar el código HTML para insertarlo en una página web o blog o copiar el enlace URL de la insignia
                                                </p>
                                            </div>
                                            <img class="img-h" src="{{ asset('images/paginaweb.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Descargar
                                                </h3>
                                            </div>
                                            <img class="img-v" src="{{ asset('images/descargar.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Descargar PDF
                                                </h3>
                                            </div>
                                            <img class="img-h" src="{{ asset('images/descargarpdf.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    Publicar Blockchain
                                                </h3>
                                            </div>
                                            <img class="img-v" src="{{ asset('images/publicarblockchain.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 item_share_">
                                        <div class="item_share">
                                            <div class="tit">
                                                <h3>
                                                    En un celular tiene además la opción de compartir en Facebook, Messenger y en WhatsApp.
                                                </h3>
                                            </div>
                                            <img class="img-h2" src="{{ asset('images/redes.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_5" role="tabpanel" aria-labelledby="pills_5_tab">
                            <div class="content1">
                                <p style="font-family:font-semibold;font-size:1rem">
                                    Valoración de las insignias
                                </p>
                                <p>
                                    Las insignias digitales UR poseen un sistema de estrellas donde de acuerdo con el número de estas, se enuncia los diferentes niveles establecidos.
                                </p>
                                <ul>
                                    <li>
                                        1 estrella - Nivel Bronze
                                    </li>
                                    <li>
                                        2 estrellas - Nivel Silver
                                    </li>
                                    <li>
                                        3 estrellas - Nivel Gold
                                    </li>
                                    <li>
                                        4 estrellas - Nivel Platinum
                                    </li>
                                    <li>
                                        5 estrellas - Nivel Black
                                    </li>
                                </ul>
                                <p>
                                    Cabe destacar que cada proyecto de insignias digitales está hecho a la medida, no siempre se tendrá una completitud en secuencia con relación al número de estrellas a otorgar.  Existen algunos casos donde las insignias no poseen estrellas o donde solo se establece un solo nivel, para estos casos se presentará una comunicación a los posibles usuarios que recibirán la insignia, explicando su trayectoria a seguir para lograr la obtención del total de sus insignias.
                                </p>
                                <div class="levels">
                                    <div class="item">
                                        <img src="{{ asset('images/bronze.png') }}" alt="">
                                        <h3>
                                            Bronze
                                        </h3>
                                        <div class="stars">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/silver.png') }}" alt="">
                                        <h3>
                                            Silver
                                        </h3>
                                        <div class="stars">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/gold.png') }}" alt="">
                                        <h3>
                                            Gold
                                        </h3>
                                        <div class="stars">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/platinum.png') }}" alt="">
                                        <h3>
                                            Platinum
                                        </h3>
                                        <div class="stars">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/black.png') }}" alt="">
                                        <h3>
                                            Black
                                        </h3>
                                        <div class="stars">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                            <img src="{{ asset('images/star.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_6" role="tabpanel" aria-labelledby="pills_6_tab">
                            <div class="content1">
                                <p style="font-family:font-semibold;font-size:1rem">
                                    ¿Cómo obtener una insignia?
                                </p>
                                <p>
                                    Summa Center estará otorgando las insignias digitales UR a aquellas personas que cumplan con los criterios de emisión establecidos por las distintas áreas académica y transversales.
                                </p>
                                <p style="font-family:font-semibold;font-size:1rem">
                                    ¿Cómo obtener una insignia?
                                </p>
                                <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                    ACCESO A LA PLATAFORMA
                                </p>
                                <p>
                                    Ingrese a la plataforma a través de <a href="https://www.credly.com" target="_blank">www.credly.com.</a> Haga clic sobre <strong>“Sign in”</strong> y luego sobre <strong>“Sign in”</strong> debajo de la sección de <strong>“Acclaim”.</strong>
                                </p>
                                <p>
                                    1. Si es nuevo en la plataforma deberá crear una cuenta. Haga clic en “Create account” y complete los datos solicitados:
                                </p>
                                <ul>
                                    <li>
                                        Nombre (name) Apellido (last name) País (country)
                                    </li>
                                    <li>
                                        Dirección de correo electrónico (email) Clave de acceso (password)
                                    </li>
                                    <li>
                                        Haga clic en el recuadro si quiere recibir noticias (news and updates). Haga clic en <strong>“Create Account”.</strong>
                                    </li>
                                </ul>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion1.png') }}" alt="" style="width:70%">
                                </p>
                                <p>
                                    2. Recibirá un correo de confirmación.
                                </p>
                                <ul>
                                    <li>
                                        Haga clic en el enlace de confirmación.
                                    </li>
                                    <li>
                                        Complete sus datos de acceso - dirección de correo electrónico (email) y clave (password).
                                    </li>
                                </ul>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion2.png') }}" alt="" style="width:35%">
                                </p>
                                <p style="font-family:font-semibold;font-size:1rem">
                                    Aceptar una insignia
                                </p>
                                <p>
                                    3. Recibirá un correo notificándole que se le ha emitido una insignia. Haga clic en “Accept your badge” y eso lo llevará a la plataforma.
                                </p>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion3.png') }}" alt="" style="width:50%">
                                </p>
                                <ul>
                                    <li>
                                        Ingrese sus datos de acceso y aparecerá la insignia que debe aceptar haciendo clic en “Accept”.
                                    </li>
                                    <li>
                                        Una vez que la insignia es aceptada, estará disponible en el tablero junto a las otras insignias previamente emitidas y posteriormente podrá compartirlas.
                                    </li>
                                </ul>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion4.png') }}" alt="" style="width:50%">
                                </p>
                                <p style="font-family:font-semibold;font-size:1rem">
                                    Ver una insignia
                                </p>
                                <p>
                                    4. En el tablero haga clic sobre la insignia que desea ver. Aparecerá la imagen y toda la información de la metadata asociada.
                                </p>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion5.png') }}" alt="" style="width:50%">
                                </p>
                                <p>
                                    5. Haga clic sobre la insignia que desea compartir y haga clic en <strong>“Share”.</strong>
                                </p>
                                <ul>
                                    <li>
                                        Eso lo llevará a la ventana Badges: <strong>Share Badge.</strong>
                                    </li>
                                </ul>
                                <p style="text-align: center">
                                    <img src="{{ asset('images/obtencion6.png') }}" alt="" style="width:50%">
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_7" role="tabpanel" aria-labelledby="pills_7_tab">
                            <div class="content1">
                                <p>
                                    <p style="font-family:font-extrabold;font-size:1rem;color:#f1cc7f">
                                        ACCESO A LA PLATAFORMA
                                    </p>
                                </p>
                                <p>
                                    <img src="{{ asset('images/manual.png') }}" alt="" style="float:right;width:450px;box-shadow: 0 0rem 1rem rgba(0,0,0,.5)">
                                    <ul>
                                        <li>
                                            Acceso a la plataforma
                                        </li>
                                        <li>
                                            Aceptar una insignia
                                        </li>
                                        <li>
                                            Ver una insignia
                                        </li>
                                        <li>
                                            Compartir una insignia
                                        </li>
                                        <li>
                                            Rechazar una insignia
                                        </li>
                                        <li>
                                            Cambiar la visibilidad de una insignia
                                        </li>
                                        <li>
                                            Conﬁgurar tu cuenta (Settings)
                                        </li>
                                        <li>
                                            Cuenta (Account)
                                        </li>
                                        <li>
                                            Direcciones de Correo (Email Addresses)
                                        </li>
                                        <li>
                                            Fusión de Cuentas (Merge Accounts)
                                        </li>
                                        <li>
                                            Notiﬁcaciones de Correo (Notiﬁcation Preferences)
                                        </li>
                                        <li>
                                            Aplicaciones (Applications)
                                        </li>
                                        <li>
                                            Redes Sociales (Social Networks)
                                        </li>
                                        <li>
                                            Organizaciones (Organizations)
                                        </li>
                                        <li>
                                            Aceptación Automática (Auto-Accept)
                                        </li>
                                        <li>
                                            Clave (Password)
                                        </li>
                                        <li>
                                            Doble Autenticación de Clave (Two-Factor Authentication)
                                        </li>
                                        <li>
                                            Clave (Cambio de Clave)
                                        </li>
                                        <li>
                                            Perﬁl (Proﬁle)
                                        </li>
                                        <li>
                                            Detalles Públicos (Public Details)
                                        </li>
                                    </ul>
                                </p>
                                <br>
                                <p>
                                    <a href="" class="btn btn-descargarpdf">Descargar PDF</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection