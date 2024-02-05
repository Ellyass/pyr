<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\DemoMetrik;
use App\Model\DemoNotification;
use App\Model\IkmetrikNotification;
use App\Model\Notification;
use App\Model\Offer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;

class IkmetrikCronController extends Controller
{
    public function cron_30dk()
    {

        $test = DemoNotification::all();
        $offers = DemoMetrik::where('call_1_day','0')->get();

        foreach ($offers as $offer) {
            $tarih1= new DateTime($offer->demo_date);
            $tarih2= Carbon::now();
            $interval= $tarih1->diff($tarih2);

            $bildirim = new DemoNotification();
            $bildirim->demo_metrik_id = $offer->id;
            $bildirim->customer_id = $offer->customer_id;
            $bildirim->demo_save_date = $offer->demo_date;
            $bildirim->call_1_day = '0';
            $bildirim->call_7_day = '1';
            $bildirim->call_13_day = '1';
            $bildirim->call_1_explanation = '1 gün içinde ilk arama gerçekleştirilmedi';
            $a =  $test->where('call_1_day','0')->where('demo_metrik_id',$offer->id)->count();
            if($offer->call_1_day==0 && $interval->days>=1) {
                if ($a==0) {
                    $bildirim->save();
                }

            }

        }

        if ($offers = DemoMetrik::where('call_1_day','1')->get()) {
            $test = DemoNotification::all();
                 foreach ($offers as $offer) {
                $tarih1 = new DateTime($offer->demo_date);
                $tarih2 = Carbon::now();
                $interval = $tarih1->diff($tarih2);

                $bildirim = new DemoNotification();
                $bildirim->demo_metrik_id = $offer->id;
                $bildirim->customer_id = $offer->customer_id;
                $bildirim->demo_save_date = $offer->demo_date;
                $bildirim->call_1_day = '2';
                $bildirim->call_7_day = '1';
                $bildirim->call_13_day = '1';
                $bildirim->call_1_explanation = '1 gün içinde ilk arama gerçekleştirildi';
                $a = $test->where('call_1_day', '2')->where('demo_metrik_id', $offer->id)->count();
                if ($offer->call_1_day == 1 && $interval->days >= 1) {

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
