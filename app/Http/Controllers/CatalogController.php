<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Products;
use DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    //{
        //$products = Products::all()->toArray();
        //return view('user.catalog',compact('products'));
    //}


    public function index(Request $request)
    {
        $products = Products::all()->toArray();

        $productScale = DB::table('products')
          ->select('productScale')
          ->groupBy('productScale')
          ->orderBy('productScale', 'ASC')
          ->get();
        $productVendor = DB::table('products')
          ->select('productVendor')
          ->groupBy('productVendor')
          ->orderBy('productVendor', 'ASC')
          ->get();


        //  if(request()->ajax())
        //  {
          // if(!empty($request->filter_scale) or !empty($request->filter_vendor))
          // {
          //   $data = DB::table('products')
          //     ->select('productName','productScale','productVendor')
          //     ->where('productScale', $request->filter_scale)
          //     ->where('productVendor', $request->filter_vendor)
          //     ->get();
          // }
          // else
          // {

            // $data = DB::table('products')
            //   ->select('productName','productScale','productVendor')
            //   ->get();

          // }
        //  return datatables()->of($data)->make(true);
        //  }
        //  return view('user.catalog', compact('productScale','productVendor') );

          return view('user.catalog', compact('productScale','productVendor','products') );

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
        //    'scale' => $request->get('scale')
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


    public function reset()
    {
      $products = Products::all()->toArray();
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();

        // if(!empty($request->filter_scale) or !empty($request->filter_vendor))
        // {
        //   $data = DB::table('products')
        //     ->select('productName','productScale','productVendor')
        //     ->where('productScale', $request->filter_scale)
        //     ->where('productVendor', $request->filter_vendor)
        //     ->get();
        // }
        // else
        // {
          // $data = DB::table('products')
          //   ->select('productName','productScale','productVendor')
          //   ->get();
        // }

        return view('user.catalog', compact('productScale','productVendor','products') );
    }


    public function get10(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:10')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get12(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:12')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get18(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:18')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get24(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:24')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get32(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:32')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get50(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:50')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get72(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:72')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function get700(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productScale','1:700')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v1(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Autoart Studio Design')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v2(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Carousel DieCast Legends')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v3(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Classic Metal Creations')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v4(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Exoto Designs')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v5(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Gearbox Collectibles')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v6(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Highway 66 Mini Classics')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v7(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Min Lin Diecast')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v8(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Motor City Art Classics')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v9(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Red Start Diecast')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v10(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Second Gear Diecast')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v11(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Studio M Art Models')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v12(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Unimax Art Galleries')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }

    public function v13(Request $request)
    {
      $productScale = DB::table('products')
        ->select('productScale')
        ->groupBy('productScale')
        ->orderBy('productScale', 'ASC')
        ->get();
      $productVendor = DB::table('products')
        ->select('productVendor')
        ->groupBy('productVendor')
        ->orderBy('productVendor', 'ASC')
        ->get();
      $products = Products::where('productVendor','Welly Diecast Productions')->get();
      return view('user.catalog', compact('productScale','productVendor','products') );
    }



}
