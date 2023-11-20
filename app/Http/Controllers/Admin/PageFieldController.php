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

    public function job_bank_advertising()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.job_bank_advertising', compact('pagefield'));
    }

    public function index_title()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.index_title', compact('pagefield'));
    }

    public function educational_model()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.educational_model', compact('pagefield'));
    }

    public function distinctions()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.distinctions', compact('pagefield'));
    }

    public function digital_badges()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.digital_badges', compact('pagefield'));
    }
    
    public function academic_group()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.academic_group', compact('pagefield'));
    }

    public function corporative_training()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.corporative_training', compact('pagefield'));
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

            if($request->educational_model_learning):
                $request->merge(['educational_model_learning'=>array_values(collect($request->educational_model_learning)->sortBy(['order'])->toArray())]);
            endif;

            if($request->educational_model_models):
                $request->merge(['educational_model_models'=>array_values(collect($request->educational_model_models)->sortBy(['order'])->toArray())]);
            endif;

            if($request->educational_model_items):
                $request->merge(['educational_model_items'=>array_values(collect($request->educational_model_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->distinctions_items):
                $request->merge(['distinctions_items'=>array_values(collect($request->distinctions_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->distinctions_images):
                $request->merge(['distinctions_images'=>array_values(collect($request->distinctions_images)->sortBy(['order'])->toArray())]);
            endif;

            if($request->digital_badges_detail4):
                $request->merge(['digital_badges_detail4'=>array_values(collect($request->digital_badges_detail4)->sortBy(['order'])->toArray())]);
            endif;

            if($request->digital_badges_detail5):
                $request->merge(['digital_badges_detail5'=>array_values(collect($request->digital_badges_detail5)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_3):
                $request->merge(['field_free_3'=>array_values(collect($request->field_free_3)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_5):
                $request->merge(['field_free_5'=>array_values(collect($request->field_free_5)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_6):
                $request->merge(['field_free_6'=>array_values(collect($request->field_free_6)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_7):
                $request->merge(['field_free_7'=>array_values(collect($request->field_free_7)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_8):
                $request->merge(['field_free_8'=>array_values(collect($request->field_free_8)->sortBy(['order'])->toArray())]);
            endif;

            if($request->field_free_9):
                $request->merge(['field_free_9'=>array_values(collect($request->field_free_9)->sortBy(['order'])->toArray())]);
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
