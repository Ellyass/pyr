<?php

namespace App\Http\Controllers;
//use Maatwebsite\Excel\Facades\Excel;
use App\Model\kullanici;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Excel;
class KullaniciController extends Controller
{
   public function index()
   {
       return view('backend/kullanici');
   }
   public function import( Request $request)
   {

        $this->validate($request,[

            'select_file' => 'required|mimes:xls,xlsx'

        ]);
       // $patch = $request->file('select_file')->getRealPath();
       // Excel::import(new UsersImport,$patch);
       $path1 = $request->file('select_file')->store('temp');
       $path=storage_path('app').'/'.$path1;
       Excel::import(new UsersImport,$path);




   }
}
