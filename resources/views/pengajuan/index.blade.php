@extends('layouts.app-validate')

@section('content')
    <div class="container mt-5">
        <a href="{{ route('user-pengajuan.create') }}" class="btn btn-primary mb-3"> Buat Pengajuan</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Pengajuan</th>
                        <th scope="col">Total Penawaran</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tgl Pengajuan</th>
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
                                    Rp. {{ $item->total_penawaran }}, <a href="{{route('user-penawaran.index')}}">Cek Tawaran</a>
                                @else
                                    <div class="text-dark">belum ada tawaran</div>
                                @endif
                            </td>
                            <td class="text-warning">
                                @if ($item->status == 201)
                                    <div class="text-warning">menunggu penawaran</div>
                                @elseif ($item->status == 202)
                                    <div class="text-info">menunggu konfirmasimu</div>
                                @elseif ($item->status == 203)
                                    <div class="text-danger">ditolak</div>
                                @elseif ($item->status == 200)
                                    <div class="text-success">diterima</div>
                                @endif
                            </td>
                            <td>
                                <p>{{$item->created_at}}</p>
                            </td>
                            <td scope="row" class="text-center">
                                @if ($item->status != 200)
                                    <a href="{{ route('user-pengajuan.edit', $item->id) }}" class="btn btn-warning mb-2"><i
                                            class=" fa fa-solid fa-pen" style="color:white;"></i></a>
                                @endif
                                <form action="{{ route('user-pengajuan.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>
                                </form>
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
