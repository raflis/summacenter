<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre completo:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('graduated_career', 'Curso graduado:') }} <code>*</code>
  {{ Form::text('graduated_career', null, ['class' => 'form-control', 'placeholder' => 'Curso graduado', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('career', 'Carrera estudiada:') }} <code>*</code>
  {{ Form::text('career', null, ['class' => 'form-control', 'placeholder' => 'Carrera estudiada', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('stars', 'Estrellas:') }} <code>*</code>
  {{ Form::select('stars', [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5], null, ['class' => 'custom-select', 'placeholder' => '# Estrellas', 'required']) }}
</div>

<div class="form-group col-sm-3">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

<div class="form-group col-sm-6">
{!! Form::label('image','Selecciona una imagen:',['class'=>'mt-3']) !!} <strong>(400 x 396px)</strong> <code>*</code>
<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
</div>
<div id="holder1" style="margin-top:15px;max-height:100px;">
@if (Route::currentRouteName()=="testimonials.edit")
      <img src="{{ $testimonial->image }}" alt="" style="height:5rem">
  @endif
</div>
</div>

<div class="form-group col-sm-6">
  {{ Form::label('comment', 'Comentario:') }} <code>*</code>
  {{ Form::textarea('comment', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Comentario', 'required']) }}
</div>



@section('script')

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
  // $('#lfm').filemanager('file', {prefix: route_prefix});
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