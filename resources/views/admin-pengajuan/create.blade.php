@extends('layouts.app-admin')

@section('navbar-admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-title mt-5 ml-5">
                        Form penawaran Harga
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin-pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body container">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($data as $item)
                                    <input type="hidden" name="pengajuan_id[{{ $i }}]"
                                        id="pengajuan_id[{{ $i }}]" value="{{ $item->pengajuan_id }}">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class=" mb-3">
                                                <input type="text" class="form-control"
                                                    id="nama_alat[{{ $i }}]"
                                                    name="nama_alat[{{ $i }}]"
                                                    value="{{ $item->peralatan->nama_alat }}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class=" mb-3">
                                                <input type="hidden" name="detail_id[{{ $i }}]"
                                                    id="detail_id[{{ $i }}]" value="{{$item->id}}">
                                                <input type="number" class="form-control" id="qty[{{ $i }}]"
                                                    name="qty[{{ $i }}]" value="{{ $item->qty }}" required
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class=" mb-3">
                                                <input type="number" class="form-control" id="harga[{{ $i }}]"
                                                    name="harga[{{ $i }}]" placeholder="Masukan harga perunit"
                                                    required onchange="sumUnit({{$i}})">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class=" mb-3">
                                                <input type="text" class="form-control totalUnit" id="total_unit[{{ $i }}]"
                                                    name="total_unit[{{ $i }}]" value="0"
                                                    required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                <div class="row">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="total_penawaran" id="total_penawaran">
                                    </div>
                                    <div class="col-lg-3">
                                        <div style="padding:1px; border: solid 1px"><br>
                                            Total : <br>
                                            <strong class="ml-3"><div id="totalAwal"></div> </strong> <br>
                                            Ppn 11% : <br>
                                            <strong class="ml-3"><div id="ppn"></div> </strong> <br>
                                            Pph Psl 23 -2% : <br>
                                            <strong class="ml-3"><div id="pph"></div> </strong> <br>
                                            Total Akhir : <br>
                                            <strong class="ml-3"><div id="totalAkhir"></div> </strong> <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-row-reverse mt-3">
                                    <button type="submit" class="btn btn-primary ms-3">Kirim</button>
                                    <a href="{{ route('admin-pengajuan.index') }}" class="btn btn-danger">Batal</a>
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


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sumUnit(index) {
            var total = 0
            var qty = document.getElementById("qty[" + index + "]").value
            var hargaUnit = document.getElementById("harga[" + index + "]").value

            total = qty * hargaUnit

            document.getElementById("total_unit[" + index + "]").value =  total;
            sumAll();
        }

        function sumAll() {
            var totalAllUnit = 0;
            var ppn = 0;
            var pph = 0;
            var totalAkhir = 0;

            $('.totalUnit').each(function(){
                totalAllUnit += parseFloat($(this).val());
            })

            ppn = 0.11 * totalAllUnit
            pph = 0.02 * totalAllUnit
            totalAkhir = totalAllUnit + ppn + pph

            $("#totalAwal").text('Rp '+totalAllUnit +'');
            $("#ppn").text('Rp '+ppn+'');
            $("#pph").text('Rp '+pph+'');
            $("#totalAkhir").text('Rp '+totalAkhir+'');
            $("#total_penawaran").val(totalAkhir);

            console.log(totalAkhir);
        }
    </script>
@endsection
