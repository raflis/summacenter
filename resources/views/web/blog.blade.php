@extends('web.layout')

@section('content')

<section class="sec18">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    BLOG
                </p>
                <p>
                    Conoce las últimas
                    noticias y novedades del
                </p>
                <p>
                    MUNDO EMPRESARIAL
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec19">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Eventos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Institucionales
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Informativas
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Egresados
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <div class="row">
                                    <div class="col-md-12 filtros">
                                        <div class="busq">
                                            <img class="embudo" src="{{ asset('images/embudo2.png') }}" alt="">
                                            <button data-toggle="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#categoriasCol" aria-expanded="false" aria-controls="categoriasCol">
                                                <span>Categorías</span>
                                                <img src="{{ asset('images/abajo-blanco.png') }}" alt="">
                                            </button>
                                            <button data-toggle="collapse" type="button" data-bs-toggle="collapse" data-bs-target="#tagsCol" aria-expanded="false" aria-controls="tagsCol">
                                                <span>Tags</span>
                                                <img src="{{ asset('images/abajo-blanco.png') }}" alt="">
                                            </button>
                                            <div class="multi-collapse shadow collapse" id="categoriasCol" style="">
                                                <div class="card card-body">
                                                    <a class="btn-link" href="">categoria nueva</a>
                                                    <a class="btn-link" href="">Cloud</a>
                                                    <a class="btn-link" href="">Web</a>
                                                    <a class="btn-link" href="">categoria nueva</a>
                                                    <a class="btn-link" href="">Cloud</a>
                                                    <a class="btn-link" href="">Web</a>
                                                    <a class="btn-link" href="">categoria nueva</a>
                                                    <a class="btn-link" href="">Cloud</a>
                                                    <a class="btn-link" href="">Web</a>
                                                </div>
                                            </div>
                                            <div class="multi-collapse shadow collapse" id="tagsCol" style="">
                                                <div class="card card-body">
                                                    <a class="btn-link" href="">code</a>
                                                    <a class="btn-link" href="">nuevo tag</a>
                                                    <a class="btn-link" href="">tech</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 item">
                                        <div class="item_">
                                            <div class="image">
                                                <img src="{{ asset('images/articulo1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                                                <p class="category">
                                                    Logros
                                                </p>
                                                <p class="tit">
                                                    Summa Center celebra sus más de 1000 estudiantes
                                                </p>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                                    magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                    veniam, quis nostrud Ut wisi enim ad minim 
                                                    magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                    veniam, quis nostrud Ut wisi enim ad minim 
                                                    magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                    veniam, quis nostrud Ut wisi enim ad minim 
                                                </p>
                                                <div class="tags">
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 item">
                                        <div class="item_">
                                            <div class="image">
                                                <img src="{{ asset('images/articulo2.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                                                <p class="category">
                                                    Logros
                                                </p>
                                                <p class="tit">
                                                    Summa Center celebra sus más de 1000 estudiantes
                                                </p>
                                                <p class="description">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                                                </p>
                                                <div class="tags">
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                    <a href="" class="btn btn-tag">Online</a>
                                                    <a href="" class="btn btn-tag">SAP</a>
                                                    <a href="" class="btn btn-tag">Educación</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 item">
                                        <div class="item_">
                                            <div class="image">
                                                <img src="{{ asset('images/articulo3.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
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
                                                <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
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
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">

                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection