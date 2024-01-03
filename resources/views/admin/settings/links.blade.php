@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Links Header</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Links Header
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Azul - Link 0:') }} <code>*</code>
                            {{ Form::text('links[0]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 0', 'required']) }}
                          </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('links', 'Header Azul - Link 1:') }} <code>*</code>
                          {{ Form::text('links[1]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Azul - Link 2:') }} <code>*</code>
                            {{ Form::text('links[2]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Azul - Link 3:') }} <code>*</code>
                            {{ Form::text('links[3]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 3', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Azul - Link 4:') }} <code>*</code>
                            {{ Form::text('links[4]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 4', 'required']) }}
                        </div>
                        <hr style="width: 97%; border-top: 2px solid #000;">
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Blanco - Link 5:') }} <code>*</code>
                            {{ Form::text('links[5]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 5', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Blanco - Link 6:') }} <code>*</code>
                            {{ Form::text('links[6]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 6', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Blanco - Link 7:') }} <code>*</code>
                            {{ Form::text('links[7]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 7', 'required']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('links', 'Header Blanco - Link 8:') }} <code>*</code>
                            {{ Form::text('links[8]', null, ['class' => 'form-control', 'placeholder' => 'Header Azul - Link 8', 'required']) }}
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