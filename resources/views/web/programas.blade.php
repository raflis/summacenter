@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="resultados">
                    <div class="result">
                        <p>
                            Se encontraron: <br>
                            <span>
                                29 Programas
                            </span>
                        </p>
                    </div>
                    <div class="items">
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                        <div class="item">
                            <span class="cerrar">X</span>
                            <span class="texto">Logística</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="right-content">
                        <p class="tit">
                            <img src="{{ asset('images/embudo.png') }}" alt="">
                            Filtrar Programa
                        </p>
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panel_area_head">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_area" aria-expanded="true" aria-controls="panel_area">
                                        Áreas de capacitación
                                    </button>
                                </h2>
                                <div id="panel_area" class="accordion-collapse collapse show" aria-labelledby="panel_area">
                                    <div class="accordion-body">
                                        <div class="lista">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre1">
                                                <label class="form-check-label" for="nombre1">
                                                    Operaciones y Logística
                                                </label>
                                                <div class="sublista">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="nombre1_1">
                                                        <label class="form-check-label" for="nombre1_1">
                                                            SAP ERP MM
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="nombre1_2">
                                                        <label class="form-check-label" for="nombre1_2">
                                                            SAP S/4HANA MM
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre2">
                                                <label class="form-check-label" for="nombre2">
                                                    Mantenimiento
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre3">
                                                <label class="form-check-label" for="nombre3">
                                                    Contabilidad y Finanzas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre4">
                                                <label class="form-check-label" for="nombre4">
                                                    Talento Humano
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panel_modalidad_head">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_modalidad" aria-expanded="false" aria-controls="panel_modalidad">
                                        Modalidad
                                    </button>
                                </h2>
                                <div id="panel_modalidad" class="accordion-collapse collapse show" aria-labelledby="panel_modalidad">
                                    <div class="accordion-body accordion-body2">
                                        <div class="lista">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre2">
                                                <label class="form-check-label" for="nombre2">
                                                    Online en Vivo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre2">
                                                <label class="form-check-label" for="nombre2">
                                                    Online Pre grabadas
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                                    Diplomaturas
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">
                                    Especializaciones
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">
                                    Cursos Profesionales
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">
                                    Cursos Cortos
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <div class="content">
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa1.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa2.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa3.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa4.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <div class="content">
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa1.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa2.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa3.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa4.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <div class="content">
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa1.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa2.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa3.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa4.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <div class="content">
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa1.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa2.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa3.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>Operaciones y Logística</span>
                                                </p>
                                                <img class="img-header" src="{{ asset('images/programa4.png') }}" alt="">
                                                <img class="insignia" src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    SAP s/4hana MM & PM & PP
                                                </h4>
                                                <div class="vermas">
                                                    <a href="" class="btn btn-vermas">VER MÁS</a>
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