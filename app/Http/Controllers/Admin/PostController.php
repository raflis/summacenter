<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
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
        $posts = Post::orderBy('order','Asc')->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
            'slug' => 'required|unique:posts,slug',
            'author'=>'required',
            'author_description'=>'required',
            'excerpt'=>'required',
            'body'=>'required',
            'status'=>'required',
            'image'=>'required',
            'order'=>'required',
        ];

        $messages=[
            'name.required'=> 'Ingrese el nombre de la publicación',
            'slug.required'=>'La URL amigable es necesaria',
            'slug.unique'=>'Ya existe un registro con la misma URL',
            'author.required'=>'Ingrese el nombre del autor',
            'author_description.required'=>'Ingrese una breve descripción del autor',
            'excerpt.required'=>'Ingrese el extracto de la publicación',
            'body.required'=>'Ingrese el cuerpo de la publicación',
            'status.required'=>'Seleccione el estado de la publicación',
            'image.required'=>'Seleccione una imagen',
            'order.required'=>'Ingrese el orden de la publicación',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $post = Post::create($request->all());
            return redirect()->route('posts.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
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
            'slug' => 'required|unique:posts,slug,'.$id,
            'author'=>'required',
            'author_description'=>'required',
            'excerpt'=>'required',
            'body'=>'required',
            'status'=>'required',
            'image'=>'required',
            'order'=>'required',
        ];

        $messages=[
            'name.required'=> 'Ingrese el nombre de la publicación',
            'slug.required'=>'La URL amigable es necesaria',
            'slug.unique'=>'Ya existe un registro con la misma URL',
            'author.required'=>'Ingrese el nombre del autor',
            'author_description.required'=>'Ingrese una breve descripción del autor',
            'excerpt.required'=>'Ingrese el extracto de la publicación',
            'body.required'=>'Ingrese el cuerpo de la publicación',
            'status.required'=>'Seleccione el estado de la publicación',
            'image.required'=>'Seleccione una imagen',
            'order.required'=>'Ingrese el orden de la publicación',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $post = Post::find($id);
            $post->fill($request->all())->save();
            return redirect()->route('posts.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $post = Post::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
