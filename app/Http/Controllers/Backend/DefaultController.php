<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Offer;
use App\Model\Test;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DefaultController extends Controller
{
    public function index()
    {

        $offers = Offer::all();
       // $users = Users::select('name')->where('email',$login['email'])->get();
      //  View::share('users',$users);
        return view('backend.default.index',compact('offers'));
    }
}
