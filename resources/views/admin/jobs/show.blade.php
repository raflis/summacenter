@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-bullhorn fa-xs text-white2"></i> {{ $job->name }}
                </h1>
                <span class="subtitle">
                    Oferta de trabajo
                </span>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Oferta de trabajo
                        </span>
                    </div>
                    <div class="card-body row">
                        <div class="show_detail col-md-12">
                            <h2>Detalle del empleo</h2>
                            <div class="item">
                                <h3>Nombre del empleo:</h3>
                                <div class="detail">
                                    {{ $job->name }}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Empresa:</h3>
                                <div class="detail">
                                    {{ $job->company }}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Breve detalle:</h3>
                                <div class="detail">
                                    {!! htmlspecialchars_decode($job->summary) !!}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Ubicación:</h3>
                                <div class="detail">
                                    {{ $job->department }}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Modalidad de trabajo:</h3>
                                <div class="detail">
                                    {{ $job->work_modality }}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Carga horaria:</h3>
                                <div class="detail">
                                    {{ $job->workload }}
                                </div>
                            </div>
                            <div class="item">
                                <h3>Descripción:</h3>
                                <div class="detail">
                                    {!! htmlspecialchars_decode($job->description) !!}
                                </div>
                            </div>
                            @if (count($job->applicants) > 0)
                            <hr>
                            <h2>Postulantes</h2>
                            @foreach ($job->applicants as $item)
                            <div class="item item_apply">
                                <h3>Nombres y apellidos:</h3>
                                <div class="detail mb-3">
                                    {{ $item->name }} {{ $item->lastname }}
                                </div>
                                <h3>Teléfono:</h3>
                                <div class="detail mb-3">
                                    {{ $item->telephone }}
                                </div>
                                <h3>Email:</h3>
                                <div class="detail mb-3">
                                    {{ $item->email }}
                                </div>
                                <h3>CV:</h3>
                                <div class="detail">
                                    <a href="{{ asset('cvs/'.$item->file) }}" target="_blank">Ver CV</a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 my-4">
                <a class="btn btn-danger py-2 px-3" href="{{ route('jobs.index') }}">Atrás</a>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

@endsection