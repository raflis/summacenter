@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec47">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 breadcrumb__">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('bolsa.ver-anuncios.postulantes') }}">Anuncios de Postulantes</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $applicant->career }}</li>
                    </ol>
                </nav>
            </div>
            @include('web.job_bank.partials.header')
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="content_left">
                        <div class="offer">
                            <div class="tit">
                                <h4>Sobre el postulante</h4>
                            </div>
                            <h1>
                                {{ ucwords($applicant->name) }} {{ ucwords($applicant->lastname) }}
                            </h1>
                            <div class="description">
                                <h2>
                                    PERFIL:
                                </h2>
                                <p>
                                    {!! nl2br($applicant->summary) !!}
                                </p>
                                <h2>
                                    EXPERIENCIA:
                                </h2>
                                <div class="experience">
                                    @foreach ($applicant->experience as $item)
                                    <div class="item">
                                        <div class="exp_left">
                                            <span>
                                                {{ mb_strtoupper(\Carbon\Carbon::parse($item['start'])->formatLocalized('%B %Y'), 'UTF-8') }} - {{ mb_strtoupper(\Carbon\Carbon::parse($item['end'])->formatLocalized('%B %Y'), 'UTF-8') }}
                                            </span>
                                        </div>
                                        <div class="exp_right">
                                            <span>
                                                {{ ucwords($item['position']) }}
                                            </span>
                                            <div class="detail">
                                                <p>
                                                    {!! nl2br($item['detail']) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_right">
                        @if(Auth::guard('jobbank')->check())
                            @if(Auth::guard('jobbank')->user()->role == 2)
                            <a href="{{ route('bolsa.trabajo.perfil.postulante') }}" class="btn btn-cv">Publicar mi CV</a>
                            @endif
                            @if(Auth::guard('jobbank')->user()->role == 3)
                            <a href="" class="btn btn-cv">Contactar</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="similares">Postulantes similares</h2>
                <div class="content_results">
                    <div class="items">
                        @if(count($applicant_related)>0)
                        @foreach ($applicant_related[0] as $item)
                        <div class="item">
                            <div class="item_left">
                                <h1>
                                    {{ ucfirst($item->position) }}
                                </h1>
                                <p class="mb-2"><strong>{{ ucwords($item->name) }} {{ ucwords($item->lastname) }}</strong></p>
                                <p>
                                    {!! Str::limit(nl2br($item->summary), 200) !!}
                                </p>
                            </div>
                            <div class="item_right">
                                <a href="{{ route('bolsa.anuncio.postulante', [Str::slug($item->name).'-'.Str::slug($item->lastname), $item->id]) }}" class="btn btn-info">Más información</a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="content_right">
                        <div class="advertisements">
                            <img src="{{ $pagefield->job_bank_advertising[3] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection