<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Orderdetail;
use Illuminate\Validation\Rules\RequiredIf;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
    public function confirm()
    {
        
        return view('create.confirmpay');


    }
    public function complete(Request $request)
    {
        
        $customers = Customer::all();
        $ii = 0;
        foreach($customers as $i){
            if($i->customerNumber == $request->input('customernumber')){
                $ii = 1;
            }
        }

        if($ii == 1){
            $payment = new Payment;
            $payment->customerNumber = $request->input('customernumber');
            $payment->checkNumber = $request->input('checknumber');
            $payment->paymentDate = $request->input('paymentdate');
            $payment->amount = $request->input('amount');
            $payment->point = $payment->amount * 0.03;
            $temp2 = $payment->point;
            $payment->save();
    
            $customer = Customer::findOrfail($request->input('customernumber'));
            $temp = $customer->point;
            $customer->update([
                'point' => $temp + $temp2
            ]);
            $cusnew = Customer::findOrfail($request->input('customernumber'));
        }
        
        return view('create.complete')->with(['customer'=>$cusnew,'point' => $temp2 ]);
    }

    public function fin()
    {
        return view('create.complete');
    }

    public function finish()
    {
        return view('create.payorder');
    }
}
