<?php

namespace App\Http\Controllers;

use App\Models\pengajuan;
use Illuminate\Http\Request;

class PenawaranUserController extends Controller
{
    //
    public function index()
    {
        $user_id=auth()->user()->id;
        $data=pengajuan::where('user_id',$user_id)->where('status', '!=', 201)->get();

        return view('penawaran.index',[
            'data'=>$data,
        ]);
    }
    public function po()
    {
        $user_id=auth()->user()->id;
        $data=pengajuan::where('user_id',$user_id)->where('status', 200)->get();

        return view('po.index',[
            'data'=>$data,
        ]);
    }

    public function approvalPenawaran(Request $request)
    {
        if ($request->status == 'decline') {
            pengajuan::where('id', $request->pengajuanId)->update(['updated_at' => date("Y-m-d H:i:s"), 'status' => 203]);
        } else if ($request->status == 'approve') {
            pengajuan::where('id', $request->pengajuanId)->update(
                [
                    'updated_at' => date("Y-m-d H:i:s"),
                    'status' => 200
                ]);
        } else {
            return 500;
        }

        return redirect()->back()->with('success', 'Status berhasil diupdate !');
    }
}
