@extends('web.layout')

@section('content')

<section class="sec18">
    @include('web.partials.header')
</section>

<section class="sec35">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 breadcrumb___ pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Nombre del post</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="header_post">
                    <div class="fecha">
                        <img src="{{ asset('images/fecha.png') }}" alt="">
                        <p>
                            VIERNES, 10 DE ENERO 2022
                        </p>
                    </div>
                    <div class="redes">
                        <p>
                            COMPARTE ESTE ARTICULO EN:
                        </p>
                        <div class="images">
                            <a href="">
                                <img src="{{ asset('images/facebook.png') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('images/twitter.png') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('images/whatsapp.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 post_body">
                <h1>
                    Summa Center celebra sus más de  1000 estudiantes
                </h1>
                <img class="post_head" src="{{ asset('images/post.png') }}" alt="">
                <div class="content0">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed.
                    </p>
                    <br>
                    <img class="float-start" src="{{ asset('images/post-img.png') }}" alt="" style="height:200px;margin-right:20px">
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                    <br><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent 
                    </p>
                </div>
            </div>
            <div class="col-md-12 navegacion">
                <h3>
                    NOTICIAS QUE TE PUEDEN INTERESAR
                </h3>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_1_tab" data-bs-toggle="pill" data-bs-target="#pills_1" type="button" role="tab" aria-controls="pills_1" aria-selected="true">
                            Eventos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_2_tab" data-bs-toggle="pill" data-bs-target="#pills_2" type="button" role="tab" aria-controls="pills_2" aria-selected="false">
                            Institucionales
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_3_tab" data-bs-toggle="pill" data-bs-target="#pills_3" type="button" role="tab" aria-controls="pills_3" aria-selected="false">
                            Informativas
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_4_tab" data-bs-toggle="pill" data-bs-target="#pills_4" type="button" role="tab" aria-controls="pills_4" aria-selected="false">
                            Egresados
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills_1" role="tabpanel" aria-labelledby="pills_1_tab">
                            <div class="content1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="carousel-blog" class="owl-carousel">
                                            <div class="item">
                                                <div class="col-md-4 item0">
                                                    <div class="item0_">
                                                        <div class="image">
                                                            <img src="{{ asset('images/articulo1.png') }}" alt="">
                                                        </div>
                                                        <div class="contentt">
                                                            <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                                                            <p class="category">
                                                                Logros
                                                            </p>
                                                            <p class="tit">
                                                                Summa Center celebra sus más de 1000 estudiantes
                                                            </p>
                                                            <p class="description">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                            </p>
                                                            <div class="tags">
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-4 item0">
                                                    <div class="item0_">
                                                        <div class="image">
                                                            <img src="{{ asset('images/articulo1.png') }}" alt="">
                                                        </div>
                                                        <div class="contentt">
                                                            <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                                                            <p class="category">
                                                                Logros
                                                            </p>
                                                            <p class="tit">
                                                                Summa Center celebra sus más de 1000 estudiantes
                                                            </p>
                                                            <p class="description">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                            </p>
                                                            <div class="tags">
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-4 item0">
                                                    <div class="item0_">
                                                        <div class="image">
                                                            <img src="{{ asset('images/articulo1.png') }}" alt="">
                                                        </div>
                                                        <div class="contentt">
                                                            <a href="" class="btn btn-leer">ARTÍCULO COMPLETO</a>
                                                            <p class="category">
                                                                Logros
                                                            </p>
                                                            <p class="tit">
                                                                Summa Center celebra sus más de 1000 estudiantes
                                                            </p>
                                                            <p class="description">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                                magna aliquam erat volutpat. Ut wisi enim ad minim 
                                                                veniam, quis nostrud Ut wisi enim ad minim 
                                                            </p>
                                                            <div class="tags">
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                                <a href="" class="btn btn-tag">Online</a>
                                                                <a href="" class="btn btn-tag">SAP</a>
                                                                <a href="" class="btn btn-tag">Educación</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills_2" role="tabpanel" aria-labelledby="pills_2_tab">

                        </div>
                        <div class="tab-pane fade" id="pills_3" role="tabpanel" aria-labelledby="pills_3_tab">
                            
                        </div>
                        <div class="tab-pane fade" id="pills_4" role="tabpanel" aria-labelledby="pills_4_tab">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection