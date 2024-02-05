<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\CustomerEmail;
use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\CustomerType;
use Mailchimp;

class CustomerController extends Controller

{
    public function add()
    {
        return view('backend.customer.customer_insert');
    }

    public function insert(Request $request)
    {



        $customer = Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'status' => $request->status,
            'is_deleted' => 0,
        ]);
        if ($customer) {
            $customer_type_ids = $request->customer_type_id;
            if (isset($customer_type_ids) && count($customer_type_ids) > 0) {
                foreach ($customer_type_ids as $key => $customer_type_id) {
                    CustomerType::create([
                        'customer_id' => $customer->id,
                        'type' => $customer_type_id,
                    ]);
                }
            }
        }

        return redirect(route('anasayfa'))->with('success', 'İşlem Başarılı');

    }
    public function index()
    {
        $customers = Customer::all();
        return view('backend.customer.index',compact('customers'));
    }
    public function edit($id)
    {
        $edit = Customer::where('id',$id)->first();
        return view('backend.customer.customer_edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {

         $customer = Customer::find($id);
         $customer_emails = CustomerEmail::where('customer_id',$id)->get();
        if ($request->isMethod('put')) {

            $this->validate($request, [
                'name' => 'required|unique:customers,name,'.$customer->id,
            ]);
        }

        $updateData = [
            'name' => $request->name,
            'address' => $request->address,
            'status' => $request->status,
            'is_deleted'=>0,
        ];
        $customer->update($updateData);
        CustomerType::where('customer_id', $customer->id)->delete();
        if ($customer) {
            $customer_type_ids = $request->customer_type_id;
            if (isset($customer_type_ids) && count($customer_type_ids) > 0) {
                foreach($customer_type_ids as $key => $customer_type_id) {
                    CustomerType::create([
                        'customer_id' => $customer->id,
                        'type' => $customer_type_id,
                    ]);
                }
            }
            foreach($customer_emails as $customer_email) {
                app('App\Http\Controllers\Backend\MailchimpController')->mailchimp($customer_email, 'update', $customer_email);
            }
        }
        return redirect(route('customer.index'));


    }
    public function destroy(Request $request,$id)
    {

        $customer = Customer::find($id);
        $customer->update([
            'is_deleted' => $customer->is_deleted == 0 ? 1 : 0
        ]);

        foreach($customer->customer_emails as $customer_email) {
            $merge = [
                'FNAME' => $customer->name,
                'YETKILI' => $customer_email->customer_official,
                'ADDRESS' => $customer->address,
                'GSM' => $customer_email->mobile,
                'LTYPE' => '',
            ];
            $lists = Mailchimp::getLists();
            $lst = $lists[0];
            $listId = $lst['id'];
            $result = Mailchimp::check($listId, $customer_email->email);

            if ($result) {
                Mailchimp::subscribe($listId, $customer_email->email, $merge, $confirm = false);

            }

        }

        //dd($customer);
        return redirect(route('customer.index'));
    }
}
