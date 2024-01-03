@extends('web.layout')
@section('title', $job->name.' | Summa Center Latam')
@section('description', $job->name.' | Summa Center Latam')
@section('keywords', $job->name.' | Summa Center Latam')
@section('content')

<section class="sec18">
    @include('web.partials.header')
</section>

<section class="sec67_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('bolsa.index') }}">Bolsa de trabajo</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $job->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec67">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="content_left_show">
                        @include('web.partials.alert')
                        <div class="content">
                            <h2>{{ $job->name }}</h2>
                            <h3>
                                {{ $job->company }}
                            </h3>
                            <div class="detail2">
                                <p><i class="far fa-clock"></i> Publicado {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</p>
                                <p><i class="fas fa-map-marker-alt"></i> {{ $job->department }}</p>
                            </div>
                            <div class="detail">
                                {!! htmlspecialchars_decode($job->summary) !!}
                            </div>
                            <div class="detail_tot">
                                {!! htmlspecialchars_decode($job->description) !!}
                            </div>
                            <hr>
                            <div class="detail_bottom">
                                <p>
                                    <i class="far fa-building"></i> {{ $job->work_modality }}
                                </p>
                                <p>
                                    <i class="far fa-clock"></i> {{ $job->workload }}
                                </p>
                            </div>
                            <a href="" class="btn btn-postular" id="btn_modal_postular" data-bs-toggle="modal" data-bs-target="#modal_postular">
                                <i class="fas fa-mouse-pointer"></i> Postularme
                            </a>
                        </div>
                        @if (count($related) > 0)
                        <div class="related">
                            <h4>Empleos relacionados</h4>
                            <div class="items">
                                @foreach ($related as $item)
                                <div class="item">
                                    <a href="{{ route('bolsa.show', [$item->slug, $item->id]) }}"></a>
                                    <div class="line-left"></div>
                                    <h2>{{ $item->name }}</h2>
                                    <h3>
                                        <span class="sp1">{{ $item->company }}</span> - <span class="sp2">Publicado {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                    </h3>
                                    <div class="detail">
                                        {!! htmlspecialchars_decode($item->summary) !!}
                                    </div>
                                    <div class="detail2">
                                        <p><i class="fas fa-map-marker-alt"></i> {{ $item->department }}</p>
                                        <p><i class="far fa-building"></i> {{ $item->work_modality }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="content_right content_right_show">
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[1] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[0] }}" alt="">
                        </div>
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[3] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[2] }}" alt="">
                        </div>
                        <div class="image">
                            <a href="{{ $pagefield->job_bank_advertising[5] }}"></a>
                            <img src="{{ $pagefield->job_bank_advertising[4] }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_postular" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modal_postularLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_postularLabel">
                        Postularme
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="applicant_form">
                        {!! Form::open(['route' => 'bolsa.apply', 'class' => 'row needs-validation', 'novalidate', 'files' => true]) !!}
                        
                        {!! Form::hidden('job_id', $job->id) !!}
                        <div class="form-group col-sm-6 mt-3">
                            {{ Form::label('name', 'Nombres:') }} <code>*</code>
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                        </div>
    
                        <div class="form-group col-sm-6 mt-3">
                            {{ Form::label('lastname', 'Apellidos:') }} <code>*</code>
                            {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                        </div>
    
                        <div class="form-group col-sm-6 mt-3">
                            {{ Form::label('telephone', 'Teléfono de contacto:') }} <code>*</code>
                            {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                        </div>
    
                        <div class="form-group col-sm-6 mt-3">
                            {{ Form::label('email', 'Email de contacto:') }} <code>*</code>
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) }}
                        </div>
                        
                        <div class="form-group col-sm-12 mt-3">
                            <div class="d-flex"><span>Archivo CV:</span> <small>(Solo formato .pdf permitido, max: 10MB)</small></div>
                            {{ Form::label('file_front', 'Sube tu CV aquí:', ['id' => 'file_front_label']) }} <code>*</code>
                            {{ Form::file('file_front', ['class' => 'form-control-file', 'accept'=>'.pdf', 'required', 'style' => 'display: none']) }}
                            <div class="invalid-feedback">
                                Este campo es obligatorio
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12 mb-2">
                            <small><code>*</code> Campos obligatorios</small>
                            <small>* Tenga en cuenta que esta información será compartida exclusivamente con la empresa del aviso, garantizando una comunicación efectiva y personalizada sobre su postulación. Estamos comprometidos a mantener la confidencialidad de sus datos y utilizarlos únicamente con el propósito de facilitar el proceso de selección.</small>
                        </div>
    
                        <div class="form-group col-sm-12">
                            {!! htmlFormSnippet() !!}
                        </div>
    
                        <div class="form-group col-sm-12 mt-3">
                            {!! Form::submit('Postular', ['class' => 'btn btn-success py-2 px-3']) !!}
                            <a class="btn btn-danger py-2 px-3" data-bs-dismiss="modal">Cancelar</a>
                        </div>
    
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
@endsection

@section('script0')
{!! htmlScriptTagJsApi() !!}
@endsection