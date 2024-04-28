<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "nim" => 'required',
            "password" => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $user = Auth::user();
            if ($user->level === 'mahasiswa') {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } 

            if ($user->level === 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('/dashboardAdmin');
            }

            if ($user->level === 'dosen') {
                $request->session()->regenerate();  
                return redirect()->intended('/dashboardDosen');
            }
        }

        return back()->with('loginError', 'Gagal Login');
    }

    public function logout(Request $request){
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
