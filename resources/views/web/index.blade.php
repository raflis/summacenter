@extends('web.layout')

@section('content')

<section class="sec1">
    @include('web.partials.header')
    <div class="formulario">
        <p>Para más información</p>
        <p>INGRESA TUS DATOS</p>
        <div class="formulario_ row">
            <form action="{{ route('index') }}" method="POST">
            @csrf
            <div class="form-group col-md-12">
                <label for="name">Nombres</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-12">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="" class="form-control" placeholder="Apellidos" required>
            </div>
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group col-md-12">
                <label for="telephone">Celular</label>
                <input type="text" name="telephone" id="" class="form-control" placeholder="Celular" required>
            </div>
            <div class="form-group col-md-12">
                <label for="course">Curso de Interés</label>
                <select name="course" id="" class="form-select" required>
                    <option value="">Estoy interesado en</option>
                </select>
            </div>
            <div class="form-group col-md-12 enviar">
                <input type="submit" class="btn btn-enviar shadow" value="ENVIAR">
            </div>
            </form>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div id="carousel-slider" class="owl-carousel">
            @foreach ($sliders as $slider)
            <div class="item" style="background-image: url({{ $slider->image_desktop }})">
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
                    NUESTROS PARTNERS
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

<section class="sec3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="title">
                    <h1>
                        {{ $pagefields->choose_title }}
                    </h1>
                    <p>
                        {{ $pagefields->choose_text }}
                    </p>
                </div>
                <div class="items">
                    @foreach ($pagefields->choose_items as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item['image'] }}" alt="">
                        </div>
                        <div class="description">
                            <h3>{{ $item['name'] }}</h3>
                            <p>
                                {{ $item['detail'] }}
                            </p>
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
                                <img src="{{ $item->icon }}" alt="">
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
                                <a href="" class="btn btn-vermas">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    ARTÍCULOS DESTACADOS
                </h1>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="item_">
                    <div class="image">
                        <img src="{{ asset('images/articulo3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{ route('post') }}" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                        <p class="category">
                            Logros
                        </p>
                        <p class="tit">
                            Summa Center celebra sus más de 1000 estudiantes
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 title">
                <h1>
                    RECOMENDACIONES
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
                    {{ $pagefields->achievement_title }}
                </h1>
            </div>
            <div class="col-md-12 logros">
                <div class="logros_">
                    <img src="{{ asset('images/mundo.png') }}" alt="">
                    <div class="texto">
                        {{ $pagefields->achievement_text }}
                    </div>
                </div>
            </div>
            @foreach ($pagefields->achievement_items as $item)
            <div class="col-md-3 item" id="counters_1">
                <div class="image">
                    <img src="{{ $item['image'] }}" alt="">
                </div>
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
                        Como alumno Summa puedes ingresar tu documento
                        de identidad y verificar tu certificación emitida por
                        nuestra institución, respaldada internacionalmente
                        por Credly.
                    </p>
                    <form action="{{ route('verifica-tu-certificacion') }}" method="GET">
                        <input type="text" class="form-control shadow" name="document" placeholder="Nro. Documento de Identidad">
                        <input type="submit" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection