<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Consultancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultancyController extends Controller
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
        $consultancies = Consultancy::orderBy('order','Asc')->paginate();
        return view('admin.consultancies.index', compact('consultancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consultancies.create');
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
            //
        ];

        $messages=[
            'image.required' => 'Seleccione imagen',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->items):
                $request->merge(['items'=>array_values(collect($request->items)->sortBy(['order'])->toArray())]);
            else:
                $request->merge(['items'=>[]]);
            endif;
            $recorded = Consultancy::create($request->all());
            return redirect()->route('consultancies.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $consultancy = Consultancy::find($id);
        return view('admin.consultancies.edit', compact('consultancy'));
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
            //
        ];

        $messages=[
            'image.required' => 'Seleccione imagen',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->items):
                $request->merge(['items'=>array_values(collect($request->items)->sortBy(['order'])->toArray())]);
            endif;
            $updated = Consultancy::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('consultancies.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Consultancy::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
