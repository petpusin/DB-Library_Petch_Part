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
        $user_id = auth()->user()->em_id;
        
        
        return view('admin');
        
    }

    public function dashboard(){
        $employees = employees::all();
        return view('dashboard.admin-dashboard')->with('employees',$employees);
    }
    
    public function employeeEdit($employeeNumber){
        $employee = employees::findOrFail($employeeNumber);
        return view('dashboard.admin-edit')->with('employee',$employee);
    }
    public function employeeCreate($employeeNumber){
        $employee = employees::findOrFail($employeeNumber);
        return view('dashboard/admin-create')->with('employee',$employee);
    }
    public function employeeDelete($employeeNumber){
        //$employee = employees::findOrFail($employeeNumber);->with('employee',$employee);
        //return view('dashboard.admin-delete');
        $employee = employees::findOrFail($employeeNumber);
        return view('dashboard.admin-delete')->with('employee',$employee);
    }

    public function CreateUpdate(Request $request,$employeeNumber){
            
        $i = 1;
        // $ii = 0;
        $all = employees::all();
        foreach($all as $a){
            if($a->employeeNumber == $request->input('employeeNumber')){
                $i = 0;
            }
        }
        if($i == 1){
            $employees = new employees;
            $employees->employeeNumber = $request->input('employeeNumber');
            $employees->firstName = $request->input('firstName');
            $employees->lastName = $request->input('lastName');
            $employees->extension = $request->input('extension');
            $employees->email = $request->input('email');
            $employees->officeCode = $request->input('officeCode');
            $employees->reportsTo = $request->input('reportsTo');
            $employees->jobTitle = $request->input('jobTitle');
            $employees->save();
        }else{
            // $ii = 1;
            // return redirect('/admin/dashboard/')->with('error',$ii);
        }
        return redirect('/admin/dashboard/');
    }

    public function employeeupdate(Request $request ,$employeeNumber)
    {
        employees::where('employeeNumber',$employeeNumber)
        ->update([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'extension' => $request->input('extension'),
        'email' => $request->input('email'),
        'officeCode' => $request->input('officeCode'),
        'jobTitle' => $request->input('jobTitle')]);
        return redirect('/admin/dashboard/');
    }

    public function deleteUpdate($employeeNumber)
    {
        $i = 0;
        $aa = employees::all();
        foreach($aa as $b){
            if($b->employeeNumber == auth()->user()->em_id && $b->jobTitle=="President"){
                $i = 1;
            }
        }
        $a = employees::findOrFail($employeeNumber);
        if($a->reportsTo == auth()->user()->em_id || $i == 1){
            $a->delete();
        }else{

        }
        return redirect('/admin/dashboard/');
    }
}
