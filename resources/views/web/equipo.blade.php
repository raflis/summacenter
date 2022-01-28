@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    Conoce a nuestro
                </p>
                <p class="tit">
                    EQUIPO SUMMA
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec26">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Dirección
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Docentes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Administración
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="items items1">
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/direccion1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Alexéi De La Cruz
                                            </p>
                                            <span class="cargo">
                                                Gerente General
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/direccion1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Betzabeth Fernandéz
                                            </p>
                                            <span class="cargo">
                                                Gerente de Marketing
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/direccion1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Raúl De La Cruz
                                            </p>
                                            <span class="cargo">
                                                Gerente Comercial
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="items">
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item2">
                                    <div class="content">
                                        <div class="cara">
                                            <div class="image">
                                                <img src="{{ asset('images/docente1.png') }}" alt="">
                                            </div>
                                            <p class="name">
                                                Nieves Marisol Bautista Huaman
                                            </p>
                                            <span class="cargo">
                                                Docente SAP HCM y Excel
                                            </span>
                                        </div>
                                        <div class="detras">
                                            <div class="first">
                                                <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                <p>
                                                    Ingeniero Industrial de la Universidad de Lima, Perú.
                                                </p>
                                            </div>
                                            <div class="second">
                                                <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                <p>
                                                    Es consultor SAP con proyectos y soporte en los módulos PP, PM, QM, MM y SCM
                                                </p>
                                            </div>
                                            <div class="third">
                                                <img src="{{ asset('images/logros.png') }}" alt="">
                                                <p>
                                                    Participaciones en implementaciones en Argentina, Bolivia, Brasil, Ecuador y Perú.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="items items3">
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('images/direccion1.png') }}" alt="">
                                        </div>
                                        <p class="name">
                                            Jesús Mamani
                                        </p>
                                        <span class="cargo">
                                            Contador
                                        </span>
                                        <p class="telefono">
                                            <img src="{{ asset('images/telefono.png') }}" alt="">
                                            <a href="">987654321</a>
                                        </p>
                                        <p class="correo">
                                            <img src="{{ asset('images/correo.png') }}" alt="">
                                            <a href="">contabilidad@summacenter.net</a>
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
</section>

@endsection