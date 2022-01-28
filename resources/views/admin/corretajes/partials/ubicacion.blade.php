<div class="px-3 col-sm-12 mb-3">
    <div class="card shadow col-sm-12 px-0">
        <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary float-left">Ubicaciones:</h6>
        <button href="" class="btn btn-success btn-icon-split float-right añadir_ubicacion">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text text-white">Añadir</span>
        </button>
        </div>
        <div class="texto_ubicacion pt-4">
            @if (Route::currentRouteName()=="corretajes.create")
            <div class="card-body">
            {!! Form::label('locations','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
            {!! Form::text('locations[0][name]',null,['class'=>'form-control','required']) !!}

            {!! Form::label('locations','Selecciona una imagen icono',['class'=>'']) !!} <small><strong>(Subir imágen con un alto de 60px)</strong></small> <code>*</code>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm_ubicacion_icono0" data-input="thumbnail_ubicacion_icono0" data-preview="holder_ubicacion_icono0" class="btn btn-primary text-white">
                    <i class="far fa-image"></i> Elegir
                    </a>
                </span>
                {!! Form::text('locations[0][icon]',null,['class'=>'form-control','id'=>'thumbnail_ubicacion_icono0','required']) !!}
            </div>
            <div id="holder_ubicacion_icono0" style="margin-top:15px;max-height:100px;">
            </div>

            {!! Form::label('locations','Selecciona una imagen del mapa:',['class'=>'']) !!} <small><strong>(Subir imágen con un alto de 60px)</strong></small> <code>*</code>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm_ubicacion_mapa0" data-input="thumbnail_ubicacion_mapa0" data-preview="holder_ubicacion_mapa0" class="btn btn-primary text-white">
                    <i class="far fa-image"></i> Elegir
                    </a>
                </span>
                {!! Form::text('locations[0][map]',null,['class'=>'form-control','id'=>'thumbnail_ubicacion_mapa0','required']) !!}
            </div>
            <div id="holder_ubicacion_mapa0" style="margin-top:15px;max-height:100px;">
            </div>
            {!! Form::label('locations','Orden:',['class'=>'mt-3']) !!} <code>*</code>
            {!! Form::number('locations[0][order]',null,['class'=>'form-control','required']) !!}
            <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endif
            @if (Route::currentRouteName()=="corretajes.edit")
            @foreach ($project->locations as $item)
            <div class="card-body">
                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_ubicacion">
                    <i class="fas fa-trash"></i>
                </a>
                {!! Form::label('locations','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                {!! Form::text('locations['.$loop->index.'][name]',$item['name'],['class'=>'form-control','required']) !!}
    
                {!! Form::label('locations','Selecciona una imagen icono',['class'=>'']) !!} <small><strong>(90 x 90px)</strong></small> <code>*</code>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_ubicacion_icono{{ $loop->iteration }}" data-input="thumbnail_ubicacion_icono{{ $loop->iteration }}" data-preview="holder_ubicacion_icono{{ $loop->iteration }}" class="btn btn-primary text-white">
                        <i class="far fa-image"></i> Elegir
                        </a>
                    </span>
                    {!! Form::text('locations['.$loop->index.'][icon]',$item['icon'],['class'=>'form-control','id'=>'thumbnail_ubicacion_icono'.$loop->iteration,'required']) !!}
                </div>
                <div id="holder_ubicacion_icono{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                    <img src="{{ $item['icon'] }}" alt="" style="height:5rem">
                </div>
    
                {!! Form::label('locations','Selecciona una imagen del mapa:',['class'=>'']) !!} <small><strong>(920 x 498px)</strong></small> <code>*</code>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_ubicacion_mapa{{ $loop->iteration }}" data-input="thumbnail_ubicacion_mapa{{ $loop->iteration }}" data-preview="holder_ubicacion_mapa{{ $loop->iteration }}" class="btn btn-primary text-white">
                        <i class="far fa-image"></i> Elegir
                        </a>
                    </span>
                    {!! Form::text('locations['.$loop->index.'][map]',$item['map'],['class'=>'form-control','id'=>'thumbnail_ubicacion_mapa'.$loop->iteration,'required']) !!}
                </div>
                <div id="holder_ubicacion_mapa{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                    <img src="{{ $item['map'] }}" alt="" style="height:5rem">
                </div>
                {!! Form::label('locations','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                {!! Form::number('locations['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endforeach
            @endif
        </div>
        
    </div>
</div>