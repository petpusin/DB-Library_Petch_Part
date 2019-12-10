<?php

namespace App\Http\Controllers;

use App\ProductLine;
use Illuminate\Http\Request;
use App\Products;
class StockController extends Controller
{
    //
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
        $products = Products::all();
        return view('stock')->with('product',$products);
    }
    
    public function create()
    {
        $productlines = ProductLine::all();
        return view('dashboard.createproduct')->with('productlines',$productlines );
    }
    // <!-- 'productCode','productName','productScale','productVendor','productLine','productDescription','quantityInStock','buyPrice','MSRP' -->

    public function store(Request $request)
    {
        $this->validate($request,[
            'productcode' => 'required',
            'productname' => 'required',
            'productscale' => 'required',
            'productvender' => 'required',
            'productline' => 'required',
            'productdes' => 'required',
            'productqty' => 'required',
            'productprice' => 'required',
            'productmsrp' => 'required'
        ]);
        $products = new Products;
        $products->productCode = $request->input('productcode');
        $products->productName = $request->input('productname');
        $products->productLine = $request->input('productline');
        $products->productScale = $request->input('productscale');
        $products->productVendor = $request->input('productvender');
        $products->productDescription = $request->input('productdes');
        $products->quantityInStock = $request->input('productqty');
        $products->buyPrice = $request->input('productprice');
        $products->MSRP = $request->input('productmsrp');
        $products->save();
        return redirect('/admin/stock')->with('success','Add Product compleated');
    }
}
