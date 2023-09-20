@extends('web.layout')

@section('content')

<section class="sec22">
    @include('web.partials.header')
</section>

<section class="sec38">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 politicas">
                <h1>
                    POLÍTICAS Y PRIVACIDAD
                </h1>
                <div class="content">
                    {!! htmlspecialchars_decode($pagefield->privacy_policies) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection