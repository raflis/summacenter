<div class="form-group col-sm-6">
  {{ Form::label('name1', 'Título Tab:') }} <code>*</code>
  {{ Form::text('name1', null, ['class' => 'form-control', 'placeholder' => 'Título Tab', 'required']) }}
</div>

<div class="form-group col-sm-6">
  {{ Form::label('name2', 'Título:') }} <code>*</code>
  {{ Form::text('name2', null, ['class' => 'form-control', 'placeholder' => 'Título', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('detail', 'Detalle:') }} <code>*</code>
  {{ Form::textarea('detail', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Detalle', 'rows' => 3, 'required']) }}
</div>

<div class="form-group col-sm-12">
  {!! Form::label('image','Imagen:',['class'=>'mt-3']) !!} <strong>(500 x 500px)</strong> <code>*</code>
  <div class="input-group">
    <span class="input-group-btn">
        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
        <i class="far fa-image"></i> Elegir
        </a>
    </span>
    {!! Form::text('image',null,['class'=>'form-control','id'=>'thumbnail1', 'required']) !!}
  </div>
  <div id="holder1" style="margin-top:15px;max-height:100px;">
  @if(Route::currentRouteName()=="consultancies.edit")
    <img src="{{ $consultancy->image }}" alt="" style="height:5rem">
  @endif
  </div>
</div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
      <div class="card-header py-3 card-into">
        <h6 class="m-0 font-weight-bold text-primary float-left">Items:</h6>
        <p class="btn btn-success btn-icon-split float-right añadir">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text text-white">Añadir</span>
        </p>
      </div>
      <div class="texto row px-3">
          @if (Route::currentRouteName()=="consultancies.edit")
          @foreach ($consultancy->items as $item)
          <div class="card-body col-md-4">
              <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                <i class="fas fa-trash"></i>
              </a>
              {!! Form::label('items', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(70 x 70px)</strong></small> <code>*</code>
              <div class="input-group">
                  <span class="input-group-btn">
                      <a id="lfm_aboutus_items1{{ $loop->iteration }}" data-input="thumbnail_aboutus_items1{{ $loop->iteration }}" data-preview="holder_aboutus_items1{{ $loop->iteration }}" class="btn btn-primary text-white">
                      <i class="far fa-image"></i> Elegir
                      </a>
                  </span>
                  {!! Form::text('items['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items1'.$loop->iteration,'required']) !!}
              </div>
              <div id="holder_aboutus_items1{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                  <img src="{{ $item['image'] }}" alt="" style="height:5rem">
              </div>
              {!! Form::label('items','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::text('items['.$loop->iteration.'][name]',$item['name'],['class'=>'form-control','required']) !!}
              {!! Form::label('items','Detalle:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::textarea('items['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control', 'rows' => 3, 'required']) !!}
              {!! Form::label('items','Orden:',['class'=>'mt-3']) !!} <code>*</code>
              {!! Form::number('items['.$loop->iteration.'][order]',$item['order'],['class'=>'form-control','required']) !!}
  
              <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
          </div>
          @endforeach
          @endif
      </div>
      
  </div>
</div>

<div class="form-group col-sm-12">
  {{ Form::label('order', 'Orden:') }} <code>*</code>
  {{ Form::number('order', null, ['class' => 'form-control', 'placeholder' => 'Orden', 'required']) }}
  <div class="invalid-feedback">
    Ingrese orden a mostrar
  </div>
</div>

@section('script')

<script>
	$(document).ready(function(){

    @if (Route::currentRouteName()=="consultancies.edit")
      var i={{ count($consultancy->items)+1 }};
    @else
      var i=1;
    @endif
		 
		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
              '<label for="items" class="">Selecciona una imagen:</label> <small><strong>(70 x 70px)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items1'+i+'" data-input="aboutus_items1'+i+'" data-preview="holder_aboutus_items1'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items1'+i+'" name="items['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items1'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                '<label for="items" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="items['+i+'][name]" type="text" required>' +
                '<label for="items" class="mt-3">Detalle:</label> <code>*</code>'+
								'<textarea class="form-control" name="items['+i+'][detail]" placeholder="Detalle" rows="3" required></textarea>' +
								'<label for="items" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="items['+i+'][order]" type="number" required>' +
                
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

  @if (Route::currentRouteName()=="consultancies.edit")
  @foreach ($consultancy->items as $item)
    $('#lfm_aboutus_items1{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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