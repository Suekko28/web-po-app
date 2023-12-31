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
                                        <th>Nilai Penawaran Terbaru</th>
                                        <th>Penawaran</th>
                                        <th>Dokumen</th>
                                        <th>Status</th>
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
                                        <td>
                                            @if ($item->status == 201)
                                                <a href="/admin-pengajuan/create?id={{ $item->id}}" class="btn btn-success">Buat Penawaran</a>
                                            @elseif ($item->status == 202)
                                                <div class="text-info">menunggu konfirmasi</div>
                                            @elseif ($item->status == 203)
                                                <a href="/admin-pengajuan/{{ $item->id}}/edit" class="btn btn-success">Buat Penawaran Baru</a>
                                            @elseif ($item->status == 200)
                                                <div class="text-success">penawaran diterima</div>
                                            @endif
                                        </td>
                                        <td><a href="/dokumen/surat-pengajuan?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-info">Cek disini</a></td>
                                        <td>
                                            @if ($item->status == 201)
                                                <div class="text-primary">menunggu penawaran</div>
                                            @elseif ($item->status == 202)
                                                <div class="text-info">menunggu konfirmasi</div>
                                            @elseif ($item->status == 203)
                                                <div class="text-danger">ditolak</div>
                                            @elseif ($item->status == 200)
                                                <div class="text-success">diterima</div>
                                            @endif
                                        </td>
                                        <td scope="row" class="text-center">
                                            <form action="{{ route('admin-pengajuan.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>
                                            </form>
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
