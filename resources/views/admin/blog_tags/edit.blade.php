@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-bullhorn fa-xs text-white2"></i> Tags
                </h1>
                <span class="subtitle">
                    Crear, editar y eliminar tags.
                </span>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Editar tag
                        </span>
                    </div>
                    {!! Form::model($blog_tag, ['route' => ['blog_tags.update', $blog_tag->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        @include('admin.blog_tags.partials.form')
                    </div>
                </div>
            </div>
            <div class="col-sm-12 my-4">
                <span class="d-block mb-3 font-semibold"><code>*</code> Campos Obligatorios</span>
                {!! Form::submit('Guardar cambios',['class'=>'btn btn-success py-2 px-3']) !!}
                <a class="btn btn-danger py-2 px-3" href="{{ route('blog_tags.index') }}">Atrás</a>
                {!! Form::close() !!}
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

@endsection