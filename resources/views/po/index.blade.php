@extends('layouts.app-validate')

@section('content')
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Pengajuan</th>
                        <th scope="col">Total Penawaran</th>
                        <th scope="col">Doc. Penawaran</th>
                        <th scope="col">Doc. PO</th>
                        <th scope="col">Status PO</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <th scope="row">{{ $item->id }}</th>
                            <td>
                                @if ($item->total_penawaran != 0)
                                    Rp. {{ $item->total_penawaran }}
                                @else
                                    <div class="text-dark">belum ada tawaran</div>
                                @endif
                            </td>
                            <td>
                               <a href="/dokumen/surat-penawaran?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-primary">cek disini</a>
                            </td>
                            <td>
                               <a href="/dokumen/surat-po?pengajuanId={{$item->id}}" target="_blank" class="btn btn-outline-primary">cek disini</a>
                            </td>
                            <td>
                                @if ($item->status_po == 202)
                                    <div class="text-info">menunggu konfirmasimu</div>
                                @elseif ($item->status_po == 203)
                                    <div class="text-danger">ditolak</div>
                                @elseif ($item->status_po == 200)
                                    <div class="text-success">[diterima] <br> jadwal pemeriksaan akan tersedia dikolom aksi</div>
                                @endif
                            </td>
                            <td scope="row" class="text-center">
                                @if ($item->status_po == 202)
                                    <a href="/approval-po?pengajuanId={{$item->id}}&status_po=approve" class="btn btn-success">Terima</a>
                                    <a href="/approval-po?pengajuanId={{$item->id}}&status_po=decline" class="btn btn-danger">Tolak</a>
                                @elseif ($item->status_po == 203)
                                    <p class="text-warning">Tunggu PO selanjutnya</p>
                                @elseif ($item->status_po == 200)
                                    <div class="text-info">
                                        @if (is_null($item->tanggal_penjadwalan))
                                            Belum Dijadwalkan
                                        @else
                                        Tanggal Pemeriksaan : <br>
                                        {{$item->tanggal_penjadwalan}}
                                        @endif
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Apel 1 Blok A No. 16 Puri Nirwana 2 Kel.
                        Harapan Jaya, Kec. Cibinong, Kab. Bogor 16914</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6221-83718138</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>argakencana@murgana.co.id</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-success rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-success rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-success rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-success rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 16:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-success py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
