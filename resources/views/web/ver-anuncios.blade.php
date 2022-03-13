@extends('web.layout')

@section('content')

<section class="sec45">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <h2>
                    Bolsa de
                </h2>
                <h1>
                    TRABAJO
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec46">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="busq">
                    <form action="">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" placeholder="¿Qué buscas?">
                                <label for=""><strong>Ejemplos:</strong> Redactora Digital, Desarrollador</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="" class="form-select">
                                    <option value="todos">Todos</option>
                                </select>
                                <label for=""><strong>Ejemplos:</strong> Lima, Arequipa</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="" class="form-select">
                                    <option value="todos">ambos</option>
                                </select>
                                <label for=""><strong>Ejemplos:</strong> Hombre, Mujer, ambos</label>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="btn btn-enviar" type="submit" value="BUSCAR">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
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
                        <a href="" class="btn btn-cv">Publicar mi CV</a>
                        <div class="advertisements">
                            <img src="{{ asset('images/adver1.png') }}" alt="">
                            <img src="{{ asset('images/adver2.png') }}" alt="">
                            <img src="{{ asset('images/adver3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection