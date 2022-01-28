<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
use App\Models\Admin\District;
use App\Models\Admin\Enviroment;
use App\Models\Admin\TypeProject;
use App\Models\Admin\TypeProperty;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }


    public function index()
    {
        $projects = Project::where('type', 'proyectos')->orderBy('order','Asc')->paginate();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::orderBy('name', 'Asc')->pluck('name', 'id');
        $typeprojects = TypeProject::orderBy('name', 'Asc')->pluck('name', 'id');
        $typeproperties = TypeProperty::orderBy('name', 'Asc')->pluck('name', 'id');
        $enviroments= Enviroment::orderBy('name', 'ASC')->get();
        return view('admin.projects.create', compact('districts', 'typeprojects','typeproperties', 'enviroments'));
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
            'type_project_id'=>'required',
            'type_property_id' => 'required',
            'district_id' => 'required|unique:projects,slug',
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'description_index'=>'required',
            'image_index'=>'required',
            'image_form'=>'required',
            'title1'=>'required',
            'descripcion1'=>'required',
            'image1'=>'required',
            'map'=>'required',
            'status'=>'required',
            'order'=>'required',
        ];

        $messages=[
            'location_id.required'=> 'Seleccione una ubicación',
            'name.required'=>'Ingrese un nombre del proyecto',
            'slug.required'=>'La URL amigable es necesaria',
            'slug.unique'=>'Ya existe un registro con la misma URL',
            'description.required'=>'Ingrese una descripción',
            'descripcion_index.required'=>'Ingrese una descripción para el carrusel',
            'imagen_index.required'=>'Seleccione una imagen para el carrusel',
            'image_form.required'=>'Seleccione una imagen para el formulario',
            'title1.required'=>'Ingrese el título',
            'descripcion1.required'=>'Ingrese una descripción',
            'image1.required'=>'Ingrese una imagen parallax',
            'map.required'=>'Ingrese la ubicación de google maps',
            'status.required'=>'Seleccione el estado de la publicación',
            'order.required'=>'Ingrese el orden de aparición',
        ];
        //return $request;
        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $request->merge(['infos'=>array_values(collect($request->infos)->toArray())]);
            $request->merge(['sliders'=>array_values(collect($request->sliders)->sortBy('order')->toArray())]);
            $request->merge(['locations'=>array_values(collect($request->locations)->sortBy('order')->toArray())]);
            $request->merge(['spaces'=>array_values(collect($request->spaces)->sortBy('order')->toArray())]);
            $request->merge(['plans'=>array_values(collect($request->plans)->sortBy('order')->toArray())]);
            $request->merge(['type' => 'proyectos']);
            $project = Project::create($request->all());
            
            $orden_en = array();
            if($request->orden_e):
            foreach ($request->orden_e as $o):
                if($o!=null && !empty($o)):
                    array_push($orden_en,$o);
                endif;
            endforeach;
            endif;

            $sync_data = [];
            $envi=$request->enviroments;
            if($envi):
                for($i = 0; $i < count($envi); $i++)
                    $sync_data[$envi[$i]] = ['order' => $orden_en[$i]];
                    //return $sync_data;
                $project->enviroments()->attach($sync_data);
            else:
                $project->enviroments()->attach($request->enviroments);
            endif;

            return redirect()->route('projects.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $project = Project::find($id);
        $districts = District::orderBy('name', 'Asc')->pluck('name', 'id');
        $typeprojects = TypeProject::orderBy('name', 'Asc')->pluck('name', 'id');
        $typeproperties = TypeProperty::orderBy('name', 'Asc')->pluck('name', 'id');
        $enviroments= Enviroment::orderBy('name', 'ASC')->get();
        return view('admin.projects.edit', compact('project', 'districts', 'typeprojects','typeproperties', 'enviroments'));
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
            'type_project_id'=>'required',
            'type_property_id' => 'required',
            'slug' => 'required|unique:projects,slug,'.$id,
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'description_index'=>'required',
            'image_index'=>'required',
            'image_form'=>'required',
            'title1'=>'required',
            'descripcion1'=>'required',
            'image1'=>'required',
            'map'=>'required',
            'status'=>'required',
            'order'=>'required',
        ];

        $messages=[
            'location_id.required'=> 'Seleccione una ubicación',
            'name.required'=>'Ingrese un nombre del proyecto',
            'slug.required'=>'La URL amigable es necesaria',
            'slug.unique'=>'Ya existe un registro con la misma URL',
            'description.required'=>'Ingrese una descripción',
            'descripcion_index.required'=>'Ingrese una descripción para el carrusel',
            'imagen_index.required'=>'Seleccione una imagen para el carrusel',
            'image_form.required'=>'Seleccione una imagen para el formulario',
            'title1.required'=>'Ingrese el título',
            'descripcion1.required'=>'Ingrese una descripción',
            'image1.required'=>'Ingrese una imagen parallax',
            'map.required'=>'Ingrese la ubicación de google maps',
            'status.required'=>'Seleccione el estado de la publicación',
            'order.required'=>'Ingrese el orden de aparición',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $project = Project::find($id);
            $request->merge(['infos'=>array_values(collect($request->infos)->toArray())]);
            $request->merge(['sliders'=>array_values(collect($request->sliders)->sortBy('order')->toArray())]);
            $request->merge(['locations'=>array_values(collect($request->locations)->sortBy('order')->toArray())]);
            $request->merge(['spaces'=>array_values(collect($request->spaces)->sortBy('order')->toArray())]);
            $request->merge(['plans'=>array_values(collect($request->plans)->sortBy('order')->toArray())]);
            $request->merge(['type' => 'proyectos']);
            $project->fill($request->all())->save();

            $orden_en = array();
            if($request->orden_e):
            foreach ($request->orden_e as $o):
                if($o!=null && !empty($o)):
                    array_push($orden_en,$o);
                endif;
            endforeach;
            endif;

            $sync_data = [];
            $envi=$request->enviroments;
            if($envi):
                for($i = 0; $i < count($envi); $i++)
                    $sync_data[$envi[$i]] = ['order' => $orden_en[$i]];
                $project->enviroments()->sync($sync_data);
            else:
                $project->enviroments()->sync($request->enviroments);
            endif;
            return redirect()->route('projects.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $project = Project::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
