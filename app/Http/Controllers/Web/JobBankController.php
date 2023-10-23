<?php

namespace App\Http\Controllers\Web;

use Auth;
use Hash;
use Mail;
use Validator;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

    public function bolsa_seleccionar()
    {
        $agent = new Agent();
        return view('web.job_bank.seleccionar', compact('agent'));
    }

    public function bolsa_trabajo_perfil_postulante()
    {
        $agent = new Agent();
        return view('web.job_bank.perfil_postulante', compact('agent'));
    }

    public function bolsa_trabajo_perfil_empresa()
    {
        $agent = new Agent();
        return view('web.job_bank.perfil_empresa', compact('agent'));
    }

    public function bolsa_trabajo_configuracion()
    {
        $agent = new Agent();
        return view('web.job_bank.configuracion', compact('agent'));
    }

    public function bolsa_trabajo_postulaciones()
    {
        $agent = new Agent();
        return view('web.job_bank.postulaciones', compact('agent'));
    }

    public function ver_anuncios_postulantes(Request $request)
    {
        $position = $request->get('position');

        $agent = new Agent();
        $pagefield = PageField::find(1);
        $applicants = JobBankUser::where('role', 2)
                                ->position($position)
                                ->where('status', 1)
                                ->get();
        return view('web.job_bank.ver-anuncios-postulantes', compact('agent', 'applicants', 'pagefield'));
    }

    public function ver_anuncios_empresas(Request $request)
    {
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
        return view('web.job_bank.ver-anuncios-empresas', compact('agent', 'offers', 'pagefield'));
    }

    public function anuncio_postulante($slug, $id)
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $applicant = JobBankUser::find($id);
        $applicant_related = JobBankUser::where('id', '<>', $applicant->id)->where('status', 1)->where('role', 2)->inRandomOrder()->take(3)->get()->chunk(3);
        return view('web.job_bank.anuncio-postulante', compact('agent', 'applicant', 'applicant_related', 'pagefield'));
    }

    public function anuncio_empresa($slug, $id)
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $offer = JobBankOffer::where('slug', $slug)->where('id', $id)->first();
        $offer_related = JobBankOffer::where('id', '<>', $offer->id)->where('status', 1)->inRandomOrder()->take(3)->get()->chunk(3);
        if(Auth::guard('jobbank')->check()):
            $applied = JobBankApplicant::where('job_bank_offer_id', $id)->where('job_bank_user_id', Auth::guard('jobbank')->user()->id)->get()->count();
        else:
            $applied = 0;
        endif;
        return view('web.job_bank.anuncio-empresa', compact('agent', 'offer', 'offer_related', 'applied', 'pagefield'));
    }

    public function applicant(Request $request)
    {
        $request->merge(['job_bank_user_id' => Auth::guard('jobbank')->user()->id]);
        $recorded = JobBankApplicant::create($request->all());
        return redirect()->route('bolsa.trabajo.postulaciones')->with('message', 'Has postulado con éxito.')->with('typealert', 'success');
    }

}
