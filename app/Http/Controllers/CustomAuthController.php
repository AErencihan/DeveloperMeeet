<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.signup');
    }


    public function customLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        /*
        $validate = $request->validate([
            'password' => 'required|min:6',
        ]);

        if (!$validate) {
            redirect()->back()->withErrors($validate);
        }
        */

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Date('Y-m-d'),
            'updated_at' => Date('Y-m-d')
        ];

        $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    // TODO - create user first model
    public function create(array $data)
    {
        // Undefined array key "first-name"

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'status' => 'active',
            'email' => $data['email'],
            'password' => $data['password'],
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at']
        ]);
    }


    public function dashboard()
    {
        return view('dashboard');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
