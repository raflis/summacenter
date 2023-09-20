<?php

namespace App\Http\Controllers\Admin;

use Excel;
use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\Sale;
use App\Http\Controllers\Controller;

class SaleController extends Controller
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
    
    public function excel(Request $request)
    {
        $name = $request->get('name');
        $paid = $request->get('paid');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        return Excel::download(new SalesExport($name, $paid, $startdate, $enddate),'registros-ventas.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $paid = $request->get('paid');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        $sales = Sale::orderBy('transaction_date', 'Desc')
                        ->name($name)
                        ->paid($paid)
                        ->startdate($startdate)
                        ->enddate($enddate)
                        ->paginate();
        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create');
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
        $sale = Sale::find($id);
        return view('admin.sales.edit', compact('sale'));
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
        $rules=[
            'paid' => 'required',
        ];

        $messages=[
            //
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $updated = Sale::find($id);
            if($request->paid == 1):
                $request->merge(['status' => 'Authorized']);
            endif;
            $updated->fill($request->all())->save();
            return redirect()->route('sales.index')->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
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
