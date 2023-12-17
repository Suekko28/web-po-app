@extends('layouts.app-validate')

@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <h2>Edit Pengajuan Barang</h2>
        </div>
        <form action="{{ route('user-pengajuan.update', $detailAlat[0]->pengajuan_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body container">
                @php
                    $i = 0;
                @endphp
                @foreach ($detailAlat as $alat)
                    <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" name="detail_alat_id[{{$i}}]" id="detail_alat_id[{{$i}}]" value="{{$alat->id}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class=" mb-3">
                                <input type="text" class="form-control" id="nama_alat[{{$i}}]" name="nama_alat[{{$i}}]" value="{{$alat->peralatan->nama_alat}}"
                                    placeholder="Nama Peralatan (auto)" readonly required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class=" mb-3">
                                <input type="hidden" name="peralatan_id[{{$i}}]" id="peralatan_id[{{$i}}]" value="{{$alat->peralatan_id}}">
                                <input type="number" class="form-control" id="qty[{{$i}}]" name="qty[{{$i}}]" value="{{$alat->qty}}" placeholder="Masukkan Qty" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-outline-info" onclick="changeAlat({{$i}})" id="cari-alat">Ganti Alat</button>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary ms-3">Kirim</button>
                    <a href="{{route('user-pengajuan.index')}}" class="btn btn-danger">Batal</a>
                </div>
            </div>
            <!-- /.card-body -->

        </form>
    </div>


    <div class="modal fade" id="alatModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Alat</h5> <br>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>klik dibaris data untuk memilih alat</p>
                    <div class="table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Alat</th>
                                    <th scope="col">Tgl Terdata</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peralatan as $alat)
                                    <tr class="DataAlat" data-id="{{ $alat->id }}" data-nama-alat="{{ $alat->nama_alat }}">
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $alat->nama_alat }}</td>
                                        <td>{{ $alat->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End courier centered Modal-->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        function changeAlat(index) {
			$('#alatModal').modal('show');
			$(".DataAlat").attr('data-alat-id', index);

			$(document).on('click', '.DataAlat', function(e) {
                document.getElementById("peralatan_id[" + $(this).attr('data-alat-id') + "]").value = $(this).attr('data-id');
                document.getElementById("nama_alat[" + $(this).attr('data-alat-id') + "]").value = $(this).attr('data-nama-alat');
				$('#alatModal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
			});
		};
    </script>
@endsection
