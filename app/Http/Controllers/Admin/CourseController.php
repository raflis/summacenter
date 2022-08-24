<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Course;
use App\Models\Admin\Worker;
use Illuminate\Http\Request;
use App\Models\Admin\CourseSubarea;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseCategory;

class CourseController extends Controller
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
        $course_category = CourseCategory::find($request->id_get);
        $courses = Course::where('course_category_id', $request->id_get)->orderBy('order','Asc')->paginate();
        return view('admin.courses.index', compact('courses', 'course_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course_category = CourseCategory::find($request->id_get);
        $workers = Worker::where('type', 'teacher')->orderBy('fullname', 'Asc')->pluck('fullname', 'id'); //->prepend('Selecciona un docente', '');
        $course_subareas = CourseSubarea::orderBy('order', 'Asc')->pluck('name', 'id')->prepend('Selecciona un sub area', '');
        return view('admin.courses.create', compact('course_category', 'workers', 'course_subareas'));
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
            'course_category_id' => 'required',
            'course_subarea_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            //'slug' => 'required|unique:courses,slug',
            'title1' => 'required',
            'slider' => 'required',
            'image' => 'required',
            'badge' => 'required',
            'start_of_classes' => 'required',
            'schedule' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'subtitle' => 'required',
            'modality' => 'required',
            'download_video' => 'required',
            'brochure' => 'required',
            'video_id' => 'required',
            'objective' => 'required',
            'benefits' => 'required',
            'audience' => 'required',
            'worker_id' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_category_id.required' => 'Ingrese la categoría del curso',
            'course_subarea_id.required' => 'Ingrese la sub area del curso',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            //'slug.unique' => 'Ya existe un registro con la misma URL',
            'title1.required' => 'Ingrese título 1',
            'title2.required' => 'Ingrese título 2',
            'title3.required' => 'Ingrese título 3',
            'slider.required' => 'Seleccione imagen principal',
            'image.required' => 'Seleccione imagen',
            'badge.required' => 'Seleccione insignia',
            'start_of_classes.required' => 'Ingrese inicio de clases',
            'schedule.required' => 'Ingrese horario',
            'duration.required' => 'Ingrese duración',
            'price.required' => 'Ingrese inversión',
            'subtitle.required' => 'Ingrese subtitulo',
            'modality.required' => 'Ingrese modalidad del curso',
            'download_video.required' => 'Ingrese video introductorio',
            'brochure.required' => 'Ingrese link del brochure',
            'video_id.required' => 'Ingrese ID del video',
            'objective.required' => 'Ingrese objetivo del curso',
            'audience.required' => 'Ingrese audiencia del curso',
            'benefits.required' => 'Ingrese beneficios del curso',
            'worker_id.required' => 'Seleccine docente',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = Course::create($request->all());
            $recorded->workers()->attach($request->get('worker_id'));
            return redirect()->route('courses.index', ['id_get' => $id_get])->with('message','Creado con éxito.')->with('typealert','success');
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
        $course_category = CourseCategory::find($request->id_get);
        $workers = Worker::where('type', 'teacher')->orderBy('fullname', 'Asc')->pluck('fullname', 'id'); //->prepend('Selecciona un docente', '');
        $course_subareas = CourseSubarea::orderBy('order', 'Asc')->pluck('name', 'id')->prepend('Selecciona un sub area', '');
        $course = Course::find($id);
        return view('admin.courses.edit', compact('course', 'course_category', 'workers', 'course_subareas'));
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
            'course_category_id' => 'required',
            'course_subarea_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            //'slug' => 'required|unique:courses,slug,'.$id,
            'title1' => 'required',
            'slider' => 'required',
            'image' => 'required',
            'badge' => 'required',
            'start_of_classes' => 'required',
            'schedule' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'subtitle' => 'required',
            'modality' => 'required',
            'download_video' => 'required',
            'brochure' => 'required',
            'video_id' => 'required',
            'objective' => 'required',
            'benefits' => 'required',
            'audience' => 'required',
            'worker_id' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'course_category_id.required' => 'Ingrese la categoría del curso',
            'course_subarea_id.required' => 'Ingrese la sub area del curso',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            //'slug.unique' => 'Ya existe un registro con la misma URL',
            'title1.required' => 'Ingrese título 1',
            'title2.required' => 'Ingrese título 2',
            'title3.required' => 'Ingrese título 3',
            'slider.required' => 'Seleccione imagen principal',
            'image.required' => 'Seleccione imagen',
            'badge.required' => 'Seleccione insignia',
            'start_of_classes.required' => 'Ingrese inicio de clases',
            'schedule.required' => 'Ingrese horario',
            'duration.required' => 'Ingrese duración',
            'price.required' => 'Ingrese inversión',
            'subtitle.required' => 'Ingrese subtitulo',
            'modality.required' => 'Ingrese modalidad del curso',
            'download_video.required' => 'Ingrese video introductorio',
            'brochure.required' => 'Ingrese link del brochure',
            'video_id.required' => 'Ingrese ID del video',
            'objective.required' => 'Ingrese objetivo del curso',
            'benefits.required' => 'Ingrese beneficios del curso',
            'audience.required' => 'Ingrese audiencia del curso',
            'worker_id.required' => 'Seleccine docente',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = Course::find($id);
            $updated->fill($request->all())->save();
            $updated->workers()->sync($request->get('worker_id'));
            return redirect()->route('courses.index', ['id_get' => $id_get])->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Course::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
