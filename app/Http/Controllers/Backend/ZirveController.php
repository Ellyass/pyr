<?php

namespace App\Http\Controllers\Backend;
use App\Exports\ZirveExport;
use App\Http\Controllers\Controller;
use App\Model\OfficeCost;
use App\Model\ZirveFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleXLSX;
use Excel;
use App\Imports\UsersImport;
use App\Imports\UsersImport2;
use Carbon\Carbon;

class ZirveController extends Controller
{
    public function index()
    {

      //  die(var_dump(Carbon::now()->addMonth(3)->format('d.m.Y')));

        $office = OfficeCost::first();

        $data = ZirveFile::first();


        return view('backend.zirve.create');
    }
    public function file(Request $request)
    {

        $this->validate($request,[

            'income_file' => 'required|mimes:xls,xlsx',
            'expense_file' => 'required|mimes:xls,xlsx'

        ]);



         $income_file = $request->file('income_file')->getRealPath();
         $expense_file = $request->file('expense_file')->getRealPath();

        $file1 = SimpleXLSX::parse($income_file);
        $file2 = SimpleXLSX::parse($expense_file);

        foreach($file1->rows() as $row) {

            ZirveFile::create([
                'zirve_date' => $row[0],
                'cari_name' => $row[3],
                'stock_code' => $row[6],
                'stock_name' => $row[7],
                'total' => $row[10],
                'kdv_money' => $row[12],
                'period_date'=>$request->period_date,
                'type'=>1
            ]);
        }

        foreach($file2->rows() as $row) {
            ZirveFile::create([
                'zirve_date' => $row[0],
                'cari_name' => $row[3],
                'stock_code' => $row[6],
                'stock_name' => $row[7],
                'total' => $row[10],
                'kdv_money' => $row[12],
                'period_date'=>$request->period_date,
                'type'=>0
            ]);
        }


        if ($file1 && $file2) {
            return view('backend.zirve.file_upload');
        }

    }
    public function excell()
    {

        $year = $_POST['year'];
        //$office = OfficeCost::first();
        $data = ZirveFile::first();
        $month = ZirveFile::select(DB::raw('COUNT(YEAR(period_date)) as yil_adet'),DB::raw('COUNT(MONTH(period_date)) as ay_adet'),'period_date')->groupBY(DB::raw('YEAR(period_date)'))->groupBY(DB::raw('MONTH(period_date)'))->whereYear('period_date',$year)->get();
       // $a = DB::table('zirve_files')->select(DB::raw('YEAR(period_date)'))->from('zirve_files')->groupBy( DB::raw('YEAR(period_date), MONTH(period_date)'));

         $sorgu = $month->count();
        //echo $a->count();

       return view('backend.zirve.file_upload_table',compact('data','office','year','sorgu'));
     //return Excel::store(new ZirveExport($data,$office,$year), 'excelgelirgider.xlsx', 'excel_reports');
      //  return Excel::download(new ZirveExport($data,$office,$year),'excelgelirgider.xlsx');
      //  Excel::store(new ZirveExport($data,$office,$year), 'excelgelirgider.xlsx', 'excel_reports');

    }
    public function report_get()
    {
        return view('backend.zirve.report');
    }


    public function report_post()
    {
        $year = $_POST['year'];
        //$office = OfficeCost::first();
        $data = ZirveFile::first();
        return view('backend.zirve.report2',compact('office','data','year'));
    }
    public function show ()
    {
        $excel = ZirveFile::all();
        return view('backend.zirve.excel_list',compact('excel'));
        return Excel::store(new ZirveExport($excel), 'excelgelirgider.xlsx', 'excel_reports');
    }
}
