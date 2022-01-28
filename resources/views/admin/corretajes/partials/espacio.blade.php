<div class="px-3 col-sm-12 mb-3">
    <div class="card shadow col-sm-12 px-0">
        <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary float-left">Espacios:</h6>
        <button href="" class="btn btn-success btn-icon-split float-right añadir_espacio">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text text-white">Añadir</span>
        </button>
        </div>
        <div class="texto_espacio pt-4">
            @if (Route::currentRouteName()=="corretajes.create")
            <div class="card-body">
            {!! Form::label('spaces','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
            {!! Form::text('spaces[0][name]',null,['class'=>'form-control','required']) !!}

            {!! Form::label('spaces','Selecciona una imagen',['class'=>'']) !!} <small><strong>(Subir imágen con un alto de 60px)</strong></small> <code>*</code>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm_espacios0" data-input="thumbnail_espacios0" data-preview="holder_espacios0" class="btn btn-primary text-white">
                    <i class="far fa-image"></i> Elegir
                    </a>
                </span>
                {!! Form::text('spaces[0][image]',null,['class'=>'form-control','id'=>'thumbnail_espacios0','required']) !!}
            </div>
            <div id="holder_espacios0" style="margin-top:15px;max-height:100px;">
            </div>
            {!! Form::label('spaces','Orden:',['class'=>'mt-3']) !!} <code>*</code>
            {!! Form::number('spaces[0][order]',null,['class'=>'form-control','required']) !!}

            <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endif
            @if (Route::currentRouteName()=="corretajes.edit")
            @foreach ($project->spaces as $item)
            <div class="card-body">
                <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar_espacio">
                    <i class="fas fa-trash"></i>
                </a>
                {!! Form::label('spaces','Nombre:',['class'=>'mt-3']) !!} <code>*</code>
                {!! Form::text('spaces['.$loop->index.'][name]',$item['name'],['class'=>'form-control','required']) !!}
    
                {!! Form::label('spaces','Selecciona una imagen',['class'=>'']) !!} <small><strong>(683 x 483px)</strong></small> <code>*</code>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm_espacios{{ $loop->iteration }}" data-input="thumbnail_espacios{{ $loop->iteration }}" data-preview="holder_espacios{{ $loop->iteration }}" class="btn btn-primary text-white">
                        <i class="far fa-image"></i> Elegir
                        </a>
                    </span>
                    {!! Form::text('spaces['.$loop->index.'][image]',$item['image'],['class'=>'form-control','id'=>'thumbnail_espacios'.$loop->iteration,'required']) !!}
                </div>
                <div id="holder_espacios{{ $loop->iteration }}" style="margin-top:15px;max-height:100px;">
                    <img src="{{ $item['image'] }}" alt="" style="height:5rem">
                </div>
                {!! Form::label('spaces','Orden:',['class'=>'mt-3']) !!} <code>*</code>
                {!! Form::number('spaces['.$loop->index.'][order]',$item['order'],['class'=>'form-control','required']) !!}
    
                <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
            </div>
            @endforeach
            @endif
        </div>
        
    </div>
</div>