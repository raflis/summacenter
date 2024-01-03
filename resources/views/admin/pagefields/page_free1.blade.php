@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Página Libre 1</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                          Página Libre 1
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_12', 'Mostrar Página:') }} <code>*</code>
                          {{ Form::select('field_free_12[0]', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'placeholder' => 'Seleccione', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_12', 'Nombre de la página:') }} <code>*</code>
                          {{ Form::text('field_free_12[1]', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Nombre de la página', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_12', 'URL de la página:') }} <code>*</code>
                          {{ Form::text('field_free_12[2]', null, ['id' => 'slug', 'class' => 'form-control', 'placeholder' => 'URL de la página', 'required']) }}
                        </div>
             
                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_12', 'Descripción:') }} <code>*</code>
                          {{ Form::textarea('field_free_12[3]', null, ['class' => 'form-control ckeditor5', 'required']) }}
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

@section('script')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
  $(document).ready(function(){
      $("#name, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text);
          }
      });
  });
</script>

@endsection