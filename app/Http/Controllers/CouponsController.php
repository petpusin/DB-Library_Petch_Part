<?php

namespace App\Http\Controllers;
use App\Coupon;
use Illuminate\Http\Request;
use Cart;
use App\Http\Controllers\Controller;

class CouponsController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {   
        $coupon = Coupon::select('id')->max('id');
        return view('create.discount')->with('coupon',$coupon);
    }
    public function store(Request $request)
    {
        $coupon = Coupon::where('code',$request->coupon_code)->first();

        
        if(!$coupon){
            return redirect()->route('admin.cart-index')->with('error','Invalid coupon code. Please try again.');
        }
        if(($coupon->time) == 1){
            return redirect()->route('admin.cart-index')->with('error','Coupon code already use. Please try again.');
        }
 
        if($coupon->exp_date < now()->toDateTimeString('Y-m-d')){
            return redirect()->route('admin.cart-index')->with('error','Coupon code expire out. Please try again.');
        }

        session()->put('coupon',[
            'name' => $coupon->code,
            'type' => $coupon->type,
            'discount' => $coupon->discount(Cart::subtotal()),
            'free' => $coupon->free(),
        ]);

        return redirect()->route('admin.cart-index')->with('success','Coupon has been applied!');
    }

    /**
     * Remove the specified resource from storage.
     *
    
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('admin.cart-index')->with('success','Coupon has been removed.');
    }

    public function store2(Request $request)
    {
        $this->validate($request,[
            'code' => 'required',
            'type' => 'required',
            'values' => 'required',
            'exp_date' => 'required',
        ]);
        $dsnum = Coupon::all();
        $coupon = new Coupon;
        $coupon->id =  $dsnum->max('id')+ 1;
        $coupon->code = $request->input('code');
        $coupon->type = $request->input('type');
        $coupon->time = 0;
        if($coupon->type=="fixed"){
            $coupon->value = $request->input('values');
        }
        else{
            $coupon->percent_off = $request->input('values');
        }
       
        $coupon->exp_date = $request->input('exp_date');
        $coupon->save();
        return redirect('/')->with('success','register coupon compleated');
        
    }
}
