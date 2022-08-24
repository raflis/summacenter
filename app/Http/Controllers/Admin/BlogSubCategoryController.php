<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\BlogCategory;
use App\Http\Controllers\Controller;
use App\Models\Admin\BlogSubCategory;

class BlogSubCategoryController extends Controller
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
        $id_get = $request->id_get;
        $name = BlogCategory::find($id_get)->name;
        $blog_sub_categories = BlogSubCategory::where('blog_category_id', $id_get)->orderBy('order','Asc')->paginate();
        return view('admin.blog_sub_categories.index', compact('blog_sub_categories', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_get = $request->id_get;
        $name = BlogCategory::find($id_get)->name;
        return view('admin.blog_sub_categories.create', compact('name'));
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
            'blog_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:blog_sub_categories,slug',
            'order' => 'required',
        ];

        $messages=[
            'blog_category_id.required' => 'Seleccione categoria',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = BlogSubCategory::create($request->all());
            return redirect()->route('blog_sub_categories.index', ['id_get' => $id_get])->with('message','Creado con éxito.')->with('typealert','success');
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
        $id_get = $request->id_get;
        $name = BlogCategory::find($id_get)->name;
        $blog_sub_category = BlogSubCategory::find($id);
        return view('admin.blog_sub_categories.edit', compact('blog_sub_category', 'name'));
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
            'blog_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:blog_sub_categories,slug,'.$id,
            'order' => 'required',
        ];

        $messages=[
            'blog_category_id.required' => 'Seleccione área',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'Ingrese slug url',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = BlogSubCategory::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('blog_sub_categories.index', ['id_get' => $id_get])->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = BlogSubCategory::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
