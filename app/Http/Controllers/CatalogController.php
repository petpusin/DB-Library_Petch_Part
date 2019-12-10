<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductLine;
use App\Products;


class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    

    public function index(Request $request)
    {
      $products = ProductLine::all();
      return view('create.home')->with('productline',$products);

    }
    public function showproduct($id,$product)
     {
       $products = Products::where('productLine',$id)->firstOrFail();
       return view('create.product')->with('product',$products);
     }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.catalog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->validate($request,['vendor' => 'required','scale' => 'required']);
        //$user = new User(
        //[
        //    'vendor' => $request->get('vendor'),
        //    'scale' => 
        //$request->get('scale')
        //]
        //);
        //$user->save();
        //return redirect('catalog'); // -> with('success','บันทึกแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $products = Products::where('productLine',$id)->get();
      $productscales = Products::where('productLine',$id)
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productvendors = Products::where('productLine',$id)
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      return view('user.catalog',compact('productscales','productvendors','products'));
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

    public function reset($id,$product)
    {

    }
    
    


   
    



}
