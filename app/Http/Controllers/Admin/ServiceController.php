<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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

    public function slider()
    {
        $services = Service::find(1);
        return view('admin.services.slider', compact('services'));
    }

    public function text()
    {
        $services = Service::find(1);
        return view('admin.services.text', compact('services'));
    }

    public function index()
    {
        $services = Service::find(1);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            /*'name' => 'required',
            'slug' => 'required|unique:services,slug,'.$id,
            'description' => 'required',
            'image' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'slider_desktop' => 'required',
            'slider_mobile' => 'required',
            'order' => 'required',*/
        ];

        $messages=[
            'name.required' => 'Ingrese un nombre',
            'slug.required'=>'La URL amigable es necesaria',
            'description.required'=> 'Ingrese la descripción',
            'image.required' => 'Seleccione una imagen',
            'title.required'=> 'Ingrese un título del formulario',
            'subtitle.required'=> 'Ingrese la descripción del formulario',
            'slider_desktop.required'=> 'Suba la imagen para desktop',
            'slider_mobile.required'=> 'Suba la imagen para mobile',
            'order.required' => 'Ingrese el orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->service_sliders):
                $request->merge(['service_sliders'=>array_values(collect($request->service_sliders)->sortBy(['order'])->toArray())]);
            endif;
            if($request->service_items):
                $request->merge(['service_items'=>array_values(collect($request->service_items)->sortBy(['order'])->toArray())]);
            endif;
            $service = Service::find($id);
            $service->fill($request->all())->save();
            return redirect()->back()->with('message','Actualizado con éxito.')->with('typealert','success');
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
        //
    }
}
