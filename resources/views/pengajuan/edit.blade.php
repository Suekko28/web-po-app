@extends('layouts.app-validate')

@section('content')

<div class="container">
    <div class="text-center mt-5">
        <h2>Pengajuan Barang</h2>
        <h5>Silahkan Isi Form Dibawah Ini Untuk Pengajuan !</h5>
    </div>
    <form action="{{route('user-pengajuan.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
          <div class="card-body container">
            <div class="form-group mb-3">
              <label for="peralatan">Nama Peralatan</label>
              <input value="{{$data->peralatan}}"type="text" class="form-control" id="peralatan" name="peralatan" placeholder="Masukkan Nama Peralatan" >
            </div>
            <div class="form-group mb-3">
              <label for="qty">QTY</label>
              <input value="{{$data->qty}}" type="number" class="form-control" id="qty" name="qty" placeholder="Masukkan Judul" >
            </div>
            <div class="form-group mb-3">
              <label for="unit">Unit</label>
              <input value="{{$data->unit}}"type="text" class="form-control" id="unit" name="unit" placeholder="Masukkan Unit" >
           </div>
              <div class="d-flex flex-row-reverse mt-3">
              <button type="submit" class="btn btn-primary ms-3">Kirim</button>
              <a href="" class="btn btn-danger">Batal</a>
            </div>
          </div>
          <!-- /.card-body -->

        </form>
</div>
    
@endsection