@extends('web.layout')
@section('title', $setting->meta_title[2])
@section('description', $setting->meta_description[2])
@section('keywords', $setting->meta_keyword[2])
@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec0 pt-20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb_">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Mis postulaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6"></div>
            @include('web.job_bank.partials.header')
            <div class="col-md-12">
                <div class="content">
                    <div class="content_item">
                        <div class="content_header">
                            <h1>
                                Mis Postulaciones
                            </h1>
                        </div>
                        <div class="alertas_div">
                            @include('web.partials.alert')
                        </div>
                        <div class="postulaciones">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th><p>Título del aviso</p></th>
                                        <th><p>Estado</p></th>
                                        <th><p>Publicado por</p></th>
                                        <th><p>Fecha de postulación</p></th>
                                        <th><p>Acciones</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Auth::guard('jobbank')->user()->job_bank_applicants as $item)
                                    <tr>
                                        <td>{{ $item->job_bank_offer->name }}</td>
                                        <td>Pendiente</td>
                                        <td>{{ $item->job_bank_offer->job_bank_user->company_name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i:s') }}</td>
                                        <td>
                                            <div style="display: inline-flex">
                                                <a class="btn btn-primary text-white btn-sm" href="{{ route('bolsa.anuncio.empresa', [Str::slug($item->job_bank_offer->name), $item->job_bank_offer->id]) }}">
                                                    <i class="fa-solid fa-eye pe-1"></i> Ver oferta
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script>
    $(function(){
        $('#datatable').DataTable({
            "language": {
                "search": "Buscar:",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Sin resultados",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                    "first": "Primera página",
                    "last": "Última página"
                    }
                },
        });
    });
</script>
@endsection