<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\MailVerify;

class AuthController extends Controller
{
    function register(){
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;

        $user->save();

        Mail::to('ibnuzaky944@gmail.com')->send(new MailVerify(
            [
                'body'=> 'Hi, admin tolong verify email ini',
                'thanks'=> $request->name
            ]
        ));

        Mail::to($request->email)->send(new MailVerify([
            'body'=> 'Hi,'.$request->name.' akun anda akan segera kami verify',
            'thanks'=> 'team admin'
        ]));

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function verify()
    {
        return view('verify');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            if (Auth::user()->user_id == 2) {
                return redirect('/home')->with('success', 'Login berhasil');
            } elseif (Auth::user()->user_id == 1) {
                return redirect('/verify')->with('error', 'Tunggu Email diverifikasi');
            }

        return back()->with('error', 'Email or Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
