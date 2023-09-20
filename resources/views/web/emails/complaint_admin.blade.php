<strong>Hoja de reclamación</strong>
<br><br>
<strong>Id BD:</strong> {{ $id }} <br>
<strong>Id Correlativo:</strong> {{ $id_front }} <br>
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

