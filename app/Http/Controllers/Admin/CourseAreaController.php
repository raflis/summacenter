<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\CourseArea;
use App\Http\Controllers\Controller;

class CourseAreaController extends Controller
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
    public function index()
    {
        $course_areas = CourseArea::orderBy('order','Asc')->paginate();
        return view('admin.course_areas.index', compact('course_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course_areas.create');
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
            'slug' => 'required|unique:course_areas,slug',
            'icon' => 'required',
            'image' => 'required',
            'text' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'slug.unique' => 'Ya existe un registro con la misma URL',
            'icon.required' => 'Seleccione icono',
            'image.required' => 'Seleccione imagen',
            'text.required' => 'Ingrese detalle',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = CourseArea::create($request->all());
            return redirect()->route('course_areas.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $course_area = CourseArea::find($id);
        return view('admin.course_areas.edit', compact('course_area'));
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
            'slug' => 'required|unique:course_areas,slug,'.$id,
            'icon' => 'required',
            'image' => 'required',
            'text' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'slug.unique' => 'Ya existe un registro con la misma URL',
            'icon.required' => 'Seleccione icono',
            'image.required' => 'Seleccione imagen',
            'text.required' => 'Ingrese detalle',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = CourseArea::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('course_areas.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = CourseArea::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
