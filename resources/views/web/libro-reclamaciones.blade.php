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
                <div>
                    @include('web.partials.alert')
                </div>
                <div class="formu">
                    <form action="{{ route('postLibro') }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <input type="hidden" name="id_front" value="R{{ \Carbon\Carbon::now()->format('Ym') }}-1{{ sprintf('%06d', $last_id) }}">
                        <div class="formu_item row shadow">
                            <div class="tit_head">
                                <h3>N° de reclamo: <span>N° R{{ \Carbon\Carbon::now()->format('Ym') }}-1{{ sprintf('%06d', $last_id) }}</span></h3>
                                <h3>Razón social: <span>SUMMA BUSINESS TRAINING CENTER S.A.C.</span></h3>
                                <h3>RUC: <span>20604632651</span></h3>
                                <h3>Dirección: <span>Cal. German Schereiber Nro. 246 Dpto. 301</span></h3>
                                <h3>Hora: <span>{{ \Carbon\Carbon::now()->format('g:i A') }}</span></h3>
                                <h3>Fecha: <span>{{ ucfirst(\Carbon\Carbon::now()->formatLocalized('%A, %d de %B %Y')) }}</span></h3>
                                <!--<p class="fecha">
                                    {{ mb_strtoupper(\Carbon\Carbon::now()->formatLocalized('%A, %d DE %B %Y'), 'UTF-8') }}
                                </p>-->
                            </div>
                            <!--<div class="form-group col-md-4">
                                <label for="">Campus / Sede</label>
                                <select class="form-select">
                                    <option value="">Lima Centro Sede Central</option>
                                    <option value="">Lima Sur / Sede</option>
                                    <option value="">Lima Norte / Sede</option>
                                </select>
                            </div>-->
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Identificación del Consumidor Reclamante</h3>
                            <div class="form-group col-md-3">
                                <label for="">Contacto*</label>
                                <select class="form-select" name="type_contact" required>
                                    <option value="">Seleccione</option>
                                    <option value="Público General">Público General</option>
                                    <option value="Alumno">Alumno</option>
                                    <option value="Egresado">Egresado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Nombres*</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Apellido paterno*</label>
                                <input type="text" class="form-control" name="lastname1" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Apellido materno*</label>
                                <input type="text" class="form-control" name="lastname2" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Documento*</label>
                                <select class="form-select" name="type_document" required>
                                    <option value="">Seleccione</option>
                                    <option value="DNI">DNI</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Carnet de extranjería">Carnet de extranjería</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">N° de documento*</label>
                                <input type="text" class="form-control" name="document" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Telefono*</label>
                                <input type="text" class="form-control" name="telephone" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Correo*</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Dirección*</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Identificación del Reclamo</h3>
                            <div class="form-group col-md-4">
                                <label for="">Tipo*</label>
                                <select name="type_contract" id="" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    <option value="Producto">Producto</option>
                                    <option value="Servicio">Servicio</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Clasificación*</label>
                                <select name="type_contract_clasification" id="" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    <option value="Servicios de Atención">Servicios de Atención</option>
                                    <option value="Soporte Técnico">Soporte Técnico</option>
                                    <option value="Departamento Académico">Departamento Académico</option>
                                    <option value="Emisión de Documentos">Emisión de Documentos</option>
                                    <option value="Trámites">Trámites</option>
                                    <option value="Plataformas Académico">Plataformas Académico</option>
                                    <option value="Devolución / Cobros Descuentos">Devolución / Cobros Descuentos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Descripción/Asunto*</label>
                                <textarea class="form-control" rows="5" name="type_contract_description" required></textarea>
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>Detalle del Reclamo o Solicitud</h3>
                            <div class="form-group col-md-4">
                                <label for="">Tipo de solicitud*</label>
                                <select name="claim_type" id="" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    <option value="Queja">Queja</option>
                                    <option value="Reclamo">Reclamo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8 detail-text">
                                <p class="detail">
                                    (*) Disconformidad no relacionada a los productos o servicios; o, malestar <br>
                                    o descontento respecto a la atención al público
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Detalle*</label>
                                <textarea class="form-control" name="claim_description" rows="5" required></textarea>
                                <p class=detail>
                                    (*) Importante: En caso su reclamo o queja se haya generado a raíz de una atención telefónica o por WhatsApp, se sugiere registrar el número telefónico desde el cual se contactó con Summa Center
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Pedido*</label>
                                <textarea class="form-control" name="consumer_request" rows="5" required></textarea>
                                <p class="detail">
                                    (*)Importante: Explicar de forma concreta lo que solicita
                                </p>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Adjuntar Evidencia</label>
                                <input type="file" class="form-control" name="file_front">
                            </div>
                        </div>
                        <div class="formu_item row shadow">
                            <h3>
                                Observaciones y acciones tomadas por el proveedor.
                            </h3>
                            <p>(*) Todos los campos son obligatorios</p>
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