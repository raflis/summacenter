@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Modelo Educativo</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                          Modelo Educativo
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_title1', 'Título 1:') }} <code>*</code>
                          {{ Form::text('educational_model_title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>
             
                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_text1', 'Detalle 1:') }} <code>*</code>
                          {{ Form::textarea('educational_model_text1', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('educational_model_image1','Imagen 1:', ['class' => 'mt-0']) !!} <strong>(700 x 700px recomendado)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('educational_model_image1', null, ['class'=>'form-control','id'=>'thumbnail0', 'required']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->educational_model_image1 }}" alt="" style="height:5rem">
                          </div>
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Aprendizaje:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto row px-3">
                              @foreach ($pagefield->educational_model_learning as $item)
                              @php $var_col = (count($pagefield->educational_model_learning)>1)?'col-md-6':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('educational_model_learning', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(Alto 80px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items1{{ $loop->iteration }}" data-input="thumbnail_aboutus_items1{{ $loop->iteration }}" data-preview="holder_aboutus_items1{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('educational_model_learning['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items1'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items1{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('educational_model_learning','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('educational_model_learning['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('educational_model_learning','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('educational_model_learning['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control', 'rows' => 4, 'required']) !!}
                                {!! Form::label('educational_model_learning','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('educational_model_learning['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_text2', 'Detalle 2:') }} <code>*</code>
                          {{ Form::textarea('educational_model_text2', null, ['class' => 'form-control', 'rows' => 4, 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Modelos educativos:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir2">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto2 row px-3">
                              @foreach ($pagefield->educational_model_models as $item)
                              @php $var_col = (count($pagefield->educational_model_models)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('educational_model_models','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Alto 300px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items2{{ $loop->iteration }}" data-input="thumbnail_aboutus_items2{{ $loop->iteration }}" data-preview="holder_aboutus_items2{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('educational_model_models['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items2'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items2{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('educational_model_models','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('educational_model_models['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('educational_model_models','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::textarea('educational_model_models['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control','rows'=>4,'required']) !!}
                                {!! Form::label('educational_model_models','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('educational_model_models['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Caracteristicas:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir3">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto3 row px-3">
                              @foreach ($pagefield->educational_model_items as $item)
                              @php $var_col = (count($pagefield->educational_model_items)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar3">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('educational_model_items','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('educational_model_items['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('educational_model_items','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('educational_model_items['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_title2', 'Título 2:') }} <code>*</code>
                          {{ Form::text('educational_model_title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_title21', 'Sub Título 1:') }} <code>*</code>
                          {{ Form::text('educational_model_title21', null, ['class' => 'form-control', 'placeholder' => 'Sub Título 1', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_text3', 'Detalle :') }} <code>*</code>
                          {{ Form::textarea('educational_model_text3', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_title22', 'Sub Título 2:') }} <code>*</code>
                          {{ Form::text('educational_model_title22', null, ['class' => 'form-control', 'placeholder' => 'Sub Título 1', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_text4', 'Detalle :') }} <code>*</code>
                          {{ Form::textarea('educational_model_text4', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('educational_model_image2','Imagen 2:', ['class' => 'mt-0']) !!} <strong>(350 x 700px recomendado)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('educational_model_image2', null, ['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
                          </div>
                          <div id="holder1" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->educational_model_image2 }}" alt="" style="height:5rem">
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('educational_model_title3', 'Título 3:') }} <code>*</code>
                          {{ Form::text('educational_model_title3', null, ['class' => 'form-control', 'placeholder' => 'Título 3', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('educational_model_image3','Imagen 3:', ['class' => 'mt-0']) !!} <strong>(950x 820px recomendado)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('educational_model_image3', null, ['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
                          </div>
                          <div id="holder2" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->educational_model_image3 }}" alt="" style="height:5rem">
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
		 
		var i={{ count(($pagefield->educational_model_learning))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-6"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="educational_model_learning" class="">Selecciona una imagen:</label> <small><strong>(150 x 150px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items1'+i+'" data-input="aboutus_items1'+i+'" data-preview="holder_aboutus_items1'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items1'+i+'" name="educational_model_learning['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items1'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="educational_model_learning" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="educational_model_learning['+i+'][name]" type="text" required>' +
                '<label for="educational_model_learning" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="educational_model_learning['+i+'][detail]" rows=4 required></textarea>' +
								'<label for="educational_model_learning" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="educational_model_learning['+i+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_aboutus_items1'+i+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto').append(template);
			i++;
		});
	
		$(document).on('click','.eliminar',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var j={{ count(($pagefield->educational_model_models))+1 }};

		$('.añadir2').on('click',function(e){
			e.preventDefault();
			var template2='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="educational_model_models" class="">Selecciona una imagen:</label> <small><strong>(Ancho 50px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items2'+j+'" data-input="aboutus_items2'+j+'" data-preview="holder_aboutus_items2'+j+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items2'+j+'" name="educational_model_models['+j+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items2'+j+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="educational_model_models" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="educational_model_models['+j+'][name]" type="text" required>' +
                '<label for="educational_model_models" class="mt-3">Detalle:</label> <code>*</code>' +
								'<textarea class="form-control" name="educational_model_models['+j+'][detail]" rows=4 required></textarea>' +
								'<label for="educational_model_models" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="educational_model_models['+j+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_aboutus_items2'+j+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto2').append(template2);
			j++;
		});
	
		$(document).on('click','.eliminar2',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var k={{ count(($pagefield->educational_model_items))+1 }};

    $('.añadir3').on('click',function(e){
      e.preventDefault();
      var template3='<div class="col-md-4"><div class="card-body pt-0">' +
              '<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar3">' +
                '<i class="fas fa-trash"></i>' +
              '</a>' +
                '<label for="educational_model_items" class="mt-3">Nombre:</label> <code>*</code>' +
                '<input class="form-control" name="educational_model_items['+k+'][name]" type="text" required>' +
                '<label for="educational_model_items" class="mt-3">Orden:</label> <code>*</code>' +
                '<input class="form-control" name="educational_model_items['+k+'][order]" type="number" required>' +
                
              '<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
            '</div></div>';

      $('.texto3').append(template3);
      k++;
    });

    $(document).on('click','.eliminar3',function(e){
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
    $('#lfm1').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('image', {prefix: route_prefix});

    @foreach ($pagefield->educational_model_learning as $item)
    $('#lfm_aboutus_items1{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->educational_model_models as $item)
    $('#lfm_aboutus_items2{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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