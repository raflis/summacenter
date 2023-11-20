@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1>
                    <i class="fas fa-home fa-xs"></i> <span>Insignias Digitales</span>
                </h1>
            </div>
        </div>
        <div class="row show-content mt-3">
            <div class="col-sm-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <span>
                          Insignias Digitales
                        </span>
                    </div>
                    {!! Form::model($pagefield, ['route' => ['pagefields.update', 1], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="card-body row">
                        <div class="col-sm-12">
                            @include('admin.includes.alert')
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_4[1]', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>
             
                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Detalle 1:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[2]', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <hr style="height: 1px;background: #000; width: 97%">

                        <div class="form-group col-sm-12">
                          {{ Form::label('', 'Pestaña:', ['style' => 'font-family: font-bold;font-size: 1rem !important;']) }}
                          {{ Form::text('digital_badges_tab', null, ['class' => 'form-control', 'placeholder' => 'Presentación', 'readonly']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('field_free_4','Imagen 1:', ['class' => 'mt-0']) !!} <strong>(570 x 610px recomendado)</strong> <code>*</code>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm0" data-input="thumbnail0" data-preview="holder0" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('field_free_4[3]', null, ['class'=>'form-control','id'=>'thumbnail0', 'required']) !!}
                          </div>
                          <div id="holder0" style="margin-top:15px;max-height:100px;">
                            @if(isset($pagefield->field_free_4[3]))
                            <img src="{{ $pagefield->field_free_4[3] }}" alt="" style="height:5rem">
                            @endif
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Detalle 1:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[4]', null, ['class' => 'form-control ckeditor', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Nombre Botón:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[5]', null, ['class' => 'form-control', 'rows' => 2, 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Link Botón:') }} <code>*</code>
                          {{ Form::text('field_free_4[6]', null, ['class' => 'form-control', 'placeholder' => 'Link Botón', 'required']) }}
                        </div>

                        <hr style="height: 1px;background: #000; width: 97%">

                        <div class="form-group col-sm-12">
                          {{ Form::label('', 'Pestaña:', ['style' => 'font-family: font-bold;font-size: 1rem !important;']) }}
                          {{ Form::text('digital_badges_tab', null, ['class' => 'form-control', 'placeholder' => 'Propuesta de Valor', 'readonly']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_4[7]', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Propuesta Académica
                              </h6>
                              <p class="btn btn-success btn-icon-split float-right añadir">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto row px-3">
                              @foreach ($pagefield->field_free_5 as $item)
                              @php $var_col = (count($pagefield->field_free_5)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('field_free_5', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(Mismo alto)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items1{{ $loop->iteration }}" data-input="thumbnail_aboutus_items1{{ $loop->iteration }}" data-preview="holder_aboutus_items1{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('field_free_5['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items1'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items1{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('field_free_5','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('field_free_5['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('field_free_5','Detalle:',['class'=>'mt-3']) !!}
                                {!! Form::textarea('field_free_5['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control', 'rows' => 3]) !!}
                                {!! Form::label('field_free_5','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('field_free_5['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 2:') }} <code>*</code>
                          {{ Form::text('field_free_4[8]', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Propuesta Comercial</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir2">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto2 row px-3">
                              @foreach ($pagefield->field_free_6 as $item)
                              @php $var_col = (count($pagefield->field_free_6)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('field_free_6', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(Mismo alto)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items2{{ $loop->iteration }}" data-input="thumbnail_aboutus_items2{{ $loop->iteration }}" data-preview="holder_aboutus_items2{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('field_free_6['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items2'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items2{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;background:#999">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('field_free_6','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('field_free_6['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('field_free_6','Detalle:',['class'=>'mt-3']) !!}
                                {!! Form::textarea('field_free_6['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control', 'rows' => 3]) !!}
                                {!! Form::label('field_free_6','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('field_free_6['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <hr style="height: 1px;background: #000; width: 97%">

                        <div class="form-group col-sm-12">
                          {{ Form::label('', 'Pestaña:', ['style' => 'font-family: font-bold;font-size: 1rem !important;']) }}
                          {{ Form::text('digital_badges_tab', null, ['class' => 'form-control', 'placeholder' => 'Educación Corporativa', 'readonly']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_4[9]', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Detalle:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[10]', null, ['class' => 'form-control ckeditor', 'rows' => 2, 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Items</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir3">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto3 row px-3">
                              @foreach ($pagefield->field_free_7 as $item)
                              @php $var_col = (count($pagefield->field_free_7)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar3">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('field_free_7','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('field_free_7['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('field_free_7','Detalle:',['class'=>'mt-3']) !!}
                                {!! Form::number('field_free_7['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 2:') }} <code>*</code>
                          {{ Form::text('field_free_4[11]', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {!! Form::label('field_free_4','Imagen:', ['class' => 'mt-0']) !!} <strong>(1090 x 700px recomendado)</strong> <code>*</code>
                          @php $vari = '1'; @endphp
                          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm{{ $vari }}" data-input="thumbnail{{ $vari }}" data-preview="holder{{ $vari }}" class="btn btn-primary text-white">
                                <i class="far fa-image"></i> Elegir
                                </a>
                            </span>
                            {!! Form::text('field_free_4[12]', null, ['class' => 'form-control','id' => 'thumbnail'.$vari, 'required']) !!}
                          </div>
                          <div id="holder{{ $vari }}" style="margin-top:15px;max-height:100px;">
                            @if(isset($pagefield->field_free_4[12]))
                            <img src="{{ $pagefield->field_free_4[12] }}" alt="" style="height:5rem">
                            @endif
                          </div>
                        </div>

                        <hr style="height: 1px;background: #000; width: 97%">

                        <div class="form-group col-sm-12">
                          {{ Form::label('', 'Pestaña:', ['style' => 'font-family: font-bold;font-size: 1rem !important;']) }}
                          {{ Form::text('digital_badges_tab', null, ['class' => 'form-control', 'placeholder' => 'Portafolio', 'readonly']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_4[13]', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 2:') }} <code>*</code>
                          {{ Form::text('field_free_4[14]', null, ['class' => 'form-control', 'placeholder' => 'Título 2', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Detalle:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[15]', null, ['class' => 'form-control ckeditor', 'rows' => 2, 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Nombre Botón:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[16]', null, ['class' => 'form-control', 'rows' => 2, 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Link Botón:') }} <code>*</code>
                          {{ Form::text('field_free_4[17]', null, ['class' => 'form-control', 'placeholder' => 'Link Botón', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 2:') }} <code>*</code>
                          {{ Form::text('field_free_4[20]', null, ['class' => 'form-control', 'placeholder' => 'Título 20', 'required']) }}
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Empresas</h6>
                              <p class="btn btn-success btn-icon-split float-right añadir4">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto4 row px-3">
                              @foreach ($pagefield->field_free_8 as $item)
                              @php $var_col = (count($pagefield->field_free_8)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar4">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('field_free_8', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(Ancho 145px recomendado)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items4{{ $loop->iteration }}" data-input="thumbnail_aboutus_items4{{ $loop->iteration }}" data-preview="holder_aboutus_items4{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('field_free_8['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items4'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items4{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('field_free_8','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('field_free_8['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <div class="px-3 col-sm-12 mb-3">
                          <div class="card shadow col-sm-12 px-0">
                            <div class="card-header py-3 card-into">
                              <h6 class="m-0 font-weight-bold text-primary float-left">Items
                              </h6>
                              <p class="btn btn-success btn-icon-split float-right añadir5">
                                <span class="icon text-white-50">
                                  <i class="fas fa-plus"></i>
                                </span>
                                <span class="text text-white">Añadir</span>
                              </p>
                            </div>
                            <div class="texto5 row px-3">
                              @foreach ($pagefield->field_free_9 as $item)
                              @php $var_col = (count($pagefield->field_free_9)>1)?'col-md-4':'col-md-12'; @endphp
                              <div class="card-body {{ $var_col }}">
                                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar5">
                                  <i class="fas fa-trash"></i>
                                </a>
                                {!! Form::label('field_free_9', 'Selecciona una imagen:', ['class' => '']) !!} <small><strong>(Mismo alto)</strong></small> <code>*</code>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm_aboutus_items5{{ $loop->iteration }}" data-input="thumbnail_aboutus_items5{{ $loop->iteration }}" data-preview="holder_aboutus_items5{{ $loop->iteration }}" class="btn btn-primary text-white">
                                        <i class="far fa-image"></i> Elegir
                                        </a>
                                    </span>
                                    {!! Form::text('field_free_9['.$loop->iteration.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_aboutus_items5'.$loop->iteration,'required']) !!}
                                </div>
                                <div id="holder_aboutus_items5{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;;background:#999">
                                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                                </div>
                                {!! Form::label('field_free_9','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::text('field_free_9['.$loop->iteration.'][name]',$item["name"],['class'=>'form-control','required']) !!}
                                {!! Form::label('field_free_9','Detalle:',['class'=>'mt-3']) !!}
                                {!! Form::textarea('field_free_9['.$loop->iteration.'][detail]',$item["detail"],['class'=>'form-control', 'rows' => 3, 'required']) !!}
                                {!! Form::label('field_free_9','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                                {!! Form::number('field_free_9['.$loop->iteration.'][order]',$item["order"],['class'=>'form-control','required']) !!}
                                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <hr style="height: 1px;background: #000; width: 97%">

                        <div class="form-group col-sm-12">
                          {{ Form::label('', 'Pestaña:', ['style' => 'font-family: font-bold;font-size: 1rem !important;']) }}
                          {{ Form::text('digital_badges_tab', null, ['class' => 'form-control', 'placeholder' => 'Contacto', 'readonly']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Título 1:') }} <code>*</code>
                          {{ Form::text('field_free_4[18]', null, ['class' => 'form-control', 'placeholder' => 'Título 1', 'required']) }}
                        </div>

                        <div class="form-group col-sm-12">
                          {{ Form::label('field_free_4', 'Detalle:') }} <code>*</code>
                          {{ Form::textarea('field_free_4[19]', null, ['class' => 'form-control ckeditor', 'rows' => 2, 'required']) }}
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
		 
		var i={{ count(($pagefield->field_free_5))+1 }};

		$('.añadir').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="field_free_5" class="">Selecciona una imagen:</label> <small><strong>(Mismo alto)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items1'+i+'" data-input="aboutus_items1'+i+'" data-preview="holder_aboutus_items1'+i+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items1'+i+'" name="field_free_5['+i+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items1'+i+'" style="margin-top:15px;max-height:100px;"></div>' +
                
                '<label for="field_free_5" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_5['+i+'][name]" type="text" required>' +
                '<label for="field_free_5" class="mt-3">Detalle:</label>'+
								'<textarea class="form-control" name="field_free_5['+i+'][detail]" placeholder="Detalle" rows="3"></textarea>' +
								'<label for="field_free_5" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_5['+i+'][order]" type="number" required>' +
                
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

    var j={{ count(($pagefield->field_free_6))+1 }};

		$('.añadir2').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar2">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="field_free_6" class="">Selecciona una imagen:</label> <small><strong>(Mismo alto)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items2'+j+'" data-input="aboutus_items2'+j+'" data-preview="holder_aboutus_items2'+j+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items2'+j+'" name="field_free_6['+j+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items2'+j+'" style="margin-top:15px;max-height:100px;background:#999"></div>' +
                
                '<label for="field_free_6" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_6['+j+'][name]" type="text" required>' +
                '<label for="field_free_6" class="mt-3">Detalle:</label>'+
								'<textarea class="form-control" name="field_free_6['+j+'][detail]" placeholder="Detalle" rows="3"></textarea>' +
								'<label for="field_free_6" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_6['+j+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_aboutus_items2'+j+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto2').append(template);
			j++;
		});
	
		$(document).on('click','.eliminar2',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var k={{ count(($pagefield->field_free_7))+1 }};

		$('.añadir3').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar3">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +
                
                '<label for="field_free_7" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_7['+k+'][name]" type="text" required>' +
								'<label for="field_free_7" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_7['+k+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>';
	
			$('.texto3').append(template);
			k++;
		});
	
		$(document).on('click','.eliminar3',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var l={{ count(($pagefield->field_free_8))+1 }};

		$('.añadir4').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar4">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="field_free_8" class="">Selecciona una imagen:</label> <small><strong>(Ancho 145px recomendado)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items4'+l+'" data-input="aboutus_items4'+l+'" data-preview="holder_aboutus_items4'+l+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items4'+l+'" name="field_free_8['+l+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items4'+l+'" style="margin-top:15px;max-height:100px;"></div>' +
                
								'<label for="field_free_8" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_8['+l+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_aboutus_items4'+l+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto4').append(template);
			l++;
		});
	
		$(document).on('click','.eliminar4',function(e){
			e.preventDefault();
			
			$(this).parent('.card-body').remove();
		});

    var m={{ count(($pagefield->field_free_9))+1 }};

		$('.añadir5').on('click',function(e){
			e.preventDefault();
			var template='<div class="col-md-4"><div class="card-body pt-0">' +
							'<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar5">' +
								'<i class="fas fa-trash"></i>' +
							'</a>' +

                '<label for="field_free_9" class="">Selecciona una imagen:</label> <small><strong>(Mismo alto)</strong></small> <code>*</code>' +
                '<div class="input-group">' +
                  '<span class="input-group-btn">' +
                      '<a id="lfm_aboutus_items5'+m+'" data-input="aboutus_items5'+m+'" data-preview="holder_aboutus_items5'+m+'" class="btn btn-primary text-white">' +
                      '<i class="far fa-image"></i> Elegir' +
                      '</a>' +
                  '</span>' +
                  '<input class="form-control" id="aboutus_items5'+m+'" name="field_free_9['+m+'][image]" type="text" required>' +
                '</div>' +
                '<div id="holder_aboutus_items5'+m+'" style="margin-top:15px;max-height:100px;background:#999"></div>' +
                
                '<label for="field_free_9" class="mt-3">Nombre:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_9['+m+'][name]" type="text" required>' +
                '<label for="field_free_9" class="mt-3">Detalle:</label>'+
								'<textarea class="form-control" name="field_free_9['+m+'][detail]" placeholder="Detalle" rows="3" required></textarea>' +
								'<label for="field_free_9" class="mt-3">Orden:</label> <code>*</code>' +
								'<input class="form-control" name="field_free_9['+m+'][order]" type="number" required>' +
                
							'<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
						'</div></div>' +
            '<\script>$(\'#lfm_aboutus_items5'+m+'\').filemanager(\'image\', {prefix: route_prefix});<\/script>';
	
			$('.texto5').append(template);
			m++;
		});
	
		$(document).on('click','.eliminar5',function(e){
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
    $('#lfm3').filemanager('image', {prefix: route_prefix});
    $('#lfm4').filemanager('file', {prefix: route_prefix});

    @foreach ($pagefield->field_free_5 as $item)
    $('#lfm_aboutus_items1{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->field_free_6 as $item)
    $('#lfm_aboutus_items2{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->field_free_8 as $item)
    $('#lfm_aboutus_items4{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
    @endforeach

    @foreach ($pagefield->field_free_9 as $item)
    $('#lfm_aboutus_items5{{ $loop->iteration }}').filemanager('image', {prefix: route_prefix});
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