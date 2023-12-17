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
                                        <th>Doc. Pengajuan</th>
                                        <th>Doc. Penawaran</th>
                                        <th>Doc. PO</th>
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
                                        <td><a href="/dokumen/surat-po?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-info">Cek disini</a></td>
                                        <td scope="row" class="text-center">
                                            @if ($item->status_po == 200)
                                                @if (is_null($item->tanggal_penjadwalan))
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modalJadwal{{$item->id}}" class="btn btn-primary">Jadwalkan</a>
                                                @else
                                                    <div class="text-info">
                                                        Tanggal Pemeriksaan : <br>
                                                        {{$item->tanggal_penjadwalan}}
                                                    </div>
                                                @endif
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

    @foreach ($data as $item)
    <div class="modal fade" id="modalJadwal{{$item->id}}" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Jadwal</h5> <br>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-penjadwalan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body container">
                            <input type="hidden" name="pengajuan_id" id="pengajuan_id" value="{{$item->id}}">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="tanggal_pengajuan">Tgl Pengajuan</label>
                                        <input type="text" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan"
                                            value="{{date('d-m-Y', strtotime($item->created_at))}}" readonly required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="tanggal_penawaran">Tgl Penawaran</label>
                                        <input type="text" class="form-control" id="tanggal_penawaran" name="tanggal_penawaran"
                                            value="{{date('d-m-Y', strtotime($item->tanggal_penawaran))}}" readonly required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="tanggal_penjadwalan">Tgl Penjadwalan</label>
                                        <input type="date" class="form-control" id="tanggal_penjadwalan" name="tanggal_penjadwalan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                </div>
                <div class="modal-footer">
                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit" class="btn btn-primary ms-3">Kirim</button>
                        <a href="javascript:void(0)" data-dismiss="modal" aria-label="Close" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div><!-- End courier centered Modal-->
    @endforeach
@endsection
