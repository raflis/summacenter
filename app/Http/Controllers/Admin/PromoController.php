<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
        $this->middleware('isadmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::orderBy('id', 'Desc')->paginate();
        return view('admin.promos.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promos.create');
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
            'name' => 'required|unique:promos,name',
            'start' => 'required',
            'end' => 'required',
            'discount' => 'required',
            'active' => 'required',
        ];

        $messages=[
            'name.unique' => 'El código ya existe',
            'name.required' => 'Ingrese nombre del descuento',
            'start.required' => 'Ingrese fecha de inicio',
            'end.required' => 'Ingrese fecha de fin',
            'discount.required' => 'Ingrese % de descuento',
            'active.required' => 'Ingrese estado',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $recorded = Promo::create($request->all());
            return redirect()->route('promos.index')->with('message', 'Creado con éxito.')->with('typealert', 'success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo = Promo::find($id);
        $promo->start = \Carbon\Carbon::parse($promo->start)->format('Y-m-d');
        $promo->end = \Carbon\Carbon::parse($promo->end)->format('Y-m-d');
        return view('admin.promos.edit', compact('promo'));
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
            'name' => 'required|unique:promos,name,'.$id,
            'start' => 'required',
            'end' => 'required',
            'discount' => 'required',
            'active' => 'required',
        ];

        $messages=[
            'name.unique' => 'El código ya existe',
            'name.required' => 'Ingrese nombre del descuento',
            'start.required' => 'Ingrese fecha de inicio',
            'end.required' => 'Ingrese fecha de fin',
            'discount.required' => 'Ingrese % de descuento',
            'active.required' => 'Ingrese estado',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $updated = Promo::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('promos.index')->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
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
        $destroyed = Promo::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert', 'success');
    }
}
