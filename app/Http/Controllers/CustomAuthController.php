<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function signUp()
    {
        return view('auth.signup');
    }

    public function giris()
    {
        return view('auth.signIn');
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


        return redirect("/dashboard")->withSuccess('You have signed-in');
    }


    // TODO - create user first model
    public function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'status' => "active",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'created_at' => Date('Y-m-d'),
            'updated_at' => Date('Y-m-d')
        ]);

        auth()->login($user);
        return $user;

    }

    public function signIn(Request $request)
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
        return redirect("/")->withErrors($validator);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            // get user info
            $user = Auth::user();
            $user_name = $user->first_name . " " . $user->last_name;
            return "Welcome " . $user_name;
        }
        return redirect("/")->withSuccess('You are not allowed to access');

    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
