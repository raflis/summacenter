@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Configuración</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Configuración
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('pay_mode_text', 'Pagar con tarjeta:') }} <code>*</code>
                          {{ Form::text('pay_mode_text[1]', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('pay_mode_text', 'Pagar sin tarjeta:') }} <code>*</code>
                            {{ Form::text('pay_mode_text[2]', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('pay_mode_text', 'Transferencia:') }} <code>*</code>
                            {{ Form::text('pay_mode_text[3]', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'required']) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 my-4 px-0">
                    {!! Form::submit('Actualizar cambios',['class'=>'btn btn-success btn-sm py-2 px-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection