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
                        <div class="content_header">
                            <h1>
                                Información Personal
                            </h1>
                        </div>
                        @php Auth::guard('jobbank')->user()->birthday = \Carbon\Carbon::parse(Auth::guard('jobbank')->user()->birthday)->format('Y-m-d') @endphp
                        {!! Form::model(Auth::guard('jobbank')->user(), ['route' => ['bolsa.trabajo.perfil.updateCompany', Auth::user()->id], 'class' => 'needs-validation', 'novalidate', 'method' => 'PUT']) !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    @include('web.partials.alert')
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{ Auth::guard('jobbank')->user()->company_name }}<br>
                                        {{ Auth::guard('jobbank')->user()->email }}<br>
                                        {{ Auth::guard('jobbank')->user()->company_telephone }}
                                    </h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Nombre de la empresa</label> <code>*</code>
                                    {{ Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa', 'required']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">RUC</label> <code>*</code>
                                    {{ Form::text('company_document', null, ['class' => 'form-control', 'placeholder' => 'RUC', 'required']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Teléfono de la empresa</label> <code>*</code>
                                    {{ Form::text('company_telephone', null, ['class' => 'form-select', 'placeholder' => 'Teléfono', 'required']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Dirección de la empresa</label> <code>*</code>
                                    {{ Form::text('company_address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Nombre del anunciante</label> <code>*</code>
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del anunciante', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Apellido del anunciante</label> <code>*</code>
                                    {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellido del anunciante', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Puesto de trabajo</label> <code>*</code>
                                    {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Puesto de trabajo', 'required']) }}
                                </div>
                               
                                <div class="form-group col-md-12 m-0">
                                    <label for="">Información de contacto</label>
                                    <div class="info">
                                        <img src="{{ asset('images/icon-lock.png') }}" alt="">
                                        <p>
                                            Solo proporcionamos tu dirección de email y tu número de teléfono a las
                                            postulantes que contactes.
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Llamar y enviar mensajes de texto a este número de teléfono
                                    </label>
                                </div> 
                                <div class="col-md-12">
                                    <p class="info2">
                                        Este es el CV con el que podrás postular a los avisos de empresas.
                                    </p>
                                </div>--}}
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">GUARDAR</button>
                                    <a href="" class="btn btn-cancelar">CANCELAR</a>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Público
                    </label>
                    <p>
                        Las empresas que buscan
                        candidatos pueden encontrar
                        información sobre tu CV y tu perfil en
                        Summa, de acuerdo con nuestros
                        términos.
                    </p>
                </div>
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Privado
                    </label>
                    <p>
                        Las empresas no pueden encontrar 
                        tu CV en una búsqueda de Summa.
                        Esto no afecta  las postulaciones
                        anteriores ni evita que las empresas
                        a las que respondiste te conta
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection