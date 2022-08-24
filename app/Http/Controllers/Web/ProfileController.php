<?php

namespace App\Http\Controllers\Web;

use Auth;
use Hash;
use Validator;
use App\Models\User;
use App\Models\Admin\Sale;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Admin\JobBankUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function welcome()
    {
        return view('web.profile.welcome');
    }

    public function shopping()
    {
        $sales = Sale::where('user_email', Auth::guard('user')->user()->email)->orderBy('transaction_date', 'Desc')->get();
        return view('web.profile.shopping', compact('sales'));
    }

    public function index()
    {
        return view('web.profile.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required',
            'lastname'=>'required',
            'document'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'newpassword'=>'nullable|min:8',
            'renewpassword'=>'nullable|min:8|same:newpassword',
        ];

        $messages=[
            'name.required' => 'Ingresa tu nombre',
            'lastname.required' => 'Ingresa tu apellido',
            'document.required' => 'Ingresa tu documento',
            'telephone.required' => 'Ingresa tu teléfono',
            'address.required' => 'Ingresa tu dirección',
            'newpassword.min'=> 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.min'=> 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.same'=> 'Las contraseñas no coinciden.',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if(Auth::guard('user')->user()->id <> $id):
                return back()->withErrors($validator)->with('message','¿Qué haces? o.O')->with('typealert','danger')->withInput();
            endif;

            if($request->newpassword && $request->renewpassword):
                if($request->newpassword === $request->renewpassword):
                    $request->merge(['password' => Hash::make($request->newpassword)]);
                else:
                    return back()->withErrors($validator)->with('message','La contraseñas no coinciden')->with('typealert','danger')->withInput();
                endif;
            endif;
            
            $user = User::find(Auth::guard('user')->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message','Datos actualizados con éxito')->with('typealert','success');
        endif;
    }

    public function update_invoice(Request $request, $id)
    {
        $rules=[
            'invoice_name'=>'required',
            'invoice_address'=>'required',
            'invoice_department'=>'required',
            'invoice_district'=>'required',
            'invoice_telephone'=>'required',
            'invoice_email'=>'required',
        ];

        $messages=[
            'invoice_name.required' => 'Ingresa nombre de facturación',
            'invoice_address.required' => 'Ingresa dirección',
            'invoice_department.required' => 'Ingresa departamento',
            'invoice_district.required' => 'Ingresa distrito',
            'invoice_telephone.required' => 'Ingresa teléfono',
            'invoice_email.required' => 'Ingresa email',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if(Auth::guard('user')->user()->id <> $id):
                return back()->withErrors($validator)->with('message','¿Qué haces? o.O')->with('typealert','danger')->withInput();
            endif;
    
            $user = User::find(Auth::guard('user')->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message','Datos actualizados con éxito')->with('typealert','success');
        endif;
    }

    public function updateJobUser(Request $request, $id)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'type_document' => 'required',
            'document' => 'required',
            'birthday' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'career' => 'required',
            'position' => 'required',
            'summary' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingresa tu nombre',
            'lastname.required' => 'Ingresa tu apellido',
            'type_document.required' => 'Seleccione tipo de documento',
            'document.required' => 'Ingresa tu documento',
            'birthday.required' => 'Ingresa tu cumpleaños',
            'telephone.required' => 'Ingresa tu teléfono',
            'address.required' => 'Ingresa tu dirección',
            'career.required' => 'Ingresa tu carrera',
            'position.required' => 'Ingresa tu puesto actual',
            'summary.required' => 'Ingresa tu resumen personal',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(Auth::guard('jobbank')->user()->id <> $id):
                return back()->withErrors($validator)->with('message', '¿Qué haces? o.O')->with('typealert', 'danger')->withInput();
            endif;

            if($request->experience):
                $request->merge(['experience' => array_reverse(array_values(collect($request->experience)->sortBy(['end', 'desc'])->toArray()))]);
            endif;
            
            $user = JobBankUser::find(Auth::guard('jobbank')->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Datos actualizados con éxito')->with('typealert', 'success');
        endif;
    }

    public function updateJobCompany(Request $request, $id)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'company_name' => 'required',
            'company_document' => 'required',
            'company_address' => 'required',
            'company_telephone' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingresa tu nombre',
            'lastname.required' => 'Ingresa tu apellido',
            'position.required' => 'Ingresa tu puesto actual',
            'company_name.required' => 'Ingrese nombre de la empresa',
            'company_document.required' => 'Ingresa RUC',
            'company_address.required' => 'Ingrese dirección de la empresa',
            'company_telephone.required' => 'Ingresae teléfono de la empresa',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(Auth::guard('jobbank')->user()->id <> $id):
                return back()->withErrors($validator)->with('message', '¿Qué haces? o.O')->with('typealert', 'danger')->withInput();
            endif;
            
            $user = JobBankUser::find(Auth::guard('jobbank')->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Datos actualizados con éxito')->with('typealert', 'success');
        endif;
    }

    public function updateJobUserPass(Request $request, $id)
    {
        $rules=[
            'password' => 'required',
            'newpassword' => 'min:8',
            'renewpassword' => 'min:8|same:newpassword',
        ];

        $messages=[
            'password.required' => 'Ingresa su contraseña actual',
            'newpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.same' => 'Las nuevas contraseñas no coinciden.',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(Auth::guard('jobbank')->user()->id <> $id):
                return back()->withErrors($validator)->with('message', '¿Qué haces? o.O')->with('typealert', 'danger')->withInput();
            endif;

            if(!Hash::check($request->password, Auth::guard('jobbank')->user()->password)):
                return back()->withErrors($validator)->with('message', 'La contraseña actual es incorrecta')->with('typealert', 'danger')->withInput();
            endif;

            if($request->newpassword && $request->renewpassword):
                if($request->newpassword === $request->renewpassword):
                    $request->merge(['password' => Hash::make($request->newpassword)]);
                else:
                    return back()->withErrors($validator)->with('message', 'La contraseñas no coinciden')->with('typealert', 'danger')->withInput();
                endif;
            endif;
            
            $user = JobBankUser::find(Auth::guard('jobbank')->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Contraseña actualizada con éxito')->with('typealert', 'success');
        endif;
    }
}
