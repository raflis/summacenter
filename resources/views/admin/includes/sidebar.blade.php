<div class="layoutNav shadow" id="#navDesktop">
    <div class="nav-items">
        <div class="sidenav-menu-heading">Dashboard</div>
        <a class="nav-link @if(Route::currentRouteName()=="admin") active @endif" 
        href="{{ route('admin') }}">
            <i class="fas fa-tachometer-alt text-gray pr-1"></i> Dashboard
        </a>

        <div class="sidenav-menu-heading">Inicio</div>
        <a class="nav-link @if(Route::currentRouteName()=="home.sliders") active @endif" 
        href="{{ route('home.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Inicio)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="home.index") active @endif" 
        href="{{ route('home.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Inicio & Footer
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="home.popup") active @endif" 
        href="{{ route('home.popup') }}">
            <i class="fas fa-home text-gray pr-1"></i> Popup
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="home.counter") active @endif" 
        href="{{ route('home.counter') }}">
            <i class="fas fa-home text-gray pr-1"></i> Contador
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="contact.sliders") active @endif" 
        href="{{ route('contact.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Contacto)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="records.index") active @endif" 
        href="{{ route('records.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Registros
        </a>

        <div class="sidenav-menu-heading">Nosotros</div>
        <a class="nav-link @if(Route::currentRouteName()=="we.sliders") active @endif" 
        href="{{ route('we.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Nosotros)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="aboutus.history") active @endif" 
        href="{{ route('aboutus.history') }}">
            <i class="fas fa-home text-gray pr-1"></i> Historia
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="aboutus.detail") active @endif" 
        href="{{ route('aboutus.detail') }}">
            <i class="fas fa-home text-gray pr-1"></i> Detalles
        </a>

        <div class="sidenav-menu-heading">Proyectos</div>
        <a class="nav-link @if(Route::currentRouteName()=="project.sliders") active @endif" 
        href="{{ route('project.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Proyectos)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="corretaje.sliders") active @endif" 
        href="{{ route('corretaje.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Corretaje)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="districts.index" || Route::currentRouteName()=="districts.edit" || Route::currentRouteName()=="districts.create") active @endif" 
        href="{{ route('districts.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Distritos
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="typeprojects.index" || Route::currentRouteName()=="typeprojects.edit" || Route::currentRouteName()=="typeprojects.create") active @endif" 
        href="{{ route('typeprojects.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Tipo de Proyectos
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="typeproperties.index" || Route::currentRouteName()=="typeproperties.edit" || Route::currentRouteName()=="typeproperties.create") active @endif" 
        href="{{ route('typeproperties.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Tipo de Propiedades
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="enviroments.index" || Route::currentRouteName()=="enviroments.edit" || Route::currentRouteName()=="enviroments.create") active @endif" 
        href="{{ route('enviroments.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Ambientes
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="projects.index" || Route::currentRouteName()=="projects.edit" || Route::currentRouteName()=="projects.create") active @endif" 
        href="{{ route('projects.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Proyecto
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="corretajes.index" || Route::currentRouteName()=="corretajes.edit" || Route::currentRouteName()=="corretajes.create") active @endif" 
        href="{{ route('corretajes.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Corretaje
        </a>

        <div class="sidenav-menu-heading">Testimonios</div>
        <a class="nav-link @if(Route::currentRouteName()=="customerstestimonials.index" || Route::currentRouteName()=="customerstestimonials.create" || Route::currentRouteName()=="customerstestimonials.edit") active @endif" 
        href="{{ route('customerstestimonials.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Clientes
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="workerstestimonials.index" || Route::currentRouteName()=="workerstestimonials.create" || Route::currentRouteName()=="workerstestimonials.edit") active @endif" 
        href="{{ route('workerstestimonials.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Trabajadores
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="servicestestimonials.index" || Route::currentRouteName()=="servicestestimonials.create" || Route::currentRouteName()=="servicestestimonials.edit") active @endif" 
        href="{{ route('servicestestimonials.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Servicios
        </a>

        <div class="sidenav-menu-heading">Servicios</div>
        <a class="nav-link @if(Route::currentRouteName()=="services.slider") active @endif" 
        href="{{ route('services.slider') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Servicios)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="services.index") active @endif" 
        href="{{ route('services.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Servicios
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="services.text") active @endif" 
        href="{{ route('services.text') }}">
            <i class="fas fa-home text-gray pr-1"></i> Textos
        </a>

        <div class="sidenav-menu-heading">Vende</div>
        <a class="nav-link @if(Route::currentRouteName()=="sell.slider") active @endif" 
        href="{{ route('sell.slider') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Vende)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="sell.step") active @endif" 
        href="{{ route('sell.step') }}">
            <i class="fas fa-home text-gray pr-1"></i> Pasos
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="sell.term") active @endif" 
        href="{{ route('sell.term') }}">
            <i class="fas fa-home text-gray pr-1"></i> Términos y condiciones
        </a>

        <div class="sidenav-menu-heading">Blog</div>
        <a class="nav-link @if(Route::currentRouteName()=="blog.sliders") active @endif" 
        href="{{ route('blog.sliders') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders (Blog)
        </a>
        <a class="nav-link @if(Route::currentRouteName()=="posts.index" || Route::currentRouteName()=="posts.create" || Route::currentRouteName()=="posts.edit") active @endif" 
        href="{{ route('posts.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Entradas
        </a>

    </div>
    <div class="nav-footer py-4">
        <p>Logueado como:</p>
        <p>{{ ucwords(Auth::user()->name) }} {{ ucwords(Auth::user()->lastname) }}</p>
        <p>{{ getRole(Auth::user()->role) }}</p>
    </div>
</div>