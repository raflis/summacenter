@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Chat Flotante</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Chat Flotante
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('floating_chat', 'Mostrar Chat Flotante:') }} <code>*</code>
                          {{ Form::select('floating_chat', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'placeholder' => 'Seleccione', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('floating_text', 'Texto del chat:') }}
                            {{ Form::textarea('floating_text', null, ['class' => 'form-control', 'placeholder' => 'Texto del chat', 'rows' => 2]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('floating_telephone', 'Número de Whatsapp SUMMA:') }} <code>*</code> <small>Ejm: 51999666333</small>
                            {{ Form::number('floating_telephone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Número de Whatsapp SUMMA', 'required']) }}
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