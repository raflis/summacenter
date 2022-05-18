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
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->choose_items):
                $request->merge(['choose_items'=>array_values(collect($request->choose_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->achievement_items):
                $request->merge(['achievement_items'=>array_values(collect($request->achievement_items)->sortBy(['order'])->toArray())]);
            endif;
            
            $pagefield = PageField::find(1);
            $pagefield->fill($request->all())->save();
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
