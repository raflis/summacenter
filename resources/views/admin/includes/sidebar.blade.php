<div class="layoutNav shadow" id="#navDesktop">
    <div class="nav-items">
        <div class="sidenav-menu-heading mt-3">Dashboard</div>
        <a class="nav-link @if(Route::currentRouteName()=="admin") active @endif" 
        href="{{ route('admin') }}">
            <i class="fas fa-tachometer-alt text-gray pr-1"></i> Dashboard
        </a>
        <a class="nav-link" target="_blank" 
        href="{{ route('index') }}">
            <i class="fas fa-globe text-gray pr-1"></i> Ver Web
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.whatsapp'))) active @endif" 
        href="{{ route('settings.whatsapp') }}">
            <i class="fas fa-home text-gray pr-1"></i> Chat Flotante
        </a>
        <a class="nav-link @if(preg_match("/pagefields.cover_page/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.cover_page') }}">
            <i class="fas fa-home text-gray pr-1"></i> Portadas & títulos
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.index'))) active @endif" 
        href="{{ route('settings.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Configuración
        </a>
        <a class="nav-link @if(preg_match("/promos/", Route::currentRouteName())) active @endif" 
        href="{{ route('promos.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Cupones de descuento
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.paymodetext'))) active @endif" 
        href="{{ route('settings.paymodetext') }}">
            <i class="fas fa-home text-gray pr-1"></i> Textos métodos de pago
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.links'))) active @endif" 
        href="{{ route('settings.links') }}">
            <i class="fas fa-home text-gray pr-1"></i> Links Header
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.floating_advertising'))) active @endif" 
        href="{{ route('settings.floating_advertising') }}">
            <i class="fas fa-home text-gray pr-1"></i> Publicidad flotante
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.counter_advertising'))) active @endif" 
        href="{{ route('settings.counter_advertising') }}">
            <i class="fas fa-home text-gray pr-1"></i> Contador
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.promotions'))) active @endif" 
        href="{{ route('pagefields.promotions') }}">
            <i class="fas fa-home text-gray pr-1"></i> Página Promociones
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.page_free1'))) active @endif" 
        href="{{ route('pagefields.page_free1') }}">
            <i class="fas fa-home text-gray pr-1"></i> Página Libre 1
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.page_free2'))) active @endif" 
        href="{{ route('pagefields.page_free2') }}">
            <i class="fas fa-home text-gray pr-1"></i> Página Libre 2
        </a>
        
        <div class="sidenav-menu-heading">SEO</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.titles'))) active @endif" 
        href="{{ route('settings.titles') }}">
            <i class="fas fa-home text-gray pr-1"></i> Meta Titles
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.keywords'))) active @endif" 
        href="{{ route('settings.keywords') }}">
            <i class="fas fa-home text-gray pr-1"></i> Meta Keywords
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.descriptions'))) active @endif" 
        href="{{ route('settings.descriptions') }}">
            <i class="fas fa-home text-gray pr-1"></i> Meta Description
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('settings.image'))) active @endif" 
        href="{{ route('settings.image') }}">
            <i class="fas fa-home text-gray pr-1"></i> Meta Image
        </a>

        <div class="sidenav-menu-heading">Inicio</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.index_title'))) active @endif" 
        href="{{ route('pagefields.index_title') }}">
            <i class="fas fa-home text-gray pr-1"></i> Títulos Inicio
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('sliders.index', 'sliders.edit', 'sliders.create'))) active @endif" 
        href="{{ route('sliders.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.choose'))) active @endif" 
        href="{{ route('pagefields.choose') }}">
            <i class="fas fa-home text-gray pr-1"></i> ¿Porqué elegirnos?
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.achievement'))) active @endif" 
        href="{{ route('pagefields.achievement') }}">
            <i class="fas fa-home text-gray pr-1"></i> Nuestros logros
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('partners.index', 'partners.edit', 'partners.create'))) active @endif" 
        href="{{ route('partners.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Acreditadores
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('alliances.index', 'alliances.edit', 'alliances.create'))) active @endif" 
        href="{{ route('alliances.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Alianzas estratégicas
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('testimonials.index', 'testimonials.edit', 'testimonials.create'))) active @endif" 
        href="{{ route('testimonials.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Testimonios
        </a>

        <div class="sidenav-menu-heading">Cursos & Insignias</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('course_subareas.index', 'course_subareas.edit', 'course_subareas.create'))) active @endif" 
        href="{{ route('course_subareas.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sub Áreas
        </a>
        <a class="nav-link @if(preg_match("/^course_areas|^course_categories|^courses|^topics|^badge/", Route::currentRouteName())) active @endif" 
        href="{{ route('course_areas.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Áreas de capacitación
        </a>

        <div class="sidenav-menu-heading">SUMMA</div>
        <a class="nav-link @if(preg_match("/pagefields.aboutus/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.aboutus') }}">
            <i class="fas fa-home text-gray pr-1"></i> Nosotros
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_managers.index', 'worker_managers.edit', 'worker_managers.create'))) active @endif" 
        href="{{ route('worker_managers.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Equipo - Dirección
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_teachers.index', 'worker_teachers.edit', 'worker_teachers.create'))) active @endif" 
        href="{{ route('worker_teachers.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Equipo - Docentes
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_administrators.index', 'worker_administrators.edit', 'worker_administrators.create'))) active @endif" 
        href="{{ route('worker_administrators.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Equipo - Administración
        </a>
        <a class="nav-link @if(preg_match("/pagefields.educational_model/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.educational_model') }}">
            <i class="fas fa-home text-gray pr-1"></i> Modelo Educativo
        </a>
        <a class="nav-link @if(preg_match("/pagefields.distinctions/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.distinctions') }}">
            <i class="fas fa-home text-gray pr-1"></i> Distinciones
        </a>
        <a class="nav-link @if(preg_match("/pagefields.responsability/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.responsability') }}">
            <i class="fas fa-home text-gray pr-1"></i> Responsabilidad Social
        </a>

        <div class="sidenav-menu-heading">Certificaciones</div>
        <a class="nav-link @if(preg_match("/pagefields.certifications/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.certifications') }}">
            <i class="fas fa-home text-gray pr-1"></i> Nuestras Certificaciones
        </a>
        <a class="nav-link @if(preg_match("/^pagefields.digital_badges/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.digital_badges') }}">
            <i class="fas fa-home text-gray pr-1"></i> Insignias Digitales
        </a>
        <a class="nav-link @if(preg_match("/^pagefields.academic_group/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.academic_group') }}">
            <i class="fas fa-home text-gray pr-1"></i> G. Excelencia Académica
        </a>
        <a class="nav-link @if(preg_match("/^frequent_questions/", Route::currentRouteName())) active @endif" 
        href="{{ route('frequent_questions.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Preguntas Frecuentes
        </a>

        <div class="sidenav-menu-heading">Corporativos</div>
        <a class="nav-link @if(preg_match("/^consultancies/", Route::currentRouteName())) active @endif" 
        href="{{ route('consultancies.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Asesoría Especializada
        </a>
        <a class="nav-link @if(preg_match("/^pagefields.corporative_training/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.corporative_training') }}">
            <i class="fas fa-home text-gray pr-1"></i> Capacit. Corporativas
        </a>

        <div class="sidenav-menu-heading">Páginas</div>
        <a class="nav-link @if(preg_match("/^pagefields.support/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.support') }}">
            <i class="fas fa-home text-gray pr-1"></i> Soporte
        </a>
        <a class="nav-link @if(preg_match("/^pagefields.terms_and_conditions/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.terms_and_conditions') }}">
            <i class="fas fa-home text-gray pr-1"></i> Términos y condiciones
        </a>
        <a class="nav-link @if(preg_match("/^manuals/", Route::currentRouteName())) active @endif" 
        href="{{ route('manuals.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Manual del Alumno
        </a>
        <a class="nav-link @if(preg_match("/^pagefields.privacy_policies/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.privacy_policies') }}">
            <i class="fas fa-home text-gray pr-1"></i> Política de privacidad
        </a>

        <div class="sidenav-menu-heading">Bolsa de Trabajo</div>
        <a class="nav-link @if(preg_match("/pagefields.job_bank_advertising/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.job_bank_advertising') }}">
            <i class="fas fa-home text-gray pr-1"></i> Publicidad
        </a>
        <a class="nav-link @if(preg_match("/applicants/", Route::currentRouteName())) active @endif" 
        href="{{ route('applicants.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Postulantes
        </a>
        <a class="nav-link @if(preg_match("/jobs/", Route::currentRouteName())) active @endif" 
        href="{{ route('jobs.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Ofertas de trabajo
        </a>

        <div class="sidenav-menu-heading">Blog</div>
        <a class="nav-link @if(preg_match("/blog_tags/", Route::currentRouteName())) active @endif" 
        href="{{ route('blog_tags.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Tags
        </a>
        <a class="nav-link @if(preg_match("/blog_categories|blog_sub_categories|blog_posts/", Route::currentRouteName())) active @endif" 
        href="{{ route('blog_categories.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Categorías y Entradas
        </a>

        <div class="sidenav-menu-heading">Registros</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('records.index'))) active @endif" 
        href="{{ route('records.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Clientes interesados
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('records.contact'))) active @endif" 
        href="{{ route('records.contact') }}">
            <i class="fas fa-home text-gray pr-1"></i> Formulario de contacto
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('records.corporate'))) active @endif" 
        href="{{ route('records.corporate') }}">
            <i class="fas fa-home text-gray pr-1"></i> Corporativo
        </a>

        <div class="sidenav-menu-heading">Ventas</div>
        <a class="nav-link @if(preg_match("/sales/", Route::currentRouteName())) active @endif" 
        href="{{ route('sales.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Ventas
        </a>

    </div>
    <div class="nav-footer">
        <p>Logueado como:</p>
        <p>{{ ucwords(Auth::guard('user')->user()->name) }} {{ ucwords(Auth::user()->lastname) }}</p>
        <p>{{ getRole(Auth::user()->role) }}</p>
    </div>
</div>