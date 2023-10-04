<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\PageField;
use App\Http\Controllers\Controller;

class PageFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:user');
        $this->middleware('isadmin');
    }

    public function choose()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.choose', compact('pagefield'));
    }

    public function achievement()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.achievement', compact('pagefield'));
    }

    public function cover_page()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.cover_page', compact('pagefield'));
    }

    public function support()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.support', compact('pagefield'));
    }

    public function graduates()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.graduates', compact('pagefield'));
    }

    public function aboutus()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.aboutus', compact('pagefield'));
    }

    public function terms_and_conditions()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.terms_and_conditions', compact('pagefield'));
    }

    public function privacy_policies()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.privacy_policies', compact('pagefield'));
    }

    public function responsability()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.responsability', compact('pagefield'));
    }

    public function certifications()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.certifications', compact('pagefield'));
    }

    public function index()
    {
        //
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
            /*'title' => 'required',*/
        ];

        $messages=[
            'title.required'=> 'Ingrese un título',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if($request->choose_items):
                $request->merge(['choose_items'=>array_values(collect($request->choose_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->achievement_items):
                $request->merge(['achievement_items'=>array_values(collect($request->achievement_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->support_items1):
                $request->merge(['support_items1'=>array_values(collect($request->support_items1)->sortBy(['order'])->toArray())]);
            endif;

            if($request->support_items2):
                $request->merge(['support_items2'=>array_values(collect($request->support_items2)->sortBy(['order'])->toArray())]);
            endif;

            if($request->graduates_items):
                $request->merge(['graduates_items'=>array_values(collect($request->graduates_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->aboutus_items1):
                $request->merge(['aboutus_items1'=>array_values(collect($request->aboutus_items1)->sortBy(['order'])->toArray())]);
            endif;

            if($request->aboutus_items2):
                $request->merge(['aboutus_items2'=>array_values(collect($request->aboutus_items2)->sortBy(['order'])->toArray())]);
            endif;

            if($request->cover_pages):
                $request->merge(['cover_pages'=>array_values(collect($request->cover_pages)->sortBy(['order'])->toArray())]);
            endif;

            if($request->certifications_items2):
                $request->merge(['certifications_items2'=>array_values(collect($request->certifications_items2)->sortBy(['order'])->toArray())]);
            endif;

            if($request->certifications_items4):
                $request->merge(['certifications_items4'=>array_values(collect($request->certifications_items4)->sortBy(['order'])->toArray())]);
            endif;
            
            $pagefield = PageField::find(1);
            $pagefield->fill($request->all())->save();
            return redirect()->back()->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
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
