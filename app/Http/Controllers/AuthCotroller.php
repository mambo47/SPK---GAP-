<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthCotroller extends Controller
{


    public function index()
    {
        return view('auth.loginlogin');

    }


    public function login()
    {
        return view('auth.login');
    }

    
    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);

    }



    public function daftar()
    {
        
        return view('auth.rregister');

    }
    // public function regis(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'username' => 'required|unique:users',
    //         'password' => 'required|min:6',
    //     ]);

    //     $user = new Users();
    //     $user->name = $request->input('name');
    //     $user->username = $request->input('username');
    //     $user->password = Hash::make($request->input('password'));
    //     $user->role = ('pengguna'); // Tetapkan role pengguna baru di sini

    //     $user->save();

    //     return redirect('/home')->with('success', 'Registration successful! Please login.');

    // }
    public function regis(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:8',
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Auth::login($user);
        return redirect('/home');
    }

    public function ganti()
    {
        return view('auth.password');

    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}