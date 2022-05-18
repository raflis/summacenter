<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerAdministratorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $worker_administrators = Worker::where('type', 'administration')->orderBy('order','Asc')->paginate();
        return view('admin.worker_administrators.index', compact('worker_administrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.worker_administrators.create');
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
            'type' => 'required',
            'fullname' => 'required',
            'image' => 'required',
            'position' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'type.required' => 'Ingrese tipo de trabajador',
            'fullname.required' => 'Ingrese nombres',
            'image.required' => 'Seleccione imagen',
            'position.required' => 'Ingrese puesto de trabajo',
            'telephone.required' => 'Ingrese teléfono',
            'email.required' => 'Ingrese email',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = Worker::create($request->all());
            return redirect()->route('worker_administrators.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $worker_administrator = Worker::find($id);
        return view('admin.worker_administrators.edit', compact('worker_administrator'));
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
            'type' => 'required',
            'fullname' => 'required',
            'image' => 'required',
            'position' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'type.required' => 'Ingrese tipo de trabajador',
            'fullname.required' => 'Ingrese nombres',
            'image.required' => 'Seleccione imagen',
            'position.required' => 'Ingrese puesto de trabajo',
            'telephone.required' => 'Ingrese teléfono',
            'email.required' => 'Ingrese email',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = Worker::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('worker_administrators.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Worker::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
