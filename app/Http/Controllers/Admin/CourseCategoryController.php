<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\CourseArea;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseCategory;

class CourseCategoryController extends Controller
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
        $id_get = $request->id_get;
        $course_categories = CourseCategory::where('course_area_id', $id_get)->orderBy('order','Asc')->paginate();
        return view('admin.course_categories.index', compact('course_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_get = $request->id_get;
        $course_areas = CourseArea::where('id', $id_get)->pluck('name', 'id');
        return view('admin.course_categories.create', compact('course_areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_get = $request->id_get;
        $name_get = $request->name_get;

        $rules=[
            'course_area_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_area_id.required' => 'Seleccione área',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = CourseCategory::create($request->all());
            return redirect()->route('course_categories.index', ['id_get' => $id_get, 'name_get' => $name_get])->with('message','Creado con éxito.')->with('typealert','success');
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
    public function edit(Request $request, $id)
    {
        $id_get = $request->id_get;
        $course_areas = CourseArea::where('id', $id_get)->pluck('name', 'id');;
        $course_category = CourseCategory::find($id);
        return view('admin.course_categories.edit', compact('course_category', 'course_areas'));
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
        $id_get = $request->id_get;
        $name_get = $request->name_get;

        $rules=[
            'course_area_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_area_id.required' => 'Seleccione área',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = CourseCategory::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('course_categories.index', ['id_get' => $id_get, 'name_get' => $name_get])->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = CourseCategory::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
