@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
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
                                Mis Ofertas
                            </h1>
                            <a href="{{ route('ofertas.create') }}" class="btn-crear-oferta">
                                <i class="fa-solid fa-circle-plus"></i> Crear oferta
                            </a>
                        </div>
                        <div class="form-group col-md-12">
                            @include('web.partials.alert')
                        </div>
                        <div class="postulaciones">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th><p>Título del aviso</p></th>
                                        <th><p>Estado</p></th>
                                        <th><p>Finalización</p></th>
                                        <th><p>Salario</p></th>
                                        <th><p>Tipo de contrato</p></th>
                                        <th><p>CV recibidos</p></th>
                                        <th><p>Acciones</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_bank_offers as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>@if(\Carbon\Carbon::now()->toDateTimeString() <= $item->end_offer) Publicado @else Finalizado @endif</td>
                                        <td>{{ \Carbon\Carbon::parse($item->end_offer)->format('d/m/Y') }}</td>
                                        <td>{{ $item->salary }}</td>
                                        <td>{{ $item->job_type }}</td>
                                        <td>{{ count($item->job_bank_applicants) }}</td>
                                        <td>
                                            <div style="display: inline-flex">
                                                <a class="btn btn-success text-white btn-sm me-2" href="{{ route('ofertas.show', $item->id) }}">
                                                    <i class="fa-solid fa-eye pr-1"></i> Ver CVs
                                                </a>
                                                <a class="btn btn-primary text-white btn-sm me-2" href="{{ route('bolsa.anuncio.empresa', [$item->slug, $item->id]) }}">
                                                    <i class="fa-solid fa-eye pr-1"></i> Ver Oferta
                                                </a>
                                                <a class="btn btn-primary text-white btn-sm me-2" href="{{ route('ofertas.edit', $item->id) }}">
                                                    <i class="far fa-edit pr-1"></i> Editar
                                                </a>
                                                <a class="btn btn-danger btn-sm btn-eliminar text-white" href="" ideliminar="{{ $item->id }}"><i class="far fa-trash-alt pr-1"></i> Eliminar</a>
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

    <div class="modal fade" id="deleting" tabindex="-1" role="dialog" aria-labelledby="deletingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <i class="fas fa-exclamation-circle fa-5x text-danger mb-3"></i>
                <p class="mb-0 font-bold first">¿Estás seguro?</p>
                <p class="mb-0 font-light second">La oferta seleccionada será eliminada y no podrá recuperarse.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
                {!! Form::open(['route' => ['ofertas.destroy', ''], 'method' => 'DELETE', 'id' => 'form-eliminar']) !!}
                    <button class="btn btn-guardar">
                        Sí, eliminar
                    </button>                           
                {!! Form::close() !!}
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

        $('.btn-eliminar').click(function(e){
            e.preventDefault();
            var id = $(this).attr('ideliminar');
            var base = '{{ route('ofertas.destroy', '') }}';
            var url = base + '/' +id;
            $('#form-eliminar').attr('action', url);
            $('#deleting').modal('show');
        });
    });
</script>
@endsection