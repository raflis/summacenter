<div class="form-group col-sm-2">
  {{ Form::label('no_read1', 'Categoría:') }} <code>*</code>
  {{ Form::text('no_read1', $blog_sub_category->blog_category->name, ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group col-sm-2">
  {{ Form::label('no_read2', 'Sub Categoría:') }} <code>*</code>
  {{ Form::text('no_read2', $blog_sub_category->name, ['class' => 'form-control', 'readonly']) }}
  {!! Form::hidden('blog_sub_category_id', $blog_sub_category->id) !!}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image1','Imagen de blog:', ['class' => '']) !!} <strong>(600 x 355px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image1', null, ['class' => 'form-control', 'id' => 'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName() == "blog_posts.edit")
    <img src="{{ $blog_post->image1 }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image2', 'Imagen para cabecera del contenido:', ['class' => '']) !!} <strong>(800 x 341px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image2', null, ['class' => 'form-control','id' => 'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName() == "blog_posts.edit")
    <img src="{{ $blog_post->image2 }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('summary', 'Resumen:') }} <code>*</code>
  {{ Form::textarea('summary', null, ['class' => 'form-control', 'placeholder' => 'Resumen', 'rows' => 4, 'required', 'maxlength' => 390]) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('body', 'Contenido:') }} <code>*</code>
  {{ Form::textarea('body', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Contenido', 'required']) }}
</div>

<div class="form-group col-sm-12">
	{{ Form::label('blog_tags', 'Etiquetas:') }}
	<div>
	@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('blog_tags[]', $tag->id) }} {{ $tag->name }} <strong style="font-size: 1.1rem;font-weight:bold;color:black"> &nbsp;@if(!$loop->last)|@endif&nbsp; </strong>
		</label>
	@endforeach
	</div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

<div class="form-group col-sm-4">
  {{ Form::label('featured', 'Artículo destacado:') }} <code>*</code>
  {{ Form::select('featured', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('status', 'Estado:') }} <code>*</code>
  <div class="form-check">
    {{ Form::radio('status', 'PUBLISHED', null, ['class' => 'form-check-input', 'id' => 'exampleRadios1', 'required']) }}
    {{ Form::label('exampleRadios1', 'Publicado:', ['class' => 'form-check-label']) }}
  </div>
  <div class="form-check">
    {{ Form::radio('status', 'DRAFT', null, ['class' => 'form-check-input', 'id' => 'exampleRadios2', 'required']) }}
    {{ Form::label('exampleRadios2', 'Borrador:', ['class' => 'form-check-label']) }}
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