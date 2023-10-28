<div class="form-group col-sm-12 m-0">
  <label class="m-0"><strong>SEO</strong></label>
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Título de la página:') }} <code>*</code>
    {{ Form::text('meta[1]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Keywords de la página:') }} <code>*</code>
    {{ Form::text('meta[2]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Description de la página:') }} <code>*</code>
    {{ Form::text('meta[3]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <hr style="width: 97%">

<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre del área:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del área', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

<div class="form-group col-sm-4">
  {!! Form::label('icon','Selecciona un ícono:',['class'=>'mt-3']) !!} <strong>(58 x 57px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('icon', null, ['class' => 'form-control', 'id' => 'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="course_areas.edit")
    <img src="{{ $course_area->icon }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-4">
  {!! Form::label('image','Selecciona una imagen:',['class'=>'mt-3']) !!} <strong>(495 x 303px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="course_areas.edit")
    <img src="{{ $course_area->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-4">
  {!! Form::label('badge','Selecciona insignia:',['class'=>'mt-3']) !!} <strong>(349 x 350px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('badge',null,['class'=>'form-control','id'=>'thumbnail3', 'required']) !!}
  </div>
  <div id="holder3" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="course_areas.edit")
    <img src="{{ $course_area->badge }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('text', 'Texto:') }} <code>*</code>
  {{ Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Ingrese texto', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
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