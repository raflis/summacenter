<p>Estimado(a) {{ strtoupper($name) }} {{ strtoupper($lastname1) }} {{ strtoupper($lastname2) }}:</p>
<p>Remitimos la Hoja de Reclamación en relación a la solicitud presentada el día de hoy, con la cual podrá realizar el seguimiento a su reclamo.</p>

<strong>Código:</strong> {{ $id_front }} <br>
<strong>Nombre de la empresa:</strong> SUMMA BUSINESS TRAINING CENTER S.A.C. <br>
<strong>Dirección de la empresa:</strong> Cal. German Schereiber Nro. 246 Dpto. 301 <br>
<strong>RUC de la empresa:</strong> 20604632651 <br>
<br>
<strong>Identificación del consumidor reclamante</strong>
<br><br>
<strong>Tipo de contacto:</strong> {{ $type_contact }} <br>
<strong>Nombre completo:</strong> {{ $name }} {{ $lastname1 }} {{ $lastname2 }} <br>
<strong>Dirección:</strong> {{ $address }} <br>
<strong>Identificación:</strong> {{ $type_document }}: {{ $document }} <br>
<strong>Teléfono:</strong> {{ $telephone }} <br>
<strong>Email:</strong> {{ $email }} <br>
<br>
<strong>Identificación del reclamo</strong>
<br><br>
<strong>Tipo:</strong> {{ $type_contract }} <br>
<strong>Clasificación:</strong> {{ $type_contract_clasification }} <br>
<strong>Descripción:</strong> {{ $type_contract_description }} <br>
<br>
<strong>Detalle de reclamo o solicitud</strong>
<br><br>
<strong>Tipo de solicitud:</strong> {{ $claim_type }} <br>
<strong>Descripción:</strong> {{ $claim_description }} <br>
<strong>Pedido del consumidor:</strong> {{ $consumer_request }} <br>
@if ($file <> '')
<strong>Archivo adjunto:</strong> <a href="{{ asset('libro_reclamaciones/'.$file) }}">Ver archivo</a> <br>
@endif

<p>
    Cordialmente,
</p>
<p>
    Summa Center
</p>