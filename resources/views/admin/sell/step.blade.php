@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Vende</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Pasos de venta
                        </span>
                    </div>
                    {!! Form::model($sell, ['route' => ['sell.update', 1], 'method' => 'PUT']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('title', 'Título:') }} <code>*</code>
                            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('description', 'Descripción:') }} <code>*</code>
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción', 'rows' => 3, 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('steps', 'Paso 1:') !!} <code>*</code>
                          {!! Form::textarea('steps[1][name]',null,['class'=>'form-control','required']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('steps', 'Paso 2:') !!} <code>*</code>
                          {!! Form::textarea('steps[2][name]',null,['class'=>'form-control','required']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('steps', 'Paso 3:') !!} <code>*</code>
                          {!! Form::textarea('steps[3][name]',null,['class'=>'form-control','required']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('steps', 'Paso 4:') !!} <code>*</code>
                          {!! Form::textarea('steps[4][name]',null,['class'=>'form-control','required']) !!}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('steps', 'Paso 5:') !!} <code>*</code>
                          {!! Form::textarea('steps[5][name]',null,['class'=>'form-control','required']) !!}
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