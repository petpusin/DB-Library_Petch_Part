<?php

namespace App\Http\Controllers\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
    public function __contruct()
    {
        $this->middleware('guest:admin', ['except'=> ['logout']]);
    }

    public function showSigninForm()
    {
        return view('auth.admin-signin');
    }

    public function signin(Request $request)
    {
        
        // validate the form date
        $this->validate($request, [
            'em_id' => 'required',
            'password' => 'required|min:3'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['em_id' => $request->em_id, 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('em_id', 'remember'));
    }
    
    public function em_id()
    {
        return 'em_id';
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
