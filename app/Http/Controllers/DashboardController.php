<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function mahasiswaDashboard()
    {
        return view('dashboard.index', [
            'datas' => User::where('id', auth()->user()->id)->get()
        ]);
    }
    
    public function akademik()
    {
        return view('akademik', [
            'datas' => User::where('id', auth()->user()->id)->get()
        ]);
    }

   

    public function biodata()
    {
        return view('dashboard.biodata', [
            'datas' => User::where('id', auth()->user()->id)->get()
        ]);
    }



    
    public function adminDashboard()
    {
        return view('dashboardAdmin.index', [
            'datas' => User::where('id', auth()->user()->id)->get()
        ]);
    }
}
