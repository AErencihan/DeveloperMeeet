<?php

namespace App\Http\Controllers;

use App\Http\WelcomeEmail;
use App\Listeners\SendWelcomeEmail;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Session;
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
        // return view('maps.mapsearch');

    }


    public function customLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Auth::loginUsingId($credentials['email']);
            session_start();
            $_SESSION['user'] = $this->getFirst($credentials['email']);
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        return redirect("/hatalı-giriş");
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $all = $request->all();
        $user = $this->create($all);
        Session::put('user', $user);

        $mail = $all['email'];
        session_start();
        $_SESSION['user.email'] = $all['email'];
        $_SESSION['user'] = $user;
        (new SendWelcomeEmail)->handle($mail);
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
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            session_start();
            $_SESSION['user.email'] = $credentials['email'];
            return redirect()->intended('hatalı-giriş')
                ->withSuccess('Signed in');
        }
        return redirect("/");
    }


    public function dashboard()
    {
        return redirect("/")->withSuccess('You are not allowed to access');

    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function updatePassword(Request $request)
    {
        $user = User::where('remember_token', $request->token)->first();
        if ($user) {
            $user->update([
                'password' => Hash::make($request->password),
                'remember_token' => null
            ]);
            return redirect("/signin");
        } else {
            return view('auth.error-token');
        }
    }

    /**
     * @param $email
     * @return mixed
     */
    public function getFirst($email)
    {
        $first = User::where('email', $email)->first();
        return $first;
    }
}
