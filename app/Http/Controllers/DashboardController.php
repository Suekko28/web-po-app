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

    public function index(){
        $data = pengajuan::orderby("id", "desc")->where('status', 200)->with('detail_alat')->paginate(10);
        return view("admin-po.index")->with('data',$data);
    }

    public function generatePo(Request $request) {
        pengajuan::where('id', $request->pengajuanId)->update(['updated_at' => date("Y-m-d H:i:s"), 'status_po' => 202]);

        return redirect()->back()->with('success', 'PO berhasil digenerate !');
    }
    public function approvalPo(Request $request)
    {
        if ($request->status_po == 'decline') {
            pengajuan::where('id', $request->pengajuanId)->update(['updated_at' => date("Y-m-d H:i:s"), 'status_po' => 203]);
        } else if ($request->status_po == 'approve') {
            pengajuan::where('id', $request->pengajuanId)->update(
                [
                    'updated_at' => date("Y-m-d H:i:s"),
                    'status_po' => 200
                ]);
        } else {
            return 500;
        }

        return redirect()->back()->with('success', 'Status berhasil diupdate !');
    }

    public function penjadwalan(Request $request){
        return view('admin.penjadwalan');
    }
}
