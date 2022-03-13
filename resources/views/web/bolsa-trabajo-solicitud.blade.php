@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec43">
    <div class="container-fluid">
        <div class="row">
            <div class="tit">
                <h1>
                    FORMULARIO DE SOLICITUD
                </h1>
                <p>
                    Publique su aviso según el perfil <br> laboral que requiera
                </p>
            </div>
            <div class="col-md-12">
                <div class="solicitud">
                    <p class="campo">*Campo obligatorio</p>
                    <form action="" class="row">
                        <h1>DATOS DE LA EMPRESA</h1>
                        <div class="form-group col-md-12">
                            <label for="">Nombre o Razón Social de la Empresa*</label>
                            <input type="text" class="form-control" placeholder="Razón Social">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Sector o Giro de la Empresa</label>
                            <input type="text" class="form-control" placeholder="Sector o Giro">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Teléfonos*</label>
                            <input type="text" class="form-control" placeholder="Teléfonos">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Fax</label>
                            <input type="text" class="form-control" placeholder="Fax">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Nombre Contacto*</label>
                            <input type="text" class="form-control" placeholder="Dirección de la empresa">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Email Contacto*</label>
                            <input type="text" class="form-control" placeholder="Email de la empresa">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">RUC*</label>
                            <input type="text" class="form-control" placeholder="RUC">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Web de la empresa</label>
                            <input type="text" class="form-control" placeholder="https://summacenter.net/nosotros/">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">¿Mostrar Razón Social?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Si</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                        </div>
                        <h1>Información del Puesto a Solicitar</h1>
                        <div class="form-group col-md-12">
                            <label for="">Área de Trabajo*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">El área de trabajo pertenece a</label>
                            <input type="text" class="form-control" placeholder="Contabilidad/ Logística/ Recursos Humanos / otros">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Cargo ofrecido*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-12 align-items-start">
                            <label for="">Detalle de las funciones</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Modalidad del contrato</label>
                            <input type="text" class="form-control" placeholder="Por definir">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Tiempo de contrato</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Por definir</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Indefinida</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Definida</label>
                            </div>
                        </div>
                        <h1>REQUISITOS ADICIONALES</h1>
                        <div class="form-group col-md-12">
                            <label for="">Áreas*</label>
                            <input type="text" class="form-control" placeholder="Contabilidad/ Logística/ Recursos Humanos / otros">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Nivel académico*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Orden de Mérito:*</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <h1>Otros requisitos</h1>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection