<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Admin;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function showData(){
    //     $data = Admin::all();
    //     return view('welcome',['data'=>$data] );
    // }
    
    // function edit($userID){
    //     // $data = Admin::find($userID);
    //     // if(count($data0) > 0){
    //     //     return view('edit',['data'=>$data]);

    //     // }else{
    //     //     $data = Admin::all();
    //     //     return view('welcome',['data'=>$data] );
    //     // }
        
    //     echo $userID;
    // }

}
