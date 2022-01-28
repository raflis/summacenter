@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-check-double fa-xs"></i> <span>Sliders Inicio</span>
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
                      <h6 class="m-0 font-weight-bold text-primary float-left">Slider:</h6>
                      <button href="" class="btn btn-success btn-icon-split float-right añadir">
                        <span class="icon text-white-50">
                          <i class="fas fa-plus"></i>
                        </span>
                        <span class="text text-white">Añadir</span>
                      </button>
                    </div>
                    {!! Form::model($home, ['route' => ['home.update', 1], 'method' => 'PUT']) !!}
                    <div class="texto pt-4">
                      @foreach ($home->contact_sliders as $item)
                        <div class="card-body">
                          @if ($loop->index >= 1)
                          <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                            <i class="fas fa-trash"></i>
                          </a>
                          @endif
                          {!! Form::label('contact_sliders','Selecciona una imagen para desktop:',['class'=>'']) !!} <small><strong>(1440 x 473px)</strong></small> <code>*</code>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <a id="lfm{{ $loop->iteration }}" data-input="thumbnail{{ $loop->iteration }}" data-preview="holder{{ $loop->iteration }}" class="btn btn-primary text-white">
                                  <i class="far fa-image"></i> Elegir
                                  </a>
                              </span>
                              {!! Form::text('contact_sliders['.$loop->index.'][desktop]',$item['desktop'],['class'=>'form-control','id'=>'thumbnail'.$loop->iteration,'required']) !!}
                          </div>
                          <div id="holder{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                              <img src="{{ $item['desktop'] }}" alt="" style="height:5rem">
                          </div>

                          {!! Form::label('contact_sliders','Selecciona una imagen para mobile:',['class'=>'']) !!} <small><strong>(375 x 177px)</strong></small> <code>*</code>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <a id="lfm_{{ $loop->iteration }}" data-input="thumbnail_{{ $loop->iteration }}" data-preview="holder_{{ $loop->iteration }}" class="btn btn-primary text-white">
                                  <i class="far fa-image"></i> Elegir
                                  </a>
                              </span>
                              {!! Form::text('contact_sliders['.$loop->index.'][mobile]',$item['mobile'],['class'=>'form-control','id'=>'thumbnail_'.$loop->iteration,'required']) !!}
                          </div>
                          <div id="holder_{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                              <img src="{{ $item['mobile'] }}" alt="" style="height:5rem">
                          </div>

                          {!! Form::label('contact_sliders','Link:',['class'=>'mt-3']) !!} <code>*</code>
                          {!! Form::text('contact_sliders['.$loop->index.'][link]',$item["link"],['class'=>'form-control','required']) !!}
                          {!! Form::label('contact_sliders','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                          {!! Form::number('contact_sliders['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
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
		 
		var i={{ count(($home->contact_sliders))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="contact_sliders" class="">Selecciona una imagen para desktop:</label> <small><strong>(1440 x 473px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm'+i+'" data-input="thumbnail'+i+'" data-preview="holder'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail'+i+'" name="contact_sliders['+i+'][desktop]" type="text" required>' +
                '</div>' +
                '<div id="holder'+i+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="contact_sliders" class="">Selecciona una imagen para mobile:</label> <small><strong>(375 x 177px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_'+i+'" data-input="thumbnail_'+i+'" data-preview="holder_'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_'+i+'" name="contact_sliders['+i+'][mobile]" type="text" required>' +
                '</div>' +
                '<div id="holder_'+i+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="contact_sliders" class="mt-3">Link:</label> <code>*</code>' +
								'<input class="form-control" name="contact_sliders['+i+'][link]" type="text" required>' +
								'<label for="contact_sliders" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="contact_sliders['+i+'][order]" type="number" required>' +
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
    @foreach ($home->contact_sliders as $item)
    $('#lfm{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    $('#lfm_{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach
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