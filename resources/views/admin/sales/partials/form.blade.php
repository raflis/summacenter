<div class="form-group col-sm-12">
  <p class="m-0">
    <strong>Número de pedido: </strong><small>{{ $sale->purchase_number }}</small><br>
    <strong>Medio de pago: </strong><small>@if(in_array($sale->card, ['Transferencia', 'Sin tarjeta'])) {{ $sale->card }} @else {{ $sale->card }} {{ $sale->brand }} @endif</small><br>
    <strong>Fecha de la transacción: </strong><small>{{ \Carbon\Carbon::parse($sale->transaction_date)->format('d/m/Y H:i:s') }}</small><br>
    <strong>Monto: </strong><small>{{ $sale->amount }} {{ $sale->currency }}</small><br>
  </p>
  <p>
    <strong>Detalle: </strong>
    <small>
      <ul style="padding: 0 0 0 .75rem">
        @foreach ($sale->detail as $item)
            <li>{{ $item['name'] }}</li>
        @endforeach
        </ul>
    </small>
    <hr>
    <strong>Datos de facturación</strong><br>
    <strong>Nombre completo: </strong><small>{{ $sale->invoice_name }}</small><br>
    <strong>Dirección: </strong><small>{{ $sale->invoice_department }} {{ $sale->invoice_district }} {{ $sale->invoice_address }}</small><br>
    <strong>Teléfono: </strong><small>{{ $sale->invoice_telephone }}</small><br>
    <strong>Email: </strong><small>{{ $sale->invoice_email }}</small><br>
    <hr>
    <strong>Datos del usuario</strong><br>
    <strong>Nombre completo: </strong><small>{{ $sale->user_name }} {{ $sale->user_lastname }}</small><br>
    <strong>Documento: </strong><small>{{ $sale->user_type_document }} {{ $sale->user_document }}</small><br>
    <strong>Dirección: </strong><small>{{ $sale->user_department }} {{ $sale->user_district }} {{ $sale->user_address }}</small><br>
    <strong>Email: </strong><small>{{ $sale->user_email }}</small><br>
    <hr>
  </p>
</div>
<div class="form-group col-sm-3">
  {{ Form::label('paid', 'Validar pago') }} <code>*</code>
  {{ Form::select('paid', ['0' => 'Pendiente', 1 => 'Pagado'], null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group col-sm-9"></div>