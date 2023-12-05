<?php

namespace App\Http\Controllers;
use App\Models\pengajuan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $data=pengajuan::all();
        return view('admin.dashboard');
    }


    public function po(Request $request){
        return view('admin.po');
    }

    public function penjadwalan(Request $request){
        return view('admin.penjadwalan');
    }
}
