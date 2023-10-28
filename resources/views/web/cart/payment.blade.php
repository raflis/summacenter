@extends('web.layout')
@section('title', 'Carrito de compras | SUMMA CENTER LATAM')
@section('description', 'Carrito de compras | SUMMA CENTER LATAM')
@section('keywords', 'Carrito de compras | SUMMA CENTER LATAM')
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec65">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 cart-right">
                <div class="content">
                    <div class="details">
                        <h2>
                            Resumen de Pedido
                        </h2>
                        <p class="p1">Datos de facturación</p>
                        <p>
                            Nombre completo: <span>{{ $data->invoice_name }}</span>
                        </p>
                        <p>
                            Dirección: <span>{{ $data->invoice_department }} {{ $data->invoice_district }} {{ $data->invoice_address }}</span>
                        </p>
                        <p>
                            Teléfono: <span>{{ $data->invoice_telephone }}</span>
                        </p>
                        <p>
                            Email: <span>{{ $data->invoice_email }}</span>
                        </p>
                    </div>
                    <div class="items">
                        @if (count($cart) >= 1)
                            @if(session('cart'))
                                @foreach($cart as $id => $details)
                                <div class="item">
                                    <div class="detail-left">
                                        <div class="image">
                                            <img src="{{ $details['image'] }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h3>
                                                {{ $details['name'] }}
                                            </h3>
                                            <p>
                                                Categoría: {{ $details['category'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="detail-right">
                                        <div class="price">
                                            <div class="price-now">
                                                S/ {{ $details['price'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        @endif
                    </div>
                    <div class="total">
                        <div class="price">
                            <div class="price-left">
                                <p class="p_total">Total</p>
                            </div>
                            <div class="price-right">
                                @if(session('promo'))
                                <span>S/ {{ $total_price_no_discount }}</span> S/ {{ $total_price }}
                                @else
                                S/ {{ $total_price }}
                                @endif 
                            </div>
                        </div>
                        @if(session('cart'))
                        <div class="text-center mt-4">
                            <form id="frmVisaNet" action="{{ route('checkout.confirmation', ['amount' => $total_price, 'purchaseNumber' => $purchaseNumber]) }}">
                                <script src="{{ VISA_URL_JS }}" 
                                    data-sessiontoken="{{ $sesion }}"
                                    data-channel="web"
                                    data-merchantid="{{ VISA_MERCHANT_ID }}"
                                    data-merchantlogo="{{ asset('images/logo.png') }}"
                                    data-purchasenumber="{{ $purchaseNumber }}"
                                    data-amount="{{ $total_price }}"
                                    data-expirationminutes="5"
                                    data-timeouturl="{{ route('checkout.payment') }}"
                                ></script>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="back text-center">
                <a href="{{ route('checkout.cart') }}">
                    <i class="fa-solid fa-chevron-left"></i> Regresar
                </a>
            </div>
        </div>
    </div>
</section>

@endsection