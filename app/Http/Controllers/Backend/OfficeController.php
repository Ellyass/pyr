<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\CostForm;
use App\Model\OfficeForms;
use Illuminate\Http\Request;
use App\Model\OfficeCost;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = OfficeCost::all();
        return view('backend.Cos.office.index',compact('offices'));
    }
    public function create($id)
    {
        $forms = OfficeForms::where('office_cost_id',$id)->get();
        return view('backend.Cos.office.create',compact('id','forms'));
    }

    public function insert(Request $request)
    {


        $delete = OfficeForms::where('office_cost_id',$request->office_id)->delete([]);

        $office_dates = $request->office_date;
        $office_moneys = $request->office_money;
        $office_products = $request->office_product;
        $office_cost_id = $request->office_id;

        foreach ($office_dates as $key => $office_date )
        {
                    $expenses = OfficeForms::create([
                     //1.tarih  $form_date
                     //1.satırdaki masraf türü $form_types[$key]
                     //1.satırdaki money  $form_moneys[$key]
                     //$form_types[$key]
                         'office_date'=>$office_dates[$key],
                         'office_product'=>$office_products[$key],
                         'office_money'=>$office_moneys[$key],
                         'office_cost_id'=>$office_cost_id
                      ]);
                    $update = OfficeCost::where('id',$request->office_id)->update([
                        'cost_total'=>$request->cost_total
                    ]);
            }
        if ($expenses)
        {
            return redirect(route('office.index'));
        }
    }
    public function add(Request $request)
    {
        $office_mounth = OfficeCost::create([
            'date' =>$request->date
        ]);
        if ($office_mounth)
        {
            return redirect(route('office.index'));
        }
    }
}
