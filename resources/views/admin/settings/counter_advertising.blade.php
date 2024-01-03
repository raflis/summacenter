@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Contador</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                          Contador
                        </span>
                    </div>
                    {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('counter_advertising', 'Mostrar Contador:') }} <code>*</code>
                          {{ Form::select('counter_advertising[0]',[0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'placeholder' => 'Seleccione', 'required']) }}
                        </div>
                        
                        <div class="form-group col-sm-12">
                          {!! Form::label('counter_advertising','Fondo:',['class'=>'']) !!} <strong>(1400 x 80px)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('counter_advertising[1]', null, ['class' => 'form-control', 'id' => 'thumbnail0', 'required']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            @if(isset($setting->counter_advertising[1]))
                            <img src="{{ $setting->counter_advertising[1] }}" alt="" style="height:3rem">
                            @endif
                          </div>
                        </div>

                        <div class="form-group col-sm-6">
                          {{ Form::label('counter_advertising', 'Texto:') }} <code>*</code>
                          {{ Form::text('counter_advertising[2]', null, ['class' => 'form-control', 'placeholder' => 'Texto', 'required']) }}
                        </div>

                        <div class="form-group col-sm-6">
                          {{ Form::label('counter_advertising', 'Color Texto:') }} <code>*</code>
                          <div id="bg_comb">
                            {{ Form::color('counter_advertising[3]', null, ['id' => 'bg1_color', 'class' => 'form-control', 'placeholder' => '#FFFFFF', 'required']) }}
                            {{ Form::text('bg1_text', $setting->counter_advertising[3], ['id' => 'bg1_text', 'class' => 'form-control', 'placeholder' => '', 'required']) }}
                          </div>
                        </div>

                        <hr style="width: 100%">

                        <div class="form-group col-sm-4">
                          {{ Form::label('counter_advertising', 'Fecha Inicio de Publicidad:') }} <code>*</code>
                          {{ Form::datetimeLocal('counter_advertising[4]', null, ['class' => 'form-control datepicker', 'placeholder' => 'Texto', 'required']) }}
                        </div>
                        
                        <div class="form-group col-sm-4">
                          {{ Form::label('counter_advertising', 'Fecha Fin de Publicidad:') }} <code>*</code>
                          {{ Form::datetimeLocal('counter_advertising[5]', null, ['class' => 'form-control datepicker', 'placeholder' => 'Texto', 'required']) }}
                        </div>

                        <div class="form-group col-sm-4">
                          {{ Form::label('counter_advertising', 'Color Texto del Contador:') }} <code>*</code>
                          <div id="bg_comb">
                            {{ Form::color('counter_advertising[6]', null, ['id' => 'bg2_color', 'class' => 'form-control', 'placeholder' => '#FFFFFF', 'required']) }}
                            {{ Form::text('bg2_text', $setting->counter_advertising[6], ['id' => 'bg2_text', 'class' => 'form-control', 'placeholder' => '', 'required']) }}
                          </div>
                        </div>

                        <hr style="width: 100%">

                        <div class="form-group col-sm-3">
                          {{ Form::label('counter_advertising', 'Texto Botón:') }} <code>*</code>
                          {{ Form::text('counter_advertising[7]', null, ['class' => 'form-control', 'placeholder' => 'Texto Botón', 'required']) }}
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('counter_advertising', 'Link Botón:') }} <code>*</code>
                          {{ Form::text('counter_advertising[8]', null, ['class' => 'form-control', 'placeholder' => 'Link Botón', 'required']) }}
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('counter_advertising', 'Color de Fondo del Botón:') }} <code>*</code>
                          <div id="bg_comb">
                            {{ Form::color('counter_advertising[9]', null, ['id' => 'bg3_color', 'class' => 'form-control', 'placeholder' => '#FFFFFF', 'required']) }}
                            {{ Form::text('bg3_text', $setting->counter_advertising[9], ['id' => 'bg3_text', 'class' => 'form-control', 'placeholder' => '', 'required']) }}
                          </div>
                        </div>

                        <div class="form-group col-sm-3">
                          {{ Form::label('counter_advertising', 'Color de Texto del Botón:') }} <code>*</code>
                          <div id="bg_comb">
                            {{ Form::color('counter_advertising[10]', null, ['id' => 'bg4_color', 'class' => 'form-control', 'placeholder' => '#FFFFFF', 'required']) }}
                            {{ Form::text('bg4_text', $setting->counter_advertising[10], ['id' => 'bg4_text', 'class' => 'form-control', 'placeholder' => '', 'required']) }}
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

@section('css')
<style>
  .form-control:focus{
    box-shadow: none;
  }
  #bg_comb{
    display: flex;
  }
  #bg1_color, #bg2_color, #bg3_color, #bg4_color{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  #bg1_text, #bg2_text, #bg3_text, #bg4_text{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
</style>
@endsection

@section('script')

<script>
  
$(function(){
  $('#bg1_color').on('change', function(){
    color = $(this).val();
    $('#bg1_text').val(color);
  });
  $('#bg1_text').on('change', function(){
    color = $(this).val();
    $('#bg1_color').val(color);
  });

  $('#bg2_color').on('change', function(){
    color = $(this).val();
    $('#bg2_text').val(color);
  });
  $('#bg2_text').on('change', function(){
    color = $(this).val();
    $('#bg2_color').val(color);
  });

  $('#bg3_color').on('change', function(){
    color = $(this).val();
    $('#bg3_text').val(color);
  });
  $('#bg3_text').on('change', function(){
    color = $(this).val();
    $('#bg3_color').val(color);
  });

  $('#bg4_color').on('change', function(){
    color = $(this).val();
    $('#bg4_text').val(color);
  });
  $('#bg4_text').on('change', function(){
    color = $(this).val();
    $('#bg4_color').val(color);
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