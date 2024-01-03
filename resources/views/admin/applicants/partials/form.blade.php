<div class="form-group col-md-12">
  <label for=""><strong>Mostrar usuario</strong></label> <code>*</code>
  {{ Form::select('status', [0 => 'No', 1 => 'Si'], null, ['class' => 'custom-select', 'placeholder' => 'Seleccione', 'required']) }}
</div>

@if ($job_bank_user->file != NULL)
<div class="form-group col-md-12">
  <label for="">Archivo</label> <code><a href="{{ asset('cvs/'.$job_bank_user->file) }}" target="_blank">Ver CV</a></code>
</div>
@endif

<div class="form-group col-md-6">
  <label for="">Nombres</label> <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Apellidos</label> <code>*</code>
  {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Tipo de documento</label> <code>*</code>
  {{ Form::select('type_document', ['DNI' => 'DNI', 'Carnet de extranjeria' => 'Carnet de extranjeria', 'Pasaporte' => 'Pasaporte'], null, ['class' => 'custom-select', 'placeholder' => 'Tipo documento', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Documento</label> <code>*</code>
  {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Documento', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Fecha de cumpleaños</label> <code>*</code>
  @php $job_bank_user->birthday = \Carbon\Carbon::parse($job_bank_user->birthday)->format('Y-m-d') @endphp
  {{ Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Fecha de cumpleaños', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Teléfono</label> <code>*</code>
  {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
</div>

<div class="form-group col-md-12">
  <label for="">Dirección</label> <code>*</code>
  {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Carrera universitaria</label> <code>*</code>
  {{ Form::text('career', null, ['class' => 'form-control', 'placeholder' => 'Carrera universitaria', 'required']) }}
</div>

<div class="form-group col-md-6">
  <label for="">Puesto de trabajo actual</label> <code>*</code>
  {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Puesto de trabajo actual', 'required']) }}
</div>

<div class="form-group col-md-12">
  <label for="">Resumen</label>
  {{ Form::textarea('summary', null, ['class' => 'form-control', 'placeholder' => 'Resumen', 'rows' => 4,]) }}
</div>

<div class="px-3 col-sm-12 mb-3">
  <div class="card shadow col-sm-12 px-0">
    <div class="card-header py-3 card-into">
      <h6 class="m-0 font-weight-bold text-primary float-left">Experiencia laboral:</h6>
      <p class="btn btn-success btn-icon-split float-right añadir">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text text-white">Añadir</span>
      </p>
    </div>
    <div class="texto row px-3">
      @foreach ($job_bank_user->experience as $item)
      <div class="card-body col-md-12">
        @if ($loop->index >= 0)
        <a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">
          <i class="fas fa-trash"></i>
        </a>
        @endif
        {!! Form::label('experience','Empresa:',['class'=>'mt-3']) !!} <code>*</code>
        {!! Form::text('experience['.$loop->index.'][company]',$item["company"],['class'=>'form-control','required']) !!}
        {!! Form::label('experience','Puesto:',['class'=>'mt-3']) !!} <code>*</code>
        {!! Form::text('experience['.$loop->index.'][position]',$item["position"],['class'=>'form-control','required']) !!}
        {!! Form::label('experience','Fecha de inicio:',['class'=>'mt-3']) !!} <code>*</code>
        {!! Form::date('experience['.$loop->index.'][start]',$item["start"],['class'=>'form-control','max' => \Carbon\Carbon::now()->format('Y-m-d'),'required']) !!}
        {!! Form::label('experience','Fecha de finalización:',['class'=>'mt-3']) !!} <code>*</code>
        {!! Form::date('experience['.$loop->index.'][end]',$item["end"],['class'=>'form-control','max' => \Carbon\Carbon::now()->format('Y-m-d'),'required']) !!}
        {!! Form::label('experience','Descripción de responsabilidades:',['class'=>'mt-3']) !!} <code>*</code>
        {!! Form::textarea('experience['.$loop->index.'][detail]',$item["detail"],['class'=>'form-control','rows'=>4,'required']) !!}

        <hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">
      </div>
      @endforeach
    </div>
  </div>
</div>

@section('script')

  <script>
      $(document).ready(function() {

        var i={{ count(($job_bank_user->experience))+1 }};

        $('.añadir').on('click',function(e){
          e.preventDefault();
          var template='<div class="col-md-12"><div class="card-body pt-0">' +
                    '<a href="#" class="btn btn-danger btn-circle btn-sm float-right mb-2 eliminar">' +
                      '<i class="fas fa-trash"></i>' +
                    '</a>' +
                    
                    '<label for="experience" class="mt-3">Empresa:</label> <code>*</code>' +
                    '<input class="form-control" name="experience['+i+'][company]" type="text" required>' +
                    '<label for="experience" class="mt-3">Puesto:</label> <code>*</code>' +
                    '<input class="form-control" name="experience['+i+'][position]" type="text" required>' +
                    '<label for="experience" class="mt-3">Fecha de inicio:</label> <code>*</code>' +
                    '<input class="form-control" name="experience['+i+'][start]" type="date" required max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">' +
                    '<label for="experience" class="mt-3">Fecha de finalización:</label> <code>*</code>' +
                    '<input class="form-control" name="experience['+i+'][end]" type="date" required max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">' +
                    '<label for="experience" class="mt-3">Descripción de responsabilidades:</label> <code>*</code>' +
                    '<textarea class="form-control" name="experience['+i+'][detail]" rows=4 required></textarea>' +

                    '<hr class="mx-0 mt-4 border-bottom-dark" style="border:1px solid;background:#000">' + 
                  '</div></div>';
      
          $('.texto').append(template);
          i++;
        });
      
        $(document).on('click','.eliminar',function(e){
          e.preventDefault();
          
          $(this).parent('.card-body').remove();
        });

      });
  </script>

@endsection
