<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Support\Arr;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Models\Admin\CourseArea;
use App\Http\Controllers\Controller;

class WorkerTeacherController extends Controller
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
        $worker_teachers = Worker::where('type', 'teacher')->orderBy('order','Asc')->paginate();
        return view('admin.worker_teachers.index', compact('worker_teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_areas = CourseArea::orderBy('name', 'Asc')->pluck('name', 'id');
        //$course_areas = Arr::add($course_areas, '', 'Seleccione un área');
        $course_areas->prepend('Seleccione un área', NULL);
        return view('admin.worker_teachers.create', compact('course_areas'));
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
            'course_area_id' => 'required',
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
            'course_area_id.required' => 'Seleccione un área de capacitación',
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
            return redirect()->route('worker_teachers.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $worker_teacher = Worker::find($id);
        $course_areas = CourseArea::orderBy('name', 'Asc')->pluck('name', 'id');
        $course_areas->prepend('Seleccione un área', NULL);
        return view('admin.worker_teachers.edit', compact('worker_teacher', 'course_areas'));
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
            'course_area_id' => 'required',
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
            'course_area_id.required' => 'Seleccione un área de capacitación',
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
            return redirect()->route('worker_teachers.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
