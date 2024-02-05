<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Offer;
use App\Model\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use phpDocumentor\Reflection\Type;
use DateTime;

class CronController extends Controller
{
    public function cron_30dk()
    {

        $test = Notification::all();
        $offers = Offer::where('cron_1_day','0')->get();

        foreach ($offers as $offer) {
            $tarih1= new DateTime($offer->created_at);
            $tarih2= Carbon::now();
            $interval= $tarih1->diff($tarih2);

            $bildirim = new Notification();
            $bildirim->offer_id = $offer->id;
            $bildirim->customer_id = $offer->customer_id;
            $bildirim->offer_created_user = $offer->user_id;
            $bildirim->offer_save_date = $offer->created_at;
            $bildirim->created_at = Carbon::now();
            $bildirim->type_1_day = '0';
            $bildirim->type_7_day = '1';
            $bildirim->type_14_day = '1';
            $bildirim->explanation_1_day = '1 gün içinde ilk arama gerçekleştirilmedi';
            $a =  $test->where('type_1_day','0')->where('offer_id',$offer->id)->count();

            if($offer->cron_1_day==0 && $interval->days>=1) {

                if ($a==0) {
                    $bildirim->save();
                }

        }

        }

        if ($offers = Offer::where('cron_1_day','1')->get()) {
            $test = Notification::all();
            foreach ($offers as $offer) {
                $tarih1 = new DateTime($offer->created_at);
                $tarih2 = Carbon::now();
                $interval = $tarih1->diff($tarih2);

                $bildirim = new Notification();
                $bildirim->offer_id = $offer->id;
                $bildirim->customer_id = $offer->customer_id;
                $bildirim->offer_created_user = $offer->user_id;
                $bildirim->offer_save_date = $offer->created_at;
                $bildirim->created_at = Carbon::now();
                $bildirim->type_1_day = '2';
                $bildirim->type_7_day = '1';
                $bildirim->type_14_day = '1';
                $bildirim->explanation_1_day = '1 gün içinde ilk arama gerçekleştirildi';
                $a = $test->where('type_1_day', '2')->where('offer_id', $offer->id)->count();
                if ($offer->cron_1_day == 1 && $interval->days >= 1) {

                    if ($a == 0) {
                        $bildirim->save();
                    }

                }
            }
        }




       // $offers = Offer::where('cron_30_dk',['0'])->get();
      //  return view('backend.cron.cron_30dk',compact('c'));


    }


    public function cron_one_week()
    {
        $test = Notification::all();
        $offers = Offer::where('cron_1_week', '0')->get();

        foreach ($offers as $offer) {
            $tarih1 = new DateTime($offer->created_at);
            $tarih2 = Carbon::now();
            $interval = $tarih1->diff($tarih2);
            $a = $test->where('type_7_day', '1')->where('offer_id', $offer->id)->count();
            if ($offer->cron_1_week==0 && $interval->days>=7) {
                if ($a == 1) {
                    $bildirim = Notification::where('offer_id', $offer->id)->first();
                    $bildirim->type_7_day = '0';
                    $bildirim->explanation_7_day = '1 hafta içinde 2  arama gerçekleştirilmedi';
                    $bildirim->save();
                }
            }

        }



        if ($offers = Offer::where('cron_1_week',['1'])->get())
        {
            $test = Notification::all();
            $offers = Offer::where('cron_1_week',['1'])->get();
            foreach ($offers as $offer) {
                $tarih1= new DateTime($offer->created_at);
                $tarih2= Carbon::now();
                $interval= $tarih1->diff($tarih2);
                $a =  $test->where('type_7_day','1')->where('offer_id',$offer->id)->count();
                if ($offer->cron_1_week==1 && $interval->days>=7) {
                    if ($a==1) {
                        $bildirim = Notification::where('offer_id', $offer->id)->first();
                        $bildirim->type_7_day = '2';
                        $bildirim->explanation_7_day = '1 hafta içinde 2  arama gerçekleştirildi';
                        $bildirim->save();
                    }
                }
            }
        }
        }


    public function cron_two_week()
    {
        $test = Notification::all();
        $offers = Offer::where('cron_2_week',['0'])->get();
        foreach ($offers as $offer) {
            $tarih1= new DateTime($offer->created_at);
            $tarih2= Carbon::now();
            $interval= $tarih1->diff($tarih2);
            $a =  $test->where('type_14_day','1')->where('offer_id',$offer->id)->count();
            if ($offer->cron_2_week==0 && $interval->days>=14) {
                if ($a==1) {
                    $bildirim = Notification::where('offer_id', $offer->id)->first();
                    $bildirim->type_14_day = '0';
                    $bildirim->explanation_14_day = '2 hafta içinde 3  arama gerçekleştirilmedi';
                    $bildirim->save();
                }
            }
        }
        if ($offers = Offer::where('cron_2_week',['1'])->get())
        {
            $test = Notification::all();
            $offers = Offer::where('cron_2_week',['1'])->get();
            foreach ($offers as $offer) {
                $tarih1= new DateTime($offer->created_at);
                $tarih2= Carbon::now();
                $interval= $tarih1->diff($tarih2);
                $a =  $test->where('type_14_day','1')->where('offer_id',$offer->id)->count();
                if ($offer->cron_2_week==1 && $interval->days>=14) {
                    if ($a==1) {
                        $bildirim = Notification::where('offer_id', $offer->id)->first();
                        $bildirim->type_14_day = '2';
                        $bildirim->explanation_14_day = '2 hafta içinde 3  arama gerçekleştirildi';
                        $bildirim->save();
                    }
                }
            }
        }

    }

}

