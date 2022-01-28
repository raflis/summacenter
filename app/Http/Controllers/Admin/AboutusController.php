<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Aboutus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
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

    public function slidersWe()
    {
        $aboutus = Aboutus::find(1);
        return view('admin.aboutus.sliders_we', compact('aboutus'));
    }

    public function history()
    {
        $aboutus = Aboutus::find(1);
        return view('admin.aboutus.history', compact('aboutus'));
    }

    public function detail()
    {
        $aboutus = Aboutus::find(1);
        return view('admin.aboutus.detail', compact('aboutus'));
    }
    
    public function index()
    {
        $aboutus = Aboutus::find(1);
        return view('admin.aboutus.index', compact('aboutus'));
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
            /*'title' => 'required',
            'description' => 'required',
            'slider_desktop' => 'required',
            'slider_mobile' => 'required',
            'title2' => 'required',
            'description2' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'valores' => 'required',*/
        ];

        $messages=[
            'title.required'=> 'Ingrese un título',
            'description.required'=> 'Ingrese la descripción',
            'slider_desktop.required'=> 'Suba la imagen para desktop',
            'slider_mobile.required'=> 'Suba la imagen para mobile',
            'title2.required'=> 'Ingrese un título2',
            'description2.required'=> 'Ingrese la descripción2',
            'mission.required' => 'Ingrese la misión',
            'vision.required' => 'Ingrese la visión',
            'valores.required' => 'Ingrese los valores',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->sliders):
                $request->merge(['sliders'=>array_values(collect($request->sliders)->sortBy(['order'])->toArray())]);
            endif;
            if($request->history_items):
                $request->merge(['history_items'=>array_values(collect($request->history_items)->sortBy(['order'])->toArray())]);
            endif;
            if($request->about_items):
                $request->merge(['about_items'=>array_values(collect($request->about_items)->sortBy(['order'])->toArray())]);
            endif;
            $aboutus = Aboutus::find(1);
            $aboutus->fill($request->all())->save();
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
