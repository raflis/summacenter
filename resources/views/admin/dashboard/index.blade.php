@extends('admin.master')

@section('content')

<div class="layoutContent">
    <div class="container-fluid profile">
        <div class="row show-header">
            <div class="col-sm-12">
                <h1 class="pt-3">
                     <span class="dashboard">Administrador de contenidos</span>
                </h1>
            </div>
        </div>
        <div class="row mt-3 dashboard">
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-primary mb-1">
                                    Testimonios de clientes
                                </div>
                                <div class="hx">
                                    {{ $testimonios_clientes }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="fas fa-bullhorn text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-primary mb-1">
                                    Testimonios de servicios
                                </div>
                                <div class="hx">
                                    {{ $testimonios_servicios }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="fas fa-people-arrows text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-primary mb-1">
                                    Testimonios de trabajadores
                                </div>
                                <div class="hx">
                                    {{ $testimonios_trabajadores }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="fas fa-users text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-primary mb-1">
                                    Entradas de Blog
                                </div>
                                <div class="hx">
                                    {{ $entradas }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="far fa-folder-open text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-primary mb-1">
                                    Proyectos
                                </div>
                                <div class="hx">
                                    {{ $proyectos }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="fas fa-user-shield text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-4">
                <div class="card shadow card border-start-lg border-start-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-semibold text-success mb-1">
                                    Registros
                                </div>
                                <div class="hx">
                                    {{ $registros }}
                                </div>
                            </div>
                            <div class="ml-2">
                                <i class="fas fa-cloud-download-alt text-gray2 fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection