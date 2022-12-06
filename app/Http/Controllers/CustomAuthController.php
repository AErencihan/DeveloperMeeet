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
        $validate = $request->validate([
            'name' => 'nullable',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if (!$validate) {
            redirect()->back()->withErrors($validate);
        }

        $data = $request->all();
        $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    // TODO - create user first model
    public function create(array $data)
    {
        // Undefined array key "first-name"

        return User::create([
            'first_name' => $data['first-name'],
            'last_name' => $data['last-name'],
            'phone' => $data['phone'],
            'status' => 'active',
            'email' => $data['email'],
            'password' => $data['password']
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
