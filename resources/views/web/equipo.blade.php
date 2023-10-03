@extends('web.layout')

@section('content')

<section class="sec22" style="background-image: url({{ $pagefield->cover_pages[0]['image'] }})">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p>
                    {{ $pagefield->cover_pages[0]['title1'] }}
                </p>
                <p class="tit">
                    {{ $pagefield->cover_pages[0]['title2'] }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_ pb-0 pt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">SUMMA</li>
                      <li class="breadcrumb-item active" aria-current="page">Equipo Summa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec26">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                @php $var1=''; $var2=''; if(!Request::get('type') && !Request::get('position')){$var1 = 'active'; $var2 = 'show active';} @endphp
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $var1 }} {{ (Request::get('type') == 'manager')?'active':'' }}" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Dirección
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ (Request::get('type') == 'teacher')?'active':'' }}" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Docentes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ (Request::get('type') == 'administration')?'active':'' }}" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Colaboradores
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade {{ $var2 }} {{ (Request::get('type') == 'manager')?'show active':'' }}" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="items items1">
                                @foreach ($workers as $item)
                                    @if($item->type == 'manager')
                                    <div class="item2">
                                        <div class="content">
                                            <div class="cara {{ (Request::get('position') == $item->position)?'item_active':'' }}">
                                                <div class="image">
                                                    <img src="{{ $item->image }}" alt="">
                                                </div>
                                                <div class="cara_bottom">
                                                    <p class="name">
                                                        {{ $item->fullname }}
                                                    </p>
                                                    <span class="cargo">
                                                        {{ $item->position }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="detras">
                                                <div class="first">
                                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item1 }}
                                                    </p>
                                                </div>
                                                <div class="second">
                                                    <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item2 }}
                                                    </p>
                                                </div>
                                                <div class="third">
                                                    <img src="{{ asset('images/logros.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item3 }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade {{ (Request::get('type') == 'teacher')?'show active':'' }}" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">
                            <div class="items">
                                @foreach ($workers as $item)
                                    @if($item->type == 'teacher')
                                    <div class="item2">
                                        <div class="content">
                                            <div class="cara {{ (Request::get('area') == $item->course_area_id)?'item_active':'' }}">
                                                <div class="image">
                                                    <img src="{{ $item->image }}" alt="">
                                                </div>
                                                <div class="cara_bottom">
                                                    <p class="name">
                                                        {{ $item->fullname }}
                                                    </p>
                                                    <span class="cargo">
                                                        {{ $item->position }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="detras">
                                                <div class="first">
                                                    <img src="{{ asset('images/icon-reco1.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item1 }}
                                                    </p>
                                                </div>
                                                <div class="second">
                                                    <img src="{{ asset('images/experiencia.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item2 }}
                                                    </p>
                                                </div>
                                                <div class="third">
                                                    <img src="{{ asset('images/logros.png') }}" alt="">
                                                    <p>
                                                        {{ $item->item3 }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade {{ (Request::get('type') == 'administration')?'show active':'' }}" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            <div class="items items3">
                                @foreach ($workers as $item)
                                    @if($item->type == 'administration')
                                        <div class="item3">
                                            <div class="content {{ (Request::get('position') == $item->position)?'item_active':'' }}">
                                                <div class="image">
                                                    <img src="{{ $item->image }}" alt="">
                                                </div>
                                                <p class="name">
                                                    {{ $item->fullname }}
                                                </p>
                                                <span class="cargo">
                                                    {{ $item->position }}
                                                </span>
                                                <p class="telefono">
                                                    <img src="{{ asset('images/telefono.png') }}" alt="">
                                                    @if($item->telephone)
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51{{ $item->telephone }}">{{ $item->telephone }}</a>
                                                    @else
                                                    <a>-</a>
                                                    @endif
                                                </p>
                                                <p class="correo">
                                                    <img src="{{ asset('images/correo.png') }}" alt="">
                                                    <a href="">{{ $item->email }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection