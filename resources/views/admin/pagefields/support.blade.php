@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Soporte técnico y académico</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Soporte
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('support_button1_name', 'Botón 1 nombre:') }} <code>*</code>
                          {{ Form::text('support_button1_name', null, ['class' => 'form-control', 'placeholder' => 'Botón 1 nombre', 'required']) }}
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('support_button1_telephone', 'Botón 1 número:') }} <code>*</code> <small>(Ej: 51999666333)</small>
                          {{ Form::text('support_button1_telephone', null, ['class' => 'form-control', 'placeholder' => 'Botón 1 número', 'required']) }}
                        </div>

                        <div class="form-group col-sm-6">
                          {{ Form::label('support_button1_text', 'Botón 1 texto:') }} <code>*</code>
                          {{ Form::text('support_button1_text', null, ['class' => 'form-control', 'placeholder' => 'Botón 1 texto', 'required']) }}
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('support_button2_name', 'Botón 2 nombre:') }} <code>*</code>
                          {{ Form::text('support_button2_name', null, ['class' => 'form-control', 'placeholder' => 'Botón 2 nombre', 'required']) }}
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('support_button2_telephone', 'Botón 2 número:') }} <code>*</code> <small>(Ej: 51999666333)</small>
                          {{ Form::text('support_button2_telephone', null, ['class' => 'form-control', 'placeholder' => 'Botón 2 número', 'required']) }}
                        </div>

                        <div class="form-group col-sm-6">
                          {{ Form::label('support_button2_text', 'Botón 2 texto:') }} <code>*</code>
                          {{ Form::text('support_button2_text', null, ['class' => 'form-control', 'placeholder' => 'Botón 2 texto', 'required']) }}
                        </div>

                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Título 1:') }} <code>*</code>
                          {{ Form::textarea('support_text[0][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'rows' => 4, 'required']) }}
                        </div>
                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Título 2:') }} <code>*</code>
                          {{ Form::textarea('support_text[0][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'rows' => 4, 'required']) }}
                        </div>
                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Título 3:') }} <code>*</code>
                          {{ Form::textarea('support_text[0][title3]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 3', 'rows' => 4, 'required']) }}
                        </div>
                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Título 4:') }} <code>*</code>
                          {{ Form::textarea('support_text[0][title4]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 4', 'rows' => 4, 'required']) }}
                        </div>
                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Título 5:') }} <code>*</code>
                          {{ Form::textarea('support_text[0][title5]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 5', 'rows' => 4, 'required']) }}
                        </div>
                        <div class="form-group col-sm-2">
                          {{ Form::label('support_text', 'Id de Youtube:') }} <code>*</code>
                          {{ Form::text('support_text[0][video]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Id de Youtube', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Beneficios 1:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto row px-3">
                              @foreach ($pagefield->support_items1 as $item)
                              @php $var_col = (count($pagefield->support_items1)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('support_items1','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Alto 80px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_support_items1{{ $loop->iteration }}" data-input="thumbnail_support_items1{{ $loop->iteration }}" data-preview="holder_support_items1{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('support_items1['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_support_items1'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_support_items1{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('support_items1','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('support_items1['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('support_items1','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('support_items1['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control','required', 'rows' => 3, 'required']) !!}
                                {!! Form::label('support_items1','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('support_items1['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Beneficios 2:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir2">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto2 row px-3">
                              @foreach ($pagefield->support_items2 as $item)
                              @php $var_col = (count($pagefield->support_items2)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('support_items2','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Alto 80px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_support_items2{{ $loop->iteration }}" data-input="thumbnail_support_items2{{ $loop->iteration }}" data-preview="holder_support_items2{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('support_items2['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_support_items2'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_support_items2{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('support_items2','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('support_items2['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('support_items2','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('support_items2['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control','required', 'rows' => 3, 'required']) !!}
                                {!! Form::label('support_items2','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('support_items2['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
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
		 
		var i={{ count(($pagefield->support_items1))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="support_items1" class="">Selecciona una imagen:</label> <small><strong>(Alto 80px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_support_items1'+i+'" data-input="support_items1'+i+'" data-preview="holder_support_items1'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="support_items1'+i+'" name="support_items1['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_support_items1'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="support_items1" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="support_items1['+i+'][name]" type="text" required>' +
                '<label for="support_items1" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="support_items1['+i+'][detail]" placeholder="Detalle" rows="3" id="hola" required></textarea>' +
								'<label for="support_items1" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="support_items1['+i+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_support_items1'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto').append(template);
			i++;
		});
	
		$(document).on('click','.eliminar',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var j={{ count(($pagefield->support_items2))+1 }};

		$('.añadir2').on('click',function(e){
			e.preventDefault();
			var template2='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="support_items2" class="">Selecciona una imagen:</label> <small><strong>(Alto 80px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_support_items2'+j+'" data-input="support_items2'+j+'" data-preview="holder_support_items2'+j+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="support_items2'+j+'" name="support_items2['+j+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_support_items2'+j+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="support_items2" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="support_items2['+j+'][name]" type="text" required>' +
                '<label for="support_items2" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="support_items2['+j+'][detail]" placeholder="Detalle" rows="3" id="hola" required></textarea>' +
								'<label for="support_items2" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="support_items2['+j+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_support_items2'+j+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto2').append(template2);
			j++;
		});
	
		$(document).on('click','.eliminar2',function(e){
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
    @foreach ($pagefield->support_items1 as $item)
    $('#lfm_support_items1{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->support_items2 as $item)
    $('#lfm_support_items2{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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