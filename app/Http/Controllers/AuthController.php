<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
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

        //admin
        Mail::to('ibnuzaky9444@gmail.com')->send(new MailVerify([
                'body'=> 'Hi, admin tolong verify email ini',
                'thanks'=> $request->name
        ]));

        //user
        Mail::to('ibnuzaky94444@gmail.com')->send(new MailVerify([
            'body'=> 'Hi,'.$request->name.' akun anda akan segera kami verify',
            'thanks'=> 'team admin, IDKCompany'
        ]));

        return back()->with('success', 'Sukses Register');
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
            return redirect('/verify')->with('success', 'Mohon tunggu diverifikasi');
        }
        return back()->with('error', 'Email atau Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function welcome()
    {
        $totalkaryawans = Karyawan::count();

        return view('welcome', compact('totalkaryawans'));
    }
}
