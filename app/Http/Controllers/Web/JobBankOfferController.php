<?php

namespace App\Http\Controllers\Web;

use Auth;
use Str;
use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\JobBankOffer;
use App\Http\Controllers\Controller;

class JobBankOfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:jobbank');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_bank_offers = JobBankOffer::get();
        return view('web.job_bank.ofertas.index', compact('job_bank_offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.job_bank.ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'benefits' => 'required',
            'detail' => 'required',
            'job_type' => 'required',
            'department' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'end_offer' => 'required',
            'title' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre de la oferta',
            'requirements.required' => 'Ingrese los requerimientos',
            'responsibilities.required' => 'Ingrese las responsabilidades',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['job_bank_user_id' => Auth::guard('jobbank')->user()->id]);
            $request->merge(['slug' => Str::slug($request->name)]);
            $recorded = JobBankOffer::create($request->all());
            return redirect()->route('ofertas.index')->with('message', 'Creado con éxito.')->with('typealert', 'success');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job_bank_offer = JobBankOffer::find($id);
        return view('web.job_bank.ofertas.show', compact('job_bank_offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_bank_offer = JobBankOffer::find($id);
        $job_bank_offer->end_offer = \Carbon\Carbon::parse($job_bank_offer->end_offer)->format('Y-m-d');
        return view('web.job_bank.ofertas.edit', compact('job_bank_offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illum   inate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'name' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'benefits' => 'required',
            'detail' => 'required',
            'job_type' => 'required',
            'department' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'end_offer' => 'required',
            'title' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre de la oferta',
            'requirements.required' => 'Ingrese los requerimientos',
            'responsibilities.required' => 'Ingrese las responsabilidades',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['slug' => Str::slug($request->name)]);
            $updated = JobBankOffer::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('ofertas.index')->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyed = JobBankOffer::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert', 'success');
    }
}
