<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Cost;
use App\Model\CostForm;
use App\Model\CostFormFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CostController extends Controller
{
    public function index()
    {
        $costs = Cost::all();
        return view('backend.Cos.index', compact('costs'));
    }

    public function create()
    {
        $users = User::all();
        return view('backend.Cos.create', compact('users'));
    }

    public function insert(Request $request)
    {

        $create = Cost::create([
            'user_id' => $request->user_id,
            'cost_money' => $request->cost_money,
            'cost_date' => $request->cost_date,
            'cost_explanation' => $request->cost_explanation,
            'cost_status' => 0,
            'end_status' => 1
        ]);
        if ($create) {
            return redirect(route('muhasebe.index'));
        }
    }

    public function form($id)
    {

        $costs = Cost::where('user_id', $id)->get();
        return view('backend.Cos.personel_index', compact('costs'));
    }

    public function form_create($id)
    {

        $costs = Cost::where('id', $id)->get();
        return view('backend.Cos.cost_form', compact('costs'));
    }

    public function add(Request $request)
    {

        if ($request->hasFile('form_file')) {
            $request->validate([

                'form_file' => 'required|image|mimes:jpg,png,jpeg|max:10000'
            ]);
        }

        $file_name = uniqid() . ' ' . $request->form_file->getClientOriginalExtension();
        $request->form_file->move(public_path('/images/'), $file_name);
        $request->form_file = $file_name;


        $cost = $_POST['cost_id'];
        $form_dates = $request->form_date;
        $form_types = $request->form_type;
        $form_moneys = $request->form_money;

        foreach ($form_dates as $key => $form_date) {
            //1.tarih  $form_date
            //1.satırdaki masraf türü $form_types[$key]
            //1.satırdaki money  $form_moneys[$key]
            //$form_types[$key]
            $form = CostForm::create([
                'form_date' => $form_dates[$key],
                'form_type' => $form_types[$key],
                'form_money' => $form_moneys[$key],
                'cost_id' => $request->cost_id,
                'user_id' => Auth::user()->id
            ]);
            $cost = Cost::where('id', $cost)->update([
                'cost_status' => 1
            ]);
        }

        $file = Cost::where('id', $request->cost_id)->update([
            'form_file' => $file_name,
            'cost_total' => $request->cost_total
        ]);
        if ($file) {
            return redirect(route('form', ['id' => Auth::user()->id]));
        }

    }

    public function show($id)
    {
        $forms = CostForm::where('cost_id', $id)->get();
        $cost = Cost::find($id);

        return view('backend.Cos.form_show', compact('forms', 'cost'));

    }

    public function controll(Request $request, $id)
    {


        $controll = Cost::where('id', $id)->update([
            'cost_end_explanation' => $request->cost_explanation,
            'end_status' => $request->end_status
        ]);
        if ($controll) {
            return redirect(route('muhasebe.index'));

        }

    }


    public function form_edit($id)
    {
        $forms = CostForm::where('cost_id', $id)->get();
        $cost = Cost::find($id);
        return view('backend.Cos.personel_edit_form', compact('forms', 'cost'));
    }


    public function form_update(Request $request, $id)
    {

        $delete = CostForm::where('cost_id', $id)->delete([]);


        if ($request->hasFile('form_file')) {
            $request->validate([

                'form_file' => 'required|image|mimes:jpg,png,jpeg|max:10000'
            ]);
        }

        $file_name = uniqid() . ' ' . $request->form_file->getClientOriginalExtension();
        $request->form_file->move(public_path('/images/'), $file_name);
        $request->form_file = $file_name;

        $form_dates = $request->form_date;
        $form_types = $request->form_type;
        $form_moneys = $request->form_money;

        foreach ($form_dates as $key => $form_date) {
            //1.tarih  $form_date
            //1.satırdaki masraf türü $form_types[$key]
            //1.satırdaki money  $form_moneys[$key]
            //$form_types[$key]
            $form = CostForm::create([
                'form_date' => $form_dates[$key],
                'form_type' => $form_types[$key],
                'form_money' => $form_moneys[$key],
                'cost_id' => $request->cost_id,
                'user_id' => Auth::user()->id
            ]);
            $cost = Cost::where('id', $id)->update([
                'cost_status' => 1,
                'end_status' => 1,
                'form_file' => $file_name,
                'cost_total' => $request->cost_total

            ]);
        }

        if ($form) {
            return redirect(route('form', ['id' => Auth::user()->id]));
        }

    }

    public function new()
    {
        return view('backend.Cos.personel_cost_create');
    }

    public function newPost(Request $request)
    {
        $create = Cost::create([
            'user_id' => $request->user_id,
            'cost_date' => $request->cost_date,
            'cost_explanation' => $request->cost_explanation,
            'cost_status' => 0,
            'end_status' => 1
        ]);
        if ($create) {
            return redirect(route('form', ['id' => Auth::user()->id]));
        }
    }


    public function delete(Request $request)
    {
        $delete = Cost::where('id', $request->id)->delete();
        if ($delete) {
            return redirect(route('muhasebe.index'));
        }
    }


}
