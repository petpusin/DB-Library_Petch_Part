<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'customerName' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'contactLastName' => ['required', 'string', 'max:50'],
            'contactFirstName' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string','min:6'],
            'addressLine1' => ['required', 'string','max:50'],
            'addressLine2' => ['required', 'string', 'max:50'],
            'city' => ['required', 'string', 'min:1',],
            'state' => ['required', 'string', 'max:50'],
            'postalCode' => ['required', 'string', 'min:4','max:15'],
            'country' => ['required', 'string', 'max:50']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'customerName' => $data['customerName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'contactLastName' => $data['contactLastName'],
            'contactFirstName' => $data['contactFirstName'],
            'phone' => $data['phone'],
            'addressLine1' => $data['addressLine1'],
            'addressLine2' => $data['addressLine2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postalCode' => $data['postalCode'],
            'country' => $data['country']

        ]);
    }
}
