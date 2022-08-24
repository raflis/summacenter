<?php

namespace App\Http\Controllers\Admin;

use Excel;
use App\Models\Record;
use Illuminate\Http\Request;
use App\Exports\RecordsExport;
use App\Exports\ContactsExport;
use App\Exports\CorporateExport;
use App\Http\Controllers\Controller;

class RecordController extends Controller
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
    
    public function excel_record(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        return Excel::download(new RecordsExport($name, $lastname, $startdate, $enddate),'registros-inicio-curso.xlsx');
    }

    public function excel_contact(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        return Excel::download(new ContactsExport($name, $lastname, $startdate, $enddate),'registros-contacto.xlsx');
    }

    public function excel_corporate(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        return Excel::download(new CorporateExport($name, $lastname, $startdate, $enddate),'registros-corporativo.xlsx');
    }

    public function index(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        $records = Record::orderBy('id','Desc')
                            ->whereIn('from', ['curso', 'inicio'])
                            ->name($name)
                            ->lastname($lastname)
                            ->startdate($startdate)
                            ->enddate($enddate)
                            ->paginate();
        return view('admin.records.record', compact('records'));
    }

    public function contact(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        $records = Record::orderBy('id','Desc')
                            ->whereIn('from', ['contacto'])
                            ->name($name)
                            ->lastname($lastname)
                            ->startdate($startdate)
                            ->enddate($enddate)
                            ->paginate();
        return view('admin.records.contact', compact('records'));
    }

    public function corporate(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        $startdate = $request->get('start_date');
        $enddate = $request->get('end_date');

        $records = Record::orderBy('id','Desc')
                            ->whereIn('from', ['corporativo'])
                            ->name($name)
                            ->lastname($lastname)
                            ->startdate($startdate)
                            ->enddate($enddate)
                            ->paginate();
        return view('admin.records.corporate', compact('records'));
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
        //
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
