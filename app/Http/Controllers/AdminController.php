<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;

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
            
            'jobTitle' => $request->input('jobTitle')
        ]);
        
        return redirect('/admin/dashboard')->with('status','You Date is Updateed');
    }
}
