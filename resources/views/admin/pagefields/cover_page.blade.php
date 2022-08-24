@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Portadas & títulos</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                            Portadas
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Equipo</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[0][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[0][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[0][image]', null, ['class' => 'form-control', 'id' => 'thumbnail0']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['0']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Distinciones</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[1][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[1][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[1][image]', null, ['class' => 'form-control', 'id' => 'thumbnail1']) !!}
                          </div>
                          <div id="holder1" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['1']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Nuestras Certificaciones</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[2][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[2][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[2][image]', null, ['class' => 'form-control', 'id' => 'thumbnail2']) !!}
                          </div>
                          <div id="holder2" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['2']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Insignias Digitales</p>
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[3][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[3][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 3:') }} <code>*</code>
                          {{ Form::text('cover_pages[3][title3]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 3', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[3][image]', null, ['class' => 'form-control', 'id' => 'thumbnail3']) !!}
                          </div>
                          <div id="holder3" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['3']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Colección de Insignias</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[4][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[4][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm4" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[4][image]', null, ['class' => 'form-control', 'id' => 'thumbnail4']) !!}
                          </div>
                          <div id="holder4" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['4']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Grupo de Excelencia Académica</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[5][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[5][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm5" data-input="thumbnail5" data-preview="holder5" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[5][image]', null, ['class' => 'form-control', 'id' => 'thumbnail5']) !!}
                          </div>
                          <div id="holder5" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['5']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Preguntas Frecuentes</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[6][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[6][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm6" data-input="thumbnail6" data-preview="holder6" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[6][image]', null, ['class' => 'form-control', 'id' => 'thumbnail6']) !!}
                          </div>
                          <div id="holder6" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['6']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Asesoría Especializada</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[7][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[7][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm7" data-input="thumbnail7" data-preview="holder7" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[7][image]', null, ['class' => 'form-control', 'id' => 'thumbnail7']) !!}
                          </div>
                          <div id="holder7" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['7']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Capacitaciones Corporativas</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[8][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[8][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm8" data-input="thumbnail8" data-preview="holder8" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[8][image]', null, ['class' => 'form-control', 'id' => 'thumbnail8']) !!}
                          </div>
                          <div id="holder8" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['8']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Egresados</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[9][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[9][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm9" data-input="thumbnail9" data-preview="holder9" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[9][image]', null, ['class' => 'form-control', 'id' => 'thumbnail9']) !!}
                          </div>
                          <div id="holder9" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['9']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Soporte</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[10][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[10][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm10" data-input="thumbnail10" data-preview="holder10" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[10][image]', null, ['class' => 'form-control', 'id' => 'thumbnail10']) !!}
                          </div>
                          <div id="holder10" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['10']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Manual del Usuario</p>
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[11][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[11][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-4">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm11" data-input="thumbnail11" data-preview="holder11" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[11][image]', null, ['class' => 'form-control', 'id' => 'thumbnail11']) !!}
                          </div>
                          <div id="holder11" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['11']['image'] }}" alt="" style="height:3rem">
                          </div>
                        </div>

                        <div class="form-group col-md-12 m-0">
                          <p class="medium m-0 font-bold">Blog</p>
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 1:') }} <code>*</code>
                          {{ Form::text('cover_pages[12][title1]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 1', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 2:') }} <code>*</code>
                          {{ Form::text('cover_pages[12][title2]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 2', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {{ Form::label('cover_pages', 'Título 3:') }} <code>*</code>
                          {{ Form::text('cover_pages[12][title3]', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título 3', 'required']) }}
                        </div>
                        <div class="form-group col-sm-3">
                          {!! Form::label('cover_pages','Image de fondo:',['class'=>'']) !!} <strong>(1750 x 866px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm12" data-input="thumbnail12" data-preview="holder12" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('cover_pages[12][image]', null, ['class' => 'form-control', 'id' => 'thumbnail12']) !!}
                          </div>
                          <div id="holder12" style="margin-top:15px;max-height:100px;">
                            <img src="{{ $pagefield->cover_pages['12']['image'] }}" alt="" style="height:3rem">
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
    $('#lfm3').filemanager('image', {prefix: route_prefix});
    $('#lfm4').filemanager('image', {prefix: route_prefix});
    $('#lfm5').filemanager('image', {prefix: route_prefix});
    $('#lfm6').filemanager('image', {prefix: route_prefix});
    $('#lfm7').filemanager('image', {prefix: route_prefix});
    $('#lfm8').filemanager('image', {prefix: route_prefix});
    $('#lfm9').filemanager('image', {prefix: route_prefix});
    $('#lfm10').filemanager('image', {prefix: route_prefix});
    $('#lfm11').filemanager('image', {prefix: route_prefix});
    $('#lfm12').filemanager('image', {prefix: route_prefix});

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