@extends('web.layout')

@section('content')

<section class="sec13" style="background-image: url('{{ $pagefield->cover_pages[9]['image'] }}')">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[9]['title1'] }}
                </p>
                <p>
                    {{ $pagefield->cover_pages[9]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb__ pt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Egresados</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text_">
                <div class="text">
                    <h1>
                        TE DAMOS LA BIENVENIDA A EGRESADOS SUMMA
                    </h1>
                    <p>
                        Un espacio creado para fortalecer la comunidad de egresados y donde compartiremos información actualizada del sector laboral. Entérate de las últimas novedades, casos de éxito y beneficios exclusivos para ti.
                    </p>
                    <a href="">
                        Conoce más sobre nuestros<br>Egresados Summa
                        <img src="{{ asset('images/arrow-right-white.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec53">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 beneficios">
                <h1>
                    BENEFICIOS
                </h1>
                <div class="items">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado3.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Noticias de Egresados
                            </h3>
                            <p>
                                Entérate de las últimas novedades que tenemos para nuestra comunidad de egresados.
                            </p>
                            <div class="btn-action">
                                <a href="{{ route('blog') }}" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado1.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Bolsa de Trabajo
                            </h3>
                            <p>
                                Como <strong>Egresado SUMMA</strong> tienes acceso a la Bolsa de Trabajo para toda la vida. Ingresa hoy y conoce a las empresas que publican sus ofertas laborales con nosotros.
                            </p>
                            <div class="btn-action">
                                <a href="{{ route('bolsa.trabajo') }}" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('images/icon-egresado2.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>
                                Capacitación continua
                            </h3>
                            <p>
                                Continúa aprendiendo en la Escuela <strong>SUMMA CENTER</strong> donde encontrarás diferentes programas que te ayudarán a potenciar tu perfil profesional.
                                <br>
                                <strong>Nuestra comunidad de egresados tienen un descuento especial de 15% en todos nuestros programas.</strong>
                            </p>
                            <div class="btn-action">
                                <a href="{{ route('capacitaciones-corporativas') }}" class="btn btn-ingresa">INGRESA AQUÍ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec54">
    <div class="container-fluid">
        <div class="row content">
            <h1>
                NOVEDADES
            </h1>
            @foreach ($posts as $item)
                @foreach($item->blog_posts as $ite)
                @if($loop->iteration <= 3)
                <div class="col-md-4 item">
                    <div class="item_">
                        <div class="image">
                            <a href="{{ route('post', [$ite->blog_sub_category->blog_category->slug, $ite->blog_sub_category->slug, $ite->slug, $ite->id]) }}">
                                <img src="{{ $ite->image1 }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ route('post', [$ite->blog_sub_category->blog_category->slug, $ite->blog_sub_category->slug, $ite->slug, $ite->id]) }}" class="btn btn-leer">
                                ARTÍCULO COMPLETO
                            </a>
                            <p class="category">
                                {{ $ite->blog_sub_category->name }}
                            </p>
                            <p class="tit">
                                {{ $ite->name }}
                            </p>
                            <p class="description">
                                {{ $ite->summary }}
                            </p>
                            <div class="tags">
                                @foreach ($ite->blog_tags as $item_t)
                                <a href="{{ route('tag', $item_t->slug) }}" class="btn btn-tag">{{ $item_t->name }}</a> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            @endforeach
            <div class="col-md-12 btn-action">
                <a href="{{ route('blog') }}" class="btn btn-vermas">VER MÁS</a>
            </div>
        </div>
    </div>
</section>

@endsection