

<div class="form-group col-sm-6">
  {{ Form::label('not_read2', 'Área de capacitación:') }} <code>*</code>
  {{ Form::text('not_read2', $course_area->name, ['class' => 'form-control', 'readonly']) }}
  {{ Form::hidden('course_area_id', $course_area->id) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('category', 'Categoría:') }} <code>*</code>
  {{ Form::select('category', getBadge(0, 'all'), null, ['class' => 'custom-select', 'placeholder' => 'Selecciona categoría', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('type', 'Tipo:') }} <code>*</code>
  {{ Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Tipo', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('level', 'Nivel:') }} <code>*</code>
  {{ Form::text('level', null, ['class' => 'form-control', 'placeholder' => 'Nivel', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('time', 'Tiempo:') }} <code>*</code>
  {{ Form::text('time', null, ['class' => 'form-control', 'placeholder' => 'Tiempo', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('detail', 'Detalle:') }} <code>*</code>
  {{ Form::textarea('detail', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'rows' => 3, 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('criterion1', 'Criterio 1:') }} <code>*</code>
  {{ Form::text('criterion1', null, ['class' => 'form-control', 'placeholder' => 'Criterio', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('criterion2', 'Criterio 2:') }} <code>*</code>
  {{ Form::text('criterion2', null, ['class' => 'form-control', 'placeholder' => 'Criterio', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image','Selecciona insignia:',['class'=>'mt-3']) !!} <strong>(348 x 347px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="badges.edit")
    <img src="{{ $badge->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image2','Selecciona ruta de insignia:',['class'=>'mt-3']) !!} <strong>(1602 x 693px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image2',null,['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="badges.edit")
    <img src="{{ $badge->image2 }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
      <div class="card-header py-3 card-into">
        <h6 class="m-0 font-weight-bold text-primary float-left">Habilidades:</h6>
        <p class="btn btn-success btn-icon-split float-right añadir">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text text-white">Añadir</span>
        </p>
      </div>
      <div class="texto row px-3">
          @if (Route::currentRouteName()=="badges.create")
          <div class="card-body">
          {!! Form::label('skills','Habilidad:',['class'=>'']) !!} <code>*</code>
          {!! Form::text('skills[0][name]',null,['class'=>'form-control','required']) !!}
          {!! Form::label('skills','Orden:',['class'=>'mt-3']) !!} <code>*</code>
          {!! Form::number('skills[0][order]',null,['class'=>'form-control','required']) !!}

          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endif
          @if (Route::currentRouteName()=="badges.edit")
          @foreach ($badge->skills as $item)
          <div class="card-body col-md-12">
              @if ($loop->index >= 1)
              <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                <i class="fas fa-trash"></i>
              </a>
              @endif
              {!! Form::label('skills','Habilidad:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::text('skills['.$loop->index.'][name]',$item['name'],['class'=>'form-control','required']) !!}

              {!! Form::label('skills','Orden:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::number('skills['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
  
              <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endforeach
          @endif
      </div>
      
  </div>
</div>

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

<script>
	$(document).ready(function(){

    @if (Route::currentRouteName()=="courses.edit")
      var i={{ count($course->benefits)+1 }};
    @else
      var i=1;
    @endif
		 
		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-12"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="skills" class="mt-3">Habilidad:</label> <code>*</code>' +
								'<input class="form-control" name="skills['+i+'][name]" type="text" required>' +
								'<label for="skills" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="skills['+i+'][order]" type="number" required>' +
                
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

<script>
  (function( $ ){

$.fn.filemanager = function(type, options) {
  type = type || 'file';

  this.on('click', function(e) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
    var target_input = $('#' + $(this).data('input'));
    var target_preview = $('#' + $(this).data('preview'));
    window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1100,height=600');
    window.SetUrl = function (items) {
      var file_path = items.map(function (item) {
        return item.url;
      }).join(',');

      // set the value of the desired input to image url
      target_input.val('').val(file_path).trigger('change');

      // clear previous preview
      target_preview.html('');

      // set or change the preview image src
      items.forEach(function (item) {
        target_preview.append(
          $('<img>').css('height', '5rem').attr('src', item.thumb_url)
        );
      });

      // trigger change event
      target_preview.trigger('change');
    };
    return false;
  });
}

})(jQuery);

</script>
<script>
  $('#lfm1').filemanager('image', {prefix: route_prefix});
  $('#lfm2').filemanager('image', {prefix: route_prefix});
</script>

<script>
  var lfm = function(id, type, options) {
    let button = document.getElementById(id);

    button.addEventListener('click', function () {
      var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
      var target_input = document.getElementById(button.getAttribute('data-input'));
      var target_preview = document.getElementById(button.getAttribute('data-preview'));

      window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
      window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
          return item.url;
        }).join(',');

        // set the value of the desired input to image url
        target_input.value = file_path;
        target_input.dispatchEvent(new Event('change'));

        // clear previous preview
        target_preview.innerHtml = '';

        // set or change the preview image src
        items.forEach(function (item) {
          let img = document.createElement('img')
          img.setAttribute('style', 'height: 5rem')
          img.setAttribute('src', item.thumb_url)
          target_preview.appendChild(img);
        });

        // trigger change event
        target_preview.dispatchEvent(new Event('change'));
      };
    });
  };

  //lfm('lfm2', 'file', {prefix: route_prefix});
</script>
@endsection