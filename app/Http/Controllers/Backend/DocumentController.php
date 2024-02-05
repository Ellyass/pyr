<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Explanation;
use App\Model\Offer;
use App\Model\Customer;
use App\Model\OfferFile;
use App\Model\TargetSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use View;
use PDF;

class DocumentController extends Controller
{
    public function index()
    {
        return view('backend.documention.documention');
    }
    public function iys_pdf_data(Request $request)
    {
        $birim = 1;
        $yuzdelik = $_POST['yuzdelik'];
        $customer_id =  $_POST['customer_id'];
        $customer = Customer::find($customer_id);
        $customer_name = $customer->name;
        $offer_date =  $_POST['offer_date'];
        $money = $_POST['offer_money'];

        $offer = Offer::create([
            "customer_id" => $request->customer_id,
            "offer_amount" => $birim,
            "user_id" => Auth::user()->id,
            "offer_money" => $request->offer_money,
            "offer_total" => $request->offer_money,
            "offer_date" => $request->offer_date,
            "product" => $request->product,
            "offer_status" => 1,
            "target_seller_id"=>$request->target_Seller_id,
            'kdv'=>$request->kdv,
        ]);

        $offer_file = OfferFile::create([
            "customer_id" => $request->customer_id,
            "offer_id"=>$offer->id,
            "offer_file"=>$offer->id.'.pdf'
        ]);

        $explanitons=Explanation::create([
            'offer_id' => $offer->id,
            'explanation'  => $request->offer_explanation
        ]);

        $offer_id = $offer->id;

        View::share('offer_id',$offer_id);
        View::share('money',$money);
        View::share('offer_date',$offer_date);
        View::share('yuzdelik',$yuzdelik);
        View::share('customer_name',$customer_name);





        return view('backend.pdf.iys_pdf',compact('customer_name'));

    }
    public function bordrolama_pdf_data(Request $request)
    {
        if ($_POST['teklif_new']=='Evet')
        {


            $kdv = $_POST['kdv'];
            $kdv = iconv('utf-8','windows-1254',$kdv);

        if ($_POST['tesvik_type']=='Ücretsiz')
        {
            $tesvik_money = 'Ücretsiz';
        }
        elseif($_POST['tesvik_type']=='yok')
        {
            $tesvik_money = 'Teşvik Hizmeti Dahil Değildir';
        }
        else
            {
                $tesvik_money = $_POST['tesvik_money'];
            }
            if ($_POST['bordro_type']=='bordro_ucret')
            {
                $type = 'Bordrobaşı';
            }
            else
                {
                    $type = 'Aylık';
                }

        $birim = 1;

        $nots = $_POST['not'];
        $customer_id =  $_POST['customer_id'];
        $customer = Customer::find($customer_id);
        $customer_name = $customer->name;
        $offer_date =  $_POST['offer_date'];
        $money = $_POST['offer_money'];
        $tesvik_type = $_POST['tesvik_type'];

        $offer = Offer::create([
            "customer_id" => $request->customer_id,
            "offer_amount" => $birim,
            "user_id" => Auth::user()->id,
            "offer_money" => $request->offer_money,
            "offer_total" => $request->offer_money,
            "cron_1_day"=>'0',
            "cron_1_week"=>'0',
            "cron_2_week"=>'0',
            "offer_date" => $request->offer_date,
            "product" => $request->product,
            "offer_status" => 1,
            "target_seller_id"=>$request->target_Seller_id,
            'kdv'=>$request->kdv,
        ]);
            $random=rand(0,999999999);
        $offer_file = OfferFile::create([
            "customer_id" => $request->customer_id,
            "offer_id"=>$offer->id,
            "offer_file"=>$random.'.pdf'
        ]);

        $explanitons=Explanation::create([
            'offer_id' => $offer->id,
            'explanation'  => $request->offer_explanation
        ]);

        $offer_id = $offer->id;

        View::share('offer_id',$offer_id);
        View::share('money',$money);
        View::share('offer_date',$offer_date);
        View::share('customer_name',$customer_name);
        View::share('type',$type);
        View::share('tesvik_money',$tesvik_money);
        View::share('tesvik_type',$tesvik_type);
        View::share('kdv',$kdv);
        View::share('random',$random);
        View::share('nots',$nots);



        return view('backend.pdf.bordrolama_pdf');
        }

        if ($_POST['teklif_new']=='A') {
            $offer_id = $_POST['offer_id'];

            $kdv = $_POST['kdv'];
            $kdv = iconv('utf-8', 'windows-1254', $kdv);

            if ($_POST['tesvik_type'] == 'Ücretsiz') {
                $tesvik_money = 'Ücretsiz';
            } else {
                $tesvik_money = $_POST['tesvik_money'];
            }
            if ($_POST['bordro_type'] == 'bordro_ucret') {
                $type = 'Bordrobaşı';
            } else {
                $type = 'Aylık';
            }

            $birim = 1;


            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $tesvik_type = $_POST['tesvik_type'];

            $offer = Offer::where('id', $offer_id)->update([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id,
                'kdv' => $request->kdv,
            ]);
            $random = rand(0, 999999999);
            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer_id,
                "offer_file" => $random.'.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer_id,
                'explanation' => $request->offer_explanation
            ]);

           // $offer_id = $offer->id;

            View::share('offer_id', $offer_id);
            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('customer_name', $customer_name);
            View::share('type', $type);
            View::share('tesvik_money', $tesvik_money);
            View::share('tesvik_type', $tesvik_type);
            View::share('kdv', $kdv);
            View::share('random', $random);


            return view('backend.pdf.bordrolama_pdf');
        }
        else
            {
                $offer_id = $_POST['offer_id'];

                if (isset($request->offer_explanation)) {
                    $explanitons = Explanation::create([
                        'offer_id' => $offer_id,
                        'explanation' => $request->offer_explanation
                    ]);
                }
                $offer = Offer::where('id',$offer_id)->update([
                    'target_seller_id'=>$request->target_Seller_id
                ]);
                return redirect(route('offer.index'));
            }
    }
    public function tesvik_pdf_data(Request $request)
    {
        $customer = Customer::where('id',$request->customer_id)->first();
        $company = Customer::where('id',221)->first();
        $company_name = $company->name;
        $customer_adres = $customer->address;
        if ($_POST['new_tesvik_offer']=='guncelle') {

            $kdv = $_POST['kdv'];
            $birim = 1;
            $accept_type = $_POST['accept_type'];
            if ($accept_type == 'ileri') {
                $accept_type = 'Aylık';
            }
            $offer_id = $_POST['offer_id'];
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $nots = $_POST['offer_not'];

            $offer = Offer::where('id',$offer_id)->update([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "accept_type" => $accept_type,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id,
                'kdv' => $request->kdv,
            ]);
            $random = rand(0,9999999999);

            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer_id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer_id,
                'explanation' => $request->offer_explanation
            ]);
            $kdv = iconv('utf-8', 'windows-1254', $kdv);


            View::share('offer_id', $offer_id);
            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('customer_name', $customer_name);
            View::share('accept_type', $accept_type);
            View::share('company_name', $company_name);
            View::share('customer_adres', $customer_adres);
            View::share('kdv', $kdv);
            View::share('random', $random);
            View::share('nots', $nots);
            View::share('egitim', $egitim = 'var');


            return view('backend.pdf.tesvik_pdf');
        }
        if ($_POST['new_tesvik_offer']=='new_tesvik') {
            $nots = $_POST['not'];
            $egitim = $_POST['egitim'];

            $kdv = $_POST['kdv'];
            $birim = 1;
            $accept_type = $_POST['accept_type'];
            if ($accept_type == 'ileri') {
                $accept_type = 'Aylık';
            }
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];

            $offer = Offer::create([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "accept_type" => $accept_type,
                "cron_1_day"=>'0',
                "cron_1_week"=>'0',
                "cron_2_week"=>'0',
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "offer_date" => $request->offer_date,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id,
                'kdv' => $request->kdv,
            ]);
              $random = rand(0,9999999999);
            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer->id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer->id,
                'explanation' => $request->offer_explanation
            ]);
            $kdv = iconv('utf-8', 'windows-1254', $kdv);
            $offer_id = $offer->id;

            View::share('offer_id', $offer_id);
            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('customer_name', $customer_name);
            View::share('accept_type', $accept_type);
            View::share('kdv', $kdv);
            View::share('company_name', $company_name);
            View::share('customer_adres', $customer_adres);
            View::share('random', $random);
            View::share('egitim', $egitim);
            View::share('nots', $nots);


            return view('backend.pdf.tesvik_pdf');
        }
        else
        {
            $offer_id = $_POST['offer_id'];

            if (isset($request->offer_explanation)) {
                $explanitons = Explanation::create([
                    'offer_id' => $offer_id,
                    'explanation' => $request->offer_explanation
                ]);
            }
            $offer = Offer::where('id',$offer_id)->update([
                'target_seller_id'=>$request->target_Seller_id
            ]);

            return redirect(route('offer.index'));
        }
    }
    public function danismanlik_pdf_data(Request $request)

    {
        if ($_POST['new_danismanlik_offer']=='Update') {
            $birim = 1;
            $konaklama = $_POST['home'];
            $kdv = $_POST['kdv'];
            $offer_id = $_POST['offer_id'];
            $type = $_POST['danismanlik_type'];
            $yuzdelik = $_POST['yuzdelik'];
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $odemesekli = 'Ödeme Şekli: %   ’i peşin kalan kısım proje bitiminde yapılacaktır.';
            $kdv = iconv('utf-8', 'windows-1254', $kdv);
            $konaklama = iconv('utf-8', 'windows-1254', $konaklama);
            if ($type == 'Aylık') {
                $t = 1;
                $type_text = iconv('utf-8', 'windows-1254', $type);
            } else {
                $t = 0;
                $type_text = iconv('utf-8', 'windows-1254', $type);
            }
            $type = iconv('utf-8', 'windows-1254', $type);
            $customer_name = iconv('utf-8', 'windows-1254', $customer_name);
            $odemesekli = iconv('utf-8', 'windows-1254', $odemesekli);
            $eklenti = iconv('utf-8', 'windows-1254', 'Kapsamlı Danışmanlık Hizmeti Bedeli ');



            $offer = Offer::where('id',$offer_id)->update([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id
            ]);
            $random = rand(0,9999999999);

            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer_id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer_id,
                'explanation' => $request->offer_explanation
            ]);




            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('yuzdelik', $yuzdelik);
            View::share('customer_name', $customer_name);
            View::share('konaklama', $konaklama);
            View::share('kdv', $kdv);
            View::share('type', $type);
            View::share('t', $t);
            View::share('type_text', $type_text);
            View::share('odemesekli', $odemesekli);
            View::share('eklenti', $eklenti);
            View::share('random', $random);


            return view('backend.pdf.danismanlik_pdf');
        }
        if ($_POST['new_danismanlik_offer']=='new_offer') {
            $birim = 1;
            $konaklama = $_POST['home'];
            $kdv = $_POST['kdv'];
            $type = $_POST['danismanlik_type'];
            $yuzdelik = $_POST['yuzdelik'];
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $odemesekli = 'Ödeme Şekli: %   ’i peşin kalan kısım proje bitiminde yapılacaktır.';
            $kdv = iconv('utf-8', 'windows-1254', $kdv);
            $konaklama = iconv('utf-8', 'windows-1254', $konaklama);
            if ($type == 'Aylık') {
                $t = 1;
                $type_text = iconv('utf-8', 'windows-1254', $type);
            } else {
                $t = 0;
                $type_text = iconv('utf-8', 'windows-1254', $type);
            }
            $type = iconv('utf-8', 'windows-1254', $type);
            $customer_name = iconv('utf-8', 'windows-1254', $customer_name);
            $odemesekli = iconv('utf-8', 'windows-1254', $odemesekli);
            $eklenti = iconv('utf-8', 'windows-1254', 'Kapsamlı Danışmanlık Hizmeti Bedeli ');
            $offer = Offer::create([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "cron_1_day"=>'0',
                "cron_1_week"=>'0',
                "cron_2_week"=>'0',
                "offer_date" => $request->offer_date,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id
            ]);
            $random = rand(0,9999999999);
            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer->id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer->id,
                'explanation' => $request->offer_explanation
            ]);

            $offer_id = $offer->id;

            View::share('offer_id', $offer_id);
            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('yuzdelik', $yuzdelik);
            View::share('customer_name', $customer_name);
            View::share('konaklama', $konaklama);
            View::share('kdv', $kdv);
            View::share('type', $type);
            View::share('t', $t);
            View::share('type_text', $type_text);
            View::share('odemesekli', $odemesekli);
            View::share('random', $random);
            View::share('eklenti', $eklenti);

            return view('backend.pdf.danismanlik_pdf');
        }
        else
        {
            $offer_id = $_POST['offer_id'];

            if (isset($request->offer_explanation)) {
                $explanitons = Explanation::create([
                    'offer_id' => $offer_id,
                    'explanation' => $request->offer_explanation
                ]);
            }
            $offer = Offer::where('id',$offer_id)->update([
               'target_seller_id'=>$request->target_Seller_id
            ]);
            return redirect(route('offer.index'));
        }

    }
    public function egitim_pdf_data()
    {
        return view('backend.pdf.egitim_pdf');
    }
    public function kvkk_pdf_data(Request $request)
    {
        if ($_POST['new_kvkk_offer']=='Update') {

            $sql = $_POST['penetrasyon_ucret_sql'];
            $nots = $_POST['offer_not'];
            $birim = 1;
            $konaklama = $_POST['home'];
            $penetrasyon_ucret = $_POST['penetrasyon_ucreti'];
            $penetrasyon = $_POST['penetrasyon'];
            $offer_id = $_POST['offer_id'];
            $kdv = $_POST['kdv'];
            $yuzdelik = $_POST['yuzdelik'];
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $kdv = iconv('utf-8', 'windows-1254', $kdv);
            $offer = Offer::where('id',$offer_id)->update([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id
            ]);
                   $random = rand(0,99999999999);

                $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer_id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer_id,
                'explanation' => $request->offer_explanation
            ]);



            View::share('offer_id', $offer_id);
            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('yuzdelik', $yuzdelik);
            View::share('customer_name', $customer_name);
            View::share('konaklama', $konaklama);
            View::share('kdv', $kdv);
            View::share('penetrasyon_ucret', $penetrasyon_ucret);
            View::share('penetrasyon', $penetrasyon);
            View::share('random', $random);
            View::share('nots', $nots);


            return view('backend.pdf.kvkk_pdf', compact('customer_name', 'sql'));
        }
        if ($_POST['new_kvkk_offer']=='new_offer') {
            $sql = $_POST['penetrasyon_ucret_sql'];

            $birim = 1;
            $konaklama = $_POST['home'];
            $penetrasyon_ucret = $_POST['penetrasyon_ucreti'];
            $penetrasyon = $_POST['penetrasyon'];
            $nots = $_POST['offer_not'];

            $kdv = $_POST['kdv'];
            $yuzdelik = $_POST['yuzdelik'];
            $customer_id = $_POST['customer_id'];
            $customer = Customer::find($customer_id);
            $customer_name = $customer->name;
            $offer_date = $_POST['offer_date'];
            $money = $_POST['offer_money'];
            $kdv = iconv('utf-8', 'windows-1254', $kdv);
            $offer = Offer::create([
                "customer_id" => $request->customer_id,
                "offer_amount" => $birim,
                "user_id" => Auth::user()->id,
                "offer_money" => $request->offer_money,
                "offer_total" => $request->offer_money,
                "cron_1_day"=>'0',
                "cron_1_week"=>'0',
                "cron_2_week"=>'0',
                "offer_date" => $request->offer_date,
                "product" => $request->product,
                "offer_status" => 1,
                "target_seller_id" => $request->target_Seller_id
            ]);
            $random = rand(0,99999999999);

            $offer_file = OfferFile::create([
                "customer_id" => $request->customer_id,
                "offer_id" => $offer->id,
                "offer_file" => $random . '.pdf'
            ]);

            $explanitons = Explanation::create([
                'offer_id' => $offer->id,
                'explanation' => $request->offer_explanation
            ]);


            View::share('money', $money);
            View::share('offer_date', $offer_date);
            View::share('yuzdelik', $yuzdelik);
            View::share('customer_name', $customer_name);
            View::share('konaklama', $konaklama);
            View::share('kdv', $kdv);
            View::share('penetrasyon_ucret', $penetrasyon_ucret);
            View::share('penetrasyon', $penetrasyon);
            View::share('random', $random);
            View::share('nots', $nots);


            return view('backend.pdf.kvkk_pdf', compact('customer_name', 'sql'));
        }
        else
        {
            $offer_id = $_POST['offer_id'];

           if (isset($request->offer_explanation)) {
               $explanitons = Explanation::create([
                   'offer_id' => $offer_id,
                   'explanation' => $request->offer_explanation
               ]);
           }

            $offer = Offer::where('id',$offer_id)->update([
                'target_seller_id'=>$request->target_Seller_id
            ]);

            if ($offer)
            {
                return redirect(route('offer.index'));
            }
        }

    }
    public function ikmetrik_pdf_data(Request $request)
    {
            $seller_id = $_POST['target_Seller_id'];
            $name = TargetSeller::find($seller_id);
            $adi =  iconv('utf-8','windows-1254',$name->seller_name);




            if ($_POST['accept_type']=="Aylık")
            {
                if (!empty($_POST['month_free']))
                {
                    $money = $_POST['month_free'];
                }
                else
                    {
                        $money = $_POST['month'];
                    }


            }

           if ($_POST['accept_type']=="Yıllık")
        {
            if (!empty($_POST['year_free']))
            {
                $money = $_POST['year_free'];

            }
            else
            {
                $money = $_POST['year'];
            }
        }



        if ($_POST['month']==50)
        {
            $a = '0-20';
        }
        if ($_POST['month']==5)
        {
            $a='21-300';
        }
        if ($_POST['month']==4)
        {
            $a='301-1000';
        }
        if ($_POST['month']==2)
        {
            $a='1001-5000';
        }
        if ($_POST['month']==1)
        {
            $a='5000+';
        }

        if ($_POST['year']==40)
        {
            $a = '0-20';
        }
        if ($_POST['year']==4)
        {
            $a='21-300';
        }
        if ($_POST['year']=='3.2')
        {
            $a='301-1000';
        }
        if ($_POST['year']==100000)
        {
            $a='1001-5000';
        }
        if ($_POST['year']==1)
        {
            $a='5000+';
        }



        $birim = 1;
        $total = $money;

        $customer =  $_POST['customer_id'];
        $alici =  $_POST['alici'];
        $accept_type =  $_POST['accept_type'];
        $year =  $_POST['year'];
        $month = $_POST['month'];
        $offer_date =  $_POST['offer_date'];

        $offer = Offer::create([
            "customer_id" => $request->customer_id,
            "offer_amount" => $birim,
            "user_id" => Auth::user()->id,
            "offer_money" => $money,
            "accept_type"=>$request->accept_type,
            "per_person"=>$a,
            "offer_total" => $total,
            "offer_date" => $request->offer_date,
            "product" => $request->product,
            "offer_status" => 1,
            "target_seller_id"=>$request->target_Seller_id,
            'kdv'=>$request->kdv
        ]);

            $random = rand(0,999999999999);
         $offer_file = OfferFile::create([
            "customer_id" => $request->customer_id,
            "offer_id"=>$offer->id,
            "offer_file"=>$random.'.pdf'
        ]);

        $explanitons=Explanation::create([
            'offer_id' => $offer->id,
            'explanation'  => $request->offer_explanation
        ]);
        $offer_id = $offer->id;
        View::share('offer_id',$offer_id);
        View::share('money',$money);
        View::share('adi',$adi);
        View::share('random',$random);


        return view('backend.pdf.ikmetrik_pdf',compact('customer','alici','accept_type','year','offer_date','month','a'));
    }

    public function pdf_performans(Request $request)
    {

        $birim = 1;
        $kdv = $_POST['kdv'];
        $customer_id = $request->customer_id;
        $customer = Customer::find($customer_id);

        $customer_name = $customer->name;
        $offer_date = $_POST['offer_date'];
        $month_money = $_POST['month_money'];
        $year_money = $_POST['year_money'];
      //  $kdv = iconv('utf-8', 'windows-1254', $kdv);

       // $customer_name = iconv('utf-8', 'windows-1254', $customer_name);
        $employee_count = $request->employee_count;

        $offer = Offer::create([
            "customer_id" => $request->customer_id,
            "offer_amount" => $birim,
            "user_id" => Auth::user()->id,
            "offer_date" => $request->offer_date,
            "offer_money" => $request->year_money,
            "offer_total" => $request->year_money,
            "product" => 8,
            "offer_status" => 1,
            "target_seller_id" => $request->target_Seller_id
        ]);

        $random = rand(0,9999999999);

        $offer_file = OfferFile::create([
            "customer_id" => $request->customer_id,
            "offer_id" => $offer->id,
            "offer_file" => $random . '.pdf'
        ]);

        $explanitons = Explanation::create([
            'offer_id' => $offer->id,
            'explanation' => $request->offer_explanation
        ]);

        $pdf = PDF::loadView('backend.pdf.performances.test',compact('customer_name','month_money','year_money','employee_count','kdv'));
        //return view('pdfs.test', compact('data_gain_total', 'gain_incentives', 'sgk_company', 'gain_array', 'active_gains', 'gain_incentive_first', 'data_gain', 'title', 'data_for_pdf_array','empty', 'all', 'company'));

        $header = View::make('backend.pdf.performances.header', ['title' => 'Morepayroll' ])->render();
        $footer =  View::make('backend.pdf.performances.footer')->render();
        $pdf->save(public_path().'/backend/pdfs/morepayroll'.'.pdf');
        $pdfMerger = PDFMerger::init(); //Initialize the merger
        $pdfMerger->addPDF(public_path().'/backend/pdfs/performans_default.pdf', 'all');
        $pdfMerger->addPDF(public_path().'/backend/pdfs/morepayroll.pdf', 'all');
        $pdfMerger->merge();
        return $pdfMerger->save(public_path().'/pdf/'.$random.'.pdf');
    }
}
