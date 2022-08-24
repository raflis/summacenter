@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6"></div>
            @include('web.job_bank.partials.header')
            <div class="col-md-12">
                <div class="content">
                    <div class="content_item">
                        <div class="content_header">
                            <h1>
                                Información Personal
                            </h1>
                        </div>
                        @php Auth::guard('jobbank')->user()->birthday = \Carbon\Carbon::parse(Auth::guard('jobbank')->user()->birthday)->format('Y-m-d') @endphp
                        {!! Form::model(Auth::guard('jobbank')->user(), ['route' => ['bolsa.trabajo.perfil.update', Auth::user()->id], 'class' => 'needs-validation', 'novalidate', 'method' => 'PUT']) !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    @include('web.partials.alert')
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{ Auth::guard('jobbank')->user()->name }} {{ Auth::guard('jobbank')->user()->lastname }}<br>
                                        {{ Auth::guard('jobbank')->user()->email }}<br>
                                        {{ Auth::guard('jobbank')->user()->telephone }}
                                    </h5>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Nombres</label> <code>*</code>
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Apellidos</label> <code>*</code>
                                    {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Tipo de documento</label> <code>*</code>
                                    {{ Form::select('type_document', ['DNI' => 'DNI', 'Carnet de extranjeria' => 'Carnet de extranjeria', 'Pasaporte' => 'Pasaporte'], null, ['class' => 'form-select', 'placeholder' => 'Tipo documento', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Documento</label> <code>*</code>
                                    {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Documento', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Fecha de cumpleaños</label> <code>*</code>
                                    {{ Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Fecha de cumpleaños', 'required']) }}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Teléfono</label> <code>*</code>
                                    {{ Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) }}
                                </div>
                                <div class="form-group col-md-6">
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
                                    {{ Form::textarea('summary', null, ['class' => 'form-control', 'placeholder' => 'Resumen', 'rows' => 6, 'required']) }}
                                </div>
                                <div class="form-group col-md-12">
                                    <h3>Experiencia laboral</h3>
                                    <a href="" class="btnAddExp">
                                        <i class="fa-solid fa-circle-plus"></i> Añadir
                                    </a>
                                    <div class="items">
                                        @foreach (Auth::guard('jobbank')->user()->experience as $item)
                                        <div class="item">
                                            <div class="delete_item">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="">Empresa</label> <code>*</code>
                                                    {{ Form::text('experience['.$loop->iteration.'][company]', $item['company'], ['class' => 'form-control', 'placeholder' => 'Empresa', 'required']) }}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Puesto</label> <code>*</code>
                                                    {{ Form::text('experience['.$loop->iteration.'][position]', $item['position'], ['class' => 'form-control', 'placeholder' => 'Puesto', 'required']) }}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Fecha de inicio</label> <code>*</code>
                                                    {{ Form::date('experience['.$loop->iteration.'][start]', $item['start'], ['class' => 'form-control', 'max' => \Carbon\Carbon::now()->format('Y-m-d'), 'required']) }}
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Fecha de finalización</label> <code>*</code>
                                                    {{ Form::date('experience['.$loop->iteration.'][end]', $item['end'], ['class' => 'form-control', 'max' => \Carbon\Carbon::now()->format('Y-m-d') ,'required']) }}
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Descripción de responsabilidades</label> <code>*</code>
                                                    {{ Form::textarea('experience['.$loop->iteration.'][detail]', $item['detail'], ['class' => 'form-control', 'rows' => 6, 'required']) }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                               
                                <div class="form-group col-md-12 m-0">
                                    <label for="">Información de contacto</label>
                                    <div class="info">
                                        <img src="{{ asset('images/icon-lock.png') }}" alt="">
                                        <p>
                                            Solo proporcionamos tu dirección de email y tu número de teléfono a las
                                            empresas a las que respondes o te postulas.
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Llamar y enviar mensajes de texto a este número de teléfono
                                    </label>
                                </div> --}}
                                <div class="col-md-12">
                                    <p class="info2">
                                        Este es el CV con el que podrás postular a los avisos de empresas.
                                    </p>
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <button type="submit" class="btn btn-guardar">GUARDAR</button>
                                    <a href="" class="btn btn-cancelar">CANCELAR</a>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Público
                    </label>
                    <p>
                        Las empresas que buscan
                        candidatos pueden encontrar
                        información sobre tu CV y tu perfil en
                        Summa, de acuerdo con nuestros
                        términos.
                    </p>
                </div>
                <div class="form-check radios_form">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Privado
                    </label>
                    <p>
                        Las empresas no pueden encontrar 
                        tu CV en una búsqueda de Summa.
                        Esto no afecta  las postulaciones
                        anteriores ni evita que las empresas
                        a las que respondiste te conta
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection

@section('script')

<script>
$(function(){

    var i={{ count((Auth::guard('jobbank')->user()->experience))+1 }};
    $('.btnAddExp').on('click', function(e){
        e.preventDefault();
        var template = '<div class="item">' +    
                            '<div class="delete_item">' +
                                '<i class="fa-solid fa-trash-can"></i>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="form-group col-md-3">' +
                                    '<label for="">Empresa</label> <code>*</code>' +
                                    '<input class="form-control" placeholder="Empresa" required name="experience['+i+'][company]" type="text">' +
                                '</div>' +
                                '<div class="form-group col-md-3">' +
                                    '<label for="">Puesto</label> <code>*</code>' +
                                    '<input class="form-control" placeholder="Puesto" required name="experience['+i+'][position]" type="text">' +
                                '</div>' +
                                '<div class="form-group col-md-3">' +
                                    '<label for="">Fecha de inicio</label> <code>*</code>' +
                                    '<input class="form-control" required name="experience['+i+'][start]" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" type="date">' +
                                '</div>' +
                                '<div class="form-group col-md-3">' +
                                    '<label for="">Fecha de finalización</label> <code>*</code>' +
                                    '<input class="form-control" required name="experience['+i+'][end]" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" type="date">' +
                                '</div>' +
                                '<div class="form-group col-md-12">' +
                                    '<label for="">Descripción de responsabilidades</label> <code>*</code>' +
                                    '<textarea class="form-control" rows="6" required name="experience['+i+'][detail]" cols="50"></textarea>' +
                                '</div>' +
                            '</div>' +
                        '</div>';
        $('.items').append(template);
        i++;
        
        $(document).on('click','.delete_item',function(e){
			e.preventDefault();
			$(this).parent('.item').remove();
		});
    })

});
</script>

@endsection