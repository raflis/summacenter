@extends('web.layout')
@section('title', 'Manual del alumno')
@section('description', 'Manual del alumno')
@section('keywords', 'Manual del alumno')
@section('image', $setting->meta_image)
@section('content')

<section class="sec9" style="background-image: url({{ $pagefield->cover_pages[11]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="blanco">
                    {{ $pagefield->cover_pages[11]['title1'] }}
                </p>
                <p class="color">
                    {{ $pagefield->cover_pages[11]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec39">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 manual_alumno">
                <h1>
                    Manual del Alumno
                </h1>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                1. Programas de estudio
                            </button>
                        </h2>
                        <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="head_1">
                            <div class="accordion-body">
                                <p>
                                    <h4>Summa Center ofrece los siguientes programas de estudio:</h4>
                                    Cursos en línea: orientados al entrenamiento mediante el uso de internet y dictado de forma virtual.<br>
                                    En el caso de los Cursos dictados:
                                    <br><br>
                                    1. Summa Center se reserva el derecho de realizar cambios en el plan de estudios para adecuarlas al mercado laboral.<br>
                                    2. La plataforma online le ofrece una navegación libre en el horario de su preferencia.<br>
                                    3. Las clases o asesorías programadas (según sea el caso) serán dictadas dentro del horario establecido.<br>
                                    4. Los feriados calendarios han sido considerados en la programación.<br>
                                    5. Summa Center se reserva el derecho de cambiar los docentes de acuerdo con su programa de mejora continua, disponibilidad de los docentes o causa fortuita.<br>
                                    6. Una vez iniciado el curso, no se admiten cambios ni devoluciones y es responsabilidad del alumno asistir a clases.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                2. Metodología
                            </button>
                        </h2>
                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="head_2">
                            <div class="accordion-body">
                                <p>
                                    En Summa Center aplicamos una metodología teórico práctico, con la cual se busca que el alumno trabaje directamente con las distintas herramientas a fin de ejecutarlas y lograr sus objetivos de una manera eficiente y óptima.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                3. Sistema de evaluación
                            </button>
                        </h2>
                        <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="head_3">
                            <div class="accordion-body">
                                <p>
                                    La evaluación se realiza por tema de estudio, mediante ejercicios en la plataforma online, participación en foro de consultas, evaluación de conocimiento, casos y desarrollo de Proyectos. La nota mínima aprobatoria para certificarse es 13 y la nota máxima 20. Esta nota se obtendrá al promediar las notas que se tomarán durante el tiempo que dure el curso, siendo la nota final la de mayor ponderación.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                4. Exámenes
                            </button>
                        </h2>
                        <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="head_4">
                            <div class="accordion-body">
                                <p>
                                    Los exámenes se tomarán en las fechas sugeridas a fin de que el alumno culmine la capacitación dentro del tiempo indicado (ver ítem 5 cumplimiento de clases sobre la duración del curso). Summa Center se reserva el derecho de sancionar cualquier intento de plagio, toma de fotografías o sustracción de un examen con suspensión o expulsión del alumno, dependiendo de la gravedad del caso. Asimismo, se recuerda que los exámenes son propiedad intelectual de Summa Business Training Center S.A.C.
                                    <br><br>
                                    <h5>Evaluación Extraordinaria</h5>
                                    <br>
                                    En el caso de desaprobar el curso el alumno puede solicitar una evaluación extraordinaria. Previo pago de la tarifa vigente, consultar en coordinacion@summacenter.net.
                                    <br><br>
                                    <h5>Procedimiento</h5>
                                    <br>
                                    1. Realizar pago de la tarifa vigente: Mediante depósito o transferencia a los números de cuenta de la institución.<br>
                                    2. Solicitar vía correo la Evaluación Extraordinaria, adjuntando foto del comprobante de pago.<br>
                                    3. Se enviará un correo indicando la fecha de presentación.<br>
                                    El alumno puede realizar la evaluación extraordinaria en un máximo de 7 días, después de culminada la última clase.
                                    <br><br>
                                    En caso de desaprobar nuevamente, podrá solicitar una segunda evaluación extraordinaria, cancelando la tarifa vigente.
                                    <br><br>
                                    De no cumplir con la evaluación, el alumno en la fecha y hora indicada pierde todo derecho reclamo y certificación del curso.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                5. Cumplimiento de clases
                            </button>
                        </h2>
                        <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="head_5">
                            <div class="accordion-body">
                                <p>
                                    La capacitación tiene una duración de 1 mes y 15 días, y puede extenderse por 15 días adicionales como prórroga máxima para el cumplimiento del curso de parte del alumno antes de que sean cancelados sus accesos.
                                    <br><br>
                                    <h5>SOBRE LA DURACIÓN DEL CURSO</h5>
                                    <br>
                                    El alumno se compromete a cumplir con el desarrollo de sus clases dentro del lapso de 2 meses, caso contrario el alumno desaprobará el curso recibiendo una constancia por participación (previa solicitud), y deberá matricularse nuevamente si desea certificarse.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                                6. Certificación
                            </button>
                        </h2>
                        <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="head_6">
                            <div class="accordion-body">
                                <p>
                                    Los exámenes se tomarán en las fechas sugeridas a fin de que el alumno culmine la capacitación dentro del tiempo indicado (ver ítem 5 cumplimiento de clases sobre la duración del curso). Summa Center se reserva el derecho de sancionar cualquier intento de plagio, toma de fotografías o sustracción de un examen con suspensión o expulsión del alumno, dependiendo de la gravedad del caso. Asimismo, se recuerda que los exámenes son propiedad intelectual de Summa Business Training Center S.A.C.
                                    <br><br>
                                    <h5>CERTIFICADO</h5>
                                    <br>
                                    El certificado mostrará el nombre que indica su DNI con letras mayúsculas, y se otorga a los alumnos que culminen satisfactoriamente el curso, diplomado o taller, obteniendo como mínimo (13) trece en su consolidado final de notas.
                                    <br><br>
                                    En caso contrario se otorgará una constancia de participación previo requerimiento del alumno.
                                    <br><br>
                                    <h5>CONSTANCIA DE PARTICIPACIÓN</h5>
                                    <br>
                                    Este documento es emitido por la institución y se otorga previa solicitud del alumno, por haber culminado con una calificación menor a 13 pts, incluye el nombre del curso desarrollado, e indica su participación a modo introductorio.
                                    <br><br>
                                    <h4>De Requerir:</h4>
                                    <h5>CONSTANCIA DE ESTUDIOS</h5>
                                    <br>
                                    En este documento se incluye el curso, cantidad de horas y el periodo en el que estás matriculado. Podrás solicitarla durante el periodo de tiempo que te encuentres matriculado, este documento tiene un costo que deberá ser consultado al área de coordinación de cursos al correo: coordinación@summacenter.net.
                                    <br><br>
                                    Procedimiento: Para solicitar cualquiera de los documentos arriba expuestos debes seguir el siguiente procedimiento:<br>
                                    1.  Solicitar vía correo electrónico el documento.<br>
                                    2. Realizar el pago correspondiente. En depósito o transferencia a los números de cuenta de la institución.<br>
                                    3. Enviar vía correo la foto del comprobante de pago junto con la copia de su dni.<br>
                                    4. Se enviará la constancia mediante correo electrónico.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="true" aria-controls="collapse_7">
                                7. Procedimientos administrativos
                            </button>
                        </h2>
                        <div id="collapse_7" class="accordion-collapse collapse" aria-labelledby="head_7">
                            <div class="accordion-body">
                                <p>
                                    A continuación, te detallamos los procedimientos a seguir para los trámites administrativos, mismos que se deben realizar en los plazos indicados.
                                    <br><br>
                                    Toda solicitud se hace de forma escrita vía correo electrónico a coordinacion@summacenter.net. Asimismo, para realizar cualquier trámite se deberá presentar o adjuntar el comprobante de pago vigente.
                                    <br><br>
                                    <h4>Cambio de inicio</h4>
                                    Si te encuentras matriculado y requieres cambiar de fecha de inicio, puedes hacerlo hasta 3 días antes de iniciar el curso sin ningún costo adicional. De requerir el cambio dentro de los 3 días previos al inicio o después de iniciado el curso se deberá hacer un pago previo de la tarifa vigente actual por traslado, consultar al correo de coordinacion@summacenter.net.
                                    <br><br>
                                    El nuevo inicio de clases solicitado debe ser antes de cumplir los dos meses de la fecha en la que inicialmente se matriculó. De lo contrario, deberás volver a matricularte con la inversión total.
                                    <br><br>
                                    Una vez se te haya programado la fecha de reingreso esta no podrá ser cambiada ni reprogramada. En caso de haber una actualización de la inversión del curso deberás acogerte a la nueva tarifa y cancelar su totalidad.
                                    <br><br>
                                    <h4>Cancelación de clases</h4>
                                    Summa Center se reserva el derecho de cancelar o reprogramar una clase que no alcanza el mínimo de alumnos inscritos. En este caso, puedes iniciar el curso en la nueva fecha u optar por la alternativa de llevar otro curso de igual costo que esté cercano a iniciarse.
                                    <br><br>
                                    <h4>Devolución</h4>
                                    Se considerará un reembolso siempre y cuando no haya iniciado el programa o curso en el que el alumno se matriculó, y comunique con una anticipación de 5 días calendario. Así mismo se descontará S/300.00 del monto total pagado, para cubrir los gastos administrativos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_8" aria-expanded="true" aria-controls="collapse_8">
                                8. Matrícula
                            </button>
                        </h2>
                        <div id="collapse_8" class="accordion-collapse collapse" aria-labelledby="head_8">
                            <div class="accordion-body">
                                <p>
                                    A continuación, te detallamos las formas para matricularte en cualquiera de nuestros cursos:
                                    <br><br>
                                    <h4>Depósito</h4>
                                    En cualquier oficina del Banco BBVA Continental o Agente BCP.
                                    Una vez realizado el pago debes enviar la fotografía del Boucher vía correo electrónico al correo coordinación@summacenter.net.
                                    <br><br>
                                    <h4>Transferencia Bancaria</h4>
                                    A nuestros números de cuenta corriente:
                                    <br><br>
                                    <h4>1. Perú:</h4>
                                    – Banco de Crédito del Perú BCP:<br>
                                    Cta. Corriente Soles: 191-2598721-0-05<br>
                                    Cta. Interbancaria (CCI): 002-19100259872100558        
                                    <br><br>
                                    – Banco Continental BBVA:<br>
                                    Cta. Corriente Soles: 0011-0101-01000513-88<br>
                                    Cta. Interbancaria (CCI): 011-101-000100051388-35<br>
                                    Razón Social: SUMMA BUSINESS TRAINING CENTER S.A.C.<br>
                                    RUC: 20604632651
                                    <br><br>
                                    <h4>2. Otros países:</h4>
                                    La institución le enviará un link de pago bajo la plataforma very five by visa, la cual acepta tarjetas Visa, MasterCard, American Xpress y Diners Club. Al ingresar la persona a matricularse pondrá sus datos personales, junto con tipo de tarjeta (débito o crédito) y datos de la tarjeta (es importante indicar que nunca se le pedirá la clave de su tarjeta por seguridad), al finalizar usted ingresará el monto que su asesor de capacitación le indique en la moneda Soles y automáticamente su entidad bancaria hará el cambio a la moneda correspondiente de su país.
                                    <br>
                                    En ambos casos, una vez realizado el pago debe enviarnos el comprobante de depósito, transferencia o impresión de pantalla al correo electrónico coordinacion@summacenter.net junto con copia de su DNI, e indicar el tipo de comprobante requerido (Boleta o Factura). En caso de Factura indicar Razón Social, R.U.C. y Dirección. Una vez emitido el comprobante de pago no habrá opción de cambio. Asimismo, es Obligatorio adjuntes la ficha de inscripción con los datos llenados correctamente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="head_9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_9" aria-expanded="true" aria-controls="collapse_9">
                                9. Pagos y materiales
                            </button>
                        </h2>
                        <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="head_9">
                            <div class="accordion-body">
                                <p>
                                    En algunos cursos, la inversión total puede ser fraccionado en un máximo de 3 cuotas, dependiendo las cuotas preestablecidas por la institución para cada uno de los cursos. Las fechas de pago de cada cuota será informada al alumno en el momento de su matrícula/inscripción. Al matricularse en uno de los cursos, el alumno acepta realizar el pago de la inversión total, de no realizar el pago el día pautado el mismo deberá asumir un monto adicional del 10% en su cuota pendiente. La cuota pendiente deberá realizarla dentro de los 15 días posteriores al vencimiento de su fecha de pago, caso contrario deberá volver a matricularse.
                                    <br><br>
                                    El alumno podrá acceder al Material (material disponible según el curso) siempre y cuando se encuentre al día en los pagos de las cuotas preestablecidas. Este material audiovisual estará disponible durante el tiempo que dura el curso o diplomado. El Material de la Plataforma para el Alumno es de autoría de Summa Center y no se puede descargar o hacer uso comercial del mismo.
                                    <br><br>
                                    La inscripción en cualquiera de nuestros cursos implica la aceptación de las normas y procedimientos estipulados en el presente documento que se encuentra publicada en www.summacenter.net (Manual del Alumno).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="felicitaciones">
                    <div class="image">
                        <img src="{{ asset('images/stars.png') }}" alt="">
                    </div>
                    <h2>FELICITACIONES</h2>
                    <p>
                        ¡Te damos la bienvenida como alumno de Summa Center!
                        <br><br>
                        Este manual contiene toda la información necesaria sobre los aspectos académicos, así como, los procedimientos administrativos que facilitarán cualquier trámite y/o consulta que desees realizar como alumno de Summa Center.
                        <br><br>
                        La inscripción y/o matrícula en cualquier curso, implica la aceptación y conformidad de las disposiciones contenidas en el siguiente manual.
                        <br><br>
                        Esperamos que tu desempeño académico sea constante y exitos
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection