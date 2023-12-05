<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanFormRequest;
use App\Models\pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = pengajuan::orderby("id", "desc")->paginate(10);
        return view("admin-pengajuan.index")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pengajuan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PengajuanFormRequest $request)
    {

        pengajuan::create($request->all());
        return redirect()->route('pengajuan.index')->with('success', 'Berhasil Menambah Pengajuan');
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
    public function edit(string $id)
    {
        $data = pengajuan::where('id', $id)->first();
        return view('pengajuan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PengajuanFormRequest $request, string $id)
    {
        // $request->validate([
        //     'peralatan' => 'required',
        //     'qty' => 'required',
        //     'unit' => 'required',
        //     'harga' => 'nullable'

            
        // ], [
        //     'peralatan.required' => 'Peralatan wajib diisi',
        //     'qty.required' => 'QTY wajib diisi',
        //     'unit.required' => 'Unit wajib diisi'
        // ]);

        $data = pengajuan::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('pengajuan.index')->with('success', 'Berhasil Mengubah Pengajuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pengajuan::where('id', $id)->delete();
        return redirect()->to(route('pengajuan.index'))->with('delete', 'Berhasil Melakukan Delete Data');
    }
}
