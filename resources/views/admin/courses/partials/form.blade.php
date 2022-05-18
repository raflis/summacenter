<div class="form-group col-sm-3">
  {{ Form::label('not_read', 'Área de capacitación:') }} <code>*</code>
  {{ Form::text('not_read', $course_category->course_area->name, ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('not_read2', 'Categoría:') }} <code>*</code>
  {{ Form::text('not_read2', $course_category->name, ['class' => 'form-control', 'readonly']) }}
  {{ Form::hidden('course_category_id', $course_category->id) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('course_subarea_id', 'Sub Área:') }} <code>*</code>
  {{ Form::select('course_subarea_id', $course_subareas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('worker_id', 'Profesor:') }} <code>*</code>
  {{ Form::select('worker_id', $workers, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre del curso:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de curso']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title1', 'Título 1:') }} <code>*</code>
  {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title2', 'Título 2:') }} <code>*</code>
  {{ Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('title3', 'Título 3:') }} <code>*</code>
  {{ Form::text('title3', null, ['class' => 'form-control', 'placeholder' => 'Título 3']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('subtitle', 'Sub título:') }} <code>*</code>
  {{ Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Sub título']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('modality', 'Modalidad:') }} <code>*</code>
  {{ Form::select('modality', ['' => 'Selecciona Modalidad Online', 'En vivo' => 'Online en Vivo', 'Pre grabada' => 'Online Pre grabadas'], null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-3">
  {!! Form::label('slider','Imagen principal:',['class'=>'mt-3']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('slider',null,['class'=>'form-control','id'=>'thumbnail1']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->slider }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('image','Image del listado:',['class'=>'mt-3']) !!} <strong>(490 x 303px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail2']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('badge','Imagen de insignia:',['class'=>'mt-3']) !!} <strong>(300 x 300px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('badge',null,['class'=>'form-control','id'=>'thumbnail3']) !!}
  </div>
  <div id="holder3" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->badge }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('certificate','Imagen Certificado:',['class'=>'mt-3']) !!} <strong>(600 x 423px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm4" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('certificate', null, ['class' => 'form-control', 'id' => 'thumbnail4']) !!}
  </div>
  <div id="holder4" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->certificate }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {{ Form::label('start_of_classes', 'Inicio de clases:') }} <code>*</code>
  {{ Form::text('start_of_classes', null, ['class' => 'form-control', 'placeholder' => 'Inicio de clases']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('schedule', 'Horario:') }} <code>*</code>
  {{ Form::text('schedule', null, ['class' => 'form-control', 'placeholder' => 'Horario']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('duration', 'Duración:') }} <code>*</code>
  {{ Form::text('duration', null, ['class' => 'form-control', 'placeholder' => 'Duración']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('price', 'Inversión:') }} <code>*</code>
  {{ Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Inversión']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('download_video', 'Video introductorio:') }} <code>*</code>
  {{ Form::text('download_video', null, ['class' => 'form-control', 'placeholder' => 'Video introductorio']) }}
</div>

<div class="form-group col-sm-4">
  {!! Form::label('brochure','Brochure:') !!} <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('brochure', null, ['class' => 'form-control', 'id' => 'thumbnail0']) !!}
  </div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('video_id', 'Video ID:') }} <code>*</code>
  {{ Form::text('video_id', null, ['class' => 'form-control', 'placeholder' => 'Video ID']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('objective', 'Objetivo:') }} <code>*</code>
  {{ Form::textarea('objective', null, ['class' => 'form-control', 'placeholder' => 'Objetivo', 'rows' => 3]) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('audience', 'Público:') }} <code>*</code>
  {{ Form::textarea('audience', null, ['class' => 'form-control', 'placeholder' => 'Público', 'rows' => 3]) }}
</div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
      <div class="card-header py-3 card-into">
        <h6 class="m-0 font-weight-bold text-primary float-left">Beneficios:</h6>
        <button href="" class="btn btn-success btn-icon-split float-right añadir">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text text-white">Añadir</span>
        </button>
      </div>
      <div class="texto row px-3">
          @if (Route::currentRouteName()=="courses.create")
          <div class="card-body">
          {!! Form::label('benefits','Beneficio:',['class'=>'']) !!} <code>*</code>
          {!! Form::text('benefits[0][name]',null,['class'=>'form-control','required']) !!}
          {!! Form::label('benefits','Orden:',['class'=>'mt-3']) !!} <code>*</code>
          {!! Form::number('benefits[0][order]',null,['class'=>'form-control','required']) !!}

          <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endif
          @if (Route::currentRouteName()=="courses.edit")
          @foreach ($course->benefits as $item)
          <div class="card-body col-md-12">
              @if ($loop->index >= 1)
              <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                <i class="fas fa-trash"></i>
              </a>
              @endif
              {!! Form::label('benefits','Beneficio:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::text('benefits['.$loop->index.'][name]',$item['name'],['class'=>'form-control','required']) !!}

              {!! Form::label('benefits','Orden:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::number('benefits['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
  
              <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endforeach
          @endif
      </div>
      
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden de aparición:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden']) }}
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
                '<label for="benefits" class="mt-3">Beneficio:</label> <code>*</code>' +
								'<input class="form-control" name="benefits['+i+'][name]" type="text" required>' +
								'<label for="benefits" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="benefits['+i+'][order]" type="number" required>' +
                
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
  $('#lfm3').filemanager('image', {prefix: route_prefix});
  $('#lfm4').filemanager('image', {prefix: route_prefix});
  $('#lfm0').filemanager('file', {prefix: route_prefix});
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