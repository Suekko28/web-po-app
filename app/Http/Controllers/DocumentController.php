<?php

namespace App\Http\Controllers;

use App\Models\DetailAlat;
use App\Models\pengajuan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function generatePengajuan(Request $request) {
        $peralatan = DetailAlat::where('pengajuan_id', $request->pengajuanId)->with('peralatan')->get();

        $pdf = Pdf::loadView('dokumen.surat-pengajuan', [
            'peralatan' => $peralatan->toArray()
        ]);
        return $pdf->stream('Surat Pengajuan - '. $request->pengajuan_id .'pdf');
    }

    public function generatePenawaran(Request $request) {
        $peralatan = DetailAlat::where('pengajuan_id', $request->pengajuanId)->with('peralatan')->get();
        $pengajuan = pengajuan::where('id', $request->pengajuanId)->with('user')->first();

        $pdf = Pdf::loadView('dokumen.surat-penawaran', [
            'peralatan' => $peralatan->toArray(),
            'pengajuan' => $pengajuan->toArray()
        ]);
        return $pdf->stream('Surat Penawaran - '. $request->pengajuan_id .'pdf');
    }

    public function generatePo(Request $request) {
        $peralatan = DetailAlat::where('pengajuan_id', $request->pengajuanId)->with('peralatan')->get();
        $pengajuan = pengajuan::where('id', $request->pengajuanId)->with('user')->first();

        $pdf = Pdf::loadView('dokumen.surat-po', [
            'peralatan' => $peralatan->toArray(),
            'pengajuan' => $pengajuan->toArray()
        ]);
        return $pdf->stream('Surat PO - '. $request->pengajuan_id .'pdf');
    }
}
