<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peralatan::paginate(10);
        return view("admin-peralatan.index")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-peralatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = [
            'nama_alat' => $request->nama_alat
        ];
        Peralatan::create($validatedData);

        return redirect()->route('admin-peralatan.index')->with('success', 'Data riksa / alat berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Peralatan $admin_peralatan)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peralatan $admin_peralatan)
    {
        return view('admin-peralatan.update', ['peralatan' => $admin_peralatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peralatan $admin_peralatan)
    {
        $validatedData = [
            'nama_alat' => $request->nama_alat
        ];
        Peralatan::where('id', $admin_peralatan->id)->update($validatedData);
        return redirect()->route('admin-peralatan.index')->with('success', 'Data riksa / alat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peralatan $admin_peralatan)
    {
        Peralatan::where('id', $admin_peralatan->id)->delete();
        return redirect()->route('admin-peralatan.index')->with('success', 'Data riksa / alat berhasil dihapus');
    }
}
