<?php

namespace App\Http\Controllers\Web;

use Str;
use Auth;
use Hash;
use Mail;
use Session;
use Validator;
use Carbon\Carbon;
use App\Models\User;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Admin\JobBankUser;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LoginJobController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except(['logout']);
        $this->middleware('guest:jobbank')->except(['logout']);
    }

    public function bolsa_trabajo()
    {
        $agent = new Agent();
        return view('web.job_bank.bolsa-trabajo', compact('agent'));
    }

    public function bolsa_trabajo_registro_postulante()
    {
        $agent = new Agent();
        return view('web.job_bank.registro-postulante', compact('agent'));
    }

    public function bolsa_trabajo_registro_empresa()
    {
        $agent = new Agent();
        return view('web.job_bank.registro-empresa', compact('agent'));
    }

    public function createPerson(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'type_document' => 'required',
            'document' => 'required',
            'telephone' => 'required',
            'birthday' => 'required',
            'career' => 'required',
            'position' => 'required',
            'address' => 'required',
            'email' => 'required|unique:job_bank_users,email',
            'password' => 'required|between:8,50',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'lastname.required' => 'Ingrese apellido',
            'type_document.required' => 'Ingrese tipo de documento',
            'document.required' => 'Ingrese documento',
            'telephone.required' => 'Ingrese teléfono',
            'birthday.required' => 'Ingrese cumpleaños',
            'career.required' => 'Ingrese carrera universitaria',
            'position.required' => 'Ingrese puesto de trabajo actual',
            'email.required' => 'Ingrese email',
            'email.unique' => 'El email ingresado ya se encuentra en uso',
            'password.required' => 'Ingrese contraseña',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['password' => Hash::make($request->password)]);
            $request->merge(['role' => 2]);
            $request->merge(['experience' => []]);
            $recorded = JobBankUser::create($request->all());

            /*$data = $request->all();
            $data['fullname'] = ucfirst($request->name).' '.ucfirst($request->lastname);
            $email = $request->email;
            //$email = "dennis.orm@hotmail.com";
            Mail::send('web.emails.welcome', $data, function($message) use ($email, $data)
            {
                $message->to($email)->subject($data['name'].', Te damos la bienvenida a SummaCenter');
            });*/
            return redirect()->route('bolsa.trabajo')->with('message', 'Usuario creado con éxito.')->with('typealert', 'success');
        endif;
    }

    public function createCompany(Request $request)
    {
        $rules=[
            'company_name' => 'required',
            'company_document' => 'required',
            'company_address' => 'required',
            'company_telephone' => 'required',
            'position' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:job_bank_users,email',
            'password' => 'required|between:8,50',
        ];

        $messages=[
            
            'company_name.required' => 'Ingrese nombre de la empresa',
            'company_document.required' => 'Ingrese ruc de la empresa',
            'company_address.required' => 'Ingrese dirección de la empresa',
            'company_telephone.required' => 'Ingrese teléfono de contacto',
            'position.required' => 'Ingrese puesto de trabajo actual',
            'name.required' => 'Ingrese nombre',
            'lastname.required' => 'Ingrese apellido',
            'email.required' => 'Ingrese email',
            'email.unique' => 'El email ingresado ya se encuentra en uso',
            'password.required' => 'Ingrese contraseña',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['password' => Hash::make($request->password)]);
            $request->merge(['role' => 3]);
            $recorded = JobBankUser::create($request->all());

            /*$data = $request->all();
            $data['fullname'] = ucfirst($request->name).' '.ucfirst($request->lastname);
            $email = $request->email;
            //$email = "dennis.orm@hotmail.com";
            Mail::send('web.emails.welcome', $data, function($message) use ($email, $data)
            {
                $message->to($email)->subject($data['name'].', Te damos la bienvenida a SummaCenter');
            });*/
            return redirect()->route('bolsa.trabajo')->with('message', 'Usuario creado con éxito.')->with('typealert', 'success');
        endif;
    }

    public function loginJob(Request $request)
    {
        $rules=[
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages=[
            'email.required' => 'Su email electrónico es requerido',
            'email.email' => 'El formato de su correo electrónico es invalido',
            'password.required' => 'Por favor escriba una contraseña',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(Auth::guard('jobbank')->attempt(['email' => $request->email, 'password' => $request->password], true)):
                if(Auth::guard('jobbank')->user()->role == 2):
                    return redirect()->route('bolsa.trabajo.perfil.postulante');
                endif;
                if(Auth::guard('jobbank')->user()->role == 3):
                    return redirect()->route('bolsa.trabajo.perfil.empresa');
                endif;
            else:
                return back()->with('message', 'Correo electrónico o contraseña erronea')->with('typealert', 'danger')->withInput();
            endif;
        endif;
    }

    public function logout()
    {
        Auth::guard('jobbank')->logout();
        return redirect()->route('bolsa.trabajo');
    }
}
