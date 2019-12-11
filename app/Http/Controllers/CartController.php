<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Products;
use Cart;

class CartController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();
        $tax = config('cart.tax') /100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = Cart::subtotal() - $discount;
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;
        return view('create.cart',['data' => $cart
        ,'discount' => $discount,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal
        ]);
    }
    public function additem($id)
    {
        $product = Products::find($id);
        $cart = Cart::add(['id' => $product->productCode, 'name' => $product->productName, 'qty' => 1, 'price' => $product->buyPrice ,'options' =>[
            'size' => $product->productScale,
            'stock' => $product->quantityInStock,
        ]]);
        if($cart){
            return redirect('/');
        }
    }

    public function checkout(Request $request)
    {
        return Order::createchekout($request);
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
    public function update(Request $request)
    {
        $qty = $request->newQty;
        $rowId = $request->rowID;
        $id = $request->ID;
        $product = Products::find($id);
        $stock = $product->quantityInStock;
        if($qty<$stock){
            Cart::update($rowId,$qty);
            $msg = 'Cart is updated';
            echo "Cart updated successfully";
            return back()->with('status',$msg);
        }else{
            echo "Check Quantity In The Stock";
            $msg = 'Please check your qty is more than product stock';
                    return back()->with('error',$msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed!');
    }

    

    

    
}
