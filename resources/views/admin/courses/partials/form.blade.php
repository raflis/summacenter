<div class="form-group col-sm-3">
  {{ Form::label('not_read', 'Área de capacitación:') }} <code>*</code>
  {{ Form::text('not_read', $course_category->course_area->name, ['class' => 'form-control', 'readonly', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('not_read2', 'Categoría:') }} <code>*</code>
  {{ Form::text('not_read2', $course_category->name, ['class' => 'form-control', 'readonly']) }}
  {{ Form::hidden('course_category_id', $course_category->id) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('course_subarea_id', 'Sub Área:') }} <code>*</code>
  {{ Form::select('course_subarea_id', $course_subareas, null, ['class' => 'custom-select', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('worker_id', 'Profesor:') }} <code>*</code>
  @if (Route::currentRouteName()=="courses.edit")
  {{ Form::select('worker_id[]', $workers, $course->workers, ['class' => 'select selectpicker', 'required', 'multiple']) }}
  @else
  {{ Form::select('worker_id[]', $workers, null, ['class' => 'select selectpicker', 'required', 'multiple']) }}
  @endif
  
</div>

<div class="form-group col-sm-4">
  {{ Form::label('name', 'Nombre del curso:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de curso', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('zoho_code', 'Código de Curso ZOHO CRM:') }} <code>*</code>
  {{ Form::text('zoho_code', null, ['class' => 'form-control', 'placeholder' => 'Código de Curso ZOHO CRM', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('title1', 'Título 1:') }} <code>*</code>
  {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('title2', 'Título 2:') }}
  {{ Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('title3', 'Título 3:') }}
  {{ Form::text('title3', null, ['class' => 'form-control', 'placeholder' => 'Título 3']) }}
</div>

<div class="form-group col-sm-3">
  {!! Form::label('title3_image','Título 3 Imagen:',['class'=>'']) !!} <strong>(Alto de 90px)</strong>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm5" data-input="thumbnail5" data-preview="holder5" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('title3_image', null, ['class' => 'form-control', 'id' => 'thumbnail5']) !!}
  </div>
  <div id="holder5" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->title3_image }}" alt="" style="height:2rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-6">
  {{ Form::label('subtitle', 'Sub título:') }} <code>*</code>
  {{ Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Sub título', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('modality', 'Modalidad:') }} <code>*</code>
  {{ Form::select('modality', ['' => 'Selecciona Modalidad Online', 'En vivo' => 'Online en Vivo', 'Pre grabada' => 'Online Pre grabadas'], null, ['class' => 'custom-select', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {!! Form::label('slider','Imagen principal:',['class'=>'mt-3']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('slider', null, ['class' => 'form-control', 'id' => 'thumbnail1', 'required']) !!}
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
    {!! Form::text('image', null, ['class' => 'form-control', 'id' => 'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {!! Form::label('badge', 'Imagen de insignia:',['class' => 'mt-3']) !!} <strong>(300 x 300px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('badge', null, ['class' => 'form-control', 'id' => 'thumbnail3', 'required']) !!}
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
    {!! Form::text('certificate', null, ['class' => 'form-control', 'id' => 'thumbnail4', 'required']) !!}
  </div>
  <div id="holder4" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="courses.edit")
    <img src="{{ $course->certificate }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-3">
  {{ Form::label('start_of_classes', 'Inicio de clases:') }} <code>*</code>
  {{ Form::text('start_of_classes', null, ['class' => 'form-control', 'placeholder' => 'Inicio de clases', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('schedule', 'Horario:') }} <code>*</code>
  {{ Form::text('schedule', null, ['class' => 'form-control', 'placeholder' => 'Horario', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('duration', 'Duración:') }} <code>*</code>
  {{ Form::text('duration', null, ['class' => 'form-control', 'placeholder' => 'Duración', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('price', 'Inversión:') }} <code>*</code>
  {{ Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Inversión', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('download_video', 'Video introductorio:') }} <code>*</code>
  {{ Form::text('download_video', null, ['class' => 'form-control', 'placeholder' => 'Video introductorio', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {!! Form::label('brochure','Brochure:') !!} <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('brochure', null, ['class' => 'form-control', 'id' => 'thumbnail0', 'required']) !!}
  </div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('video_id', 'Video ID:') }} <code>*</code>
  {{ Form::text('video_id', null, ['class' => 'form-control', 'placeholder' => 'Video ID', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('objective', 'Objetivo:') }} <code>*</code>
  {{ Form::textarea('objective', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Objetivo', 'rows' => 3, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('audience', 'Público:') }} <code>*</code>
  {{ Form::textarea('audience', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Público', 'rows' => 3, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('benefits', 'Beneficios:') }} <code>*</code>
  {{ Form::textarea('benefits', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Beneficios', 'rows' => 3, 'required']) }}
  <div class="invalid-feedback">
    Este campo es obligatorio
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden de aparición:', ['class' => 'form-label']) }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
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
  $('#lfm5').filemanager('image', {prefix: route_prefix});
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