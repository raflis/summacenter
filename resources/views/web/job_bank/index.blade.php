@extends('web.layout')
@section('title', $setting->meta_title[2])
@section('description', $setting->meta_description[2])
@section('keywords', $setting->meta_keyword[2])
@section('content')

<section class="sec18">
    @include('web.partials.header')
</section>

<section class="sec67_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Bolsa de trabajo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec67">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="content_left">
                        <a href="{{ route('bolsa.create') }}" class="btn btn-crear">
                            <i class="fas fa-bullhorn"></i> Crear alerta de empleo
                        </a>
                        
                        <div class="search_form">
                            <form action="" method="GET">
                                <div class="mt-3">
                                    <label class="form-label" for="name">
                                        ¿Qué buscas?
                                    </label>
                                    <div class="d-flex">
                                        <button>
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <input type="text" name="name" class="form-control" value="{{ request('name') }}">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">
                                        Lugar de trabajo
                                    </label>
                                    <div class="d-flex">
                                        <button>
                                            <i class="fas fa-map-marker-alt"></i>
                                        </button>
                                        <select name="department"  class="form-select">
                                            <option value="">Todos</option>
                                            @foreach (departments() as $i => $item)
                                                <option value="{{ $i }}" {{ (request('department') == $i)?'selected':'' }}>{{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">
                                        Modalidad de trabajo
                                    </label>
                                    <div class="d-flex">
                                        <button>
                                            <i class="far fa-building"></i>
                                        </button>
                                        <select name="work_modality"  class="form-select">
                                            <option value="">Todos</option>
                                            @foreach (work_modality() as $i => $item)
                                                <option value="{{ $i }}" {{ (request('work_modality') == $i)?'selected':'' }}>{{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">
                                        Carga horaria
                                    </label>
                                    <div class="d-flex">
                                        <button>
                                            <i class="far fa-clock"></i>
                                        </button>
                                        <select name="workload"  class="form-select">
                                            <option value="">Todos</option>
                                            @foreach (workload() as $i => $item)
                                                <option value="{{ $i }}" {{ (request('workload') == $i)?'selected':'' }}>{{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <input class="btn btn-filtrar" type="submit" value="Filtrar">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="content_middle">
                        @include('web.partials.alert')
                        @foreach ($jobs as $item)
                        <div class="item">
                            <a href="{{ route('bolsa.show', [$item->slug, $item->id]) }}"></a>
                            <div class="line-left"></div>
                            <h2>{{ $item->name }}</h2>
                            <h3>
                                <span class="sp1">{{ $item->company }}</span> - <span class="sp2">Publicado {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            </h3>
                            <div class="detail">
                                {!! htmlspecialchars_decode($item->summary) !!}
                            </div>
                            <div class="detail2">
                                <p><i class="fas fa-map-marker-alt"></i> {{ $item->department }}</p>
                                <p><i class="far fa-building"></i> {{ $item->work_modality }}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="paginacionTotal d-flex justify-content-start">
                            {{ $jobs->withQueryString()->render() }}
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="images">
                            <div class="image">
                                <a href="{{ $pagefield->job_bank_advertising[1] }}"></a>
                                <img src="{{ $pagefield->job_bank_advertising[0] }}" alt="">
                            </div>
                            <div class="image">
                                <a href="{{ $pagefield->job_bank_advertising[3] }}"></a>
                                <img src="{{ $pagefield->job_bank_advertising[2] }}" alt="">
                            </div>
                            <div class="image">
                                <a href="{{ $pagefield->job_bank_advertising[5] }}"></a>
                                <img src="{{ $pagefield->job_bank_advertising[4] }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection