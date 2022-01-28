<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Record;
use App\Models\Admin\Post;
use App\Models\Admin\Project;
use App\Http\Controllers\Controller;
use App\Models\Admin\WorkerTestimonial;
use App\Models\Admin\ServiceTestimonial;
use App\Models\Admin\CustomerTestimonial;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function dashboard()
    {
        $testimonios_servicios = ServiceTestimonial::count();
        $testimonios_clientes = CustomerTestimonial::count();
        $testimonios_trabajadores = WorkerTestimonial::count();
        $proyectos = Project::count();
        $entradas = Post::count();
        $registros = Record::count();

        return view('admin.dashboard.index', compact(
                                                    [
                                                        'testimonios_servicios',
                                                        'testimonios_clientes',
                                                        'testimonios_trabajadores',
                                                        'proyectos',
                                                        'entradas',
                                                        'registros',
                                                    ]
                                                ));
    }
}
