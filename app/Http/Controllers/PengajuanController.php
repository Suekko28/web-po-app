<?php

namespace App\Http\Controllers;

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
        return view("index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'peralatan' => 'required',
            'qty' => 'required',
            'unit' => 'required',
            'harga' => 'nullable'

        ], [
            'peralatan.required' => 'Peralatan wajib diisi',
            'qty.required' => 'QTY wajib diisi',
            'unit.required' => 'Unit wajib diisi'
        ]);

        $data = [
            'peralatan' => $request->peralatan,
            'qty' => $request->qty,
            'unit' => $request->unit,
            'harga' => $request->harga,

        ];

        pengajuan::create($data);
        return redirect()->to('homevalidate/pengajuan')->with('success', 'Berhasil Menambah Pengajuan');
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
        return view('/homevalidate/pengajuan')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'peralatan' => 'required',
            'qty' => 'required',
            'unit' => 'required',
            'harga' => 'nullable'

            
        ], [
            'peralatan.required' => 'Peralatan wajib diisi',
            'qty.required' => 'QTY wajib diisi',
            'unit.required' => 'Unit wajib diisi'
        ]);

        $data = pengajuan::findOrFail($id);

        $data->update([
            'peralatan' => $request->peralatan,
            'qty' => $request->qty,
            'unit' => $request->unit,
            'harga' => $request->harga,

        ]);

        return redirect()->to('homevalidate/pengajuan')->with('success', 'Berhasil Menambah Pengajuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pengajuan::where('id', $id)->delete();
        return redirect()->to('homevalidate/pengajuan')->with('delete', 'Berhasil Melakukan Delete Data');
    }
}
