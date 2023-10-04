@extends('web.layout')

@section('content')

<section class="sec1">
    @include('web.partials.header')
    <div class="formulario">
        <p>Para más información</p>
        <p>INGRESA TUS DATOS</p>
        <div class="formulario_ row">
            <form action="{{ route('postIndex') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <input type="hidden" name="from" value="inicio">
            <div class="form-group col-md-12">
                <label for="name">Nombres</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-12">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="" class="form-control" placeholder="Apellidos" required>
            </div>
            <div class="form-group col-md-12">
                <label for="document">DNI</label>
                <input type="text" name="document" id="" class="form-control" placeholder="DNI" required>
            </div>
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group col-sm-12">
                <label for="telephone">Teléfono</label>
                <div class="phone_contact d-flex">
                    <div class="dropdown drop_flags">
                        <button class="btn btn-flag dropdown-toggle" type="button" id="drop_flags" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="flag_user" src="{{ asset('images/flags/pe.png') }}" alt="">
                            <input type="hidden" name="flag_id" value="12">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="drop_flags">
                            @foreach ($flags as $flag)
                            <li>
                                <button id="flag_selec" class="dropdown-item" type="button" flag_id="{{ $flag->id }}" imagen_bandera="{{ asset('images/flags/'.$flag->image) }}" placeholder_bandera="{{ $flag->placeholder }}">
                                    <img src="{{ asset('images/flags/'.$flag->image) }}" alt="">
                                    <p class="name_flag">{{ $flag->name }} <span>({{ $flag->dial_code }})</span></p>
                                </button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Teléfono" required>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="interested_course">Curso de Interés</label>
                <select name="interested_course" id="" class="form-select" required>
                    <option value="">Estoy interesado en</option>
                    @foreach ($course_areas as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12 enviar">
                <input type="submit" class="btn btn-enviar shadow" value="ENVIAR">
            </div>
            </form>
        </div>
    </div>
    <div class="container-fluid px-0 carousel_index">
        <div id="carousel-slider" class="owl-carousel">
            @foreach ($sliders as $slider)
            <div class="item" style="background-image: url({{ ($agent->isMobile())?$slider->image_mobile:$slider->image_desktop }})">
                <div class="text">
                    <h1>
                        {{ $slider->title1 }}
                        <br>
                        <span>{{ $slider->title2 }}</span>
                    </h1>
                    <h2>
                        {{ $slider->title3 }}
                    </h2>
                    @if($slider->button_name && $slider->button_link)
                    <a href="{{ $slider->button_link }}" class="btn btn-vermas">{{ $slider->button_name }}</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    NUESTROS ACREDITADORES
                </h1>
            </div>
            <div class="col-md-12 carousel">
                <div id="carousel-partners" class="owl-carousel">
                    @foreach ($partners as $partner)
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ $partner->image }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec3_2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">
                    ¿Por qué <span>elegirnos?</span>
                </h1>
                <div id="carousel-chooseus" class="owl-carousel">
                    @foreach ($pagefield->choose_items as $item)
                    <div class="item">
                        <div class="item_">
                            <div class="imagen">
                                <img class="nohover" src="{{ $item['image'] }}" alt="">
                                <img class="hover" src="{{ $item['image_hover'] }}" alt="">
                            </div>
                            <div class="description">
                                <h3>{{ $item['name'] }}</h3>
                                <p>
                                    {{ $item['detail'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec2_2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    ALIANZAS ESTRATEGICAS
                </h1>
            </div>
            <div class="col-md-12 carousel">
                <div id="carousel-alliance" class="owl-carousel">
                    @foreach ($alliances as $item)
                    <div class="item">
                        <div class="imagen">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    +60 CURSOS EN 6 CATEGORÍAS
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-cursos" class="owl-carousel">
                    @foreach ($course_areas as $item)
                    <div class="item">
                        <div class="item-header">
                            <div class="titulo-header">
                                <span>
                                    {{ $item->name }}
                                </span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="imagen">
                                <img src="{{ $item->image }}" alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    {{ $item->text }}
                                </h4>
                                <a href="{{ route('programas', $item->slug) }}" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if(count($featured_posts) > 0)
<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    ARTÍCULOS
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-blog-index" class="owl-carousel">
                    @foreach ($featured_posts as $item_p)
                    <div class="item">
                        <div class="image">
                            <a href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}">
                                <img src="{{ $item_p->image1 }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <p class="category">
                                {{ $item_p->blog_category->name }}
                            </p>
                            <a class="tit" href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}">
                                {{ $item_p->name }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(count($event_posts) > 0)
<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    EVENTOS
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-blog-index2" class="owl-carousel">
                    @foreach ($event_posts as $item_p)
                    <div class="item">
                        <div class="image">
                            <a href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}">
                                <img src="{{ $item_p->image1 }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <p class="category">
                                {{ $item_p->blog_category->name }}
                            </p>
                            <a class="tit" href="{{ route('post', [$item_p->blog_category->slug, $item_p->slug, $item_p->id]) }}">
                                {{ $item_p->name }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="sec6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    EGRESADOS
                </h1>
            </div>
            <div class="col-md-12">
                <div id="carousel-recomendaciones" class="owl-carousel">
                    @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="content">
                            <div class="cara">
                                <div class="image">
                                    <img src="{{ $testimonial->image }}" alt="">
                                </div>
                                <p class="name">
                                    {{ $testimonial->name }}
                                </p>
                                <p class="description">
                                    Egresado: {{ $testimonial->graduated_career }}
                                </p>
                            </div>
                            <div class="detras">
                                <div class="first">
                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                    <p>
                                        {{ $testimonial->career }}
                                    </p>
                                </div>
                                <div class="second">
                                    <img src="{{ asset('images/icon-reco2.png') }}" alt="">
                                    {!! htmlspecialchars_decode($testimonial->comment) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="{{ route('recomendaciones') }}" class="btn btn-vermas">VER MÁS RECOMENDACIONES</a>
            </div>
        </div>
    </div>
</section>

<section class="sec7">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 title">
                <h1>
                    {{ $pagefield->achievement_title }}
                </h1>
            </div>
            @foreach ($pagefield->achievement_items as $item)
            <div class="col-md-2 col-6 item" id="counters_1">
                <div class="counters" id="counters_1">
                    <span class="plus">+ </span><div class="counter" data-TargetNum="{{ $item['amount'] }}">0</div>
                </div>
                <p>
                    {{ $item['name'] }}
                </p>
                <span>{{ $item['text'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec8">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="content">
                    <h5>
                        VERIFICA TU CERTIFICACIÓN
                    </h5>
                    <p>
                        Como alumno Summa puedes ingresar tu correo de
                        usuario y verificar tu insignia emitida por nuestra
                        institución, respaldada internacionalmente
                        por Credly.
                    </p>
                    <form action="{{ route('verifica-tu-certificacion') }}" method="GET" class="needs-validation" novalidate>
                        <input type="email" class="form-control shadow" name="email" placeholder="Ingrese su email" required>
                        <input type="submit" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection