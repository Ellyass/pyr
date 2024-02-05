<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\CustomerType;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class InsertController extends Controller

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
}
