<div class="form-group col-sm-12">
  {{ Form::label('not_read2', 'Curso:') }} <code>*</code>
  {{ Form::text('not_read2', $course->name, ['class' => 'form-control', 'readonly']) }}
  {{ Form::hidden('course_id', $course->id) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('name', 'Nombre del tema:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tema']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden de aparición:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden']) }}
</div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
      <div class="card-header py-3 card-into">
        <h6 class="m-0 font-weight-bold text-primary float-left">Sesiones:</h6>
        <button href="" class="btn btn-success btn-icon-split float-right añadir">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text text-white">Añadir</span>
        </button>
      </div>
      <div class="texto row px-3">
          @if (Route::currentRouteName()=="topics.create")
          <div class="card-body">
          {!! Form::label('sessions','Sesión:',['class'=>'']) !!} <code>*</code>
          {!! Form::text('sessions[0][name]',null,['class'=>'form-control','required']) !!}
          {!! Form::label('sessions','Orden:',['class'=>'mt-3']) !!} <code>*</code>
          {!! Form::number('sessions[0][order]',null,['class'=>'form-control','required']) !!}

          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endif
          @if (Route::currentRouteName()=="topics.edit")
          @foreach ($topic->sessions as $item)
          <div class="card-body col-md-12">
              @if ($loop->index >= 1)
              <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                <i class="fas fa-trash"></i>
              </a>
              @endif
              {!! Form::label('sessions','Sesión:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::text('sessions['.$loop->index.'][name]',$item['name'],['class'=>'form-control','required']) !!}

              {!! Form::label('sessions','Orden:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::number('sessions['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
  
              <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endforeach
          @endif
      </div>
  </div>
</div>

@section('script')

<script>
	$(document).ready(function(){

    @if (Route::currentRouteName()=="topics.edit")
      var i={{ count($topic->sessions)+1 }};
    @else
      var i=1;
    @endif
		 
		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-12"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="sessions" class="mt-3">Sesión:</label> <code>*</code>' +
								'<input class="form-control" name="sessions['+i+'][name]" type="text" required>' +
								'<label for="sessions" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="sessions['+i+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>';
	
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