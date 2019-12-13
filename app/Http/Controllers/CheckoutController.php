<?php

namespace App\Http\Controllers;

use App\Customer;
use App\multi_addrs;
use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\order_addrs;
use App\Orderdetail;

class CheckoutController extends Controller
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
    }

    public function bill()
    {
        return view('create.billaddr');
    }
    

    public  function createcheckout(Request $request)
    {
        $customer = Customer::select('*')->where('customerName','=',$request->input('customername'))->firstOrFail();
        if(Customer::find($customer->customerNumber ) && Customer::where('customerName','=',$customer->customerName)){
            $customers = Customer::select('*')->where('customerName','=',$request->input('customername'))->firstOrFail();
            $ordernum = Order::all();
            $order = new Order;
            $order->orderNumber = $ordernum->max('orderNumber')+ 1;
            
            $order->orderDate = $request->input('orderdate');
            $order->requiredDate = $request->input('requiredDate');
            $order->shippedDate = null;
            $order->status = 'In process';
            $order->comments = $request->input('comments');
            $order->customerNumber = $customers->customerNumber;
            $order->save();
            $i = 1;
            
            foreach(Cart::content() as $cData){
                $discount = $request->input('discount');
                $orderdetail = new Orderdetail;
                $orderdetail->orderNumber = $ordernum->max('orderNumber')+ 1;
                $orderdetail->productCode = $cData->id;
                $orderdetail->quantityOrdered = $cData->qty;
                $orderdetail->priceEach = ($cData->price * $cData->qty) - $discount;
                $orderdetail->orderLineNumber = $orderdetail->orderLineNumber +  $i;
                $orderdetail->save();
                $i ++;
            }
            Cart::destroy();
            $addor =  $order->max('orderNumber');
            $multis = multi_addrs::where('customernumber','=',$customer->customerNumber)->get();
            return view('create.billaddr')->with([
                'cusnum' => $customers,
                'orderm' => $addor,
                'multi' => $multis
            ]);
        }else{
            return redirect()->back()->with('error','Unfound Customer in Data');
        }
        
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
    public function store(CheckoutRequest $request)
    {
        // $charge = String::charges()->create([
        //     'amount' => Cart::total()/100,
        //     'currency' => 'CAD',
        //     'source' => $request -> stripeToken,
        //     'description' => 'Order',
        //     'receipt_email' => $request->email,
        //     'metadata' => [
        //         //change to Order ID after we start using DB
        //         'contents' => $contents,
        //         'quantity' => Cart::instance('default')->count(),
        //     ]
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function addmulti(Request $request,$orderm)
    {   
        $id = multi_addrs::findOrFail($request->input('idm'));
        
        $order_addr = new  order_addrs;
        $order_addr->orderNumber = $orderm;
        $order_addr->addressLine1 = $id->addressLine1;
        $order_addr->addressLine2 = $id->addressLine2;
        $order_addr->city = $id->city;
        $order_addr->state = $id->state;
        $order_addr->postalCode = $id->postalCode;
        $order_addr->country = $id->country;
        $order_addr->save();

        return view('create.confirmpay')->with('customernumber',$id->customerNumber);
        // return redirect('admin/payment/confirm')->with('customernumber',$id->customerNumber);


    }

    
}
