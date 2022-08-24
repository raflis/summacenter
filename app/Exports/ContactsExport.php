<?php

namespace App\Exports;

use App\Models\Record;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ContactsExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $name, $lastname, $start_date, $end_date;

    public function __construct($name, $lastname, $start_date, $end_date)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
    
    public function view(): View
    {
        return view('admin.records.excel.contact', [
            'records' => Record::orderBy('id','Desc')
                                ->whereIn('from', ['contacto'])
                                ->name($this->name)
                                ->lastname($this->lastname)
                                ->startdate($this->start_date)
                                ->enddate($this->end_date)
                                ->get()
        ]);
    }
}
