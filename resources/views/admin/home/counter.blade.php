@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-check-double fa-xs"></i> <span>Contador de logros</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12">
              @include('admin.includes.alert')
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary float-left">Contador:</h6>
                      <button href="" class="btn btn-success btn-icon-split float-right añadir">
                        <span class="icon text-white-50">
                          <i class="fas fa-plus"></i>
                        </span>
                        <span class="text text-white">Añadir</span>
                      </button>
                    </div>
                    {!! Form::model($home, ['route' => ['home.update', 1], 'method' => 'PUT']) !!}
                    <div class="texto pt-4">
                      @foreach ($home->number_counter as $item)
                        <div class="card-body">
                          @if ($loop->index >= 1)
                          <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                            <i class="fas fa-trash"></i>
                          </a>
                          @endif

                          {!! Form::label('number_counter','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                          {!! Form::text('number_counter['.$loop->index.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                          {!! Form::label('number_counter','Cantidad:',['class'=>'mt-3']) !!} <code>*</code>
                          {!! Form::number('number_counter['.$loop->index.'][cant]',$item["cant"],['class'=>'form-control','required']) !!}
                          {!! Form::label('number_counter','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                          {!! Form::number('number_counter['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                        </div>
                      @endforeach
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
<script>
	$(document).ready(function(){
		 
		var i={{ count(($home->number_counter))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="number_counter" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="number_counter['+i+'][name]" type="text" required>' +
								'<label for="number_counter" class="mt-3">Cantidad:</label> <code>*</code>' +
								'<input class="form-control" name="number_counter['+i+'][cant]" type="number" required>' +
                '<label for="number_counter" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="number_counter['+i+'][order]" type="number" required>' +
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>' +
            '<\script>$(\'#lfm_'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto').append(template);
			i++;
		});
	
		$(document).on('click','.eliminar',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});
	});
</script>

@endsection