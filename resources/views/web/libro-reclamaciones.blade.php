@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 libro_reclamaciones">
                <div class="tit">
                    <h1>
                        LIBRO DE RECLAMACIONES VIRTUAL
                    </h1>
                    <p>
                        Conforme a lo establecido en el Código de Protección y Defensa del Consumidor,
                        esta institución cuenta con un Libro de Reclamaciones Virtual a su disposición.
                    </p>
                </div>
                <div class="formu">
                    <form action="" class="row">
                        <div class="formu_item row shadow">
                            <div class="tit_head">
                                <h3>N° de reclamo: <span>0000000001</span></h3>
                                <p class="fecha">
                                    6 de febrero del 2022
                                </p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Campus / Sede</label>
                                <select class="form-select">
                                    <option value="">Lima Centro Sede Central</option>
                                    <option value="">Lima Sur / Sede</option>
                                    <option value="">Lima Norte / Sede</option>
                                </select>
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Identificación del Consumidor Reclamante</h3>
                            <div class="form-group col-md-4">
                                <label for="">Contacto</label>
                                <select class="form-select">
                                    <option value="">Público General</option>
                                    <option value="">Alumno</option>
                                    <option value="">Egresado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Documento</label>
                                <select class="form-select">
                                    <option value="">DNI</option>
                                    <option value="">Pasaporte</option>
                                    <option value="">Carnet de extranjería</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Correo</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">N° de documento</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Identificación del Reclamo</h3>
                            <div class="form-group col-md-4">
                                <label for="">Tipo</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Producto</option>
                                    <option value="">Servicio</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Clasificación</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Servicios de Atención</option>
                                    <option value="">Soporte Técnico</option>
                                    <option value="">Departamento Académico</option>
                                    <option value="">Emisión de Documentos</option>
                                    <option value="">Trámites</option>
                                    <option value="">Plataformas Académico</option>
                                    <option value="">Devolución / Cobros Descuentos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Descripción/Asunto</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Detalle del Reclamo o Solicitud</h3>
                            <div class="form-group col-md-4">
                                <label for="">Tipo de solicitud</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Queja</option>
                                    <option value="">Reclamo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8 detail-text">
                                <p class="detail">
                                    (*) Disconformidad no relacionada a los productos o servicios; o, malestar <br>
                                    o descontento respecto a la atención al público
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle</label>
                                <textarea name="" rows="5"></textarea>
                                <p class=detail>
                                    (*) Importante: En caso su reclamo o queja se haya generado a raíz de una atención telefónica o por WhatsApp, se sugiere registrar el número telefónico desde el cual se contactó con Summa Center
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Pedido</label>
                                <textarea name="" rows="5"></textarea>
                                <p class="detail">
                                    (*)Importante: Explicar de forma concreta lo que solicita
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Adjuntar Evidencia</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>
                                Observaciones y acciones tomadas por el proveedor.
                            </h3>
                            <p>
                                La respuesta a la presente será atendida mediante correo electrónico a la dirección que usted ha consignado en la presente hoja de reclamación
                            </p>
                        </div>
                        <div class="formu_item row shadow">
                            <p>
                                La formulación de reclamo no impide acudir a otras vias de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI
                            </p>
                            <p>
                                El proveedor deberá dar respuesta al reclamo en un plazo no mayor a treinta (30) días calendario, pudiendo ampliar el plazo hasta por treinta (30) días más, previa comunicación al consumidor
                            </p>
                        </div>
                        <div class="col-md-12 form-group text-center">
                            <button type="submit" class="btn btn-enviar">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection