<?php

namespace App\Http\Controllers;

use App\Mail\CustomerDecline;
use App\Model\CustomerEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailChimpController extends Controller
{
    public function index()
    {
        return view('backend.mailchimp.mailchimp_delete');
    }

    public function mailchimpDelete(Request $request)
    {
        $customer = CustomerEmail::where('email',$request->email)->first();
        if (!$customer)
        {
            return back()->with('error','Bu Mail Adresi Sistemde Tanımlı Değildir');
        }
        Mail::to('more@morepayroll.com')->send(new CustomerDecline($customer));

        return back()->with('success','Mail Başarıyla Silinmiştir');
    }
}
