<?php

namespace App\Http\Controllers\Web;

use Validator;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class WebController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        return view('web.index', compact('agent'));
    }

    public function egresados()
    {
        $agent = new Agent();
        return view('web.egresados', compact('agent'));
    }

    public function programas()
    {
        $agent = new Agent();
        return view('web.programas', compact('agent'));
    }

    public function equipo()
    {
        $agent = new Agent();
        return view('web.equipo', compact('agent'));
    }

    public function curso()
    {
        $agent = new Agent();
        return view('web.curso', compact('agent'));
    }

    public function insignias_digitales()
    {
        $agent = new Agent();
        return view('web.insignias-digitales', compact('agent'));
    }

    public function ruta_insignias()
    {
        $agent = new Agent();
        return view('web.ruta-insignias', compact('agent'));
    }

    public function nuestras_certificaciones()
    {
        $agent = new Agent();
        return view('web.nuestras-certificaciones', compact('agent'));
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function postContacto(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'project' => 'required',
            'project_type' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $record = Record::create($request->all());
            return redirect()->route('gracias')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    public function gracias()
    {
        return view('web.gracias');
    }

    public function blog(){
    	return view('web.blog');
    }

    public function post($slug){
        $typeprojects = TypeProject::orderBy('name', 'Asc')->pluck('name', 'id');
        $projects = Project::orderBy('name', 'ASC')->where('status', 'PUBLISHED')->get();
    	$post = Post::where('slug', $slug)->first();
    	return view('web.blog.post', compact('post', 'projects', 'typeprojects'));
    }
}
