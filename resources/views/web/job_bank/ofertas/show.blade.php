@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6"></div>
            @include('web.job_bank.partials.header')
            <div class="col-md-12">
                <div class="content">
                    <div class="content_item">
                        <div class="offer_detail">
                            <h3>
                                {{ $job_bank_offer->name }}
                            </h3>
                            <p>Contratación laboral: <span>{{ $job_bank_offer->job_type }}</span></p>
                            <p>Salario: <span>{{ $job_bank_offer->salary }}</span></p>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <p>Requirimientos:</p>
                                    <p>
                                        <span>
                                        {!! nl2br($job_bank_offer->requirements) !!}
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>Responsabilidades:</p>
                                    <p>
                                        <span>
                                        {!! nl2br($job_bank_offer->responsibilities) !!}
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>Beneficios:</p>
                                    <p>
                                        <span>
                                        {!! nl2br($job_bank_offer->benefits) !!}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content_header mt-4">
                            <h1>
                                Postulantes
                            </h1>
                        </div>
                        <div class="applicants">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                @foreach ($job_bank_offer->job_bank_applicants as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="applicant{{ $loop->index }}-head">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#applicant{{ $loop->index }}" aria-expanded="true" aria-controls="applicant{{ $loop->index }}">
                                            {{ $item->job_bank_user->name }} {{ $item->job_bank_user->lastname }} - {{ \Carbon\Carbon::parse($item->job_bank_user->birthday)->age }} años
                                        </button>
                                    </h2>
                                    <div id="applicant{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="applicant{{ $loop->index }}-head">
                                        <div class="accordion-body">
                                            <div class="description">
                                                <h2>
                                                    DOCUMENTO:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->type_document }} {{ $item->job_bank_user->document }}
                                                </p>
                                                <h2>
                                                    CORREO ELECTRÓNICO:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->email }}
                                                </p>
                                                <h2>
                                                    TELÉFONO:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->telephone }}
                                                </p>
                                                <h2>
                                                    DIRECCIÓN:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->deparment }} {{ $item->job_bank_user->district }} {{ $item->job_bank_user->address }}
                                                </p>
                                                <h2>
                                                    CARRERA UNIVERSITARIA:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->career }}
                                                </p>
                                                <h2>
                                                    POSICIÓN ACTUAL:
                                                </h2>
                                                <p>
                                                    {{ $item->job_bank_user->position }}
                                                </p>
                                                <h2>
                                                    PERFIL:
                                                </h2>
                                                <p>
                                                    {!! nl2br($item->job_bank_user->summary) !!}
                                                </p>
                                                <h2>
                                                    EXPERIENCIA:
                                                </h2>
                                                <div class="experience">
                                                    @foreach ($item->job_bank_user->experience as $item)
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-back" href="{{ route('ofertas.index') }}">Atrás</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection