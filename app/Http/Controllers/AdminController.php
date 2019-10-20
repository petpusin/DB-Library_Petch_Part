<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->em_id;
        
        $data = DB::table('employees')->join('admins','employees.employeeNumber','=','admins.em_id')->where('employees.employeeNumber','=',$user_id)->get();
        return view('admin',compact('data'));
        
    }

    
}
