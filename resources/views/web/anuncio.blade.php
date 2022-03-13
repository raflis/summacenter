@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec47">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content_left">
                        <div class="offer">
                            <div class="tit">
                                <h4>Sobre el anuncio</h4>
                                <p>Publicado: Hace 28 minutos</p>
                            </div>
                            <h1>
                                Redactor Creativo Jr
                            </h1>
                            <h3>Descripción</h3>
                            <div class="description">
                                <h2>
                                    REQUISITOS:
                                </h2>
                                <p>
                                    Estudios técnicos o universitarios concluidos en Sistemas y/o Informática.<br>
                                    Dominio y Experiencia comprobada de mínimo 2 años en PHP<br>
                                    Experiencia desarrollando Plugins en WooCommerce.<br>
                                    Experiencia desarrollando tiendas virtuales en Shopify<br>
                                    Experiencia en modelamiento y desarrollo en bases de datos.<br>
                                    Experiencia desarrollando portales Web y de e-commerce con administradores de contenido (CMS), y desarrollando plugins para estos.
                                </p>
                                <h2>
                                    RESPONSABILIDADES:
                                </h2>
                                <p>
                                    Implementar proyectos Web nuevos o recurrentes.<br>
                                    Implementar y mantener sitios Web con sus bases de datos correspondientes.
                                </p>
                                <h2>
                                    OFRECEMOS:
                                </h2>
                                <p>
                                    Salario acorde al mercado<br>
                                    Horario de Lunes a Viernes<br>
                                    Contrato a tiempo completo<br>
                                    Trabajo remoto desde casa<br>
                                    Línea de carrera<br>
                                    <br>
                                    Interesados remitir curriculum con asunto “Programador Junior PHP E-commerce” a la brevedad posible a empleo@glajumedia.com indicando pretensiones salariales. Indispensable para ser llamado a la entrevista.
                                </p>
                                <h2>
                                    CONTRATACIÓN LABORAL:
                                </h2>
                                <p>
                                    Tiempo Completo
                                </p>
                                <h2>
                                    CONTACTO:
                                </h2>
                                <p>
                                    Representante: Aurelia Pinedo
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="item">
                            <img src="{{ asset('images/icon-map.png') }}" alt="">
                            <h5>
                                UBICACIÓN
                            </h5>
                            <p>
                                Jr Cruz del Sur 140-154 Oficina 1704 Edificio Time. Santiago de Surco, Lima.
                            </p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/icon-work.png') }}" alt="">
                            <h5>
                                TRABAJO
                            </h5>
                            <p>
                                Tiempo Completo
                            </p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/icon-salary.png') }}" alt="">
                            <h5>
                                SALARIO
                            </h5>
                            <p>
                                A tratar
                            </p>
                        </div>
                        <a href="" class="btn btn-cv">Publicar mi CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="similares">Ofertas similares</h2>
                <div class="content_results">
                    <div class="items">
                        <div class="item">
                            <div class="item_left">
                                <h1>
                                    Redactor Creativo Jr.
                                </h1>
                                <p class="mb-2"><strong>Betzabeth Fernandez</strong> - Lima</p>
                                <p>
                                    ¡Nuestro equipo de creatividad sigue creciendo!
                                </p>
                            </div>
                            <div class="item_right">
                                <a href="{{ route('anuncio') }}" class="btn btn-info">Más información</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_left">
                                <h1>
                                    Diseñador Gráfico Audiovisual
                                </h1>
                                <p class="mb-2"><strong>Betzabeth Fernandez</strong> - Lima</p>
                                <p>
                                    En Mandarina estamos buscando un Diseñador Gráfico audiovisual
                                </p>
                            </div>
                            <div class="item_right">
                                <a href="{{ route('anuncio') }}" class="btn btn-info">Más información</a>
                            </div>
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="advertisements">
                            <img src="{{ asset('images/adver4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection