@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-cloud-download-alt fa-xs text-white2"></i> Ventas
                </h1>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Registros
                        </span>
                        <div class="d-flex align-items-center">
                            <div class="">
                                <a class="btn btn-success btn-descargar" href="{{ route('sales.excel', ['name' => request('name'), 'paid' => request('paid'), 'start_date' => request('start_date'), 'end_date' => request('end_date')]) }}">
                                    <span class="icon">
                                        <i class="fas fa-download px-2 py-1"></i>
                                    </span>
                                    <span class="text px-2 py-1">
                                        Descargar
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="buscar-descarga">
                            <form action="{{ route('sales.index') }}" method="GET" class="row" style="width:100%">
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="pr-1">Fecha de inicio:</label>
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="labelspan pr-1">Fecha de fin:</label>
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Nombre completo:</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombres" value="{{ request('name') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Estado:</label>
                                <select name="paid" id="" class="form-control" >
                                    <option value="">Estado</option>
                                    <option value="Pending" {{ (request('paid') == 'Pending')?'selected':'' }}>Pendiente</option>
                                    <option value="Authorized" {{ (request('paid') == 'Authorized')?'selected':'' }}>Pagado</option>

                                </select>
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1"></label>
                                <button type="submit" class="btn btn-primary btn-buscar">
                                    Buscar &nbsp;&nbsp;<i class="fas fa-search"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="px-3">
                        @include('admin.includes.alert')
                    </div>
                </div>
                <div class="tablaTotal">
                    <table class="table tableD">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th># de pedido</th>
                                <th>Nombre completo</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Método pago</th>
                                <th>Monto</th>
                                <th>Detalle</th>
                                <th>Estado</th>
                                <th>Fecha de compra</th>
                                <th width=145>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $record)
                            <tr>
                                <td>{{ $sales->firstItem() + $loop->index }}</td>
                                <td>{{ $record->purchase_number }}</td>
                                <td>{{ $record->invoice_name }}</td>
                                <td>{{ $record->invoice_department }} {{ $record->invoice_district }} {{ $record->invoice_address }}</td>
                                <td>{{ $record->invoice_telephone }}</td>
                                <td>{{ $record->invoice_email }}</td>
                                <td>@if(in_array($record->card, ['Transferencia', 'Sin tarjeta'])) {{ $record->card }} @else {{ $record->card }} {{ $record->brand }} @endif</td>
                                <td>{{ $record->amount }} {{ $record->currency }}</td>
                                <td>
                                    <ul style="padding: .75rem">
                                    @foreach ($record->detail as $item)
                                        <li>{{ $item['name'] }}</li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td class="text-{{ ($record->paid == 1)?'success':'danger' }}">@if($record->paid == 1) Pagado @else Pendiente de pago @endif</td>
                                <td>{!! \Carbon\Carbon::parse($record->transaction_date)->format('d/m/Y H:i:s') !!}</td>
                                <td>
                                    <div style="display: inline-flex">
                                        <a class="btn btn-primary text-white btn-sm mr-1" href="{{ route('sales.edit', $record->id) }}">
                                            <i class="far fa-edit pr-1"></i> Validar venta
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="paginacionTotal d-flex justify-content-end">
                    {{ $sales->withQueryString()->render() }}
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

@endsection