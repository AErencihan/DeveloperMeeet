<?php

namespace App\Http\Controllers;

use App\Http\WelcomeEmail;
use App\Listeners\SendWelcomeEmail;
use App\Models\activity;
use Illuminate\Auth\Events\Registered;
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

    public function tercihler()
    {
        return view('tercihler');
    }

    public function giris()
    {
        return view('auth.signIn');
    }

    public function meets()
    {
         return view('maps.mapsearch');
    }


    public function customLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("/hatalı-giriş")->withErrors($validator);
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $all = $request->all();
        $this->create($all);

        $mail = $all['email'];
        session_start();
        $_SESSION['user.email'] = $all['email'];
        (new SendWelcomeEmail)->handle($mail);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("/dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'status' => "active",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'created_at' => Date('Y-m-d'),
            'updated_at' => Date('Y-m-d')
        ]);
    }

    public function signIn(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            session_start();
            $_SESSION['user.email'] = $credentials['email'];
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
