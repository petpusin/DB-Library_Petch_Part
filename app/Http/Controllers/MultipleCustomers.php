<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\employees;
use App\order_addrs;
use App\multi_addrs;

class MultipleCustomers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->em_id;


        return view('admin');
    }

    public function history()
    {
        $orders = order_addrs::all();
        return view('multiple.history')->with('orders', $orders);
    }

    public function multi()
    {
        $orders = multi_addrs::all();
        return view('multiple.multi')->with('orders', $orders);
    }
    public function multiEdit($no)
    {
        $orders = multi_addrs::findOrFail($no);
        return view('multiple.multiEdit')->with('aaa', $orders);
    }
    public function multiEdit_(Request $request, $no)
    {
        multi_addrs::where('id', $no)
            ->update([
                'addressLine1' => $request->input('addressLine1'),
                'addressLine2' => $request->input('addressLine2'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'postalCode' => $request->input('postalCode'),
                'country' => $request->input('country')
            ]);
        return redirect('/admin/multiple/');
    }

    public function multiCreate()
    {
        return view('multiple.multiCreate');
    }
    public function multiCreate_(Request $request)
    {

        $check = Customer::all();
        foreach ($check as $a) {
            if ($request->input('customerNumber') == $a->customerNumber) {
                $multi_addrs = new multi_addrs;
                $multi_addrs->customerNumber = $request->input('customerNumber');
                $multi_addrs->addressLine1 = $request->input('addressLine1');
                $multi_addrs->addressLine2 = $request->input('addressLine2');
                $multi_addrs->city = $request->input('city');
                $multi_addrs->state = $request->input('state');
                $multi_addrs->postalCode = $request->input('postalCode');
                $multi_addrs->country = $request->input('country');
                $multi_addrs->save();
                return redirect('/admin/multiple/');
            }
        }
        return redirect('/admin/multiple/notFound');
    }
    public function notFound(Request $request)
    {
        return view('multiple.multiNotfound');
    }
    
    public function multiDelete($no)
    {
        $a = multi_addrs::findOrFail($no);
        $all = multi_addrs::where('customerNumber','=',$a->customerNumber)->count();
        if($all != 1){
            $a->delete();
        }
        return redirect('/admin/multiple/');
    }

    public function confirm_Delete($id)
    {
        $idd = multi_addrs::findOrFail($id);
        return view('multiple.multiDel')->with('idd', $idd);
    }

}
