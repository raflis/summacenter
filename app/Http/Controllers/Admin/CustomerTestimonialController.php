<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\CustomerTestimonial;

class CustomerTestimonialController extends Controller
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
        $customerstestimonials = CustomerTestimonial::orderBy('order','Asc')->paginate();
        return view('admin.customer_testimonials.index', compact('customerstestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer_testimonials.create');
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
            'acquired_project' => 'required',
            'image' => 'required',
            'image_mobile' => 'required',
            'description' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese un nombre',
            'acquired_project.required' => 'Ingrese el nombre del proyecto adquirido',
            'image.required' => 'Seleccione una imagen para desktop',
            'image_mobile.required' => 'Seleccione una imagen para mobile',
            'description.required' => 'Ingrese una descripción',
            'order.required' => 'Ingrese el orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $customerstestimonials = CustomerTestimonial::create($request->all());
            return redirect()->route('customerstestimonials.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $customerstestimonials = CustomerTestimonial::find($id);
        return view('admin.customer_testimonials.edit', compact('customerstestimonials'));
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
            'name' => 'required',
            'acquired_project' => 'required',
            'image' => 'required',
            'image_mobile' => 'required',
            'description' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese un nombre',
            'acquired_project.required' => 'Ingrese el nombre del proyecto adquirido',
            'image.required' => 'Seleccione una imagen para desktop',
            'image_mobile.required' => 'Seleccione una imagen para mobile',
            'description.required' => 'Ingrese una descripción',
            'order.required' => 'Ingrese el orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $customerstestimonials = CustomerTestimonial::find($id);
            $customerstestimonials->fill($request->all())->save();
            return redirect()->route('customerstestimonials.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $customerstestimonials = CustomerTestimonial::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
