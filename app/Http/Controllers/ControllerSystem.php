<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classicmodels;
use App\order;
use App\customer;
//use App\employees;
use DB;
class ControllerSystem extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    function index(){
        //$orders = order::all();
        // $data = DB::table('orders')
        // ->join('customers','orders.customerNumber','=','customers.customerNumber')
        // ->select('orders.orderNumber','orders.orderDate','orders.requiredDate','orders.shippedDate','orders.status'
        // ,'orders.comments','customers.customerNumber','customers.contactLastName','customers.contactFirstName')
        // ->orderby(orders.orderNumber)
        // ->get();
        //$employees = employees::all();

        $a = order::all()->sortBy('status');
        $b = customer::all();

        return view('Order_index',compact('a'))->with('b',$b);
    }

    function edit_index($no){
        $or = order::where('orderNumber',$no)->get();
        $cus = customer::all();
        return view('Order_edit',compact('or'))->with('cus',$cus);
    }

    function update(Request $request,$no)
    {
        order::where('orderNumber',$no)
        ->update([
        'shippedDate' => $request->input('shippedDate'),
        'status' => $request->input('status'),
        'comments' => $request->input('comments')]);
        // $up = order::where('orderNumber',$no);
        // // $up->shippedDate = $request->input('shippedDate');
        // $up->status = $request->input('status');
        // // $up->comments = $request->input('comments');
        // $up->update();
        return redirect("admin/orders");
    }
}
