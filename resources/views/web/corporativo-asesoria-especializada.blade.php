@extends('web.layout')

@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[7]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[7]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[7]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Corporativos</li>
                      <li class="breadcrumb-item active" aria-current="page">Asesorías Especializada</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec49">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 texto">
                <h1>
                    FORTALECEMOS COMPETENCIAS Y HABILIDADES
                </h1>
                <p>
                    Las organizaciones enfrentan permanentemente el reto de hacerse más eficientes y competitivas, con el objeto de estar en mejores condiciones de lograr sus objetivos y metas.
                </p>
            </div>
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Etapa 1
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Etapa 2
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Etapa 3
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Etapa 4
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <h1 class="tit">
                                    Etapa 1: Conocer y Enfocar
                                </h1>
                                <div class="detail_text">
                                    <div class="number">
                                        <p>
                                            1
                                        </p>
                                    </div>
                                    <div class="texti">
                                        <p>
                                            Cada servicio de capacitación a la medida puede ser tan único como la organización y personas a las que está dirigido. Nuestro proceso inicia conociendo y comprendiendo el negocio y situación de nuestros clientes, para luego establecer un vínculo entre el servicio a desarrollar y sus prioridades estratégicas. Esto es fundamental para definir con claridad los objetivos de aprendizaje que las personas necesitan alcanzar para mejorar la eficiencia y el desempeño de su organización.
                                            Como el tiempo y recursos destinados son sumamente valiosos, se procura definir las prioridades a atender, y no distraer esfuerzos en muchos temas importantes pero no esenciales en ese momento.
                                        </p>
                                    </div>
                                </div>
                                <div class="content_image">
                                    <div class="image">
                                        <img src="{{ asset('images/asesoria1.png') }}" alt="">
                                    </div>
                                    <div class="items_">
                                        <div class="items">
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria1_1.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        AUDITORÍA
                                                    </h3>
                                                    <p>
                                                        Cada servicio es especial y
                                                        diferente como la organización
                                                        y quienes la conforman
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria1_2.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        ACOPLA
                                                    </h3>
                                                    <p>
                                                        El proceso inicia conociendo
                                                        y entendiendo la situación
                                                        para crear vínculos
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria1_3.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        OBJETIVOS
                                                    </h3>
                                                    <p>
                                                        Desarrollamos prioridades y
                                                        estratégias para mejorar la
                                                        eficiencia de la organización
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria1_4.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        MEJORA
                                                    </h3>
                                                    <p>
                                                        Los valiosos recursos adquiridos
                                                        ayudan a entender y darle
                                                        prioridad a ciertos puntos
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="content1">
                                <h1 class="tit">
                                    Etapa 2: Capacitación personalizada a la medida
                                </h1>
                                <div class="detail_text">
                                    <div class="number">
                                        <p>
                                            2
                                        </p>
                                    </div>
                                    <div class="texti">
                                        <p>
                                            El diseño y producción de contenidos para cada iniciativa de capacitación requiere del trabajo conjunto con el cliente. Aquí se combina el conocimiento técnico y la experiencia de nuestros especialistas con el entendimiento del negocio que poseen los profesionales de su organización. Los contenidos, metodología, duración y formato de dictado se definen luego de analizar el perfil de los participantes, los requerimientos y las características de la organización.
                                        </p>
                                    </div>
                                </div>
                                <div class="content_image">
                                    <div class="image">
                                        <img src="{{ asset('images/asesoria2.png') }}" alt="">
                                    </div>
                                    <div class="items_">
                                        <div class="items">
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria2_1.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        integrantes
                                                    </h3>
                                                    <p>
                                                        Las iniciativas para la capacitación requiere del trabajo junto al cliente
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria2_2.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        INTEGRACIÓN
                                                    </h3>
                                                    <p>
                                                        Encajamos los conocimientos técnicos y la experiencia de los integrantes de la organización
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria2_3.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        MÉTODOS
                                                    </h3>
                                                    <p>
                                                        Analizámos los mètodos, la duración y el perfil de cada integrante
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria2_4.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        CONTENIDOS
                                                    </h3>
                                                    <p>
                                                        Tenemos en cuenta todos los requerimientos y características de la organización
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="content1">
                                <h1 class="tit">
                                    Etapa 3: Ejecución 
                                </h1>
                                <div class="detail_text">
                                    <div class="number">
                                        <p>
                                            3
                                        </p>
                                    </div>
                                    <div class="texti">
                                        <p>
                                            La ejecución de la capacitación tiene como prioridad el aprendizaje, empleando un enfoque práctico y de “aprender haciendo”. Se busca formar líderes y profesionales que además de “saber hacer” aprovechen lo aprendido para encontrar soluciones por ellos mismos en su área de trabajo.
                                        </p>
                                    </div>
                                </div>
                                <div class="content_image">
                                    <div class="image">
                                        <img src="{{ asset('images/asesoria3.png') }}" alt="">
                                    </div>
                                    <div class="items_">
                                        <div class="items">
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria3_1.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        PRIORIDADES
                                                    </h3>
                                                    <p>
                                                        Lo más importante es aprender y ponerlo en práctica
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria3_2.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        APRENDIZAJES
                                                    </h3>
                                                    <p>
                                                        Formamos líderes que aprovechen al máximo las herramientas adquiridas
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria3_3.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        FORTALECEMOS
                                                    </h3>
                                                    <p>
                                                        Nuevos hábitos que ayuden a la mejora constante del equipo
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria3_4.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        CULTIVAR
                                                    </h3>
                                                    <p>
                                                        Fomentamos las buenas costumbres empleando el trabajo constante en grupo
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            <div class="content1">
                                <h1 class="tit">
                                    Etapa 4: Evaluación y análisis
                                </h1>
                                <div class="detail_text">
                                    <div class="number">
                                        <p>
                                            4
                                        </p>
                                    </div>
                                    <div class="texti">
                                        <p>
                                            El análisis y evaluación de los resultados facilitan el aprendizaje compartido con los clientes y la mejora continua de nuestro proceso. La evaluación durante o al final de la ejecución permite  identificar mejoras a incorporar en los programas de capacitación, así como nuevas oportunidades para fortalecer las competencias de las personas y el desempeño de la organización.
                                        </p>
                                    </div>
                                </div>
                                <div class="content_image">
                                    <div class="image">
                                        <img src="{{ asset('images/asesoria4.png') }}" alt="">
                                    </div>
                                    <div class="items_">
                                        <div class="items">
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria4_1.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        integrantes
                                                    </h3>
                                                    <p>
                                                        Las iniciativas para la capacitación requiere del trabajo junto al cliente
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria4_2.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        UNIMOS
                                                    </h3>
                                                    <p>
                                                        Encajamos los conocimientos técnicos y la experiencia de los integrantes de la organización
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria4_3.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        MÉTODOS
                                                    </h3>
                                                    <p>
                                                        Analizámos los métodos, la duración y el perfil de cada integrante
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item_">
                                                    <div class="image_item">
                                                        <img src="{{ asset('images/asesoria4_4.png') }}" alt="">
                                                    </div>
                                                    <h3>
                                                        CONTENIDOS
                                                    </h3>
                                                    <p>
                                                        Tenemos en cuenta todos los requerimientos y características de la organización
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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