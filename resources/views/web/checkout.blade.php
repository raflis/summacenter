@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec29">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 cart-left">
                <div class="information">
                    <h3>Dirección de registro</h3>
                    <form action="" class="row">
                        <div class="form-group col-md-12">
                            <select name="" id="" class="form-select">
                                <option value="">País</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Ambos Apellidos">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Documento de identidad">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Dirección completa">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Distrito">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="form-group col-md-4">
                            <select name="" id="" class="form-select">
                                <option value="">Región</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Código postal">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Teléfono">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Guardar mi información y consultar más rápidamente la próxima vez
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="PAGAR" class="btn btn-pagar">
                            <a href="{{ route('cart') }}" class="volver">Volver al carrito</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 cart-right">
                <div class="content">
                    <div class="items">
                        <div class="item">
                            <div class="detail-left">
                                <div class="image">
                                    <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h3>
                                        Curso Sap s/4hana mm
                                    </h3>
                                    <p>
                                        Por George Henríquez
                                    </p>
                                </div>
                            </div>
                            <div class="detail-right">
                                <div class="price">
                                    <div class="price-before">
                                        S/ 1000
                                    </div>
                                    <div class="price-now">
                                        S/ 700
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="detail-left">
                                <div class="image">
                                    <img src="{{ asset('images/diplomado_insignia1.png') }}" alt="">
                                </div>
                                <div class="name">
                                    <h3>
                                        Curso Sap s/4hana mm
                                    </h3>
                                    <p>
                                        Por George Henríquez
                                    </p>
                                </div>
                            </div>
                            <div class="detail-right">
                                <div class="price">
                                    <div class="price-before">
                                        S/ 1000
                                    </div>
                                    <div class="price-now">
                                        S/ 700
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subtotal">
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
                    </div>
                    <div class="total">
                        <div class="price">
                            <div class="price-left">
                                <p>Total</p>
                                <p>Incluye S/ 28,27 de impuestos</p>
                            </div>
                            <div class="price-right">
                                S/ 1900
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn btn-pagar">PAGAR</a>
                        </div>
                    </div>
                    <div class="promo">
                        <h3>Promociones</h3>
                        <div class="info">
                            <span class="close">X</span>
                            <span class="text">Se ha aplicado <strong>DESCSUMMA</strong></span>
                        </div>
                        <form action="">
                            <input type="text" name="" class="form-control">
                            <button class="btn btn-cupon">Aplicar</button>
                        </form>
                        <p>
                            El código de cupón introducido no es válido para este curso. ¿Es posible que hayas
                            utilizado el código de cupón equivocado?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection