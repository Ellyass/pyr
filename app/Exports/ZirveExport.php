<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Excel;


class ZirveExport implements FromView
{

    private  $data;
    private  $office;
    private  $year;



    public function __construct($data ,$office,$year)
    {
             $this->data = $data;
             $this->office = $office;
             $this->year = $year;
            //$this->jquerys = $jquerys;

    }

    public function view(): View
    {
        libxml_use_internal_errors(true);
               // //View::share('data',$this->data);
                // View::share('office',$this->office);
                // View::share('year',$this->year);
       return view('backend.zirve.file_upload_table',['data' => $this->data,'year' => $this->year,'office'=>$this->office]);
       // return view('backend.teklif.jquery2',['jquerys'=>$this->jquerys]);

       // return view('backend.zirve.file_upload_table');

      //  Excel::store(new ZirveExport(), 'excelgelirgider.xlsx', 'excel_reports');
        //Excel::store('gelir gider', storage_path('excel/exports'));

    }
}
