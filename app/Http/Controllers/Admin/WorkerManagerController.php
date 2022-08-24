<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerManagerController extends Controller
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
    public function index(Request $request)
    {
        $worker_managers = Worker::where('type', 'manager')->orderBy('order','Asc')->paginate();
        return view('admin.worker_managers.index', compact('worker_managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.worker_managers.create');
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
            'item1' => 'required',
            'item2' => 'required',
            'item3' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'type.required' => 'Ingrese tipo de trabajador',
            'fullname.required' => 'Ingrese nombres',
            'image.required' => 'Seleccione imagen',
            'position.required' => 'Ingrese puesto de trabajo',
            'item1.required' => 'Ingrese lugar de estudio',
            'item2.required' => 'Ingrese breve descripción',
            'item3.required' => 'Ingrese participaciones',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = Worker::create($request->all());
            return redirect()->route('worker_managers.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $worker_manager = Worker::find($id);
        return view('admin.worker_managers.edit', compact('worker_manager'));
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
            'item1' => 'required',
            'item2' => 'required',
            'item3' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'type.required' => 'Ingrese tipo de trabajador',
            'fullname.required' => 'Ingrese nombres',
            'image.required' => 'Seleccione imagen',
            'position.required' => 'Ingrese puesto de trabajo',
            'item1.required' => 'Ingrese lugar de estudio',
            'item2.required' => 'Ingrese breve descripción',
            'item3.required' => 'Ingrese participaciones',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = Worker::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('worker_managers.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
