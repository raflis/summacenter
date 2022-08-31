<?php

namespace App\Http\Controllers\Web;

use Http;
use Validator;
use App\Models\Record;
use GuzzleHttp\Client;
use App\Models\Admin\Flag;
use App\Models\Admin\Badge;
use Jenssegers\Agent\Agent;
use App\Models\Admin\Course;
use App\Models\Admin\Slider;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Models\Admin\BlogTag;
use App\Models\Admin\Partner;
use App\Models\Admin\Setting;
use App\Models\Admin\BlogPost;
use Illuminate\Support\Carbon;
use App\Models\Admin\PageField;
use App\Models\Admin\CourseArea;
use App\Models\Admin\IssuedBadge;
use App\Models\Admin\Testimonial;
use App\Models\Admin\BlogCategory;
use App\Http\Controllers\Controller;
use App\Models\Admin\BlogSubCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SohoController;
use App\Http\Controllers\Api\CredlyController;

class WebController extends Controller
{
    public function index()
    {
        $flags = Flag::orderBy('name', 'Asc')->get();
        $sliders = Slider::orderBy('order', 'Asc')->get();
        $testimonials = Testimonial::orderBy('order', 'Asc')->get()->take(6);
        $partners = Partner::orderBy('order', 'Asc')->get();
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $featured_posts = BlogPost::where('featured', 1)->where('status', 'PUBLISHED')->get();
        $agent = new Agent();
        return view('web.index', compact('agent', 'sliders', 'testimonials', 'partners', 'pagefield', 'course_areas', 'featured_posts', 'flags'));
    }

    public function egresados()
    {
        $pagefield = PageField::find(1);
        $posts = BlogCategory::where('name', 'LIKE', '%egresado%')->get();
        $agent = new Agent();
        return view('web.egresados', compact('agent', 'pagefield', 'posts'));
    }

    public function recomendaciones()
    {
        $pagefield = PageField::find(1);
        $testimonials = Testimonial::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.recomendaciones', compact('agent', 'testimonials', 'pagefield'));
    }

    public function programas(Request $request, $slug = 'all')
    {
        $q = [];
        if($request->q):
            $slug = 'q';
            foreach($request->q as $q_):
                array_push($q, $q_);
            endforeach;
        endif;

        $agent = new Agent();
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        if($slug == 'all'):
            $courses_tot = Course::orderBy('course_category_id', 'Asc')->orderBy('order', 'Asc')->paginate(15);
            $q_result = $courses_tot->total();
        elseif($slug == 'q'):
            $courses_tot = CourseArea::whereIn('slug', $q)->get();
            $q_result = 0;
            foreach ($courses_tot as $value) {
                $q_result = $q_result + $value->courses->count();
            }
        else:
            $courses_tot = CourseArea::where('slug', $slug)->first();
            $q_result = $courses_tot->courses()->count();
        endif;

        return view('web.programas', compact('agent', 'slug', 'course_areas', 'courses_tot', 'q_result', 'q'));
    }

    public function curso($slug, $id)
    {
        $agent = new Agent();
        $course = Course::find($id);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        return view('web.curso', compact('agent', 'course', 'course_areas'));
    }

    public function equipo(Request $request)
    {
        $pagefield = PageField::find(1);

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
        return view('web.equipo', compact('agent', 'workers', 'pagefield'));
    }

    public function distinciones()
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.distinciones', compact('agent', 'pagefield'));
    }

    public function insignias_digitales()
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.insignias-digitales', compact('agent', 'pagefield'));
    }

    public function coleccion_insignias()
    {
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.coleccion-insignias', compact('agent', 'course_areas', 'pagefield'));
    }

    public function insignia($slug, $id)
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        $course_area = CourseArea::find($id);
        $badges = Badge::where('course_area_id', $id)->select('category')->orderBy('category', 'Asc')->distinct('category')->get();
        return view('web.insignia', compact('agent', 'course_area', 'badges', 'pagefield'));
    }

    public function preguntas_frecuentes()
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.preguntas-frecuentes', compact('agent', 'pagefield'));
    }

    public function ruta_insignias($area, $category, $name, $id)
    {
        $badge = Badge::find($id);
        $agent = new Agent();
        return view('web.ruta-insignias', compact('agent', 'badge'));
    }

    public function grupo_excelencia()
    {
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.grupo-excelencia', compact('agent', 'pagefield', 'course_areas'));
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
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.nuestras-certificaciones', compact('agent', 'pagefield'));
    }

    public function soporte()
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.soporte', compact('agent', 'pagefield'));
    }

    public function cart()
    {
        $agent = new Agent();
        return view('web.cart', compact('agent'));
    }

    public function contacto()
    {
        $agent = new Agent();
        $setting = Setting::find(1);
        return view('web.contacto', compact('agent', 'setting'));
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
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.manual-alumno', compact('agent', 'pagefield'));
    }

    public function libro_reclamaciones()
    {
        $agent = new Agent();
        return view('web.libro-reclamaciones', compact('agent'));
    }

    public function asesoria_especializada()
    {
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.corporativo-asesoria-especializada', compact('agent', 'pagefield'));
    }

    public function capacitaciones_corporativas()
    {
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.corporativo-capacitaciones-corporativas', compact('agent', 'pagefield', 'course_areas'));
    }

    public function verifica_certificacion(Request $request)
    {
        $email = $request->email;
        $agent = new Agent();
        $credly = new CredlyController($email);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $result = $credly->results();

        return view('web.certificacion-verifica', compact('agent', 'result', 'course_areas'));
    }

    public function insignia_adquirida($hash)
    {
        $agent = new Agent();
        $issued_badge = IssuedBadge::where('hash', $hash)->first();
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        return view('web.certificacion-insignia-adquirido', compact('agent', 'issued_badge', 'course_areas'));
    }

    public function certificado_adquirido()
    {
        $agent = new Agent();
        return view('web.certificacion-certificado-adquirido', compact('agent'));
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

    public function postIndex(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'document' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'interested_course' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'document.required' => 'Ingrese su documento',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
            'interested_course.required' => 'Seleccione el curso de interés',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $text = explode('|', $request->interested_course);
            $zoho_code = $text[0];
            $request->merge(['interested_course' => $text[1]]);
            $record = Record::create($request->all());

            $setting = Setting::find(1);
            $zoho_token = $setting->zoho_token;
            $now = Carbon::now();
            $minutes = $now->diffInMinutes($setting->zoho_token_created);
            if($minutes >= 50):
                $soho = new SohoController();
                $soho->refresh_token();
            endif;
            
            $data_zoho = [
                "data" => [
                    [
                        'First_Name' => $request->name,
                        'Last_Name' => $request->lastname,
                        'Email' => $request->email,
                        'Phone' => $request->telephone,
                        'Lead_Status' => 'No contactado',
                        'CAMPA_A_OK' => 'Campaña Web',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'C_digo_Curso' => [
                            $zoho_code
                        ]
                    ]
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Zoho-oauthtoken '.$zoho_token,
                'Content-Type' => 'application/json',
            ])->post('https://www.zohoapis.com/crm/v2/Leads', $data_zoho);

            return redirect()->route('gracias')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    public function postCurso(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'document' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'interested_course' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'document.required' => 'Ingrese su documento',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
            'interested_course.required' => 'Seleccione el curso de interés',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $text = explode('|', $request->interested_course);
            $zoho_code = $text[0];
            $request->merge(['interested_course' => $text[1]]);
            $record = Record::create($request->all());

            $setting = Setting::find(1);
            $zoho_token = $setting->zoho_token;
            $now = Carbon::now();
            $minutes = $now->diffInMinutes($setting->zoho_token_created);
            if($minutes >= 50):
                $soho = new SohoController();
                $soho->refresh_token();
            endif;
            
            $data_zoho = [
                "data" => [
                    [
                        'First_Name' => $request->name,
                        'Last_Name' => $request->lastname,
                        'Email' => $request->email,
                        'Phone' => $request->telephone,
                        'Lead_Status' => 'No contactado',
                        'CAMPA_A_OK' => 'Campaña Web',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'C_digo_Curso' => [
                            $zoho_code
                        ]
                    ]
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Zoho-oauthtoken '.$zoho_token,
                'Content-Type' => 'application/json',
            ])->post('https://www.zohoapis.com/crm/v2/Leads', $data_zoho);

            return redirect()->route('gracias')->with('message', 'Creado con éxito.')->with('typealert', 'success');
        endif;
    }

    public function postContacto(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'document' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
            'document.required' => 'Ingrese su documento',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $record = Record::create($request->all());

            $setting = Setting::find(1);
            $zoho_token = $setting->zoho_token;
            $now = Carbon::now();
            $minutes = $now->diffInMinutes($setting->zoho_token_created);
            if($minutes >= 50):
                $soho = new SohoController();
                $soho->refresh_token();
            endif;
            
            $data_zoho = [
                "data" => [
                    [
                        'First_Name' => $request->name,
                        'Last_Name' => $request->lastname,
                        'Email' => $request->email,
                        'Phone' => $request->telephone,
                        'Lead_Status' => 'No contactado',
                        'CAMPA_A_OK' => 'Campaña Web',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                    ]
                ]
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Zoho-oauthtoken '.$zoho_token,
                'Content-Type' => 'application/json',
            ])->post('https://www.zohoapis.com/crm/v2/Leads', $data_zoho);

            return redirect()->route('gracias')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    public function postCorporativo(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'type_document' => 'required',
            'document' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'company' => 'required',
            'ruc' => 'required',
            'position' => 'required',
            
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
            'document.required' => 'Ingrese su documento',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if(!$request->call_sms):
                $request->merge(['call_sms' => 0]);
            endif;
            $record = Record::create($request->all());
            return redirect()->route('gracias')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    public function gracias()
    {
        return view('web.gracias');
    }

    public function blog()
    {
        $pagefield = PageField::find(1);
        $blog_categories = BlogCategory::orderBy('order', 'Asc')->get();
    	return view('web.blog.blog', compact('pagefield', 'blog_categories'));
    }

    public function post($category, $subcategory, $slug, $id)
    {
        $post = BlogPost::where('slug', $slug)->where('id', $id)->first();
        $blog_categories = BlogCategory::orderBy('order', 'Asc')->get();
    	return view('web.blog.post', compact('post', 'blog_categories'));
    }

    public function subcategory($category, $subcategory, $id)
    {
        $pagefield = PageField::find(1);
        $blog_categories = BlogCategory::orderBy('order', 'Asc')->get();
        $blog_subcategory = BlogSubCategory::where('slug', $subcategory)->where('id', $id)->first();
    	return view('web.blog.subcategory', compact('pagefield', 'blog_subcategory', 'blog_categories'));
    }

    public function tag($slug)
    {
        $pagefield = PageField::find(1);
        $tag = BlogTag::where('slug', $slug)->first();
        $posts = BlogPost::whereHas('blog_tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(30);

        return view('web.blog.tag', compact('pagefield', 'tag', 'posts'));
    }

}
