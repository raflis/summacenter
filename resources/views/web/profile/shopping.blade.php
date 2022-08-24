@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec66">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="shopping">
                    <h1>
                        Mis compras
                    </h1>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    # de Orden
                                </th>
                                <th>
                                    Estado
                                </th>
                                <th>
                                    Día y hora
                                </th>
                                <th>
                                    Detalle
                                </th>
                                <th>
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $item)
                            <tr>
                                <td valign="top">
                                    {{ $item->purchase_number }}
                                </td>
                                <td valign="top">
                                    @if($item->paid == 1) Pagado @else Pendiente de pago @endif
                                </td>
                                <td valign="top">
                                    {{ \Carbon\Carbon::parse($item->transaction_date)->format('d/m/Y H:i:s') }}
                                </td>
                                <td valign="top">
                                    @foreach ($item->detail as $id => $details)
                                    <p>
                                        <img src="{{ $details['image'] }}" width=40 alt="">
                                        {{ $details['name'] }}
                                    </p>
                                    @endforeach
                                </td>
                                <td valign="top">
                                    {{ $item->amount }} {{ $item->currency }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection