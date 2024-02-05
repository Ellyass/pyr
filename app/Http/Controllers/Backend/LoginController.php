<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Model\Test;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class LoginController extends Controller
{

    public function login()
    {
        return view('backend.login.login');
    }

    public function authenticate(Request $request)
    {


            $login=$request->only('email','password');

            if (Auth::attempt($login))
            {

                return redirect(route('anasayfa'));

            }
            else
                {
                    $request->flash();
                    return back()->with('error','kullanıcı Adı veya Şifre Hatalı');
                }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('nedmin.login'));
    }
}

