<?php

namespace App\Http\Controllers;

use App\Models\pengajuan;
use Illuminate\Http\Request;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pengajuan::orderby("id", "desc")->where('status_po', 200)->with('detail_alat')->paginate(10);
        return view("admin-penjadwalan.index")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pengajuan::where('id', $request->pengajuan_id)->update([
            'tanggal_penjadwalan' => $request->tanggal_penjadwalan,
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect()->back()->with('success', 'Penjadwalan berhasil diupdate !');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengajuan $pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengajuan $pengajuan)
    {
        //
    }
}
