<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Users;
use App\Http\Controllers\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();

        return view('backend.users.users',compact('users'));
    }
    public function login($id)
    {
        \Auth::loginUsingId($id);

        return redirect()->route('anasayfa');

    }
}
