<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //'customerNumber','customerName','contactLastName','contactFirstName','phone','addressLine1','addressLine2','city','state','postalCode','country','salesRepEmployeeNumber', 
    public function create()
    {   
        $customers = Customer::select('customerNumber')->max('customerNumber');
        return view('create.register')->with('customer',$customers);
    }

    public function create2()
    {   
        return view('create.register_old_customer');
    }

    public function create2chek(Request $request)
    {
        $customer = Customer::find($request);
        if($customer = true){
            return redirect('/admin/cart')->with('customer',$customer->customerNumber);
        }else{
            return view('create.register_old_customer')->with('error','Unfound Old Customer');
        }
    }
   


    
    public function store(Request $request)
    {
        $this->validate($request,[

            'customerName' => 'required',
            'contactLastName' => 'required',
            'contactFirstName' => 'required',
            'phone' => 'required',
            'addressLine1' => 'required',
            'addressLine2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalcode' => 'required',
            'country' => 'required',
        
            'creditLimit' => 'required'
        ]);
        $cusnum = Customer::all();
         
        $customer = new Customer;
        $customer->customerNumber = $cusnum->max('customerNumber')+ 1;
        $customer->customerName = $request->input('customerName');
        $customer->contactLastName = $request->input('contactLastName');
        $customer->contactFirstName = $request->input('contactFirstName');
        $customer->phone = $request->input('addressLine1');
        $customer->addressLine1 = $request->input('addressLine2');
        $customer->addressLine2 = $request->input('city');
        $customer->city = $request->input('state');
        $customer->country = $request->input('country');
        $customer->salesRepEmployeeNumber = Auth::user()->em_id;
        $customer->creditLimit = $request->input('creditLimit');
        if(Customer::find($customer->customerNumber ) && Customer::where('customerName','=',$customer->customerName)){
            $customer->save();
            return redirect('/admin/cart')->with([
                'success' => 'register customer compleated',
            'customer' => $cusnum->max('customerNumber'),
            ]);
        }else{
            return redirect('/admin/cart')->with([
                'error' => ' customer have history',]);
        }
        
        
        
        
    }
}
