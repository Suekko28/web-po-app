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
                                        <th>Unit</th>
                                        <th>Penawaran</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    {{-- @foreach ($data as $item) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <a href="" class="btn btn-success">Buat Penawaran</a>
                                        </td>
                                        <td scope="row" class="text-center">
                                            <a href="" class="btn btn-warning mb-2"><i
                                                    class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></a>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mb-2"><i
                                                        class="fa fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>

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
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
