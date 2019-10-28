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
        
        
        return view('admin');
        
    }

    public function dashboard(){
        $employees = employees::all();
        return view('dashboard.admin-dashboard',compact('employees'));
    }
    
}
