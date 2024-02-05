<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\CustomerEmail;
use Illuminate\Http\Request;
use MailChimp;
use Illuminate\Support\Facades\Validator;

class CustomerEmailController extends Controller
{
    /**
     * @var bool
     */
    protected $hash_id = true;

    public function index()
    {
        $customer_emails = CustomerEmail::orderBy('id', 'DESC')->get();
        return view('backend.customer.customer_email.index', compact('customer_emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){

        $datas = Customer::where('is_deleted', 0)->orderBy('name', 'ASC')->get();

        return view('backend.customer.customer_email.insert',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerEmailRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $hata = \Illuminate\Support\Facades\Validator::make($request->all(),[
            'email'=>'email'
        ]);
        if ($hata->fails())
        {
            return back()->with('error','Email Adresi Hatalı');
        }
      //  return back()->with('error','kullanıcı Adı veya Şifre Hatalı');

          //return back()->with('error','Email Adresi Hatalı!');



            $customer_email = CustomerEmail::create([
            'customer_id' => $request->customer_id,
            'customer_official' => $request->customer_official,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'email' => $request->email,
            'is_deleted' => 0,
        ]);

             app('App\Http\Controllers\Backend\MailchimpController')->mailchimp($customer_email, 'create', null);


                 return redirect(route('email.index'));






    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email = CustomerEmail::where('id',$id)->first();
        $customers = Customer::all();
        return view('backend.customer.customer_email.edit',compact('email','customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Customer $customer
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,$id)
    {

        $customer_email = CustomerEmail::find($id);

        if ($request->isMethod('put')) {

            $this->validate($request, [
                'email' => 'required|unique:customer_emails,email,'.$customer_email->id,
            ]);
        }

        $updateData = [
            'customer_id' => $request->customer_id,
            'customer_official' => $request->customer_official,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $customer_email->update($updateData);
        app('App\Http\Controllers\Backend\MailchimpController')->mailchimp($customer_email, 'update', $customer_email->email);
        return redirect(route('email.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CustomerEmail $customer_email
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($customer_email)
    {
        $customer_email = CustomerEmail::where('email',$customer_email)->update([
                'is_deleted' => 1
            ]);

        app('App\Http\Controllers\Backend\MailchimpController')->mailchimp($customer_email, 'destroy', $customer_email);
                    redirect(route('email.index'));

    }

}
