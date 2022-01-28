<div class="px-3 col-sm-12 mb-3">
    <div class="card shadow col-sm-12 px-0">
        <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary float-left">Slider:</h6>
        <button href="" class="btn btn-success btn-icon-split float-right añadir_slider">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text text-white">Añadir</span>
        </button>
        </div>
        <div class="texto_slider pt-4">
            @if (Route::currentRouteName()=="projects.create")
            <div class="card-body">
            {!! Form::label('sliders','Selecciona una imagen para desktop:',['class'=>'']) !!} <small><strong>(Subir imágen con un alto de 60px)</strong></small> <code>*</code>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm_slider_desktop0" data-input="thumbnail_slider_desktop0" data-preview="holder_slider_desktop0" class="btn btn-primary text-white">
                    <i class="far fa-image"></i> Elegir
                    </a>
                </span>
                {!! Form::text('sliders[0][desktop]',null,['class'=>'form-control','id'=>'thumbnail_slider_desktop0','required']) !!}
            </div>
            <div id="holder_slider_desktop0" style="margin-top:15px;max-height:100px;">
            </div>

            {!! Form::label('sliders','Selecciona una imagen para mobile:',['class'=>'']) !!} <small><strong>(Subir imágen con un alto de 60px)</strong></small> <code>*</code>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm_slider_mobile0" data-input="thumbnail_slider_mobile0" data-preview="holder_slider_mobile0" class="btn btn-primary text-white">
                    <i class="far fa-image"></i> Elegir
                    </a>
                </span>
                {!! Form::text('sliders[0][mobile]',null,['class'=>'form-control','id'=>'thumbnail_slider_mobile0','required']) !!}
            </div>
            <div id="holder_slider_mobile0" style="margin-top:15px;max-height:100px;">
            </div>

            {!! Form::label('sliders','Orden:',['class'=>'mt-3']) !!} <code>*</code>
            {!! Form::number('sliders[0][order]',null,['class'=>'form-control','required']) !!}
            <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endif
            @if (Route::currentRouteName()=="projects.edit")
            @foreach ($project->sliders as $item)
            <div class="card-body">
                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_slider">
                    <i class="fas fa-trash"></i>
                </a>
                {!! Form::label('sliders','Selecciona una imagen para desktop:',['class'=>'']) !!} <small><strong>(1440 x 473px)</strong></small> <code>*</code>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_slider_desktop{{ $loop->iteration }}" data-input="thumbnail_slider_desktop{{ $loop->iteration }}" data-preview="holder_slider_desktop{{ $loop->iteration }}" class="btn btn-primary text-white">
                        <i class="far fa-image"></i> Elegir
                        </a>
                    </span>
                    {!! Form::text('sliders['.$loop->index.'][desktop]',$item['desktop'],['class'=>'form-control','id'=>'thumbnail_slider_desktop'.$loop->iteration,'required']) !!}
                </div>
                <div id="holder_slider_desktop{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                    <img src="{{ $item['desktop'] }}" alt="" style="height:5rem">
                </div>
    
                {!! Form::label('sliders','Selecciona una imagen para mobile:',['class'=>'']) !!} <small><strong>(375 x 177px)</strong></small> <code>*</code>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_slider_mobile{{ $loop->iteration }}" data-input="thumbnail_slider_mobile{{ $loop->iteration }}" data-preview="holder_slider_mobile{{ $loop->iteration }}" class="btn btn-primary text-white">
                        <i class="far fa-image"></i> Elegir
                        </a>
                    </span>
                    {!! Form::text('sliders['.$loop->index.'][mobile]',$item['mobile'],['class'=>'form-control','id'=>'thumbnail_slider_mobile'.$loop->iteration,'required']) !!}
                </div>
                <div id="holder_slider_mobile{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                    <img src="{{ $item['mobile'] }}" alt="" style="height:5rem">
                </div>
    
                {!! Form::label('sliders','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                {!! Form::number('sliders['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endforeach
            @endif
        </div>
        
    </div>
</div>