@extends('web.layout')

@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    RUTA
                </p>
                <p class="color">
                    DE INSIGNIAS
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec33">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content-left">
                        <img src="{{ asset('images/sap-erp-5.png') }}" alt="">
                        <div class="text">
                            <p>
                                <strong>Tipo: </strong>Certificación
                            </p>
                            <p>
                                <strong>Nivel: </strong>Usuario Experto
                            </p>
                            <p>
                                <strong>Tiempo: </strong>50 Horas
                            </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <h1>
                            SAP MM Gestión de Logística y
                            Materiales (Usuario Experto) Gold
                        </h1>
                        <p class="text1">
                            Emitido por <span>SUMMA CENTER</span>
                        </p>
                        <div class="text2">
                            <p>
                                La persona acreditada posee el nivel de experto en conocimiento y habilidades necesarias para una gestión efectiva en operaciones logísticas y de almacenes en diversos procesos de negocios sobre la plataforma ERP SAP. Permite al participante conocer distintos escenarios logísticos con SAP y aplicar principales transacciones de SAP MM a nivel teórico y practico. Curso SAP enfocado 100% a soluciones del día a día con SAP dentro de grandes empresas.
                            </p>
                        </div>
                        <h3>Habilidades</h3>
                        <div class="habilidades">
                            <div class="item">Aplicaciones de indicadores</div>
                        </div>
                        <h3>Criterios de ganancia</h3>
                        <div class="text3">
                            <div class="text3_item">
                                <img src="{{ asset('images/criterio1.png') }}" alt="">
                                <p>
                                    Para obtener el certificado se requiere una calificación mínima aprobatoria de 13.00 puntos.
                                </p>
                            </div>
                            <div class="text3_item">
                                <img src="{{ asset('images/criterio2.png') }}" alt="">
                                <p>
                                    El alumno ha completado la visualización del material educativo dentro de la plataforma, comprendido por 50 horas lectivas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 rutainsignia">
                <h1>
                    Ruta de Insignias SAP MM Logística y Materiales (Usuario Clave)
                </h1>
                <img src="{{ asset('images/rutainsignia.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection