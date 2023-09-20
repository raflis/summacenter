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
                      <li class="breadcrumb-item active" aria-current="page">Mis datos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="content">
                    <div class="content_item">
                        <h1>
                            Información Personal
                        </h1>
                        {!! Form::model(Auth::guard('user')->user(), ['route' => ['profile.update', Auth::user()->id], 'class' => 'needs-validation', 'novalidate', 'method' => 'PUT']) !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    @include('web.partials.alert')
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Nombres</label> <code>*</code>
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Apellidos</label> <code>*</code>
                                    {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Tipo de documento</label> <code>*</code>
                                    {{ Form::select('type_document', ['DNI' => 'DNI', 'Carnet de extranjeria' => 'Carnet de extranjeria', 'Pasaporte' => 'Pasaporte'], null, ['class' => 'form-select', 'placeholder' => 'Tipo documento', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Documento</label> <code>*</code>
                                    {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Documento', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Teléfono</label> <code>*</code>
                                    {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Departamento</label> <code>*</code>
                                    {{ Form::text('department', null, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Distrito</label> <code>*</code>
                                    {{ Form::text('district', null, ['class' => 'form-control', 'placeholder' => 'Distrito', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Dirección</label> <code>*</code>
                                    {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Nueva Contraseña</label> <code>*</code>
                                    {{ Form::password('newpassword', ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Repetir Contraseña</label> <code>*</code>
                                    {{ Form::password('renewpassword', ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">Actualizar</button>
                                    <!--<a href="{{ route('index') }}" class="btn btn-cancelar">CANCELAR</a>-->
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="content mt-5">
                    <div class="content_item">
                        <h1>
                            Mis Datos de Facturación
                        </h1>
                        {!! Form::model(Auth::guard('user')->user(), ['route' => ['profile.update_invoice', Auth::user()->id], 'class' => 'needs-validation', 'novalidate', 'method' => 'PUT']) !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    @include('web.partials.alert')
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Nombres</label> <code>*</code>
                                    {{ Form::text('invoice_name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Email</label> <code>*</code>
                                    {{ Form::email('invoice_email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Teléfono</label> <code>*</code>
                                    {{ Form::text('invoice_telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Departamento</label> <code>*</code>
                                    {{ Form::text('invoice_department', null, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Distrito</label> <code>*</code>
                                    {{ Form::text('invoice_district', null, ['class' => 'form-control', 'placeholder' => 'Distrito', 'required']) }}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Dirección</label> <code>*</code>
                                    {{ Form::text('invoice_address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">Actualizar</button>
                                    <!--<a href="{{ route('index') }}" class="btn btn-cancelar">CANCELAR</a>-->
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection