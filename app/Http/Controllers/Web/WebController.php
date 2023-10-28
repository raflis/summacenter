<?php

namespace App\Http\Controllers\Web;

use Str;
use Http;
use Mail;
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
use App\Models\Admin\Alliance;
use App\Models\Admin\BlogPost;
use Illuminate\Support\Carbon;
use App\Models\Admin\PageField;
use App\Models\Admin\CourseArea;
use App\Models\Admin\IssuedBadge;
use App\Models\Admin\Testimonial;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\ComplaintBook;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SohoController;
use App\Http\Controllers\Api\CredlyController;

class WebController extends Controller
{
    public function test()
    {
        return view('web.test');
    }

    public function index()
    {
        $setting = Setting::find(1);
        $flags = Flag::orderBy('name', 'Asc')->get();
        $sliders = Slider::orderBy('order', 'Asc')->get();
        $testimonials = Testimonial::orderBy('order', 'Asc')->get()->take(6);
        $partners = Partner::orderBy('order', 'Asc')->get();
        $alliances = Alliance::orderBy('order', 'Asc')->get();
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $featured_posts = BlogPost::where('featured', 1)->where('slug', '<>', 'eventos')->where('status', 'PUBLISHED')->get();
        $event_posts = BlogPost::whereHas('blog_category', function($q){
                            $q->where('slug', 'eventos');
                        })->where('status', 'PUBLISHED')
                        ->get();
        $agent = new Agent();
        return view('web.index', compact('setting', 'agent', 'sliders', 'testimonials', 'partners', 'alliances', 'pagefield', 'course_areas', 'featured_posts', 'flags', 'event_posts'));
    }

    public function egresados()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $posts = BlogCategory::where('name', 'LIKE', '%egresado%')->get();
        $agent = new Agent();
        return view('web.egresados', compact('setting', 'agent', 'pagefield', 'posts'));
    }

    public function recomendaciones()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $testimonials = Testimonial::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.recomendaciones', compact('setting', 'agent', 'testimonials', 'pagefield'));
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

        $setting = Setting::find(1);
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

        return view('web.programas', compact('setting', 'agent', 'slug', 'course_areas', 'courses_tot', 'q_result', 'q'));
    }

    public function curso($slug, $id)
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $flags = Flag::orderBy('name', 'Asc')->get();
        $course = Course::find($id);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        return view('web.curso', compact('setting', 'agent', 'course', 'course_areas', 'flags'));
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

        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.equipo', compact('setting', 'agent', 'workers', 'pagefield'));
    }

    public function distinciones()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.distinciones', compact('setting', 'agent', 'pagefield'));
    }

    public function insignias_digitales()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.insignias-digitales', compact('setting', 'agent', 'pagefield'));
    }

    public function coleccion_insignias()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.coleccion-insignias', compact('setting', 'agent', 'course_areas', 'pagefield'));
    }

    public function insignia($slug, $id)
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        $course_area = CourseArea::find($id);
        $badges = Badge::where('course_area_id', $id)->select('category')->orderBy('category', 'Asc')->distinct('category')->get();
        return view('web.insignia', compact('setting', 'agent', 'course_area', 'badges', 'pagefield'));
    }

    public function preguntas_frecuentes()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.preguntas-frecuentes', compact('setting', 'agent', 'pagefield'));
    }

    public function ruta_insignias($area, $category, $name, $id)
    {
        $setting = Setting::find(1);
        $badge = Badge::find($id);
        $agent = new Agent();
        return view('web.ruta-insignias', compact('setting', 'agent', 'badge'));
    }

    public function grupo_excelencia()
    {
        $setting = Setting::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.grupo-excelencia', compact('setting', 'agent', 'pagefield', 'course_areas'));
    }

    public function responsabilidad_social_objetivos()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-objetivos', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_mision()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-mision', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_quienes_somos()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-quienes-somos', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_programa_de_becas()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-programa-de-becas', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_biblioteca_summa()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-biblioteca-summa', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_talleres_gratuitos()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-talleres-gratuitos', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_ecoeficiencia()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-ecoeficiencia', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_programa_de_donaciones()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-programa-de-donaciones', compact('setting', 'agent', 'pagefield'));
    }

    public function responsabilidad_social_programa_de_participacion()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.responsabilidad-social-programa-de-participacion', compact('setting', 'agent', 'pagefield'));
    }

    public function nuestras_certificaciones()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.nuestras-certificaciones', compact('setting', 'agent', 'pagefield'));
    }

    public function soporte()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.soporte', compact('setting', 'agent', 'pagefield'));
    }

    public function cart()
    {
        $agent = new Agent();
        return view('web.cart', compact('agent'));
    }

    public function contacto()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $setting = Setting::find(1);
        return view('web.contacto', compact('setting', 'agent', 'setting'));
    }

    public function politicas()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.politicas', compact('setting', 'agent', 'pagefield'));
    }

    public function terminos_y_condiciones()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.terminos-y-condiciones', compact('setting', 'agent', 'pagefield'));
    }

    public function manual_alumno()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.manual-alumno', compact('setting', 'agent', 'pagefield'));
    }

    public function libro_reclamaciones()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $last_id = ComplaintBook::count() + 1;
        return view('web.libro-reclamaciones', compact('setting', 'agent', 'last_id'));
    }

    public function postLibro(Request $request)
    {
        $rules=[
            'type_contact' => 'required',
            'name' => 'required',
            'lastname1' => 'required',
            'lastname2' => 'required',
            'address' => 'required',
            'type_document' => 'required',
            'document' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'type_contract' => 'required',
            'type_contract_clasification' => 'required',
            'type_contract_description' => 'required',
            'claim_type' => 'required',
            'claim_description' => 'required',
            'consumer_request' => 'required',
        ];

        $messages=[
            //
        ];
        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if($request->hasFile('file_front')):
                $fileName = $request->id_front.'_'.Str::slug(pathinfo($request->file_front->getClientOriginalName(), PATHINFO_FILENAME));
                $fileName = $fileName.'.'.$request->file_front->getClientOriginalExtension();
                $request->file_front->move(public_path('libro_reclamaciones'), $fileName);
                $request->merge(['file' => $fileName]);
            else:
                $request->merge(['file' => '']);
            endif;

            $complaint_book = ComplaintBook::create($request->all());

            $record = $request->all();
            $record['id'] = $complaint_book->id;

            $email_to_bd = 'summa.center1@gmail.com, coordinacion@summacenter.net';
            $email_to_bd = explode(',', $email_to_bd);
            foreach ($email_to_bd as $key => $value):
                $record['email_to'] = trim($value);
                Mail::send('web.emails.complaint_admin', $record, function($message) use ($record)
                {
                    $message->to($record['email_to'])->subject('Hoja de Reclamación - Summa Center - '.$record['id_front']);    
                });
            endforeach;

            Mail::send('web.emails.complaint_user', $record, function($message) use ($record)
            {
                $message->to($record['email'])->subject('Hoja de Reclamación - Summa Center - '.$record['id_front']);    
            });

            return redirect()->route('gracias')->with('message', 'Gracias')->with('message', 'Pronto nos pondremos en contacto contigo.')->with('typealert', 'success');
        endif;
    }

    public function asesoria_especializada()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $agent = new Agent();
        return view('web.corporativo-asesoria-especializada', compact('setting', 'agent', 'pagefield'));
    }

    public function capacitaciones_corporativas()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $course_areas = CourseArea::orderBy('order', 'Asc')->get();
        $agent = new Agent();
        return view('web.corporativo-capacitaciones-corporativas', compact('setting', 'agent', 'pagefield', 'course_areas'));
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
        $setting = Setting::find(1);
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
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.modelo-educativo', compact('setting', 'agent'));
    }

    public function nosotros()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.nosotros', compact('setting', 'agent', 'pagefield'));
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
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            /*$text = explode('|', $request->interested_course);
            $zoho_code = $text[0];
            $request->merge(['interested_course' => $text[1]]);*/
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
                        'Phone' => $record->flag->dial_code.$request->telephone,
                        'Lead_Status' => 'No contactado',
                        'CAMPA_A_OK' => 'FORMULARIO WEB',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'Observaciones2' => $request->interested_course,
                        /*'C_digo_Curso' => [
                            $zoho_code
                        ]*/
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
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
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
                        'Phone' => $record->flag->dial_code.$request->telephone,
                        'Lead_Status' => 'No contactado',
                        'CAMPA_A_OK' => 'FORMULARIO PROGRAMAS',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'Observaciones2' => $request->interested_course,
                        /*'C_digo_Curso' => [
                            $zoho_code
                        ]*/
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
                        'CAMPA_A_OK' => 'CONTACTO',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'Observaciones2' => $request->observation,
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
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(!$request->call_sms):
                $request->merge(['call_sms' => 0]);
            endif;
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
                        'CAMPA_A_OK' => 'FORMULARIO CORPORATIVO',
                        'Fuente_de_Lead' => $request->document,
                        'Fuente_de_Lead1' => 'GOOGLE ADWORDS',
                        'Observaciones2' => $request->observation,
                        /*'C_digo_Curso' => [
                            $zoho_code
                        ]*/
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

    public function gracias()
    {
        return view('web.gracias');
    }

    public function blog()
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $blog_categories = BlogCategory::orderBy('order', 'Asc')->get();
    	return view('web.blog.blog', compact('setting', 'pagefield', 'blog_categories'));
    }

    public function post($category, $slug, $id)
    {
        $setting = Setting::find(1);
        $post = BlogPost::where('slug', $slug)->where('id', $id)->first();
        //$related = BlogPost::where('id', '<>', $post->id)->get();
        $related = BlogPost::where('blog_category_id', $post->blog_category_id)->where('id', '<>', $post->id)->orderBy('order', 'Asc')->get();
    	return view('web.blog.post', compact('setting', 'post', 'related'));
    }

    public function tag($slug)
    {
        $setting = Setting::find(1);
        $pagefield = PageField::find(1);
        $tag = BlogTag::where('slug', $slug)->first();
        $posts = BlogPost::whereHas('blog_tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(30);

        return view('web.blog.tag', compact('setting', 'pagefield', 'tag', 'posts'));
    }

}
