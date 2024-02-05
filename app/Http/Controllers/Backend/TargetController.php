<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Offer;
use App\Model\Target;
use App\Model\TargetSeller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
{
    public function index()
    {
        $targets = Target::all();
        $sellers = TargetSeller::all();
        $offer = Offer::first();
        return view('backend.seller.target_create',compact('sellers','offer','targets'));
    }

    public function target_create(Request $request)
    {
        $target_seller_id = $_POST['seller'];
        if ($target_seller_id==3)
        {
            $user_id = 10;
        }
        if ($target_seller_id==4)
        {
            $user_id = 8;
        }
        if ($target_seller_id==1)
        {
            $user_id = 11;
        }


          $target = Target::create([
              'date' => $request->date,
            'user_id'=>$user_id,
            'target_seller_id' => $target_seller_id,
            'target_date' => Carbon::createFromDate($request->date)->addMonth($request->target_date),
            'target_money' => $request->target_money,
              'target_status' => 0
        ]);

          if ($target)
          {
              return redirect(route('target.index'));
          }
    }

    public function show($id)
    {

        $targets = Target::where('user_id',$id)->get();
        $offer = Offer::all();
        return view('backend.seller.personel_show',compact('targets','offer','id','jquerys'));
    }
    public function detail()
    {

        $targets = Target::all();
        $sellers = TargetSeller::all();
        $offer = Offer::first();


        $id = Auth::user()->id;
        $target_id = TargetSeller::where('user_id',$id)->get();
        $offer_data = Offer::select()->where('target_seller_id',$target_id[0]->id);

        $mounth=$_POST['month'];
        $year=$_POST['year'];

        if (!empty($mounth))
        {

                $offer_data->where('target_seller_id',$target_id[0]->id)->whereMonth('offer_date', $mounth);

        }
        if (!empty($year))
        {
                $offer_data->where('target_seller_id',$target_id[0]->id)->whereYear('offer_date', $year);

        }
        $jquerys =   $offer_data->get();
        return view('backend.seller.detail',compact('jquerys','targets','sellers','offer'));
    }
}
