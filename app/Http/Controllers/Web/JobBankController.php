<?php

namespace App\Http\Controllers\Web;

use Str;
use Auth;
use Hash;
use Mail;
use Validator;
use App\Models\Admin\Job;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use Illuminate\Support\Carbon;
use App\Models\Admin\Applicant;
use App\Models\Admin\PageField;
use App\Models\Admin\JobBankUser;
use App\Models\Admin\JobBankOffer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Admin\JobBankApplicant;

class JobBankController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        $setting = Setting::find(1);
        $name = $request->get('name');
        $department = $request->get('department');
        $work_modality = $request->get('work_modality');
        $workload = $request->get('workload');

        $agent = new Agent();
        $pagefield = PageField::find(1);
        $jobs = Job::name($name)
                        ->department($department)
                        ->workModality($work_modality)
                        ->workload($workload)
                        ->where('status', 1)
                        ->paginate(10);
        return view('web.job_bank.index', compact('setting', 'agent', 'jobs', 'pagefield'));
    }

    public function job_show(Request $request, $slug, $id)
    {
        $setting = Setting::find(1);
        $name = $request->get('name');
        $department = $request->get('department');
        $job_type = $request->get('job_type');

        $agent = new Agent();
        $pagefield = PageField::find(1);
        $job = Job::where('id', $id)->where('slug', $slug)
                            ->where('status', 1)
                            ->first();
        if(!$job):
            return redirect()->route('bolsa.index');
        endif;
        $related = Job::where('id', '!=', $id)->where('status', 1)->take(8)->get();
        return view('web.job_bank.show', compact('setting', 'agent', 'job', 'related', 'pagefield'));
    }

    public function job_create(Request $request)
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.job_bank.create', compact('setting', 'agent', 'pagefield'));
    }

    public function job_store(Request $request)
    {
        $rules=[
            'name' => 'required',
            'company' => 'required',
            'summary' => 'required',
            'department' => 'required',
            'work_modality' => 'required',
            'workload' => 'required',
            'description' => 'required',
            'email' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['slug' => Str::slug($request->name)]);
            $recorded = Job::create($request->all());

            $data_mail = [
                'email' => $request->email,
            ];
            $email = $data_mail['email'];
            Mail::send('web.emails.job_create', $data_mail, function($message) use ($email)
            {
                $message->to($email)->subject('Confirmación de Creación de Oferta de Empleo | Summa Center Latam');
            });

            return redirect()->route('bolsa.index')->with('message', 'Creación exitosa de oferta de empleo. Le recordamos que la dirección de correo electrónico proporcionada es la designada para recibir las comunicaciones relacionadas con las postulaciones de los candidatos. Además, queremos informarle que el sistema procederá a realizar una validación antes de la publicación efectiva de su aviso.')->with('typealert', 'success');
        endif;
    }

    public function job_apply(Request $request)
    {
        $rules=[
            'job_id' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'file_front' => 'required|mimes:pdf|max:10000',
            'g-recaptcha-response' => 'recaptcha',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'file_front.required' => 'Debe subir su archivo CV en formato .pdf',
            'file_front.mimes' => 'El archivo subido no es válido, solo se aceptan .pdf',
            'file_front.max' => 'El arhivo subido excede los 10MB',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger')->withInput();
        else:
            $exists = Applicant::where('job_id', $request->job_id)->where('email', $request->email)->get()->count();
            if($exists > 0):
                return back()->withErrors($validator)->with('message', 'Ya tenemos una postulación registrada con estos datos. Agradecemos tu interés y te mantendremos informado sobre el estado de tu solicitud existente. ¡Gracias por considerarnos!')->with('typealert', 'danger')->withInput();
            endif;
            if($request->hasFile('file_front')):
                $fileName = $request->job_id.'_CV_'.Str::slug($request->name).'-'.Str::slug($request->lastname);
                $fileName = $fileName.'.'.$request->file_front->getClientOriginalExtension();
                $request->file_front->move(public_path('cvs'), $fileName);
                $request->merge(['file' => $fileName]);
            else:
                $request->merge(['file' => '']);
            endif;
            
            $recorded = Applicant::create($request->all());
            
            $job = Job::where('id', $request->job_id)->first();
            $data_mail = [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'file' => $request->file,
                'job_name' => $job->name,
                'job_email' => $job->email,
            ];
            $email = $data_mail['email'];
            Mail::send('web.emails.job_apply', $data_mail, function($message) use ($email)
            {
                $message->to($email)->subject('Confirmación de Postulación Exitosa | Summa Center Latam');
            });

            $job_name = $data_mail['job_name'];
            $email_company = $data_mail['job_email'];
            Mail::send('web.emails.job_apply_company', $data_mail, function($message) use ($email_company, $job_name)
            {
                $message->to($email_company)->subject('Notificación de Postulación para "'.$job_name.'"');
            });

            return redirect()->back()->with('message', '¡Felicidades por completar exitosamente tu postulación! Has dado un paso importante hacia nuevas oportunidades. Apreciamos tu interés y dedicación. Nuestro equipo revisará cuidadosamente tu información y te mantendremos informado sobre el progreso de tu solicitud. ¡Buena suerte en tu proceso de selección!')->with('typealert', 'success');
        endif;
    }

    // old

    public function bolsa_seleccionar()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.job_bank.seleccionar', compact('setting', 'agent'));
    }

    public function bolsa_trabajo_perfil_postulante()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.job_bank.perfil_postulante', compact('setting', 'agent'));
    }

    public function bolsa_trabajo_perfil_empresa()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.job_bank.perfil_empresa', compact('setting', 'agent'));
    }

    public function bolsa_trabajo_configuracion()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.job_bank.configuracion', compact('setting', 'agent'));
    }

    public function bolsa_trabajo_postulaciones()
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        return view('web.job_bank.postulaciones', compact('setting', 'agent'));
    }

    public function ver_anuncios_postulantes(Request $request)
    {
        $setting = Setting::find(1);
        $position = $request->get('position');

        $agent = new Agent();
        $pagefield = PageField::find(1);
        $applicants = JobBankUser::where('role', 2)
                                ->position($position)
                                ->where('status', 1)
                                ->get();
        return view('web.job_bank.ver-anuncios-postulantes', compact('setting', 'agent', 'applicants', 'pagefield'));
    }

    public function ver_anuncios_empresas(Request $request)
    {
        $setting = Setting::find(1);
        $name = $request->get('name');
        $department = $request->get('department');
        $job_type = $request->get('job_type');

        $agent = new Agent();
        $pagefield = PageField::find(1);
        $offers = JobBankOffer::name($name)
                            ->department($department)
                            ->jobtype($job_type)
                            ->where('status', 1)
                            ->get();
        return view('web.job_bank.ver-anuncios-empresas', compact('setting', 'agent', 'offers', 'pagefield'));
    }

    public function anuncio_postulante($slug, $id)
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $applicant = JobBankUser::find($id);
        $applicant_related = JobBankUser::where('id', '<>', $applicant->id)->where('status', 1)->where('role', 2)->inRandomOrder()->take(3)->get()->chunk(3);
        return view('web.job_bank.anuncio-postulante', compact('setting', 'agent', 'applicant', 'applicant_related', 'pagefield'));
    }

    public function anuncio_empresa($slug, $id)
    {
        $setting = Setting::find(1);
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $offer = JobBankOffer::where('slug', $slug)->where('id', $id)->first();
        $offer_related = JobBankOffer::where('id', '<>', $offer->id)->where('status', 1)->inRandomOrder()->take(3)->get()->chunk(3);
        if(Auth::guard('jobbank')->check()):
            $applied = JobBankApplicant::where('job_bank_offer_id', $id)->where('job_bank_user_id', Auth::guard('jobbank')->user()->id)->get()->count();
        else:
            $applied = 0;
        endif;
        return view('web.job_bank.anuncio-empresa', compact('setting', 'agent', 'offer', 'offer_related', 'applied', 'pagefield'));
    }

    public function applicant(Request $request)
    {
        $request->merge(['job_bank_user_id' => Auth::guard('jobbank')->user()->id]);
        $recorded = JobBankApplicant::create($request->all());
        return redirect()->route('bolsa.trabajo.postulaciones')->with('message', 'Has postulado con éxito.')->with('typealert', 'success');
    }

}
