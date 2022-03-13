@extends('web.layout')

@section('content')

<section class="sec9">
    @include('web.partials.header')
    <div class="container-fluid content">
        <div class="row content_">
            <div class="col-md-7">
                <p class="color2">
                    COLECCIONES DE INSIGNIAS
                </p>
                <p class="blanco2">
                    HAZ CLICK PARA OBTENER MÁS INFORMACIÓN
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sec30">
    <div class="container-fluid">
        <div class="row insignias">
            <h3>
                Haz click en el área de especialización para
                obtener más información de la ruta de insignias
            </h3>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 insignia">
                <div class="insignia_">
                    <div class="image">
                        <div class="cant">
                            28
                        </div>
                        <a href="{{ route('insignia') }}">
                            <img src="{{ asset('images/excel_insignia1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="text">
                        <a href="">
                            Logística y Operaciones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection