<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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

    public function slidersHome()
    {
        $home = Home::find(1);
        return view('admin.home.sliders_home', compact('home'));
    }

    public function slidersProject()
    {
        $home = Home::find(1);
        return view('admin.home.sliders_project', compact('home'));
    }

    public function slidersCorretaje()
    {
        $home = Home::find(1);
        return view('admin.home.sliders_corretaje', compact('home'));
    }

    public function slidersContact()
    {
        $home = Home::find(1);
        return view('admin.home.sliders_contact', compact('home'));
    }

    public function slidersBlog()
    {
        $home = Home::find(1);
        return view('admin.home.sliders_blog', compact('home'));
    }

    public function counter()
    {
        $home = Home::find(1);
        return view('admin.home.counter', compact('home'));
    }

    public function popup()
    {
        $home = Home::find(1);
        return view('admin.home.popup', compact('home'));
    }
    
    public function index()
    {
        $home = Home::find(1);
        return view('admin.home.index', compact('home'));
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
            'button_name' => 'required',
            'button_link' => 'required',
            'slider_desktop' => 'required',
            'slider_mobile' => 'required',
            'title2' => 'required',
            'description2' => 'required',*/
        ];

        $messages=[
            'title.required'=> 'Ingrese un título',
            'description.required'=> 'Ingrese la descripción',
            'button_name.required'=> 'Ingrese el nombre del botón',
            'button_link.required'=> 'Ingrese el link del botón',
            'slider_desktop.required'=> 'Suba la imagen para desktop',
            'slider_mobile.required'=> 'Suba la imagen para mobile',
            'title2.required'=> 'Ingrese un título2',
            'description2.required'=> 'Ingrese la descripción2',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->home_sliders):
                $request->merge(['home_sliders'=>array_values(collect($request->home_sliders)->sortBy(['order'])->toArray())]);
            endif;
            if($request->project_sliders):
                $request->merge(['project_sliders'=>array_values(collect($request->project_sliders)->sortBy(['order'])->toArray())]);
            endif;
            if($request->contact_sliders):
                $request->merge(['contact_sliders'=>array_values(collect($request->contact_sliders)->sortBy(['order'])->toArray())]);
            endif;
            if($request->blog_sliders):
                $request->merge(['blog_sliders'=>array_values(collect($request->blog_sliders    )->sortBy(['order'])->toArray())]);
            endif;
            if($request->benefit_items):
                $request->merge(['benefit_items'=>array_values(collect($request->benefit_items)->sortBy(['order'])->toArray())]);
            endif;
            if($request->details):
                $request->merge(['details'=>array_values(collect($request->details)->sortBy(['order'])->toArray())]);
            endif;
            if($request->number_counter):
                $request->merge(['number_counter'=>array_values(collect($request->number_counter)->sortBy(['order'])->toArray())]);
            endif;
            if($request->popup):
                $request->merge(['popup'=>array_values(collect($request->popup)->toArray())]);
            endif;
            $home = Home::find(1);
            $home->fill($request->all())->save();
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
