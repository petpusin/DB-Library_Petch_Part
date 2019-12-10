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
    public function store(Request $request)
    {
        $coupon = Coupon::where('code',$request->coupon_code)->first();

        
        if(!$coupon){
            return redirect()->route('admin.cart-index')->with('error','Invalid coupon code. Please try again.');
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
}
