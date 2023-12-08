<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanFormRequest;
use App\Models\DetailAlat;
use App\Models\pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pengajuan::orderby("id", "desc")->with('detail_alat')->paginate(10);
        return view("admin-pengajuan.index")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = DetailAlat::where("pengajuan_id", $request->id)->with('peralatan')->get();
        return view("admin-pengajuan.create", [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $updatePengajuan = [
            'total_penawaran' => $request->total_penawaran,
            'status' => 202,
            'tanggal_penawaran' => date("Y-m-d", strtotime(Date::now()))
        ];

        // dd($updatePengajuan);

        for($i=0; $i< count($request->pengajuan_id); $i++) {
            $updateDetailAlat = [
                'harga' => $request->harga[$i],
                'total_unit' => $request->total_unit[$i],
                'updated_at' => date("Y-m-d H:i:s", strtotime(Date::now()))
            ];
            DetailAlat::where('id', $request->detail_id[$i])->update($updateDetailAlat);
        }
        pengajuan::where('id', $request->pengajuan_id[0])->update($updatePengajuan);
        return redirect()->route('admin-pengajuan.index')->with('success', 'Berhasil melakukan penawaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $admin_pengajuan)
    {
        $data = DetailAlat::where("pengajuan_id", $admin_pengajuan->id)->with('peralatan')->get();
        return view("admin-pengajuan.update", [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengajuan $admin_pengajuan)
    {
        $updatePengajuan = [
            'total_penawaran' => $request->total_penawaran,
            'status' => 202,
            'tanggal_penawaran' => date("Y-m-d", strtotime(Date::now()))
        ];

        for($i=0; $i< count($request->pengajuan_id); $i++) {
            $updateDetailAlat = [
                'harga' => $request->harga[$i],
                'total_unit' => $request->total_unit[$i],
                'updated_at' => date("Y-m-d H:i:s", strtotime(Date::now()))
            ];
            DetailAlat::where('id', $request->detail_id[$i])->update($updateDetailAlat);
        }
        pengajuan::where('id', $request->pengajuan_id[0])->update($updatePengajuan);
        return redirect()->route('admin-pengajuan.index')->with('success', 'Berhasil melakukan penawaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $admin_pengajuan)
    {
        pengajuan::where('id', $admin_pengajuan->id)->delete();
        DetailAlat::where('id', $admin_pengajuan->id)->delete();
        return redirect()->to(route('admin-pengajuan.index'))->with('delete', 'Berhasil Melakukan Delete Data');
    }
}
