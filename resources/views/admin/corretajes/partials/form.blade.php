<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">

<div class="form-group col-sm-6">
  {!! Form::label('infos','Selecciona una imagen1:',['class'=>'']) !!} <strong>(90 x  90px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_info1" data-input="thumbnail_info1" data-preview="holder_info1" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('infos[0][image]',null,['class'=>'form-control','id'=>'thumbnail_info1']) !!}
  </div>
  <div id="holder_info1" style="margin-top:15px;max-height:100px;background:#999">
  @if(Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->infos['0']['image'] }}" alt="" style="height:5rem">
    @endif
  </div>
</div>
<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre 1:') }} <code>*</code>
  {{ Form::text('infos[0][name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre 1']) }}
</div>

<div class="form-group col-sm-6">
  {!! Form::label('infos','Selecciona una imagen2:',['class'=>'']) !!} <strong>(90 x  90px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_info2" data-input="thumbnail_info2" data-preview="holder_info2" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('infos[1][image]',null,['class'=>'form-control','id'=>'thumbnail_info2']) !!}
  </div>
  <div id="holder_info2" style="margin-top:15px;max-height:100px;background:#999">
  @if(Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->infos['1']['image'] }}" alt="" style="height:5rem">
    @endif
  </div>
</div>
<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre 2:') }} <code>*</code>
  {{ Form::text('infos[1][name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre 2']) }}
</div>

<div class="form-group col-sm-6">
  {!! Form::label('infos','Selecciona una imagen3:',['class'=>'']) !!} <strong>(90 x  90px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_info3" data-input="thumbnail_info3" data-preview="holder_info3" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('infos[2][image]',null,['class'=>'form-control','id'=>'thumbnail_info3']) !!}
  </div>
  <div id="holder_info3" style="margin-top:15px;max-height:100px;background:#999">
  @if(Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->infos['2']['image'] }}" alt="" style="height:5rem">
    @endif
  </div>
</div>
<div class="form-group col-sm-6">
  {{ Form::label('name', 'Nombre 3:') }} <code>*</code>
  {{ Form::text('infos[2][name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre 3']) }}
</div>

<div class="form-group col-sm-4">
  {!! Form::label('infos','Selecciona una imagen4:',['class'=>'']) !!} <strong>(90 x  90px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_info4" data-input="thumbnail_info4" data-preview="holder_info4" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('infos[3][image]',null,['class'=>'form-control','id'=>'thumbnail_info4']) !!}
  </div>
  <div id="holder_info4" style="margin-top:15px;max-height:100px;background:#999">
  @if(Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->infos['3']['image'] }}" alt="" style="height:5rem">
    @endif
  </div>
</div>
<div class="form-group col-sm-4">
  {{ Form::label('name', 'Nombre 4:') }} <code>*</code>
  {{ Form::text('infos[3][name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre 4']) }}
</div>
<div class="form-group col-sm-4">
  {!! Form::label('infos','Selecciona una archivo como link:',['class'=>'']) !!} <code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_link" data-input="thumbnail_link" data-preview="holder_link" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('infos[3][link]',null,['class'=>'form-control','id'=>'thumbnail_link']) !!}
  </div>
</div>

<hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">

<div class="form-group col-sm-6">
  {{ Form::label('description', 'Descripción breve:') }} <code>*</code>
  {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Descripción breve']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('description_index', 'Descripción para carrusel:') }} <code>*</code>
  {{ Form::text('description_index', null, ['class' => 'form-control', 'placeholder' => 'Descripción carrusel']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('district_id', 'Distrito:') }} <code>*</code>
  {{ Form::select('district_id', $districts, null,['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('type_project_id', 'Tipo de Proyecto:') }} <code>*</code>
  {{ Form::select('type_project_id', $typeprojects, null,['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-4">
  {{ Form::label('type_property_id', 'Tipo de Propiedad:') }} <code>*</code>
  {{ Form::select('type_property_id', $typeproperties, null,['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('map', 'Google maps:') }} <code>*</code>
  {{ Form::text('map', null, ['class' => 'form-control', 'placeholder' => 'URL de google maps']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el orden de la publicación']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('status', 'Estado:') }} <code>*</code>
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Publicado
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Borrador
  </label>
</div>

<div class="form-group col-sm-6">
  {!! Form::label('image_index','Selecciona una imagen para carrusel:',['class'=>'mt-3']) !!} <strong>(624 x  429px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('image_index',null,['class'=>'form-control','id'=>'thumbnail']) !!}
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->image_index }}" alt="" style="height:5rem">
    @endif
  </div>
</div>
  
<div class="form-group col-sm-6">
  {!! Form::label('image_form','Selecciona una imagen para formulario:',['class'=>'mt-3']) !!} <strong>(750 x  798px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_car" data-input="thumbnail_car" data-preview="holder_car" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('image_form',null,['class'=>'form-control','id'=>'thumbnail_car']) !!}
  </div>
  <div id="holder_car" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->image_form }}" alt="" style="height:5rem">
    @endif
  </div>
</div>

<hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">

<div class="form-group col-sm-12">
  {{ Form::label('title1', 'Título:') }} <code>*</code>
  {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('descripcion1', 'Descripción:') }} <code>*</code>
  {{ Form::textarea('descripcion1', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-sm-12">
  {!! Form::label('image1','Selecciona una imagen parallax:',['class'=>'mt-3']) !!} <strong>(746 x  621px)</strong><code>*</code>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm_parallax" data-input="thumbnail_parallax" data-preview="holder_parallax" class="btn btn-primary text-white">
          <i class="far fa-image"></i> Elegir
          </a>
      </span>
      {!! Form::text('image1',null,['class'=>'form-control','id'=>'thumbnail_parallax']) !!}
  </div>
  <div id="holder_parallax" style="margin-top:15px;max-height:100px;">
  @if (Route::currentRouteName()=="corretajes.edit")
        <img src="{{ $project->image1 }}" alt="" style="height:5rem">
    @endif
  </div>
</div>

{!! Form::label('enviroments','Ambientes:',['class'=>'form-group col-sm-12 mt-1 mb-4']) !!}

<div class="col-sm-12 row">
  @foreach($enviroments as $enviroment)
  
  <div class="col-lg-3 col-sm-6">
		<label>
      {!! Form::checkbox('enviroments[]', $enviroment->id,null,['class'=>'float-left','id'=>'ambientes_'.$enviroment->id]) !!} <img src="{{ $enviroment->image }}" height="50px" class="float-left mr-2" alt="">
      <span class="">{{ $enviroment->name }}</span> <br>
      <input
      @if (Route::currentRouteName()=="corretajes.edit")
        @if ($project->enviroments()->where('enviroment_id', $enviroment->id)->first()!=null)
        value="{{ $value_id=$project->enviroments()->where('enviroment_id', $enviroment->id)->first()['pivot']['order'] }}"
        @endif
      @else
        value=""
      @endif 
              type="number" 
              name="orden_e[]" 
              placeholder="Orden" 
              class="form-control" 
              @if (Route::currentRouteName()=="corretajes.edit") 
                @if ($project->enviroments()->where('enviroment_id',$enviroment->id)->first()==null)
                disabled
                @endif
              @else
              disabled
              @endif
              id="orden_{{ $enviroment->id }}" 
              style="width: 45%;height:25px">
      <br>
    </label>
  </div>
	@endforeach
</div>

<hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">

@include('admin.corretajes.partials.slider')
@include('admin.corretajes.partials.ubicacion')
@include('admin.corretajes.partials.espacio')
@include('admin.corretajes.partials.plano')

@section('script')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
$(document).ready(function(){
    $("#name, #slug").stringToSlug({
        callback: function(text){
            $('#slug').val(text);
        }
    });

    $('[id*=ambientes]').change(function() {
        id_ambiente=$(this).attr('id').split("_");
        id_ambiente=id_ambiente[1];
        if(this.checked) {
          $('#orden_' + id_ambiente).attr('disabled',false);
          $('#orden_' + id_ambiente).attr('required',true);
        }else
        {
          $('#orden_' + id_ambiente).attr('disabled',true);
          $('#orden_' + id_ambiente).attr('required',false);
        }
    });
});
</script>

<script>
	$(document).ready(function(){
		 
		@if (Route::currentRouteName()=="corretajes.edit")
      var i_slider={{ count($project->sliders)+1 }};
      @else
      var i_slider=1;
      @endif

		$('.añadir_slider').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_slider">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="sliders" class="">Selecciona una imagen para desktop:</label> <small><strong>(1440 x 473px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_slider_desktop'+i_slider+'" data-input="thumbnail_slider_desktop'+i_slider+'" data-preview="holder_slider_desktop'+i_slider+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_slider_desktop'+i_slider+'" name="sliders['+i_slider+'][desktop]" type="text" required>' +
                '</div>' +
                '<div id="holder_slider_desktop'+i_slider+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="sliders" class="">Selecciona una imagen para mobile:</label> <small><strong>(375 x 177px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_slider_mobile'+i_slider+'" data-input="thumbnail_slider_mobile'+i_slider+'" data-preview="holder_slider_mobile'+i_slider+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_slider_mobile'+i_slider+'" name="sliders['+i_slider+'][mobile]" type="text" required>' +
                '</div>' +
                '<div id="holder_slider_mobile'+i_slider+'" style="margin-top:15px;max-height:100px;"></div>' +

								'<label for="sliders" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="sliders['+i_slider+'][order]" type="number" required>' +
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_slider_desktop'+i_slider+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>' +
            '<\script>$(\'#lfm_slider_mobile'+i_slider+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto_slider').append(template);
			i_slider++;
		});
	
		$(document).on('click','.eliminar_slider',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});
	});
</script>

<script>
	$(document).ready(function(){
		 
		@if (Route::currentRouteName()=="corretajes.edit")
      var i_ubicacion={{ count($project->locations)+1 }};
      @else
      var i_ubicacion=1;
      @endif

		$('.añadir_ubicacion').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_ubicacion">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="locations" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="locations['+i_ubicacion+'][name]" type="text" required>' +

                '<label for="locations" class="">Selecciona una imagen icono:</label> <small><strong>(90 x 90px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_ubicacion_icono'+i_ubicacion+'" data-input="thumbnail_ubicacion_icono'+i_ubicacion+'" data-preview="holder_ubicacion_icono'+i_ubicacion+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_ubicacion_icono'+i_ubicacion+'" name="locations['+i_ubicacion+'][icon]" type="text" required>' +
                '</div>' +
                '<div id="holder_ubicacion_icono'+i_ubicacion+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="locations" class="">Selecciona una imagen del mapa:</label> <small><strong>(920 x 498px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_ubicacion_mapa'+i_ubicacion+'" data-input="thumbnail_ubicacion_mapa'+i_ubicacion+'" data-preview="holder_ubicacion_mapa'+i_ubicacion+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_ubicacion_mapa'+i_ubicacion+'" name="locations['+i_ubicacion+'][map]" type="text" required>' +
                '</div>' +
                '<div id="holder_ubicacion_mapa'+i_ubicacion+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="locations" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="locations['+i_ubicacion+'][order]" type="number" required>' +

							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_ubicacion_icono'+i_ubicacion+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>' +
            '<\script>$(\'#lfm_ubicacion_mapa'+i_ubicacion+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto_ubicacion').append(template);
			i_ubicacion++;
		});
	
		$(document).on('click','.eliminar_ubicacion',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});
	});
</script>

<script>
	$(document).ready(function(){
		 
		@if (Route::currentRouteName()=="corretajes.edit")
      var i_espacio={{ count($project->spaces)+1 }};
      @else
      var i_espacio=1;
      @endif

		$('.añadir_espacio').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_espacio">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="spaces" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="spaces['+i_espacio+'][name]" type="text" required>' +

                '<label for="spaces" class="">Selecciona una imagen:</label> <small><strong>(683 x 483px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_espacios'+i_espacio+'" data-input="thumbnail_espacios'+i_espacio+'" data-preview="holder_espacios'+i_espacio+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_espacios'+i_espacio+'" name="spaces['+i_espacio+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_espacios'+i_espacio+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="spaces" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="spaces['+i_espacio+'][order]" type="number" required>' +

							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_espacios'+i_espacio+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
      
			$('.texto_espacio').append(template);
			i_espacio++;
		});
	
		$(document).on('click','.eliminar_espacio',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});
	});
</script>

<script>
	$(document).ready(function(){
		 
		@if (Route::currentRouteName()=="corretajes.edit")
      var i_plano={{ count($project->plans)+1 }};
      @else
      var i_plano=1;
      @endif

		$('.añadir_plano').on('click',function(e){
			e.preventDefault();
			var template='<div class=""><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_espacio">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                '<label for="plans" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="plans['+i_plano+'][name]" type="text" required>' +

                '<label for="plans" class="">Selecciona una imagen:</label> <small><strong>(600 x 369px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_planos'+i_plano+'" data-input="thumbnail_planos'+i_plano+'" data-preview="holder_planos'+i_plano+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="thumbnail_planos'+i_plano+'" name="plans['+i_plano+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_planos'+i_plano+'" style="margin-top:15px;max-height:100px;"></div>' +

                '<label for="plans" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="plans['+i_plano+'][order]" type="number" required>' +

							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_planos'+i_plano+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
      
			$('.texto_plano').append(template);
			i_plano++;
		});
	
		$(document).on('click','.eliminar_plano',function(e){
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
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1100,height=700');
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

  $('#lfm_info1').filemanager('image', {prefix: route_prefix});
  $('#lfm_info2').filemanager('image', {prefix: route_prefix});
  $('#lfm_info3').filemanager('image', {prefix: route_prefix});
  $('#lfm_info4').filemanager('image', {prefix: route_prefix});
  $('#lfm_link').filemanager('file', {prefix: route_prefix});

  $('#lfm').filemanager('image', {prefix: route_prefix});
  $('#lfm_parallax').filemanager('image', {prefix: route_prefix});
  $('#lfm_car').filemanager('image', {prefix: route_prefix});

  $('#lfm_slider_desktop0').filemanager('image', {prefix: route_prefix});
  $('#lfm_slider_mobile0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="corretajes.edit")
  @foreach ($project->sliders as $item)
  $('#lfm_slider_desktop{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  $('#lfm_slider_mobile{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif

  $('#lfm_ubicacion_icono0').filemanager('image', {prefix: route_prefix});
  $('#lfm_ubicacion_mapa0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="corretajes.edit")
  @foreach ($project->locations as $item)
  $('#lfm_ubicacion_icono{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  $('#lfm_ubicacion_mapa{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif

  $('#lfm_espacios0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="corretajes.edit")
  @foreach ($project->spaces as $item)
  $('#lfm_espacios{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif

  $('#lfm_planos0').filemanager('image', {prefix: route_prefix});
  @if (Route::currentRouteName()=="corretajes.edit")
  @foreach ($project->plans as $item)
  $('#lfm_planos{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
  @endforeach
  @endif

</script>

<script>
  var lfm = function(id, type, options) {
    let button = document.getElementById(id);

    button.addEventListener('click', function () {
      var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
      var target_input = document.getElementById(button.getAttribute('data-input'));
      var target_preview = document.getElementById(button.getAttribute('data-preview'));

      window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=1000');
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