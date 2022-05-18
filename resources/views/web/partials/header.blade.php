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
            <li class="menu-link2">
                <a href="">CAMPUS ONLINE</a>
            </li>
            <li class="menu-link3">
                <a href="{{ route('cart') }}">
                    <img class="cart" src="{{ asset('images/cart.png') }}" alt="">
                </a>
                <a href="">
                    <img class="search" src="{{ asset('images/search.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>