<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Badge;
use Illuminate\Http\Request;
use App\Models\Admin\CourseArea;
use App\Http\Controllers\Controller;

class BadgeController extends Controller
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
        $course_area = CourseArea::find($request->id_get);
        $badges = Badge::where('course_area_id', $request->id_get)->orderBy('category', 'Asc')->orderBy('order','Asc')->paginate(100);
        return view('admin.badges.index', compact('badges', 'course_area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course_area = CourseArea::find($request->id_get);
        return view('admin.badges.create', compact('course_area'));
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

        $rules=[
            'course_area_id' => 'required',
            'category' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'type' => 'required',
            'level' => 'required',
            'time' => 'required',
            'criterion1' => 'required',
            'criterion2' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_area_id.required' => 'Ingrese el área de capacitación',
            'category.required' => 'Seleccione la categoría',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'type.required' => 'Ingrese tipo',
            'level.required' => 'Ingrese nivel',
            'time.required' => 'Ingrese tiempo',
            'criterion1.required' => 'Ingrese criterio 1',
            'criterion2.required' => 'Ingrese criterio 2',
            'detail.required' => 'Ingrese detalle',
            'image.required' => 'Seleccione imagen insignia',
            'image2.required' => 'Seleccione imagen ruta de insignia',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->skills):
                $request->merge(['skills'=>array_values(collect($request->skills)->sortBy(['order'])->toArray())]);
            endif;

            $recorded = Badge::create($request->all());
            return redirect()->route('badges.index', ['id_get' => $id_get])->with('message','Creado con éxito.')->with('typealert','success');
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
        $course_area = CourseArea::find($request->id_get);
        $badge = Badge::find($id);
        return view('admin.badges.edit', compact('badge', 'course_area'));
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

        $rules=[
            'course_area_id' => 'required',
            'category' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'type' => 'required',
            'level' => 'required',
            'time' => 'required',
            'criterion1' => 'required',
            'criterion2' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_area_id.required' => 'Ingrese el área de capacitación',
            'category.required' => 'Seleccione la categoría',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'type.required' => 'Ingrese tipo',
            'level.required' => 'Ingrese nivel',
            'time.required' => 'Ingrese tiempo',
            'criterion1.required' => 'Ingrese criterio 1',
            'criterion2.required' => 'Ingrese criterio 2',
            'detail.required' => 'Ingrese detalle',
            'image.required' => 'Seleccione imagen insignia',
            'image2.required' => 'Seleccione imagen ruta de insignia',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->skills):
                $request->merge(['skills'=>array_values(collect($request->skills)->sortBy(['order'])->toArray())]);
            endif;
            
            $updated = Badge::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('badges.index', ['id_get' => $id_get])->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Badge::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
