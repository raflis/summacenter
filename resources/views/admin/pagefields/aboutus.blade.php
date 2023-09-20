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

                        <div class="form-group col-sm-7">
                          {{ Form::label('aboutus_title', 'Título:') }} <code>*</code>
                          {{ Form::text('aboutus_title', null, ['class' => 'form-control', 'placeholder' => 'Título', 'required']) }}
                        </div>
                        
                        <div class="form-group col-sm-5">
                          {{ Form::label('aboutus_video', 'Id de Youtube:') }} <code>*</code>
                          {{ Form::text('aboutus_video', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Id de Youtube', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('aboutus_description', 'Detalle:') }} <code>*</code>
                          {{ Form::textarea('aboutus_description', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('aboutus_images','Imagen de misión:',['class'=>'mt-0']) !!} <strong>(798 x 1000px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('aboutus_images[0][mission]', null, ['class'=>'form-control','id'=>'thumbnail0', 'required']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->aboutus_images[0]['mission'] }}" alt="" style="height:5rem">
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('aboutus_mission', 'Misión:') }} <code>*</code>
                          {{ Form::textarea('aboutus_mission', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Items Misión:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto row px-3">
                              @foreach ($pagefield->aboutus_items1 as $item)
                              @php $var_col = (count($pagefield->aboutus_items1)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('aboutus_items1','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Ancho 80px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items1{{ $loop->iteration }}" data-input="thumbnail_aboutus_items1{{ $loop->iteration }}" data-preview="holder_aboutus_items1{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('aboutus_items1['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items1'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items1{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('aboutus_items1','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('aboutus_items1['.$loop->index.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('aboutus_items1','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('aboutus_items1['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('aboutus_images','Imagen de visión:',['class'=>'mt-0']) !!} <strong>(798 x 1000px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('aboutus_images[0][vision]', null, ['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
                          </div>
                          <div id="holder1" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->aboutus_images[0]['vision'] }}" alt="" style="height:5rem">
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('aboutus_vision', 'Visión:') }} <code>*</code>
                          {{ Form::textarea('aboutus_vision', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Items Visión:</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir2">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto2 row px-3">
                              @foreach ($pagefield->aboutus_items2 as $item)
                              @php $var_col = (count($pagefield->aboutus_items2)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                @if ($loop->index >= 1)
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">
                                  <i class="fas fa-trash"></i>
                                </a>
                                @endif
                                {!! Form::label('aboutus_items2','Selecciona una imagen:',['class'=>'']) !!} <small><strong>(Alto 80px)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items2{{ $loop->iteration }}" data-input="thumbnail_aboutus_items2{{ $loop->iteration }}" data-preview="holder_aboutus_items2{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('aboutus_items2['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items2'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items2{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('aboutus_items2','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('aboutus_items2['.$loop->index.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('aboutus_items2','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('aboutus_items2['.$loop->index.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('aboutus_images','Imagen de nuestros valores:',['class'=>'mt-0']) !!} <strong>(1000 x 460px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('aboutus_images[0][values]', null, ['class'=>'form-control','id'=>'thumbnail2', 'required']) !!}
                          </div>
                          <div id="holder2" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->aboutus_images[0]['values'] }}" alt="" style="height:5rem">
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
		 
		var i={{ count(($pagefield->aboutus_items1))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="aboutus_items1" class="">Selecciona una imagen:</label> <small><strong>(Ancho 80px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items1'+i+'" data-input="aboutus_items1'+i+'" data-preview="holder_aboutus_items1'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items1'+i+'" name="aboutus_items1['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items1'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="aboutus_items1" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="aboutus_items1['+i+'][name]" type="text" required>' +
								'<label for="aboutus_items1" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="aboutus_items1['+i+'][order]" type="number" required>' +
                
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

    var j={{ count(($pagefield->aboutus_items2))+1 }};

		$('.añadir2').on('click',function(e){
			e.preventDefault();
			var template2='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="aboutus_items2" class="">Selecciona una imagen:</label> <small><strong>(Ancho 80px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items2'+j+'" data-input="aboutus_items2'+j+'" data-preview="holder_aboutus_items2'+j+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items2'+j+'" name="aboutus_items2['+j+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items2'+j+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="aboutus_items2" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="aboutus_items2['+j+'][name]" type="text" required>' +
								'<label for="aboutus_items2" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="aboutus_items2['+j+'][order]" type="number" required>' +
                
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

    @foreach ($pagefield->aboutus_items1 as $item)
    $('#lfm_aboutus_items1{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->aboutus_items2 as $item)
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