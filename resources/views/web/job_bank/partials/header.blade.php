@if(Auth::guard('jobbank')->check())
<div class="col-md-6">
    <div class="profile">
        <div class="dropdown">
            <a class="profile_user" id="dropdownMenuButton00" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/profile.png') }}" alt="">
                <p>
                    {{ ucwords(Auth::guard('jobbank')->user()->name) }} {{ ucwords(Auth::guard('jobbank')->user()->lastname) }}
                </p>
            </a>
            <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton00">
                <li>
                    @if (Auth::guard('jobbank')->user()->role == 2)
                    <a class="dropdown-item @if(Route::currentRouteName()=="bolsa.trabajo.perfil.postulante") active @endif" href="{{ route('bolsa.trabajo.perfil.postulante') }}">
                        <img src="{{ asset('images/icon-profile.png') }}" alt=""> Perfil
                    </a>  
                    @endif
                    @if (Auth::guard('jobbank')->user()->role == 3)
                    <a class="dropdown-item @if(Route::currentRouteName()=="bolsa.trabajo.perfil.empresa") active @endif" href="{{ route('bolsa.trabajo.perfil.empresa') }}">
                        <img src="{{ asset('images/icon-profile.png') }}" alt=""> Perfil
                    </a>  
                    @endif
                </li>
                <li>
                    <a class="dropdown-item @if(Route::currentRouteName()=="bolsa.trabajo.configuracion") active @endif" href="{{ route('bolsa.trabajo.configuracion') }}">
                        <img src="{{ asset('images/icon-configuration.png') }}" alt=""> Configuración
                    </a>
                </li>
                <li>
                    @if (Auth::guard('jobbank')->user()->role == 2)
                    <a class="dropdown-item @if(Route::currentRouteName()=="bolsa.trabajo.postulaciones") active @endif" href="{{ route('bolsa.trabajo.postulaciones') }}">
                        <img src="{{ asset('images/icon-postulaciones.png') }}" alt=""> Mis Postulaciones
                    </a>
                    @endif
                    @if (Auth::guard('jobbank')->user()->role == 3)
                    <a class="dropdown-item @if(Route::currentRouteName()=="ofertas.index") active @endif" href="{{ route('ofertas.index') }}">
                        <img src="{{ asset('images/icon-postulaciones.png') }}" alt=""> Mis Ofertas
                    </a>
                    @endif
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('bolsa.trabajo.logout') }}">
                        <img src="{{ asset('images/icon-profile.png') }}" alt=""> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif