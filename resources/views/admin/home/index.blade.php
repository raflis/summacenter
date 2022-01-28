@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Inicio</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Inicio
                        </span>
                    </div>
                    {!! Form::model($home, ['route' => ['home.update', 1], 'method' => 'PUT']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('info_title', 'Título:') }} <code>*</code>
                            {{ Form::text('info_title', null, ['class' => 'form-control', 'placeholder' => 'Título', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('info_description', 'Descripción:') }} <code>*</code>
                            {{ Form::textarea('info_description', null, ['class' => 'form-control', 'placeholder' => 'Descripción', 'rows' => 3, 'required' => true]) }}
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
                            <div class="texto">
                              @foreach ($home->benefit_items as $item)
                              <div class="card-body">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('benefit_items','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(110 x 110px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_benefit{{ $loop->iteration }}" data-input="thumbnail_benefit{{ $loop->iteration }}" data-preview="holder_benefit{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('benefit_items['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_benefit'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_benefit{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('benefit_items','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('benefit_items['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                {!! Form::label('benefit_items','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('benefit_items['.$loop->index.'][detail]',$item["detail"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Detalles:</h6>
                              <button href="" class="btn btn-success btn-icon-split float-right añadir_detail">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </button>
                            </div>
                            <div class="texto_detail">
                              @foreach ($home->details as $item)
                              <div class="card-body">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_detail">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('details','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(400 x 325px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_detail{{ $loop->iteration }}" data-input="thumbnail_detail{{ $loop->iteration }}" data-preview="holder_detail{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('details['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_detail'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="details{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('details','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('details['.$loop->index.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('details','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('details['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                {!! Form::label('details','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('details['.$loop->index.'][detail]',$item["detail"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                            {{ Form::label('address', 'Dirección:') }} <code>*</code>
                            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('email', 'Email:') }} <code>*</code>
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('whatsapp_text', 'Whatsapp textp:') }} <code>*</code>
                          {{ Form::text('whatsapp_text', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp texto']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('whatsapp1', 'Whatsapp 1:') }} <small><strong>(Este número se usará para el api de whatsapp)</strong></small><code>*</code>
                            {{ Form::text('whatsapp1', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp 1']) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('whatsapp2', 'Whatsapp 2:') }} <code>*</code>
                            {{ Form::text('whatsapp2', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp 2']) }}
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('facebook', 'Facebook:') }} <code>*</code>
                          {{ Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Link de facebook']) }}
                      </div>
                      <div class="form-group col-sm-12">
                        {{ Form::label('instagram', 'Instagram:') }} <code>*</code>
                        {{ Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Link de instagram']) }}
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
		 
		var i={{ count(($home->benefit_items))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="benefit_items" class="">Selecciona una imagen:</label> <small><strong>(110 x 110px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_benefit'+i+'" data-input="thumbnail_benefit'+i+'" data-preview="holder_benefit'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_benefit'+i+'" name="benefit_items['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_benefit'+i+'" style="margin-top:15px;max-height:100px;"></div>' +

								'<label for="benefit_items" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="benefit_items['+i+'][order]" type="number" required>' +
                '<label for="benefit_items" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="benefit_items['+i+'][detail]" placeholder="Detalle" rows="3" id="hola" required></textarea>' +
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_benefit'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto').append(template);
			i++;
		});
	
		$(document).on('click','.eliminar',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var j={{ count(($home->details))+1 }};

		$('.añadir_detail').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_detail">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="details" class="">Selecciona una imagen:</label> <small><strong>(400 x 325px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_detail'+j+'" data-input="thumbnail_detail'+j+'" data-preview="holder_detail'+j+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_detail'+j+'" name="details['+j+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_detail'+j+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="details" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="details['+j+'][name]" type="text" required>' +
								'<label for="details" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="details['+j+'][order]" type="number" required>' +
                '<label for="details" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="details['+j+'][detail]" placeholder="Detalle" rows="3" id="hola" required></textarea>' +
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_detail'+j+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto_detail').append(template);
			j++;
		});
	
		$(document).on('click','.eliminar_detail',function(e){
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
    @foreach ($home->benefit_items as $item)
    $('#lfm_benefit{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($home->details as $item)
    $('#lfm_detail{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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