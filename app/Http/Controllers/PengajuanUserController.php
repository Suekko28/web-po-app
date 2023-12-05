<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanFormRequest;
use App\Models\pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;



class PengajuanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $data=pengajuan::where('user_id',$user_id)->get();
    
        return view('pengajuan.index',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $created_at = date("Y-m-d H:i:s", strtotime(Date::now()));
        $data['user_id']=auth()->user()->id;
        $data['status']=1;
        $data['created_at']=$created_at;
        $data['updated_at']=$created_at;
        
        $pengajuan=pengajuan::create($data);
        return redirect()->route('user-pengajuan.index')->with('success','sukses menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=pengajuan::where('id',$id)->first();
        return view('pengajuan.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $created_at = date("Y-m-d H:i:s", strtotime(Date::now()));
        $old_data=pengajuan::where('id',$id)->first();
        $data=$request->all();
        $data['updated_at']=$created_at;
        $old_data->update($data);
        return redirect()->route('user-pengajuan.index')->with('success','sukses menambahkan data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
       
        $data=pengajuan::where('id',$id);
        if(auth()->user()->id==$data->first()->user_id){
            $data->delete();
        }
        return redirect()->route('user-pengajuan.index')->with('success','sukses menghapus data');

    }
}
