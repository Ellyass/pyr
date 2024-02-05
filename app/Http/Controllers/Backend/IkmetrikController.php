<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\DemoExplanation;
use App\Model\DemoMetrik;
use App\Model\TargetSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class IkmetrikController extends Controller
{
    public function index()
    {
        //$ikmetriks = DemoMetrik::all();
        $ikmetriks = DB::table('demo_metriks')
            ->join('demo_explanations', 'demo_metriks.id', '=', 'demo_explanations.demo_id')
            ->join('customers', 'customers.id', '=', 'demo_metriks.customer_id')
            ->get();
        $customers = Customer::all();
        $sellers = TargetSeller::where('target_status','1')->get();

        View::share('customers',$customers);
        View::share('sellers',$sellers);
        View::share('ikmetriks',$ikmetriks);
        return view('backend.ikmetrik.ikmetrik_demo');
    }
    public function demo_create(Request $request)
    {

        $demo = DemoMetrik::create([
            'customer_id'=>$request->customer_id,
            'target_seller_id'=>$request->Seller,
            'demo_date'=>$request->demo_date,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'demo_status'=>'1',
            'call_1_day'=>'0',
            'call_7_day'=>'0',
            'call_13_day'=>'0',
            'phone'=>$request->phone,
            'ad_soyad'=>$request->ad_soyad
        ]);

        $demo_explanation = DemoExplanation::create([

            'demo_id' => $demo->id,
            'demo_explanation'=>$request->demo_explanation
        ]);


        if ($demo)
        {
            return redirect(route('ikmetrik.index'));
        }
    }

    public function delete($id)
    {
        $delete = DemoMetrik::where('id',$id)->delete();
        if ($delete)
        {
            return redirect(route('ikmetrik.index'));
        }
    }
}
