<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('dashboard.pengaturan', [
            'datas' => User::where('id', auth()->user()->id)->get()
        ]);
    }

    public function updatePassword(Request $request, User $user)
    {
        $rules = [
            'password' => 'required',
            'passwordBaru' => 'required',
            'passwordKonfirmasi' => 'required'
        ];
    
        $validatedData = $request->validate($rules);
        
        if(!$validatedData){
            return back();
        }
    
        // Mengambil nilai password database
        $passwordDatabase = auth()->user()->password;
    
        $password = $validatedData["password"];
        $passwordBaru = $validatedData["passwordBaru"];;
        $passwordKonfirmasi = $validatedData["passwordKonfirmasi"];;
    
        if (Hash::check($password, $passwordDatabase)) {
            if($passwordBaru === $passwordKonfirmasi){
                $idUser = auth()->user()->id;
                DB::table('users')
                  ->where('id', $idUser)
                  ->update(['password' => Hash::make($passwordBaru)]);
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/pengaturan')->with('SalahKonfirmasi', 'Password Baru Anda Tidak Sesuai!');
            }
        } else {
            return redirect()->intended('/pengaturan')->with('SalahPassword', 'Password Sekarang Anda Salah!');
        }
    }

    public function hapusAkun(Request $request)
    {
        if(strtoupper($request->delete) === "DELETE"){
            $idUser = auth()->user()->id;
            User::destroy($idUser);
            return redirect()->intended('/');
        } else {
            return redirect()->intended('/pengaturan')->with('gagalDelete', 'Salah Input!');
        }
        
    }
}
