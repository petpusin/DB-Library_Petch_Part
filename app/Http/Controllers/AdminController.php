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
    
    public function employeeedit(Request $request ,$employeeNumber){

        $employee = employees::findOrFail($employeeNumber);
        return view('dashboard.admin-edit')->with('employee',$employee); 

    }

    public function employeeupdate(Request $request ,$employeeNumber)
    {
        employees::find($employeeNumber)->update([
            'lastname' => $request->input('lastName'),
            'jobTitle' => $request->input('jobTitle')
        ]);
        
        return redirect('/admin/dashboard')->with('status','You Date is Updateed');
    }
}
