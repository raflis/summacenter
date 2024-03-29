@extends('web.layout')
@section('title', 'Carrito de compras | SUMMA CENTER LATAM')
@section('description', 'Carrito de compras | SUMMA CENTER LATAM')
@section('keywords', 'Carrito de compras | SUMMA CENTER LATAM')
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec29">
    <div class="container-fluid">
        <div class="row">
            <h1 class="tit">Confirmar Compra</h1>
            <form action="{{ route('checkout.payment') }}" class="row needs-validation" novalidate method="POST">
            <div class="col-md-7 cart-left">
                <div class="information row">
                    <h3>Datos de facturación</h3>
                    @csrf
                    <input type="hidden" name="mode" value="1">
                    {{-- <div class="form-group col-md-12">
                        <select name="" id="" class="form-select">
                            <option value="">País</option>
                        </select>
                    </div> --}}
                    <div class="form-group col-md-12">
                        <label for="">Nombre completo</label>
                        <input type="text" name="invoice_name" class="form-control" placeholder="Nombres" value="{{ Auth::user()->invoice_name }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Departamento</label>
                        <input type="text" name="invoice_department" class="form-control" placeholder="Departamento" value="{{ Auth::user()->invoice_department }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Distrito</label>
                        <input type="text" name="invoice_district" class="form-control" placeholder="Distrito" value="{{ Auth::user()->invoice_district }}" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Dirección</label>
                        <input type="text" name="invoice_address" class="form-control" placeholder="Dirección completa" value="{{ Auth::user()->invoice_address }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Teléfono</label>
                        <input type="text" name="invoice_telephone" class="form-control" placeholder="Teléfono" value="{{ Auth::user()->invoice_telephone }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="invoice_email" class="form-control" placeholder="Email" value="{{ Auth::user()->invoice_email }}" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="checkbox" class="form-check-input" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto los <a href="{{ route('terminos-y-condiciones') }}">términos y condiciones</a>
                        </label>
                    </div>
                    {{-- 
                    <div class="form-group">
                        <input type="submit" value="PAGAR" class="btn btn-pagar">
                        <a href="{{ route('cart') }}" class="volver">Volver al carrito</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-5 cart-right">
                <div class="content">
                    @php $total = 0 @endphp
                    <div class="items">
                        @if (count((array)session('cart')) >= 1)
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] @endphp
                                <div class="item">
                                    <a href="" class="delete" id="delete_product_cart" id_product="{{ $id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
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
                        @else
                        <div class="item">
                            <div class="empty_cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p>
                                    Carrito vacio
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                    {{-- <div class="subtotal">
                        <div class="item">
                            <p>Subtotal</p>
                            <p>S/ 1900</p>
                        </div>
                         <div class="item">
                            <div class="envios">
                                Envíos <div class="signo">?</div>
                            </div>
                            <p>Calculado en el siguiente paso</p>
                        </div>
                    </div> --}}
                    <div class="total">
                        <div class="price">
                            <div class="price-left">
                                <p class="p_total">Total</p>
                                {{-- <p>Incluye S/ 28,27 de impuestos</p> --}}
                            </div>
                            <div class="price-right">
                                @if(session('promo'))
                                <span>S/ {{ $total }}</span> S/ {{ $total * (1 - session('promo')['discount']/100) }}
                                @else
                                S/ {{ $total }}
                                @endif 
                            </div>
                        </div>
                        
                    </div>
                    <div class="promo">
                        <h3>Promociones</h3>
                        @if(session('promo'))
                        <div class="info">
                            <span class="close" id="deletepromo">X</span>
                            <span class="text">Se ha aplicado el <strong>{{ session('promo')['discount'] }}%</strong> de descuento con el código <strong>{{ session('promo')['name'] }}</strong></span>
                        </div>
                        @endif
                        <div class="form-promo">
                            <input type="text" id="promo" class="form-control">
                            <a class="btn btn-cupon">Aplicar</a>
                        </div>
                        <p id="promo-error">
                            
                        </p>
                    </div>
                    <div class="modes">
                        <h3>Seleccione un método de pago</h3>
                        <div class="mode active_mode" id="mode_pay" pay_value=1>
                            <img src="{{ asset('images/con-tarjeta.png') }}" alt="">
                            <p>
                                Pagar con tarjeta
                            </p>
                        </div>
                        <div class="mode" id="mode_pay" pay_value=2>
                            <img src="{{ asset('images/sin-tarjeta.png') }}" alt="">
                            <p>
                                Pagar sin tarjeta
                            </p>
                        </div>
                        <div class="mode" id="mode_pay" pay_value=3>
                            <img src="{{ asset('images/transferencia.png') }}" alt="">
                            <p>
                                Transferencia
                            </p>
                        </div>
                        <p class="mode_text" id="mode_text1">{{ $setting->pay_mode_text[1] }}</p>
                        <p class="mode_text d-none" id="mode_text2">{{ $setting->pay_mode_text[2] }}</p>
                        <p class="mode_text d-none" id="mode_text3">{{ $setting->pay_mode_text[3] }}</p>
                    </div>
                </div>
                <p class="compra_segura mt-3">
                    <img src="{{ asset('images/shield.png') }}" alt=""> Pago 100% Seguro
                </p>
                @if(session('cart'))
                <div class="text-center">
                    <button href="" type="submit" class="btn btn-pagar">CONTINUAR</button>
                </div>
                @endif
            </div>
            </form>
        </div>
    </div>
</section>

@endsection