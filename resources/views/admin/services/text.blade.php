@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Servicios</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Textos
                        </span>
                    </div>
                    {!! Form::model($services, ['route' => ['services.update', 1], 'method' => 'PUT']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('title1', 'Título 1:') }} <code>*</code>
                            {{ Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                          {!! Form::label('image1','Selecciona una imagen 1:',['class'=>'']) !!} <small><strong>(745 x 651px)</strong></small> <code>*</code>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                  <i class="far fa-image"></i> Elegir
                                  </a>
                              </span>
                              {!! Form::text('image1',null,['class'=>'form-control','id'=>'thumbnail','required']) !!}
                          </div>
                          <div id="holder" style="margin-top:15px;max-height:100px;">
                              <img src="{{ $services->image1 }}" alt="" style="height:5rem">
                          </div>
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('description1', 'Descripción 1:') }} <code>*</code>
                          {{ Form::textarea('description1', null, ['class' => 'form-control', 'placeholder' => 'Descripción 1', 'rows' => 3, 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                          {{ Form::label('btn1_text', 'Texto del botón:') }} <code>*</code>
                          {{ Form::text('btn1_text', null, ['class' => 'form-control', 'placeholder' => 'Texto del botón', 'required' => true]) }}
                        </div>
                        <div class="form-group col-sm-12">
                            {{ Form::label('btn1_link', 'Link del botón:') }} <code>*</code>
                            {{ Form::text('btn1_link', null, ['class' => 'form-control', 'placeholder' => 'Link del botón', 'required' => true]) }}
                        </div>

                        <hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">
                        
                        <div class="form-group col-sm-12">
                          {{ Form::label('title2', 'Título 2:') }} <code>*</code>
                          {{ Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required' => true]) }}
                      </div>
                      <div class="form-group col-sm-12">
                        {!! Form::label('image2','Selecciona una imagen 2:',['class'=>'']) !!} <small><strong>(695 x 651px)</strong></small> <code>*</code>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('image2',null,['class'=>'form-control','id'=>'thumbnail2','required']) !!}
                        </div>
                        <div id="holder2" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $services->image2 }}" alt="" style="height:5rem">
                        </div>
                      </div>
                      <div class="form-group col-sm-12">
                        {{ Form::label('description2', 'Descripción 2:') }} <code>*</code>
                        {{ Form::textarea('description2', null, ['class' => 'form-control', 'placeholder' => 'Descripción 2', 'rows' => 3, 'required' => true]) }}
                      </div>
                      
                      <hr class="mx-3 mt-2 mb-4 border-bottom-dark" style="border:1px solid;background:#000;width:100%">

                      <div class="form-group col-sm-12">
                        {{ Form::label('title3', 'Título 3:') }} <code>*</code>
                        {{ Form::text('title3', null, ['class' => 'form-control', 'placeholder' => 'Título 3', 'required' => true]) }}
                    </div>
                    <div class="form-group col-sm-12">
                      {!! Form::label('image3','Selecciona una imagen 3:',['class'=>'']) !!} <small><strong>(718 x 622px)</strong></small> <code>*</code>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
                              <i class="far fa-image"></i> Elegir
                              </a>
                          </span>
                          {!! Form::text('image3',null,['class'=>'form-control','id'=>'thumbnail3','required']) !!}
                      </div>
                      <div id="holder3" style="margin-top:15px;max-height:100px;">
                          <img src="{{ $services->image3 }}" alt="" style="height:5rem">
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      {{ Form::label('description3', 'Descripción 3:') }} <code>*</code>
                      {{ Form::textarea('description3', null, ['class' => 'form-control', 'placeholder' => 'Descripción 3', 'rows' => 3, 'required' => true]) }}
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
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('image', {prefix: route_prefix});
    $('#lfm3').filemanager('image', {prefix: route_prefix});
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