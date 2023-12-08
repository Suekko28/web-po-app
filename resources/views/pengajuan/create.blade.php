@extends('layouts.app-validate')

@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <h2>Pengajuan Barang</h2>
            <h5>Silahkan Isi Form Dibawah Ini Untuk Pengajuan !</h5>
        </div>
        <form action="{{ route('user-pengajuan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body container">
                <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" mb-3">
                            <input type="text" class="form-control" id="nama_alat[0]" name="nama_alat[0]"
                                placeholder="Nama Peralatan (auto)" readonly required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" mb-3">
                            <input type="hidden" name="peralatan_id[0]" id="peralatan_id[0]">
                            <input type="number" class="form-control" id="qty[0]" name="qty[0]" placeholder="Masukkan Qty" required>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                        data-bs-target="#alatModal" id="cari-alat">Cari Alat</button>
                    </div>
                </div>
                <div class="field-alat"></div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-3">
                    <a href="javascript:void(0)" class="btn btn-outline-primary" id="tambah-alat" style="display: none;">Tambah Alat</a>
                    </div>
                </div>

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
        var addButton = $('#tambah-alat');
        var searchAlat = $('#cari-alat');
        var field = $('.field-alat');
        var alatIndex = 0;
        var fieldHtml = '';

        $(addButton).click(function() {
                searchAlat.show();
                addButton.removeAttr("style").hide();
                $(field).append(fieldHtml);
        });

        $(document).on('click', '.DataAlat', function(e) {
                document.getElementById("peralatan_id[" + alatIndex + "]").value = $(this).attr('data-id');
                document.getElementById("nama_alat[" + alatIndex + "]").value = $(this).attr('data-nama-alat');
                alatIndex += 1;
                fieldHtml =
                `<div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="peralatan_id[` + alatIndex + `]" name="peralatan_id[` +
                    alatIndex + `]">
                            <input type="text"  class="form-control" id="nama_alat[` + alatIndex + `]" name="nama_alat[` +
                    alatIndex + `]" placeholder="Nama Peralatan (auto)" readonly>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <input type="number" class="form-control" id="qty[` + alatIndex + `]" name="qty[` + alatIndex + `]" placeholder="Masukan Qty"
                                value="{{ old('qty[`+alatIndex+`]') }}" class="form-control text-center qty" required>
                        </div>
                    </div>
                </div>`;
            searchAlat.removeAttr('style').hide();
            addButton.show();
            $('#alatModal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        });
    </script>
@endsection
