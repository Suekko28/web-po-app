@extends('layouts.app-admin')

@section('navbar-admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengajuan</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Pengajuan</th>
                                        <th>Jumlah Alat</th>
                                        <th>Nilai Penawaran</th>
                                        <th>Dokumen Pengajuan</th>
                                        <th>Dokumen Penawaran</th>
                                        <th>Status PO</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ count($item->detail_alat) }}</td>
                                        <td>Rp. {{ $item->total_penawaran }}</td>
                                        <td><a href="/dokumen/surat-pengajuan?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-info">Cek disini</a></td>
                                        <td><a href="/dokumen/surat-penawaran?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-info">Cek disini</a></td>
                                        <td>
                                            @if ($item->status_po == 201)
                                                <div class="text-primary">menunggu generate po</div>
                                            @elseif ($item->status_po == 202)
                                                <div class="text-info">menunggu konfirmasi</div>
                                            @elseif ($item->status_po == 203)
                                                <div class="text-danger">ditolak</div>
                                            @elseif ($item->status_po == 200)
                                                <div class="text-success">diterima</div>
                                            @endif
                                        </td>
                                        <td scope="row" class="text-center">
                                            @if ($item->status_po == 201)
                                                <a href="/admin-po/generate-po?pengajuanId={{$item->id}}" class="btn btn-primary">Generate PO</a>
                                            @else
                                                <a href="/dokumen/surat-po?pengajuanId={{$item->id}}" target="_blank" class="btn btn-primary">Lihat PO</a>
                                            @endif
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main-panel ends -->
    </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
