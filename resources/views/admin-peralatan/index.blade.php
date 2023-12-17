@extends('layouts.app-admin')

@section('navbar-admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Riksa / Alat</h4>
                        <p class="card-description">
                            <a href="{{route('admin-peralatan.create')}}" class="btn btn-sm btn-outline-primary">Tambah Alat</a>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama alat</th>
                                        <th>Tgl Terdata</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->nama_alat }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td scope="row" class="text-center">
                                                <a href="/admin-peralatan/{{$item->id}}/edit"> <i class="fa fa-fw fa-pen text-warning m-1"></i></a>
                                                <form action="/admin-peralatan/{{  $item->id }}" method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="border-0 bg-transparant" style="background-color: transparent;"
                                                        onclick="return confirm(`Hapus data alat?`);"><i class="fa fa-fw fa-trash text-danger m-1"></i></button>
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
