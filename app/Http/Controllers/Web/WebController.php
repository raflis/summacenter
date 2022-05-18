<?php

namespace App\Http\Controllers\Web;

use Validator;
use App\Models\Admin\Badge;
use Jenssegers\Agent\Agent;
use App\Models\Admin\Slider;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Models\Admin\Partner;
use App\Models\Admin\PageField;
use App\Models\Admin\CourseArea;
use App\Models\Admin\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class WebController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('order', 'Asc')->get();
        $testimonials = Testimonial::orderBy('order', 'Asc')->get();
        $partners = Partner::orderBy('order', 'Asc')->get();
        $pagefields = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.index', compact('agent', 'sliders', 'testimonials', 'partners', 'pagefields', 'course_areas'));
    }

    public function egresados()
    {
        $agent = new Agent();
        return view('web.egresados', compact('agent'));
    }

    public function recomendaciones()
    {
        $testimonials = Testimonial::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.recomendaciones', compact('agent', 'testimonials'));
    }

    public function programas($slug = 'all')
    {
        $agent = new Agent();
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        return view('web.programas', compact('agent', 'course_areas'));
    }

    public function equipo(Request $request)
    {
        if($request->type && $request->position):
            switch ($request->type):
                case 'manager':
                    $workers0 = Worker::where('position', '<>', $request->position)->orderBy('order', 'Asc');
                    $workers = Worker::where('position', $request->position)->orderBy('order', 'Asc')->union($workers0)->get();
                    break;
                case 'teacher':
                    $workers0 = Worker::where('course_area_id', '<>', $request->area)->orderBy('order', 'Asc');
                    $workers = Worker::where('course_area_id', $request->area)->orderBy('order', 'Asc')->union($workers0)->get();
                    break;
                case 'administration':
                    $workers0 = Worker::where('position', '<>', $request->position)->orderBy('order', 'Asc');
                    $workers = Worker::where('position', $request->position)->orderBy('order', 'Asc')->union($workers0)->get();
                    break;
                default:
                    $workers = Worker::orderBy('order', 'Asc')->get();
                    break;
            endswitch;
        else:
            $workers = Worker::orderBy('order', 'Asc')->get();
        endif;
        $agent = new Agent();
        return view('web.equipo', compact('agent', 'workers'));
    }

    public function distinciones()
    {
        $agent = new Agent();
        return view('web.distinciones', compact('agent'));
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
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.coleccion-insignias', compact('agent', 'course_areas'));
    }

    public function insignia($slug, $id)
    {
        $agent = new Agent();
        $course_area = CourseArea::find($id);
        $badges = Badge::where('course_area_id', $id)->select('category')->orderBy('category', 'Asc')->distinct('category')->get();
        return view('web.insignia', compact('agent', 'course_area', 'badges'));
    }

    public function preguntas_frecuentes()
    {
        $agent = new Agent();
        return view('web.preguntas-frecuentes', compact('agent'));
    }

    public function ruta_insignias($area, $category, $name, $id)
    {
        $badge = Badge::find($id);
        $agent = new Agent();
        return view('web.ruta-insignias', compact('agent', 'badge'));
    }

    public function grupo_excelencia()
    {
        $agent = new Agent();
        return view('web.grupo-excelencia', compact('agent'));
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

    public function terminos_y_condiciones()
    {
        $agent = new Agent();
        return view('web.terminos-y-condiciones', compact('agent'));
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

    public function bolsa_seleccionar()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-seleccionar', compact('agent'));
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

    public function bolsa_trabajo_registro_postulante()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-registro-postulante', compact('agent'));
    }

    public function bolsa_trabajo_registro_empresa()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-registro-empresa', compact('agent'));
    }

    public function bolsa_trabajo_solicitud()
    {
        $agent = new Agent();
        return view('web.bolsa-trabajo-solicitud', compact('agent'));
    }

    public function asesoria_especializada()
    {
        $agent = new Agent();
        return view('web.corporativo-asesoria-especializada', compact('agent'));
    }

    public function capacitaciones_corporativas()
    {
        $agent = new Agent();
        return view('web.corporativo-capacitaciones-corporativas', compact('agent'));
    }

    public function verifica_certificacion()
    {
        $agent = new Agent();
        return view('web.certificacion-verifica', compact('agent'));
    }

    public function certificado_adquirido()
    {
        $agent = new Agent();
        return view('web.certificacion-certificado-adquirido', compact('agent'));
    }

    public function insignia_adquirida()
    {
        $agent = new Agent();
        return view('web.certificacion-insignia-adquirido', compact('agent'));
    }

    public function modelo_educativo()
    {
        $agent = new Agent();
        return view('web.modelo-educativo', compact('agent'));
    }

    public function nosotros()
    {
        $agent = new Agent();
        return view('web.nosotros', compact('agent'));
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
