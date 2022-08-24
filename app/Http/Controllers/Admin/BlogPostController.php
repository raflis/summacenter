<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\BlogTag;
use App\Models\Admin\BlogPost;
use App\Models\Admin\BlogCategory;
use App\Http\Controllers\Controller;
use App\Models\Admin\BlogSubCategory;

class BlogPostController extends Controller
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
        $blog_sub_category = BlogSubCategory::find($id_get);
        $blog_posts = BlogPost::where('blog_sub_category_id', $id_get)->orderBy('order','Asc')->paginate();
        return view('admin.blog_posts.index', compact('blog_posts', 'blog_sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_get = $request->id_get;
        $blog_sub_category = BlogSubCategory::find($id_get);
        $tags = BlogTag::orderBy('name', 'ASC')->get();
        return view('admin.blog_posts.create', compact('blog_sub_category', 'tags'));
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
            'blog_sub_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'status' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'blog_category_id.required' => 'Seleccione categoria',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'La URL amigable es necesaria',
            'image1.required' => 'Ingrese la imagen para el blog',
            'image2.required' => 'Ingrese la imagen de cabecera en el post',
            'summary.required' => 'Ingrese el resumen',
            'body.required' => 'Ingrese el contenido del post',
            'status.required' => 'Seleccione el status',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $recorded = BlogPost::create($request->all());
            $recorded->blog_tags()->attach($request->get('blog_tags'));
            return redirect()->route('blog_posts.index', ['id_get' => $id_get])->with('message', 'Creado con éxito.')->with('typealert', 'success');
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
        $blog_sub_category = BlogSubCategory::find($id_get);
        $tags = BlogTag::orderBy('name', 'ASC')->get();
        $blog_post = BlogPost::find($id);
        return view('admin.blog_posts.edit', compact('blog_post', 'blog_sub_category', 'tags'));
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
            'blog_sub_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'status' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'blog_category_id.required' => 'Seleccione categoria',
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'La URL amigable es necesaria',
            'image1.required' => 'Ingrese la imagen para el blog',
            'image2.required' => 'Ingrese la imagen de cabecera en el post',
            'summary.required' => 'Ingrese el resumen',
            'body.required' => 'Ingrese el contenido del post',
            'status.required' => 'Seleccione el status',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = BlogPost::find($id);
            $updated->fill($request->all())->save();
            $updated->blog_tags()->sync($request->get('blog_tags'));
            return redirect()->route('blog_posts.index', ['id_get' => $id_get])->with('message', 'Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = BlogPost::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert', 'success');
    }
}
