@extends('layouts.app-admin')

@section('navbar-admin')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <p class="card-description">
                  Add class <code>.table</code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peralatan</th>
                                <th>QTY</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Tanggal PO</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            {{-- @foreach ($data as $item) --}}
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>

                                    {{-- <td>{{ $i }}</td>
                                    <td>{{ $item->peralatan }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>
                                        <a href="{{url('admin/pengajuan/' .$item->id)}}" class="btn btn-success">Buat Penawaran</a>
                                    </td>
                                    <td scope="row" class="text-center">
                                        <a href="" class="btn btn-warning mb-2"><i
                                                class=" fa fa-solid fa-pen-to-square"
                                                style="color:white;"></i></a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mb-2"><i
                                                    class="fa fa-solid fa-trash"></i></button>
                                        </form>
                                    </td> --}}
                                </tr>

                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
          </div>
            </div>
          </div>

    </div>
    <!-- main-panel ends -->
</div>
@endsection