@extends('layouts.app-validate')

@section('navbar-validate')
    <div class="container mt-5">
        <a href="{{ url('homevalidate/pengajuan/create') }}" class="btn btn-primary mb-3"> Buat Pengajuan</a>
        <div class="table-responsive">
            <table class="table table-bordered vw-100">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Peralatan</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Penawaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->peralatan }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->unit }}</td>
                            <td></td>
                            <td scope="row" class="text-center">
                              <a href=""
                                  class="btn btn-warning mb-2"><i
                                      class=" fa fa-solid fa-pen-to-square"
                                      style="color:white;"></i></a>
                              <form action=""
                                  method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger mb-2"><i
                                          class="fa fa-solid fa-trash"></i></button>
                              </form>
                          </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
