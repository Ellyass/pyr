<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Exports\ZirveExport;
use App\Model\Offer;
use App\Model\Seller;
use App\Model\TargetSeller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;
use App\Model\Explanation;
use App\Model\OfferFile;
use Illuminate\Support\Facades\DB;
use Excel;
use setasign\Fpdi\Fpdi;
use DateTime;



class TeklifController extends Controller
{
    public function offer_detail_delete(Request $request,$id)
    {
        OfferFile::where('id',$id)->delete([]);
        return back();
    }
    public function index()
    {
        $error=0;
        $targets = TargetSeller::select('id','user_id')->get();
        $user_id = Auth::user()->id;

        foreach ($targets as $target)
        {
            if ($user_id==$target->user_id)
            {
                $id=$target->id;
            }
        }
        if (Auth::user()->power_status == 1 || Auth::user()->power_status == 2)
        {
            $products = Product::all();
            $offers = Offer::orderBy('id','DESC')->get();
        }
        else
        {
            $products = Product::all();
            if (isset($id))
            {
                     $offers = Offer::orderBy('id','DESC')->where('target_seller_id',$id)->get();
                if ($offers->count()==0)
                {
                    $error=1;
                }
            }

        }


        return view('backend.teklif.index',compact('offers','products','error'));
    }

    public function import(Request $request)
    {
                $birim = $_POST['offer_amount'];
                $money = $_POST['offer_money'];

                $total = $money * (int)$birim;




           if ($request->hasFile('offer_file'))
           {
               $request->validate([
                  'offer_file'=>'required|file|mimes:pdf|max:10000'

               ]);
               $file = $request->file('offer_file');
               $filename=uniqid().'.'.$request->offer_file->getClientOriginalExtension();
               $filePath = public_path().'/pdf/';
               $file->move($filePath, $filename);
               $file=$filename;
           }
           $offer = Offer::create([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $money,
                "offer_total" => $total,
                "offer_date" => $request->offer_date,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id"=>$request->Seller,
                'kdv'=>$request->kdv
           ]);

           $offer_file = OfferFile::create([
               "customer_id" => $request->customer_id,
               "offer_id"=>$offer->id,
               "offer_file"=>$filename
           ]);

/*
        $data = new Offer();
            $file = $request->file('offer_file');
            $filename = time() . '.' . $request->file('offer_file')->extension();
            $filePath = public_path() . '/pdf/';
            $file->move($filePath, $filename);
            $data->offer_file=$filename;
            $data->customer_id = $request->customer_id;
            $data->offer_amount = $birim;
            $data->user_id = Auth::user()->id;
            $data->offer_money = $money;
            $data->offer_total = $total;
            $data->offer_date = $request->offer_date;
            $data->product_id = $request->product_id;
            $data->offer_status=1;
            $data->save();

*/

            $explanitons=Explanation::create([
            'offer_id' => $offer->id,
            'explanation'  => $request->offer_explanation
        ]);
/*
            $seller = Seller::create([

                'offer_id'=>$offer->id,
                'seller_type'=>$request->seller_type,
                'seller_name'=>$request->seller_name
            ]);

*/

        if ($offer) {
            return redirect(route('offer.index'))->with('success','Teklif Kaydetme İşlemi Başarılı');
        }
        else
            {
                return redirect(route('offer.create'))->with('error','Teklif Kaydetme İşlemi Başarısız Dosyayı Kontrol Ediniz');
            }
    }
    public function create()
    {
        $products = Product::all();
        $sellers = TargetSeller::where('target_status','1')->get();
       // $offers = Offer::get();
       //$customers = Customer::orderBy('name','ASC')->get();
       $customers = Customer::join('customer_emails','customers.id','=','customer_emails.customer_id')->select('customers.id','customers.name')->groupBy('customers.name')->orderBy('name','ASC')->get();
        return view('backend.teklif.teklif_create',compact('customers','sellers','products'));

    }
    public function file($id)
    {

        $offer = Offer::find($id);
        $tarih1 = new DateTime($offer->created_at);
        $tarih2 = Carbon::now();
        $interval = $tarih1->diff($tarih2);

        $customer = Customer::where('id',$offer->customer_id);
        return view('backend.teklif.detail' ,compact('offer','customer','interval'));


    }
    public function jquery(Request $request)
    {
          $offer_data = Offer::select();

        $mounth=$_POST['mounth'];
        $product=$_POST['product'];
        $year=$_POST['year'];
        $status = $_POST['status'];
        $personel_id = Auth::user()->id;
        if ($personel_id == 10)
        {
            $id = 3;
        }

        if ($personel_id == 11)
        {
            $id = 1;
        }
        if ($personel_id == 23)
        {
            $id = 7;
        }

        if ($personel_id == 24)
        {
            $id = 8;
        }


         if (!empty($mounth))
         {
            $offer_data->whereMonth('offer_date',$mounth)->sum('offer_total');
         }
         if (!empty($product))
         {
             $offer_data->where('product',$product)->sum('offer_total');
         }
         if (!empty($year))
         {
             $offer_data->whereYear('offer_date',$year)->sum('offer_total');
         }
         if (!empty($status))
         {
            $offer_data->where('offer_status',$status)->sum('offer_total');
         }

          $jquerys =   $offer_data->get();
         $products = Product::all();


    /*
          $all = Offer::select();
        if (!empty($mounth))
        {

            $all->whereMonth('offer_date',$mounth)->sum('offer_total');
            die(var_dump($all));
        }
        if (!empty($product))
        {
            $all->where('product',$product)->sum('offer_total');
        }
        if (!empty($year))
        {
            $all->whereYear('offer_date',$year)->sum('offer_total');
        }
        $datas  =   $all->get();
*/

      //  Excel::download(new ZirveExport($jquerys),'teklifRapor.xlsx');
        //$datas=Offer::whereMonth('offer_date','=',$mounth)->where('product',$product)->whereMonth('offer_date','=',$mounth)->whereYear('offer_date',$year)->sum('offer_total');
      //  $accepts=Offer::whereMonth('offer_date','=',$mounth)->where('product',$product)->where('offer_status',2)->whereMonth('offer_date','=',$mounth)->whereYear('offer_date',$year)->sum('offer_total');
        return view('backend.teklif.jquery',compact('jquerys','products'));
    }


    public function edit($id)
    {
        $offer = Offer::find($id);
        $sellers = TargetSeller::where('target_status','1')->get();
        return view('backend.teklif.edit',compact('offer','sellers'));
    }


    public function contract_upload($id)
    {
        $offer = Offer::find($id);
        $sellers = TargetSeller::where('target_status','1')->get();
        return view('backend.teklif.contract_upload',compact('offer','sellers'));
    }


    public function update(Request $request, $id)
    {
        $birim = $_POST['offer_amount'];
        $money = $_POST['offer_money'];
        $total = $money * $birim;
        if ($request->hasFile('offer_file'))
        {
            $request->validate([
                'offer_file'=>'required|file|mimes:pdf|max:50000'

            ]);

            $file = $request->file('offer_file');
            $filename=uniqid().'.'.$request->offer_file->getClientOriginalExtension();
            $filePath = public_path().'/pdf/';
            $file->move($filePath, $filename);
            $file=$filename;
        }

        $update = Offer::where('id',$id)->update([

            'customer_id' => $request->customer_id,
            'offer_amount' => $request->offer_amount,
            'user_id' => Auth::user()->id,
            'offer_money' => $request->offer_money,
            'offer_total' => $total,
            'target_seller_id'=>!empty($request->Seller) ? $request->Seller  : $request->target_Seller_id,
            'product' => $request->product,
            'offer_status' => $request->offer_status,
            'kdv'=>$request->kdv,
            'offer_date'=>$request->offer_date
        ]);
        if (!empty($request->offer_file)) {

            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $id,
                "offer_file" => $filename
            ]);
        }
        if (!empty($request->offer_explanation)) {

            $explanitons = Explanation::create([
                'offer_id' => $request->offer_id,
                'explanation' => $request->offer_explanation
            ]);
        }
        if ($update)
        {
            $path='pdf/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }
            return redirect(route('offer.index'))->with('success','Güncelleme Kaydetme İşlemi Başarılı');
        }
        if ($explanitons)
        {
            return redirect(route('offer.index'))->with('success','Güncelleme Kaydetme İşlemi Başarılı');
        }
        if ($offer_file)
        {
            return redirect(route('offer.index'))->with('success','Güncelleme Kaydetme İşlemi Başarılı');

        }


    }
    public function status($id)
    {
        $status=Offer::where('id',$id)->get();
        return view('backend.teklif.status',compact('status'));

    }
    public function up(Request $request,$id)
    {
        $customer = Offer::where('id',$id)->first();
       $status=Offer::where('id',$id)->update([
            'offer_status'=>$request->offer_status

       ]);
       if ($request->offer_status==2)
       {
            $customer = Customer::where('id',$customer->customer_id)->update([
                'status'=>'GERÇEK'
            ]);

       }
       if ($status)
       {
           return  redirect(route('offer.index'));
       }



    }
    public function report()
    {
        return view('backend.teklif.report');
    }
    public function reportPost()
    {
        $jquerys = Offer::select();


        $mounth = $_POST['mounth'];
        $year = $_POST['year'];

        if (!empty($mounth))
        {
            $jquerys->whereMonth('offer_date',$mounth);

        }

        if (!empty($year))
        {
            $jquerys->whereYear('offer_date',$year);

        }

         $Offers =  $jquerys->get();

      //  $Offers->get();
        return view('backend.teklif.report2',compact('Offers'));
    }
    public function delete($id)
    {
        $offer = Offer::where('id',$id)->delete();
        $file = OfferFile::where('offer_id',$id)->delete();
        $explanations = Explanation::where('offer_id',$id)->delete();
            if ($offer)
                {
                    return redirect(route('offer.index'));
                }
    }
    public function ikmetrik()
    {
        function firma()
        {
            $firma ="Elatekı";
            return iconv('utf-8','windows-1254',$firma);
        }

        $tarih='19.09.1999';
        $aylik = 'Aylık';
        $aralik = "0-20";
        $ucret = '50';
                public_path('autoload.php');
        $pdf = new Fpdi();
// add a page
        $pdf->AddPage();
// set the source file
        $pdf->setSourceFile("ikmetrik.pdf");
// import page 1
        $tplId = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
        $pdf->useTemplate($tplId, 10, 0, 150);
        $pdf->AddPage();
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('15'); // set font size
        $pdf->SetXY(12, 212); // set the position of the box
        $pdf->Cell(0, 0, $tarih, 0, 0, 'C');
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('15'); // set font size
        $pdf->SetXY(0, 230); // set the position of the box
        $pdf->Cell(0, 0, $tarih, 0, 0, 'C');


        // set font size
        $pdf->SetXY(0, 247.5); // set the position of the box
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',14);
        $pdf->SetFont('arial_tr');
        $pdf->Cell(0, 0, firma(), 0, 0, 'C');




        $tplId = $pdf->importPage(2);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddPage();
// set font size
        $pdf->SetXY(-330, 62.2);
        // set the position of the box
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',14);
        $pdf->SetFont('arial_tr');
        $pdf->Cell(0, 0, turkce('Elatekı'), 0, 0, 'C');



        $tplId = $pdf->importPage(3);
        $pdf->useTemplate($tplId, 10, 0, 200);




        $pdf->AddPage();
        $tplId = $pdf->importPage(4);
        $pdf->useTemplate($tplId, 10, 0, 200);





        $pdf->AddPage();
        $tplId = $pdf->importPage(5);
        $pdf->useTemplate($tplId, 10, 0, 200);







        $pdf->AddPage();
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('20'); // set font size
        $pdf->SetXY(50, 128); // set the position of the box
        $pdf->Cell(1, 1, turkce($aylik), 4, 3, 'C');
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('20'); // set font size
        $pdf->SetXY(109.5, 128); // set the position of the box
        $pdf->Cell(1, 1, turkce($aralik), 4, 3, 'C');
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('20'); // set font size
        $pdf->SetXY(165, 128); // set the position of the box
        $pdf->Cell(1, 1, turkce($ucret), 4, 3, 'C');
        $tplId = $pdf->importPage(6);
        $pdf->useTemplate($tplId, 10, 0, 200);

//$path = 'C:\wamp64\www\calisma\test.pdf';
//$DATA = $pdf->Output($path,'F');
//$pdf->Output('D','dosya.pdf');
        $pdf->Output();
    }
    public function ajax_cron()
    {
        $id = $_POST['id'];
        $cron_1_day='0';
        $cron_2_week='0';
        $cron_1_week='0';
        $cron = Offer::find($id);

        if ($_POST['column']=='cron_1_week')
        {
            $cron->cron_1_week = $_POST['value'];
        }



        if ($_POST['column']=='cron_2_week')
        {
            $cron->cron_2_week = $_POST['value'];
        }



        if ($_POST['column']=='cron_1_day')
        {
            $cron->cron_1_day = $_POST['value'];
        }



            $cron->save();



        die('İşlem Başarıyla Gercekleşmiştir.');
    }




}
