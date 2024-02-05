<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\Cost;
use Illuminate\Http\Request;

class CosReportController extends Controller
{
    public function index()
    {
        return view('backend.Cos.report');
    }

    public function show(Request $request)
    {
        $data = Cost::select();
        $totals = Cost::select();
        $mounth = $_POST['mounth'];
        $year = $_POST['year'];

        if (!empty($mounth))
        {
            $data->whereMonth('cost_date',$mounth)->groupBy('user_id');
            $totals->whereMonth('cost_date',$mounth);

        }
        if (!empty($year))
        {
            $data->whereYear('cost_date',$year)->groupBy('user_id');
            $totals->whereYear('cost_date',$year);

        }

                 $costs = $data->get();
                $total = $totals->get();

        return view('backend.Cos.report2',compact('costs','total','mounth'));
    }
}
