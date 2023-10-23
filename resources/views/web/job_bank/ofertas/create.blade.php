@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec0 pt-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('ofertas.index') }}">Mis ofertas</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Crear oferta</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6"></div>
            @include('web.job_bank.partials.header')
            <div class="col-md-12">
                <div class="content">
                    <div class="content_item">
                        <div class="content_header">
                            <h1>
                                Crear Oferta
                            </h1>
                        </div>
                        <div class="form_offer">
                            <div class="">
                                {!! Form::open(['route' => 'ofertas.store', 'class' => 'row needs-validation', 'novalidate']) !!}
                                <div class="col-sm-12">
                                    @include('web.partials.alert')
                                </div>
                                @include('web.job_bank.ofertas.partials.form')
                                <div class="col-sm-12 my-4">
                                    <span class="d-block mb-3 font-semibold"><code>*</code> Campos Obligatorios</span>
                                    {!! Form::submit('Guardar cambios', ['class' => 'btn btn-guardar']) !!}
                                    <a class="btn btn-cancelar" href="{{ route('ofertas.index') }}">Atrás</a>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection