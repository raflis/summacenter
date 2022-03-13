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

    public function coleccion_insignias()
    {
        $agent = new Agent();
        return view('web.coleccion-insignias', compact('agent'));
    }

    public function insignia()
    {
        $agent = new Agent();
        return view('web.insignia', compact('agent'));
    }

    public function preguntas_frecuentes()
    {
        $agent = new Agent();
        return view('web.preguntas-frecuentes', compact('agent'));
    }

    public function ruta_insignias()
    {
        $agent = new Agent();
        return view('web.ruta-insignias', compact('agent'));
    }

    public function responsabilidad_social_objetivos()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-objetivos', compact('agent'));
    }

    public function responsabilidad_social_mision()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-mision', compact('agent'));
    }

    public function responsabilidad_social_quienes_somos()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-quienes-somos', compact('agent'));
    }

    public function responsabilidad_social_programa_de_becas()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-programa-de-becas', compact('agent'));
    }

    public function responsabilidad_social_biblioteca_summa()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-biblioteca-summa', compact('agent'));
    }

    public function responsabilidad_social_talleres_gratuitos()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-talleres-gratuitos', compact('agent'));
    }

    public function responsabilidad_social_ecoeficiencia()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-ecoeficiencia', compact('agent'));
    }

    public function responsabilidad_social_programa_de_donaciones()
    {
        $agent = new Agent();
        return view('web.responsabilidad-social-programa-de-donaciones', compact('agent'));
    }

    public function nuestras_certificaciones()
    {
        $agent = new Agent();
        return view('web.nuestras-certificaciones', compact('agent'));
    }

    public function soporte()
    {
        $agent = new Agent();
        return view('web.soporte', compact('agent'));
    }

    public function cart()
    {
        $agent = new Agent();
        return view('web.cart', compact('agent'));
    }

    public function checkout()
    {
        $agent = new Agent();
        return view('web.checkout', compact('agent'));
    }

    public function contacto()
    {
        $agent = new Agent();
        return view('web.contacto', compact('agent'));
    }

    public function politicas()
    {
        $agent = new Agent();
        return view('web.politicas', compact('agent'));
    }

    public function manual_alumno()
    {
        $agent = new Agent();
        return view('web.manual-alumno', compact('agent'));
    }

    public function libro_reclamaciones()
    {
        $agent = new Agent();
        return view('web.libro-reclamaciones', compact('agent'));
    }

    public function bolsa_trabajo()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo', compact('agent'));
    }

    public function bolsa_trabajo_perfil()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-perfil', compact('agent'));
    }

    public function bolsa_trabajo_configuracion()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-configuracion', compact('agent'));
    }

    public function ver_anuncios()
    {
        $agent = new Agent();
        return view('web.ver-anuncios', compact('agent'));
    }

    public function anuncio()
    {
        $agent = new Agent();
        return view('web.anuncio', compact('agent'));
    }

    public function bolsa_trabajo_registro()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-registro', compact('agent'));
    }

    public function bolsa_trabajo_solicitud()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-solicitud', compact('agent'));
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

    public function post(){
    	return view('web.post');
    }

    /*public function post($slug){
        $typeprojects = TypeProject::orderBy('name', 'Asc')->pluck('name', 'id');
        $projects = Project::orderBy('name', 'ASC')->where('status', 'PUBLISHED')->get();
    	$post = Post::where('slug', $slug)->first();
    	return view('web.blog.post', compact('post', 'projects', 'typeprojects'));
    }*/
}
