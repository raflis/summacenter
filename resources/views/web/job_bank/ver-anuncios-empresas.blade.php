@extends('web.layout')
@section('title', $setting->meta_title[2])
@section('description', $setting->meta_description[2])
@section('keywords', $setting->meta_keyword[2])
@section('content')

<section class="sec45">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <h2>
                    Bolsa de
                </h2>
                <h1>
                    TRABAJO
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec46">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="busq">
                    <form action="{{ route('bolsa.ver-anuncios.empresas') }}" method="GET">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" name="name" placeholder="¿Qué buscas?" value="{{ request('name') }}">
                                <label for=""><strong>Ejemplos:</strong> Redactora Digital, Desarrollador</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="department" class="form-select">
                                    <option value="">Todos</option>
                                    @foreach (departments() as $i => $item)
                                        <option value="{{ $i }}" {{ (request('department') == $i)?'selected':'' }}>{{ $i }}</option>
                                    @endforeach
                                </select>
                                <label for=""><strong>Lugar:</strong> Lima, Arequipa, ...</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="job_type" class="form-select">
                                    <option value="">Todos</option>
                                    @foreach (job_types() as $i => $item)
                                        <option value="{{ $i }}" {{ (request('job_type') == $i)?'selected':'' }}>{{ $i }}</option>
                                    @endforeach
                                </select>
                                <label for=""><strong>Tipo de empleo:</strong> Tiempo Completo, ...</label>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="btn btn-enviar" type="submit" value="BUSCAR">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 breadcrumb__">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('bolsa.seleccionar') }}">Anuncios</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Anuncios de Empresas</li>
                    </ol>
                </nav>
            </div>
            @include('web.job_bank.partials.header')
            <div class="col-md-12">
                <div class="content_results">
                    <div class="items">
                        @foreach ($offers as $item)
                        <div class="item">
                            <div class="item_left">
                                <h1>
                                    {{ $item->name }}
                                </h1>
                                <p class="mb-2"><strong>{{ $item->job_bank_user->company_name }}</strong> - {{ $item->department }}</p>
                                <p>
                                    {{ $item->title }}
                                </p>
                            </div>
                            <div class="item_right">
                                <a href="{{ route('bolsa.anuncio.empresa', [$item->slug, $item->id]) }}" class="btn btn-info">Más información</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="content_right">
                        @if(Auth::guard('jobbank')->check())
                            @if(Auth::guard('jobbank')->user()->role == 2)
                            <a href="{{ route('bolsa.trabajo.perfil.postulante') }}" class="btn btn-cv">Publicar mi CV</a>
                            @endif
                            @if(Auth::guard('jobbank')->user()->role == 3)
                            <a href="{{ route('ofertas.index') }}" class="btn btn-cv">Publicar Oferta</a>
                            @endif
                        @endif
                        <div class="advertisements">
                            <img src="{{ $pagefield->job_bank_advertising[4] }}" alt="">
                            <img src="{{ $pagefield->job_bank_advertising[5] }}" alt="">
                            <img src="{{ $pagefield->job_bank_advertising[6] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection