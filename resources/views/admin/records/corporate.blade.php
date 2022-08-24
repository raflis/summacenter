@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-cloud-download-alt fa-xs text-white2"></i> Registros - Corporativo
                </h1>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Registros
                        </span>
                        <div class="d-flex align-items-center">
                            <div class="">
                                <a class="btn btn-success btn-descargar" href="{{ route('excel.corporate', ['name' => request('name'), 'lastname' => request('lastname'), 'start_date' => request('start_date'), 'end_date' => request('end_date')]) }}">
                                    <span class="icon">
                                        <i class="fas fa-download px-2 py-1"></i>
                                    </span>
                                    <span class="text px-2 py-1">
                                        Descargar
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="buscar-descarga">
                            <form action="{{ route('records.corporate') }}" method="GET" class="row" style="width:100%">
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="pr-1">Fecha de inicio:</label>
                                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="form-group mb-0 mx-1 col-md-2">
                                <label class="labelspan pr-1">Fecha de fin:</label>
                                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Nombres:</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombres" value="{{ request('name') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1">Apellidos:</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Apellido" value="{{ request('lastname') }}">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label class="labelspan pr-1"></label>
                                <button type="submit" class="btn btn-primary btn-buscar">
                                    Buscar &nbsp;&nbsp;<i class="fas fa-search"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="px-3">
                        @include('admin.includes.alert')
                    </div>
                </div>
                <div class="tablaTotal">
                    <table class="table tableD">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nombre completo</th>
                                <th>Documento</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Empresa - RUC</th>
                                <th>Cargo</th>
                                <th>Consulta</th>
                                <th>¿Llamar y enviar sms al teléfono?</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            <tr>
                                <td>{{ $records->firstItem() + $loop->index }}</td>
                                <td>{{ $record->name }} {{ $record->lastname }}</td>
                                <td>{{ $record->type_document }}: {{ $record->document }}</td>
                                <td>{{ $record->telephone }}</td>
                                <td>{{ $record->email }}</td>
                                <td>{{ $record->company }} - {{ $record->ruc }}</td>
                                <td>{{ $record->position }}</td>
                                <td>{{ Str::limit($record->observation, 100) }}</td>
                                <td>{{ ($record->call_sms == 0)?'No':'Si' }}</td>
                                <td>{!! \Carbon\Carbon::parse($record->created_at)->format('d/m/Y') !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="paginacionTotal d-flex justify-content-end">
                    {{ $records->withQueryString()->render() }}
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

@endsection