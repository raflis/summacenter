<div class="col-md-12 px-0">
    <div class="menuDrop">
        <div class="container-fluid px-0">
            <div class="nav_respo">
                <div class="btn-group">
                    <button class="btn @if(Route::currentRouteName()=="responsabilidad-social-objetivos" || Route::currentRouteName()=="responsabilidad-social-mision" || Route::currentRouteName()=="responsabilidad-social-quienes-somos") active @endif" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros
                    </button>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-objetivos") active @endif" href="{{ route('responsabilidad-social-objetivos') }}">Objetivos</a></li>
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-mision") active @endif" href="{{ route('responsabilidad-social-mision') }}">Misión</a></li>
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-quienes-somos") active @endif" href="{{ route('responsabilidad-social-quienes-somos') }}">Quiénes Somos</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn @if(Route::currentRouteName()=="responsabilidad-social-programa-de-becas") active @endif" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Financiamientos
                    </button>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-programa-de-becas") active @endif" href="{{ route('responsabilidad-social-programa-de-becas') }}">Programa de Becas</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn @if(Route::currentRouteName()=="responsabilidad-social-biblioteca-summa" || Route::currentRouteName()=="responsabilidad-social-talleres-gratuitos") active @endif" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Apoyo a la investigación
                    </button>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-biblioteca-summa") active @endif" href="{{ route('responsabilidad-social-biblioteca-summa') }}">Biblioteca Summa</a></li>
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-talleres-gratuitos") active @endif" href="{{ route('responsabilidad-social-talleres-gratuitos') }}">Talleres gratuitos</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn @if(Route::currentRouteName()=="responsabilidad-social-ecoeficiencia" || Route::currentRouteName()=="responsabilidad-social-programa-de-donaciones") active @endif" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Voluntariado
                    </button>
                    <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-ecoeficiencia") active @endif" href="{{ route('responsabilidad-social-ecoeficiencia') }}">Ecoeficiencia</a></li>
                        <li><a class="dropdown-item @if(Route::currentRouteName()=="responsabilidad-social-programa-de-donaciones") active @endif" href="{{ route('responsabilidad-social-programa-de-donaciones') }}">Programa de donaciones</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>