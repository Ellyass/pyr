<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Mail\MailSend;


class MailSendController extends Controller
{
    public function index()
    {
        return view('mailSend');
    }
    public function mailSend(Request $request)
    {
        $email=$request->email;
        $image=rand(0,10000).".".$request->image->getClientOriginalExtension();
        $upload=$request->image->move(public_path('mail_images'),$image);
        $mail=$request->only('email','message','image');
        Mail::to($email)->send(new MailSend($mail));
        return back()->with('success','Mail Başarıyla Gönderildi');
    }
}
