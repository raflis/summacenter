@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Egresados SUMMA</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Egresados
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">

                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-4">
                          {{ Form::label('graduates_titles', 'Título:') }} <code>*</code>
                          {{ Form::text('graduates_titles[0][title]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título', 'required']) }}
                        </div>

                        <div class="form-group col-sm-4">
                          {{ Form::label('graduates_titles', 'Detalle:') }} <code>*</code>
                          {{ Form::textarea('graduates_titles[0][detail]', null, ['class' => 'form-control', 'placeholder' => 'Detalle', 'rows' => 3, 'required']) }}
                        </div>

                        <div class="form-group col-sm-4">
                          {!! Form::label('graduates_images','Image de fondo:',['class'=>'mt-0']) !!} <strong>(1200 x 436px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('graduates_images[0][desktop]', null, ['class'=>'form-control','id'=>'thumbnail0', 'required']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->graduates_images[0]['desktop'] }}" alt="" style="height:5rem">
                          </div>
                        </div>

                        <div class="form-group col-sm-4">
                          {{ Form::label('graduates_titles', 'Nombre del botón:') }} <code>*</code>
                          {{ Form::textarea('graduates_titles[0][button_name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre del botón', 'rows' => 2, 'required']) }}
                        </div>

                        <div class="form-group col-sm-4">
                          {{ Form::label('graduates_titles', 'Link del botón:') }} <code>*</code>
                          {{ Form::text('graduates_titles[0][button_link]', null, ['class' => 'form-control', 'placeholder' => 'Link del botón', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Beneficios:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto row px-3">
                              @foreach ($pagefield->graduates_items as $item)
                              @php $var_col = (count($pagefield->graduates_items)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('graduates_items','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Ancho 120px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_graduates_items{{ $loop->iteration }}" data-input="thumbnail_graduates_items{{ $loop->iteration }}" data-preview="holder_graduates_items{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('graduates_items['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_graduates_items'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_graduates_items{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('graduates_items','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('graduates_items['.$loop->index.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('graduates_items','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('graduates_items['.$loop->index.'][detail]',$item["detail"],['class'=>'form-control','required', 'rows' => 3, 'required']) !!}
                                {!! Form::label('graduates_items','Link:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('graduates_items['.$loop->index.'][link]',$item["link"],['class'=>'form-control','required']) !!}
                                {!! Form::label('graduates_items','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('graduates_items['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

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
		 
		var i={{ count(($pagefield->graduates_items))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="graduates_items" class="">Selecciona una imagen:</label> <small><strong>(Ancho 120px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_graduates_items'+i+'" data-input="graduates_items'+i+'" data-preview="holder_graduates_items'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="graduates_items'+i+'" name="graduates_items['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_graduates_items'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="graduates_items" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="graduates_items['+i+'][name]" type="text" required>' +
                '<label for="graduates_items" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="graduates_items['+i+'][detail]" placeholder="Detalle" rows="3" id="hola" required></textarea>' +
                '<label for="graduates_items" class="mt-3">Link:</label> <code>*</code>' +
								'<input class="form-control" name="graduates_items['+i+'][link]" type="text" required>' +
								'<label for="graduates_items" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="graduates_items['+i+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_graduates_items'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
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
    $('#lfm0').filemanager('image', {prefix: route_prefix});

    @foreach ($pagefield->graduates_items as $item)
    $('#lfm_graduates_items{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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