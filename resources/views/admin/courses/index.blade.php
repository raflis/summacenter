@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid">
        <div class="row layout-header">
            <div class="col-sm-12 header-content">
                <h1>
                    <i class="fas fa-bullhorn fa-xs text-white2"></i> Cursos - {{ $course_category->course_area->name }} - {{ $course_category->name }}
                </h1>
                <span class="subtitle">
                    Crear, editar y eliminar cursos.
                </span>
            </div>
        </div>
        <div class="row layout-body">
            <div class="col-sm-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Cursos
                        </span>
                        <div>
                            <a class="btn btn-danger" href="{{ route('course_categories.index', ['id_get' => $course_category->course_area->id, 'name_get' => $course_category->course_area->name]) }}">
                                <span class="icon">
                                    <i class="fas fa-chevron-circle-left px-2 py-1"></i>
                                </span>
                                <span class="text px-2 py-1">
                                    Atrás
                                </span>
                            </a>
                            <a class="btn btn-success" href="{{ route('courses.create', ['id_get' => Request::get('id_get')]) }}">
                                <span class="icon">
                                    <i class="fas fa-plus px-2 py-1"></i>
                                </span>
                                <span class="text px-2 py-1">
                                    Crear
                                </span>
                            </a>
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
                                <th>Curso</th>
                                <th>Sub Área</th>
                                <th>Área</th>
                                <th>Categoría</th>
                                <th>Modalidad</th>
                                <th>Inicio</th>
                                <th>Inversión</th>
                                <th># de Temas</th>
                                <th>Orden</th>
                                <th width=310>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $item)
                            <tr>
                                <td>{{ $courses->firstItem() + $loop->index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->course_subarea->name }}</td>
                                <td>{{ $item->course_category->course_area->name }}</td>
                                <td>{{ $item->course_category->name }}</td>
                                <td>{{ $item->modality }}</td>
                                <td>{{ $item->start_of_classes }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ count($item->topics) }}</td>
                                <td>{{ $item->order }}</td>
                                <td>
                                    <div style="display: inline-flex">
                                        <a class="btn btn-success text-white btn-sm mr-1" href="{{ route('topics.index', ['id_get' => $item->id]) }}">
                                            <i class="fas fa-plus pr-1"></i> Temas
                                        </a>
                                        <a class="btn btn-primary text-white btn-sm mr-1" href="{{ route('courses.edit', [$item->id, 'id_get' => Request::get('id_get')]) }}">
                                            <i class="far fa-edit pr-1"></i> Editar
                                        </a>
                                        <a class="btn btn-danger btn-sm btn-eliminar" href="" ideliminar="{{ $item->id }}"><i class="far fa-trash-alt pr-1"></i> Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="paginacionTotal d-flex justify-content-end">
                    {{ $courses->withQueryString()->render() }}
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
</div>

<div class="modal fade" id="deleting" tabindex="-1" role="dialog" aria-labelledby="deletingLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fas fa-exclamation-circle fa-5x text-warning mb-3"></i>
            <p class="mb-0 font-bold first">¿Estás seguro?</p>
            <p class="mb-0 font-light second">El registro seleccionado será eliminado y no podrá recuperarse.</p>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {!! Form::open(['route' => ['courses.destroy', ''], 'method' => 'DELETE', 'id' => 'form-eliminar']) !!}
                <button class="btn btn-danger">
                    Sí, eliminar
                </button>                           
            {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection

@section('script')

<script>
$('document').ready(function(){
    $('.btn-eliminar').click(function(e){
        e.preventDefault();
        var id = $(this).attr('ideliminar');
        var base = '{{ route('courses.destroy', '') }}';
        var url = base + '/' +id;
        $('#form-eliminar').attr('action', url);
        $('#deleting').modal('show');
    });
})
</script>

@endsection