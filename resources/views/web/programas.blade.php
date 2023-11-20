@extends('web.layout')
@section('title', $setting->meta_title[10])
@section('description', $setting->meta_description[10])
@section('keywords', $setting->meta_keyword[10])
@section('image', $setting->meta_image)
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec25">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 mt-3">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Programas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="resultados">
                    <div class="result">
                        <p>
                            Se encontraron: <br>
                            <span>
                                {{ ($q_result == 1)?$q_result.' curso':$q_result.' cursos' }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="left-content">
                        <p class="tit">
                            <img src="{{ asset('images/embudo.png') }}" alt="">
                            Filtrar Programa
                        </p>
                        <div class="accordion">
                            <form action="{{ route('programas') }}" method="GET">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panel_area_head">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_area" aria-expanded="true" aria-controls="panel_area">
                                        Áreas de capacitación
                                    </button>
                                </h2>
                                <div id="panel_area" class="accordion-collapse collapse show" aria-labelledby="panel_area">
                                    <div class="accordion-body">
                                        <div class="lista">
                                            @foreach ($course_areas as $item)
                                            <div class="form-check">
                                                <input class="form-check-input area_checkbox" type="checkbox" name="q[]" id="area_{{ $item->id }}" value="{{ $item->slug }}" {{ ($slug == $item->slug)?'checked':'' }} {{ ($slug == 'all')?'checked':'' }} {{ (in_array($item->slug, $q))?'checked':'' }}>
                                                <label class="form-check-label" for="area_{{ $item->id }}">
                                                    {{ $item->name }}
                                                </label>
                                            </div>
                                            @endforeach
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre1">
                                                <label class="form-check-label" for="nombre1">
                                                    Operaciones y Logística
                                                </label>
                                                <div class="sublista">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="nombre1_1">
                                                        <label class="form-check-label" for="nombre1_1">
                                                            SAP ERP MM
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="nombre1_2">
                                                        <label class="form-check-label" for="nombre1_2">
                                                            SAP S/4HANA MM
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-bottom">
                                <button type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i> Filtrar
                                </button>
                            </div>
                            </form>
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="panel_modalidad_head">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panel_modalidad" aria-expanded="false" aria-controls="panel_modalidad">
                                        Modalidad
                                    </button>
                                </h2>
                                <div id="panel_modalidad" class="accordion-collapse collapse show" aria-labelledby="panel_modalidad">
                                    <div class="accordion-body accordion-body2">
                                        <div class="lista">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre2">
                                                <label class="form-check-label" for="nombre2">
                                                    Online en Vivo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="nombre2">
                                                <label class="form-check-label" for="nombre2">
                                                    Online Pre grabadas
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="right-content">
                        @if($slug == 'all')
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-diplomaturas-tab" data-bs-toggle="pill" data-bs-target="#pills-diplomaturas" type="button" role="tab" aria-controls="pills-diplomaturas" aria-selected="true">
                                    Diplomaturas
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-especializaciones-tab" data-bs-toggle="pill" data-bs-target="#pills-especializaciones" type="button" role="tab" aria-controls="pills-especializaciones" aria-selected="true">
                                    Especializaciones
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-cursos-profesionales-tab" data-bs-toggle="pill" data-bs-target="#pills-cursos-profesionales" type="button" role="tab" aria-controls="pills-cursos-profesionales" aria-selected="true">
                                    Cursos Profesionales
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-cursos-cortos-tab" data-bs-toggle="pill" data-bs-target="#pills-cursos-cortos" type="button" role="tab" aria-controls="pills-cursos-cortos" aria-selected="true">
                                    Cursos Cortos
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-diplomaturas" role="tabpanel" aria-labelledby="pills-diplomaturas-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item_course)
                                    @if($item_course->course_category->slug == 'diplomaturas')
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>{{ $item_course->course_category->course_area->name }}</span>
                                                </p>
                                                <img class="img-header" src="{{ $item_course->image }}" alt="">
                                                <img class="insignia" src="{{ $item_course->badge }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    {{ $item_course->name }}
                                                </h4>
                                                <div class="vermas">
                                                    <a href="{{ route('curso', [$item_course->slug, $item_course->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-especializaciones" role="tabpanel" aria-labelledby="pills-especializaciones-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item_course)
                                    @if($item_course->course_category->slug == 'especializaciones')
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>{{ $item_course->course_category->course_area->name }}</span>
                                                </p>
                                                <img class="img-header" src="{{ $item_course->image }}" alt="">
                                                <img class="insignia" src="{{ $item_course->badge }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    {{ $item_course->name }}
                                                </h4>
                                                <div class="vermas">
                                                    <a href="{{ route('curso', [$item_course->slug, $item_course->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-cursos-profesionales" role="tabpanel" aria-labelledby="pills-cursos-profesionales-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item_course)
                                    @if($item_course->course_category->slug == 'cursos-profesionales')
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>{{ $item_course->course_category->course_area->name }}</span>
                                                </p>
                                                <img class="img-header" src="{{ $item_course->image }}" alt="">
                                                <img class="insignia" src="{{ $item_course->badge }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    {{ $item_course->name }}
                                                </h4>
                                                <div class="vermas">
                                                    <a href="{{ route('curso', [$item_course->slug, $item_course->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-cursos-cortos" role="tabpanel" aria-labelledby="pills-cursos-cortos-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item_course)
                                    @if($item_course->course_category->slug == 'cursos-cortos')
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="imagen">
                                                <p>
                                                    Área: <span>{{ $item_course->course_category->course_area->name }}</span>
                                                </p>
                                                <img class="img-header" src="{{ $item_course->image }}" alt="">
                                                <img class="insignia" src="{{ $item_course->badge }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>
                                                    {{ $item_course->name }}
                                                </h4>
                                                <div class="vermas">
                                                    <a href="{{ route('curso', [$item_course->slug, $item_course->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @elseif($slug == 'q')
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-diplomaturas-tab" data-bs-toggle="pill" data-bs-target="#pills-diplomaturas" type="button" role="tab" aria-controls="pills-diplomaturas" aria-selected="true">
                                    Diplomaturas
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-especializaciones-tab" data-bs-toggle="pill" data-bs-target="#pills-especializaciones" type="button" role="tab" aria-controls="pills-especializaciones" aria-selected="true">
                                    Especializaciones
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-cursos-profesionales-tab" data-bs-toggle="pill" data-bs-target="#pills-cursos-profesionales" type="button" role="tab" aria-controls="pills-cursos-profesionales" aria-selected="true">
                                    Cursos Profesionales
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-cursos-cortos-tab" data-bs-toggle="pill" data-bs-target="#pills-cursos-cortos" type="button" role="tab" aria-controls="pills-cursos-cortos" aria-selected="true">
                                    Cursos Cortos
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-diplomaturas" role="tabpanel" aria-labelledby="pills-diplomaturas-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item)
                                        @foreach ($item->courses as $item_)
                                        @if($item_->course_category->slug == 'diplomaturas')
                                        <div class="item">
                                            <div class="item-content">
                                                <div class="imagen">
                                                    <p>
                                                        Área: <span>{{ $item->name }}</span>
                                                    </p>
                                                    <img class="img-header" src="{{ $item_->image }}" alt="">
                                                    <img class="insignia" src="{{ $item_->badge }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        {{ $item_->name }}
                                                    </h4>
                                                    <div class="vermas">
                                                        <a href="{{ route('curso', [$item_->slug, $item_->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-especializaciones" role="tabpanel" aria-labelledby="pills-especializaciones-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item)
                                        @foreach ($item->courses as $item_)
                                        @if($item_->course_category->slug == 'especializaciones')
                                        <div class="item">
                                            <div class="item-content">
                                                <div class="imagen">
                                                    <p>
                                                        Área: <span>{{ $item->name }}</span>
                                                    </p>
                                                    <img class="img-header" src="{{ $item_->image }}" alt="">
                                                    <img class="insignia" src="{{ $item_->badge }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        {{ $item_->name }}
                                                    </h4>
                                                    <div class="vermas">
                                                        <a href="{{ route('curso', [$item_->slug, $item_->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-cursos-profesionales" role="tabpanel" aria-labelledby="pills-cursos-profesionales-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item)
                                        @foreach ($item->courses as $item_)
                                        @if($item_->course_category->slug == 'cursos-profesionales')
                                        <div class="item">
                                            <div class="item-content">
                                                <div class="imagen">
                                                    <p>
                                                        Área: <span>{{ $item->name }}</span>
                                                    </p>
                                                    <img class="img-header" src="{{ $item_->image }}" alt="">
                                                    <img class="insignia" src="{{ $item_->badge }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        {{ $item_->name }}
                                                    </h4>
                                                    <div class="vermas">
                                                        <a href="{{ route('curso', [$item_->slug, $item_->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-cursos-cortos" role="tabpanel" aria-labelledby="pills-cursos-cortos-tab">
                                <div class="content">
                                    @foreach ($courses_tot as $item)
                                        @foreach ($item->courses as $item_)
                                        @if($item_->course_category->slug == 'cursos-cortos')
                                        <div class="item">
                                            <div class="item-content">
                                                <div class="imagen">
                                                    <p>
                                                        Área: <span>{{ $item->name }}</span>
                                                    </p>
                                                    <img class="img-header" src="{{ $item_->image }}" alt="">
                                                    <img class="insignia" src="{{ $item_->badge }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        {{ $item_->name }}
                                                    </h4>
                                                    <div class="vermas">
                                                        <a href="{{ route('curso', [$item_->slug, $item_->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @else
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @php $i = 0 @endphp
                            @foreach ($courses_tot->course_categories as $item)
                                @if(count($item->courses) > 0)
                                @php $i++ @endphp
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ ($i == 1)?'active':'' }}" id="pills-{{ $item->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $item->id }}" type="button" role="tab" aria-controls="pills-{{ $item->id }}" aria-selected="true">
                                        {{ $item->name }}
                                    </button>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            @php $j = 0 @endphp
                            @foreach ($courses_tot->course_categories as $item)
                                @if(count($item->courses) > 0)
                                @php $j++ @endphp
                                <div class="tab-pane fade {{ ($j == 1)?'show active':'' }}" id="pills-{{ $item->id }}" role="tabpanel" aria-labelledby="pills-{{ $item->id }}-tab">
                                    <div class="content">
                                        @foreach ($item->courses as $item_course)
                                        <div class="item">
                                            <div class="item-content">
                                                <div class="imagen">
                                                    <p>
                                                        Área: <span>{{ $item->course_area->name }}</span>
                                                    </p>
                                                    <img class="img-header" src="{{ $item_course->image }}" alt="">
                                                    <img class="insignia" src="{{ $item_course->badge }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        {{ $item_course->name }}
                                                    </h4>
                                                    <div class="vermas">
                                                        <a href="{{ route('curso', [$item_course->slug, $item_course->id]) }}" class="btn btn-vermas">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection