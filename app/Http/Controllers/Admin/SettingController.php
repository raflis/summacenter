<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Http\Controllers\Controller;

class SettingController extends Controller
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

    public function links()
    {
        $setting = Setting::find(1);
        return view('admin.settings.links', compact('setting'));
    }

    public function whatsapp()
    {
        $setting = Setting::find(1);
        return view('admin.settings.whatsapp', compact('setting'));
    }

    public function titles()
    {
        $setting = Setting::find(1);
        return view('admin.settings.titles', compact('setting'));
    }

    public function descriptions()
    {
        $setting = Setting::find(1);
        return view('admin.settings.descriptions', compact('setting'));
    }

    public function keywords()
    {
        $setting = Setting::find(1);
        return view('admin.settings.keywords', compact('setting'));
    }

    public function image()
    {
        $setting = Setting::find(1);
        return view('admin.settings.image', compact('setting'));
    }

    public function paymodetext()
    {
        $setting = Setting::find(1);
        return view('admin.settings.pay_mode_text', compact('setting'));
    }

    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.settings.index', compact('setting'));
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
            //
        ];

        $messages=[
            'address.required' => 'Ingrese dirección',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $updated = Setting::find(1);
            $updated->fill($request->all())->save();
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
