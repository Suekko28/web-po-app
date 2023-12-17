<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanFormRequest;
use App\Models\DetailAlat;
use App\Models\pengajuan;
use App\Models\Peralatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;



class PengajuanUserController extends Controller
{
    public function getPengajuanId(){
        $dataToday = pengajuan::whereDate('created_at', Carbon::today())->get();
        $last = count($dataToday) + 1;
        $id = date('Ymd') . $last;

        return $id;
    }

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
        $peralatan = Peralatan::all();
        return view('pengajuan.create', [
            'peralatan' => $peralatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengajuanId = $this->getPengajuanId();

        $validPengajuan = [
            'id'      => $pengajuanId,
            'user_id' => $request->user_id,
            'status' => 201
        ];

        if($validPengajuan){
            for($i=0; $i < count($request->peralatan_id); $i++){
                $validDetailAlat[$i] = [
                    'pengajuan_id' => $pengajuanId,
                    'peralatan_id' => $request->peralatan_id[$i],
                    'qty'          => $request->qty[$i],
                    'created_at'   => date("Y-m-d H:i:s", strtotime(Date::now()))
                ];
            }

            pengajuan::create($validPengajuan);
            DetailAlat::insert($validDetailAlat);
        }
        return redirect()->route('user-pengajuan.index')->with('success','sukses melakukan pengajuan');
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
        $detailAlat = DetailAlat::where('pengajuan_id',$id)->get();
        $peralatan = Peralatan::all();
        return view('pengajuan.edit', [
            'detailAlat' => $detailAlat,
            'peralatan' => $peralatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        for($i=0; $i < count($request->peralatan_id); $i++){
            $validDetailAlat = [
                'peralatan_id' => $request->peralatan_id[$i],
                'qty'          => $request->qty[$i],
                'updated_at'   => date("Y-m-d H:i:s", strtotime(Date::now()))
            ];
            DetailAlat::where('id', $request->detail_alat_id[$i])->update($validDetailAlat);
        }


        return redirect()->route('user-pengajuan.index')->with('success','sukses melakukan pengajuan');

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
