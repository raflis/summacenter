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
                      <li class="breadcrumb-item active" aria-current="page">Configuración</li>
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
            <div class="col-md-6">
                <div class="content">
                    <div class="content_item">
                        <div class="content_header">
                            <h1>
                                Configuración de cuenta
                            </h1>
                        </div>
                        {!! Form::model(Auth::guard('jobbank')->user(), ['route' => ['bolsa.trabajo.perfil.updatePass', Auth::user()->id], 'class' => 'needs-validation', 'novalidate', 'method' => 'PUT']) !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    @include('web.partials.alert')
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Contraseña actual</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Nueva contraseña</label>
                                    <input type="password" name="newpassword" class="form-control" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Confirmar nueva contraseña</label>
                                    <input type="password" name="renewpassword" class="form-control" required>
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">ACTUALIZAR</button>
                                    @if (Auth::guard('jobbank')->user()->role == 2)
                                    <a href="{{ route('bolsa.trabajo.perfil.postulante') }}" class="btn btn-cancelar">CANCELAR</a>
                                    @endif
                                    @if (Auth::guard('jobbank')->user()->role == 3)
                                    <a href="{{ route('bolsa.trabajo.perfil.empresa') }}" class="btn btn-cancelar">CANCELAR</a>
                                    @endif
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