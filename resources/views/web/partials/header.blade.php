<div class="header">
    <div class="container-fluid px-0">
        <ul class="header-first">
            <li>
                <a href="" class="">EGRESADOS</a>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="@if(Route::currentRouteName()=="blog") active @endif">BLOG</a>
            </li>
            <li>
                <a href="" class="">BOLSA DE TRABAJO</a>
            </li>
            <li>
                <a href="" class="">SOPORTE</a>
            </li>
            <li>
                <a href="" class="">CONTACTO</a>
            </li>
        </ul>
        <ul class="header-second" id="header-second">
            <li class="logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </li>
            <li class="menu">
                <div class="dropdown">
                    <button id="btn-header" list="header1_list" class="btn btn-item @if(Route::currentRouteName()=="equipo" || Route::currentRouteName()=="ofimatica") active0 @endif">
                      SUMMA
                    </button>
                </div>
            </li>
            <div class="dropPrograma dropInicio shadow noActiveList" id="header1_list">
                <div class="menu">
                    <div class="menu-left">
                        <a class="dropdown-item" href="" class="menu1">
                            <img src="{{ asset('images/icono-nosotros.png') }}" alt="">
                            Nosotros
                        </a>
                        <a class="dropdown-item" href="{{ route('equipo') }}" class="menu2">
                            <img src="{{ asset('images/icono-equipo.png') }}" alt="">
                            Equipo Summa
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-modelo.png') }}" alt="">
                            Modelo Educativo
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-distinciones.png') }}" alt="">
                            Distinciones
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-responsabilidad.png') }}" alt="">
                            Responsabilidad Social
                        </a>
                        <div class="todo">
                            <a href="{{ route('programas') }}">
                                Ver Todo
                            </a>
                        </div>
                    </div>
                    <div class="menu-right">
                        <div class="submenu menu1">
                            <p class="title">
                                Dirección
                            </p>
                            <a class="submenu_" href="">
                                Gerente General
                            </a>
                            <a class="submenu_" href="">
                                Gerente Comercial
                            </a>
                            <a class="submenu_" href="">
                                Gerente de Marketing
                            </a>
                        </div>
                        <div class="submenu menu2">
                            <p class="title">
                                Docentes
                            </p>
                            <a class="submenu_" href="">
                                Operaciones y Logística
                            </a>
                            <a class="submenu_" href="">
                                Mantenimiento
                            </a>
                            <a class="submenu_" href="">
                                Producción
                            </a>
                            <a class="submenu_" href="">
                                Contabilidad y Finanzas
                            </a>
                            <a class="submenu_" href="">
                                Operaciones y Logística
                            </a>
                            <a class="submenu_" href="">
                                Mantenimiento
                            </a>
                            <a class="submenu_" href="">
                                Producción
                            </a>
                            <a class="submenu_" href="">
                                Contabilidad y Finanzas
                            </a>
                            <a class="submenu_" href="">
                                Operaciones y Logística
                            </a>
                            <a class="submenu_" href="">
                                Mantenimiento
                            </a>
                            <a class="submenu_" href="">
                                Producción
                            </a>
                            <a class="submenu_" href="">
                                Contabilidad y Finanzas
                            </a>
                        </div>
                        <div class="submenu menu3">
                            <p class="title">
                                Administración
                            </p>
                            <a class="submenu_" href="">
                                Coordinación Académica
                            </a>
                            <a class="submenu_" href="">
                                Soporte Técnico
                            </a>
                            <a class="submenu_" href="">
                                Contabilidad
                            </a>
                            <a href="" class="submenu_">
                                Marketing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <li class="menu">
                <div class="dropdown">
                    <button id="btn-header" list="header2_list" class="btn btn-item @if(Route::currentRouteName()=="programas" || Route::currentRouteName()=="curso") active0 @endif">
                      PROGRAMAS
                    </button>
                </div>
            </li>
            <div class="dropPrograma shadow noActiveList" id="header2_list">
                <div class="menu">
                    <div class="menu-left">
                        <a class="dropdown-item" href="" class="menu1">
                            <img src="{{ asset('images/icono-programa1.png') }}" alt="">
                            Operaciones y Logística
                        </a>
                        <a class="dropdown-item" href="" class="menu2">
                            <img src="{{ asset('images/icono-programa2.png') }}" alt="">
                            Mantenimiento
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa3.png') }}" alt="">
                            Producción
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa4.png') }}" alt="">
                            Contabilidad y Finanzas
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa5.png') }}" alt="">
                            Talento Humano
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa6.png') }}" alt="">
                            Ventas y Distribución
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa7.png') }}" alt="">
                            Administración
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa8.png') }}" alt="">
                            Inteligencia de Negocios
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa9.png') }}" alt="">
                            Ofimática
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa10.png') }}" alt="">
                            Minería
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa11.png') }}" alt="">
                            Innovación y Tecnología
                        </a>
                        <a class="dropdown-item" href="">
                            <img src="{{ asset('images/icono-programa12.png') }}" alt="">
                            Metodologías Agiles
                        </a>
                        <div class="todo">
                            <a href="{{ route('programas') }}">
                                Ver Todo
                            </a>
                        </div>
                    </div>
                    <div class="menu-right">
                        <div class="submenu menu1">
                            <p class="title">
                                Diplomados
                            </p>
                            <a class="submenu_ @if(Route::currentRouteName()=="curso") activeitems @endif" href="{{ route('curso') }}">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                        </div>
                        <div class="submenu menu2">
                            <p class="title">
                                Especializaciones
                            </p>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                        </div>
                        <div class="submenu menu3">
                            <p class="title">
                                Cursos
                            </p>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                        </div>
                        <div class="submenu menu4">
                            <p class="title">
                                Talleres
                            </p>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                            <a class="submenu_" href="">
                                SAP ERP MM
                            </a>
                            <a class="submenu_" href="">
                                SAP S/4HANA MM
                            </a>
                            <a class="submenu_" href="">
                                SCM
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <li class="menu">
                <div class="dropdown">
                    <button id="btn-header" list="header3_list" class="btn btn-item @if(Route::currentRouteName()=="nuestras-certificaciones" || Route::currentRouteName()=="insignias-digitales" || Route::currentRouteName()=="ruta-insignias") active0 @endif">
                        CERTIFICACIONES
                    </button>
                </div>
                <div class="dropPrograma dropCerti shadow noActiveList" id="header3_list">
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
                            <a class="dropdown-item @if(Route::currentRouteName()=="ruta-insignias") activeitems @endif" href="{{ route('ruta-insignias') }}">
                                <img src="{{ asset('images/menu-ruta-insignias.png') }}" alt="">
                                Rutas de Insignias
                            </a>
                            <a class="dropdown-item" href="">
                                <img src="{{ asset('images/menu-preguntas-frecuentes.png') }}" alt="">
                                Preguntas Frecuentes
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu">
                <div class="dropdown">
                    <button id="btn-header" list="header4_list" class="btn btn-item">
                        CORPORATIVOS
                    </button>
                </div>
                <div class="dropPrograma dropCorpo shadow noActiveList" id="header4_list">
                    <div class="menu">
                        <div class="menu-left">
                            <a class="dropdown-item" href="">
                                <img src="{{ asset('images/menu-preguntas-frecuentes.png') }}" alt="">
                                Link 1
                            </a>
                            <a class="dropdown-item" href="">
                                <img src="{{ asset('images/menu-preguntas-frecuentes.png') }}" alt="">
                                Link 2
                            </a>
                            <a class="dropdown-item" href="">
                                <img src="{{ asset('images/menu-preguntas-frecuentes.png') }}" alt="">
                                Link 3
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-link2">
                <a href="">CAMPUS ONLINE</a>
            </li>
            <li class="menu-link3">
                <a href="">
                    <img class="cart" src="{{ asset('images/cart.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('images/search.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>