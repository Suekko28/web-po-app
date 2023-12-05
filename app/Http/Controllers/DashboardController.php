<?php

namespace App\Http\Controllers;
use App\Models\pengajuan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $date=date('Y-m-d');
        $created_today=pengajuan::whereDate('created_at','=',$date)->get()->count();
        $total_booking=pengajuan::all()->count();
        return view('admin.dashboard')->with('created_today',$created_today)->with('total_booking',$total_booking);
    }


    public function po(Request $request){
        return view('admin.po');
    }

    public function penjadwalan(Request $request){
        return view('admin.penjadwalan');
    }
}
