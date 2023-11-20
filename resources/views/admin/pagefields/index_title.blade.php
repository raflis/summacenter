@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Títulos Inicio</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                          Títulos Inicio
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_1[1]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 2:') }} <code>*</code>
                          {{ Form::text('field_free_1[2]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 3:') }} <code>*</code>
                          {{ Form::text('field_free_1[3]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 4:') }} <code>*</code>
                          {{ Form::text('field_free_1[4]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 5:') }} <code>*</code>
                          {{ Form::text('field_free_1[5]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 6:') }} <code>*</code>
                          {{ Form::text('field_free_1[6]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 7:') }} <code>*</code>
                          {{ Form::text('field_free_1[7]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 8:') }} <code>*</code>
                          {{ Form::text('field_free_1[8]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_1', 'Título 9:') }} <code>*</code>
                          {{ Form::text('field_free_1[9]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
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