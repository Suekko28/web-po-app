@extends('layouts.app-admin')

@section('navbar-admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin-peralatan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body container">
                                <div class="form-group mb-3">
                                    <label for="nama_alat">Nama Riksa / Alat</label>
                                    <input type="text" class="form-control" id="nama_alat" name="nama_alat"
                                        placeholder="Masukkan Nama Riksa / Alat" required>
                                </div>
                                <div class="d-flex flex-row-reverse mt-3">
                                    <button type="submit" class="btn btn-primary ms-3">Kirim</button>
                                    <a href="{{route('admin-peralatan.index')}}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </form>
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

