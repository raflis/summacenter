<div class="header">
    <div class="container-fluid px-0">
        <ul class="header-first">
            <li>
                <a href="{{ route('egresados') }}" class="@if(Route::currentRouteName()=="egresados") active @endif">EGRESADOS</a>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="@if(Route::currentRouteName()=="blog") active @endif">BLOG</a>
            </li>
            <li class="bolsa">
                <div class="dropdown">
                    <a href="{{ route('bolsa.trabajo') }}" class="@if(preg_match("/^bolsa./", Route::currentRouteName())) active @endif" id="dropdownMenuButton0" data-bs-toggle="dropdown" aria-expanded="false">BOLSA DE TRABAJO</a>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton0">
                        <li>
                            <a class="dropdown-item @if(Route::currentRouteName()=="bolsa.seleccionar") active @endif" href="{{ route('bolsa.seleccionar') }}">
                                <img src="{{ asset('images/icono-veranuncios.png') }}" alt=""> Ver Anuncios
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('bolsa.trabajo') }}">
                                <img src="{{ asset('images/icono-crearanuncios.png') }}" alt=""> Crear Anuncios
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('soporte') }}" class="@if(Route::currentRouteName()=="soporte") active @endif">SOPORTE</a>
            </li>
            <li>
                <a href="{{ route('contacto') }}" class="@if(Route::currentRouteName()=="contacto") active @endif">CONTACTO</a>
            </li>
        </ul>
        <ul class="header-second" id="header-second">
            <div class="header-left">
                <li class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </li>
                <li class="menu">
                    <div class="dropdown dropdown_header">
                        <button id="btn-header" list="header1_list" class="btn btn-item @if(Route::currentRouteName()=="modelo-educativo" || Route::currentRouteName()=="nosotros" || Route::currentRouteName()=="equipo" || Route::currentRouteName()=="ofimatica" || preg_match("/^responsabilidad-social/", Route::currentRouteName()) || Route::currentRouteName()=="distinciones") active0 @endif">
                        SUMMA
                        </button>
                    </div>
                    <div class="dropPrograma dropCorpo shadow noActiveList" id="header1_list">
                        <div class="menu">
                            <div class="menu-left">
                                <a class="dropdown-item @if(Route::currentRouteName()=="nosotros") activeitems @endif" href="{{ route('nosotros') }}" class="menu1">
                                    <img src="{{ asset('images/icono-nosotros.png') }}" alt="">
                                    Nosotros
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="equipo") activeitems @endif" href="{{ route('equipo') }}" class="menu2">
                                    <img src="{{ asset('images/icono-equipo.png') }}" alt="">
                                    Equipo Summa
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="modelo-educativo") activeitems @endif" href="{{ route('modelo-educativo') }}">
                                    <img src="{{ asset('images/icono-modelo.png') }}" alt="">
                                    Modelo Educativo
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="distinciones") activeitems @endif" href="{{ route('distinciones') }}">
                                    <img src="{{ asset('images/icono-distinciones.png') }}" alt="">
                                    Distinciones
                                </a>
                                <a class="dropdown-item @if(preg_match("/^responsabilidad-social/", Route::currentRouteName())) activeitems @endif" href="{{ route('responsabilidad-social-objetivos') }}">
                                    <img src="{{ asset('images/icono-responsabilidad.png') }}" alt="">
                                    Responsabilidad Social
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu">
                    <div class="dropdown dropdown_header">
                        <button id="btn-header" list="header2_list" class="btn btn-item @if(Route::currentRouteName()=="programas" || Route::currentRouteName()=="curso") active0 @endif">
                        PROGRAMAS
                        </button>
                    </div>
                    <div class="dropPrograma dropCorpo shadow noActiveList" id="header2_list">
                        <div class="menu">
                            <div class="menu-left">
                                @foreach ($course_areas as $item)
                                <a class="dropdown-item" href="{{ route('programas', $item->slug) }}" class="menu1">
                                    <img src="{{ $item->icon }}" alt="">
                                    {{ $item->name }}
                                </a>
                                @endforeach
                                <div class="todo">
                                    <a href="{{ route('programas') }}">
                                        Ver Todo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu">
                    <div class="dropdown dropdown_header">
                        <button id="btn-header" list="header3_list" class="btn btn-item @if(Route::currentRouteName()=="nuestras-certificaciones" || Route::currentRouteName()=="preguntas-frecuentes" || Route::currentRouteName()=="grupo-excelencia" || preg_match("/insignia/", Route::currentRouteName()) ) active0 @endif">
                            CERTIFICACIONES
                        </button>
                    </div>
                    <div class="dropPrograma dropCorpo shadow noActiveList" id="header3_list">
                        <div class="menu">
                            <div class="menu-left">
                                <a class="dropdown-item @if(Route::currentRouteName()=="nuestras-certificaciones") activeitems @endif" href="{{ route('nuestras-certificaciones') }}">
                                    <img src="{{ asset('images/menu-certificaciones.png') }}" alt="">
                                    Nuestras Certificaciones
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="insignias-digitales") activeitems @endif" href="{{ route('insignias-digitales') }}">
                                    <img src="{{ asset('images/menu-insignias-digitales.png') }}" alt="">
                                    Insignias Digitales
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="coleccion-insignias" || Route::currentRouteName()=="insignia") activeitems @endif" href="{{ route('coleccion-insignias') }}">
                                    <img src="{{ asset('images/coleccion-insignias.png') }}" alt="">
                                    Colección de Insignias
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="grupo-excelencia") activeitems @endif" href="{{ route('grupo-excelencia') }}">
                                    <img src="{{ asset('images/icon-excelencia-academica.png') }}" alt="">
                                    Grupo de Excelencia Académica
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="preguntas-frecuentes") activeitems @endif" href="{{ route('preguntas-frecuentes') }}">
                                    <img src="{{ asset('images/menu-preguntas-frecuentes.png') }}" alt="">
                                    Preguntas Frecuentes
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu">
                    <div class="dropdown dropdown_header">
                        <button id="btn-header" list="header4_list" class="btn btn-item @if(Route::currentRouteName()=="asesoria-especializada" || Route::currentRouteName()=="capacitaciones-corporativas") active0 @endif">
                            CORPORATIVOS
                        </button>
                    </div>
                    <div class="dropPrograma dropCorpo shadow noActiveList" id="header4_list">
                        <div class="menu">
                            <div class="menu-left">
                                <a class="dropdown-item @if(Route::currentRouteName()=="asesoria-especializada") activeitems @endif" href="{{ route('asesoria-especializada') }}">
                                    <img src="{{ asset('images/icono-corporativo1.png') }}" alt="">
                                    Asesoría Especializada
                                </a>
                                <a class="dropdown-item @if(Route::currentRouteName()=="capacitaciones-corporativas") activeitems @endif" href="{{ route('capacitaciones-corporativas') }}">
                                    <img src="{{ asset('images/icono-corporativo2.png') }}" alt="">
                                    Capacitaciones Corporativas
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="header-right">
                <li class="menu-link2">
                    <a href="">CAMPUS ONLINE</a>
                </li>
                <li class="menu menu2">
                    <div class="dropdown dropdown_header">
                        @if(Auth::guard('user')->check())
                        <button id="btn-header" list="header5_list" class="btn btn-item active0">
                            <i class="fa-solid fa-user"></i> {{ ucwords(Auth::guard('user')->user()->name) }} 
                        </button>
                        @else
                        <a href="{{ route('login.index') }}" class="btn btn-login">
                            <i class="fa-solid fa-user"></i> INICIAR SESIÓN
                        </a>
                        @endif
                    </div>
                    @if(Auth::guard('user')->check())
                    <div class="dropPrograma dropCorpo shadow noActiveList" id="header5_list">
                        <div class="menu">
                            <div class="menu-left">
                                @if (Auth::guard('user')->user()->role == 0)
                                <a class="dropdown-item userdrop" href="{{ route('admin') }}">
                                    <i class="fa-solid fa-cog"></i> Administrador
                                </a>
                                @endif
                                <a class="dropdown-item userdrop @if(Route::currentRouteName()=="profile.index") activeitems @endif" href="{{ route('profile.index') }}">
                                    <i class="fa-solid fa-cog"></i> Mis Datos
                                </a>
                                <a class="dropdown-item userdrop @if(Route::currentRouteName()=="profile.shopping") activeitems @endif" href="{{ route('profile.shopping') }}">
                                    <i class="fa-solid fa-bag-shopping"></i> Mis Cursos
                                </a>
                                <a class="dropdown-item userdrop" href="{{ route('logout') }}">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesión
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </li>
                <li class="menu-link3">
                    <div class="cant" id="cant_header">
                        @if(session('cart'))
                            {{ count(session('cart')) }}
                        @else
                            0
                        @endif
                    </div>
                    <a href="{{ route('checkout.cart') }}" id="{{ (preg_match("/checkout/", Route::currentRouteName()))?'':'cart_user' }}">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </a>
                    <!--<a href="">
                        <img class="search" src="{{ asset('images/search.png') }}" alt="">
                    </a>-->
                </li>
            </div>
        </ul>
    </div>
</div>

<div class="modal fade" id="cartGracias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4>Tu curso se agregó al carrito</h4>
                <div class="content_gracias">
                    <div class="image">
                        <img class="image_product" src="" alt="">
                    </div>
                    <div class="description">
                        <h3 class="name_product">
                            Nombre del curso
                        </h3>
                        <p class="p1">
                            Categoría: <span class="product_category">Categoria</span>
                        </p>
                        <p class="p0">
                            Precio
                        </p>
                        <p class="price_now_product">
                            S/ 2000
                        </p>
                    </div>
                    <a href="{{ route('checkout.cart') }}" class="gocart">
                        Ir a pagar
                    </a>
                    <a href="" class="goback" data-bs-dismiss="modal">
                        Seguir comprando
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fondo"></div>
<div class="cartlist">
    <div class="cartlist_header">
        <h4>Carrito</h4>
        <div class="cartlist_close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="items" id="cartlist_items">
        @php $total = 0 @endphp
        @if (count((array)session('cart')) < 1)
        <div class="empty_cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <br>
            Carrito vacío
        </div>
        @else
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] @endphp
                <div class="item" id="product_{{ $id }}">
                    <div class="image">
                        <img src="{{ $details['image'] }}" alt="">
                    </div>
                    <div class="item_detail">
                        <a class="h5_name" href="{{ $details['url'] }}">{{ $details['name'] }}</a>
                        <div delete_product_id="{{ $id }}" class="delete_product">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <p class="cat">Categoria: <a class="cat_name" href="{{ $details['url_category'] }}">{{ $details['category'] }}</a></p>
                        <div class="amount_product">
                            Precio:
                            <div class="price_total">
                                S/ <span class="price_total_product_{{ $id }}">{{ $details['price'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        @endif
    </div>
    <div class="subtotal {{ (count((array)session('cart')) < 1)?'d-none':'d-flex' }}">
        <p>
            TOTAL
        </p>
        <p>
            S/ <span class="total">{{ $total }}</span>
        </p>
        <a href="{{ route('checkout.cart') }}">Procesar Compra</a>
    </div>
</div>

<div class="beforesend">
    <span class="beforesend_loader"></span>
</div>