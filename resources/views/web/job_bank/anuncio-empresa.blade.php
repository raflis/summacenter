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
                      <li class="breadcrumb-item"><a href="{{ route('bolsa.ver-anuncios.empresas') }}">Anuncios de Empresas</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $offer->name }}</li>
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
                                <h4>Sobre el anuncio</h4>
                                <p>Publicado: {{ \Carbon\Carbon::parse($offer->created_at)->diffForHumans() }}</p>
                            </div>
                            <h1>
                                {{ $offer->name }}
                            </h1>
                            <h3>Descripción</h3>
                            <div class="description">
                                <h2>
                                    REQUISITOS:
                                </h2>
                                <p>
                                    {!! nl2br($offer->requirements) !!}
                                </p>
                                <h2>
                                    RESPONSABILIDADES:
                                </h2>
                                <p>
                                    {!! nl2br($offer->responsibilities) !!}
                                </p>
                                <h2>
                                    OFRECEMOS:
                                </h2>
                                <p>
                                    {!! nl2br($offer->benefits) !!}
                                    <br><br>
                                    {!! nl2br($offer->detail) !!}
                                </p>
                                <h2>
                                    CONTRATACIÓN LABORAL:
                                </h2>
                                <p>
                                    {{ $offer->job_type }}
                                </p>
                                <h2>
                                    CONTACTO:
                                </h2>
                                <p>
                                    Representante: {{ $offer->job_bank_user->name }} {{ $offer->job_bank_user->lastname }}
                                </p>
                                @if($applied == 0)
                                    @if(Auth::guard('jobbank')->check())
                                        @if(Auth::guard('jobbank')->user()->role == 2)
                                        <a href="" class="btn btn-postular" data-bs-toggle="modal" data-bs-target="#applications">POSTULAR</a>
                                        @endif
                                    @else
                                        <a href="{{ route('bolsa.trabajo') }}" class="btn btn-postular">POSTULAR</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="item">
                            <img src="{{ asset('images/icon-map.png') }}" alt="">
                            <h5>
                                UBICACIÓN
                            </h5>
                            <p>
                                {{ $offer->address }}
                            </p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/icon-work.png') }}" alt="">
                            <h5>
                                TRABAJO
                            </h5>
                            <p>
                                {{ $offer->job_type }}
                            </p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/icon-salary.png') }}" alt="">
                            <h5>
                                SALARIO
                            </h5>
                            <p>
                                {{ $offer->salary }}
                            </p>
                        </div>
                        @if(Auth::guard('jobbank')->check())
                            @if(Auth::guard('jobbank')->user()->role == 2)
                            <a href="{{ route('bolsa.trabajo.perfil.postulante') }}" class="btn btn-cv">Publicar mi CV</a>
                            @endif
                            @if(Auth::guard('jobbank')->user()->role == 3)
                            <a href="{{ route('ofertas.index') }}" class="btn btn-cv">Publicar Oferta</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="similares">Ofertas similares</h2>
                <div class="content_results">
                    <div class="items">
                        @if(count($offer_related)>0)
                        @foreach ($offer_related[0] as $item)
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
                        @endif
                    </div>
                    <div class="content_right">
                        <div class="advertisements">
                            <img src="{{ $pagefield->job_bank_advertising[7] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="applications" tabindex="-1" role="dialog" aria-labelledby="deletingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <i class="fa-solid fa-handshake fa-5x mb-3 shakehands"></i>
            <p class="mb-0 font-light second">Estás a punto de postular a la oferta <i>"{{ $offer->name }}"</i><br>tus datos serán compartidos con la empresa.</p>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
            {!! Form::open(['route' => ['jobbank.applicant']]) !!}
                {!! Form::hidden('job_bank_offer_id', $offer->id) !!}
                <button class="btn btn-guardar" type="submit">
                    Sí, postular
                </button>                           
            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>

@endsection