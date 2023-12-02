@extends('layouts.app-admin')

@section('navbar-admin')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label for="peralatan">Nama Peralatan(ambil dari data sebelumnya)</label>
                        <input type="text" class="form-control" id="peralatan" name="peralatan"
                            placeholder="Masukkan Nama Peralatan">
                    </div>

                    <div class="form-group mb-3">
                        <label for="qty">QTY (ambil dari data sebelumnya)</label>
                        <input type="number" class="form-control" id="qty" name="qty"
                            placeholder="Masukkan Jumlah">
                    </div>

                    <div class="form-group mb-3">
                        <label for="unit">Unit (ambil dari data sebelumnya)</label>
                        <input type="text" class="form-control" id="unit" name="unit"
                            placeholder="Masukkan Unit">
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit">Harga(input harga)</label>
                        <input type="text" class="form-control" id="unit" name="unit"
                            placeholder="Masukkan Unit">
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit">Total(dari harga * qty)</label>
                        <input type="text" class="form-control" id="unit" name="unit"
                            placeholder="Masukkan Unit">
                    </div>

                    <!-- Add other form fields as needed -->

                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="" class="btn btn-danger">Batal</a>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- main-panel ends -->
    </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
