@extends('layouts.app-validate')

@section('content')
    <div class="container mt-5">
        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary mb-3"> Buat Pengajuan</a>
        <div class="table-responsive">
            <table class="table table-bordered vw-100">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Peralatan</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Penawaran</th>
                        <th scope="col">Status</th>
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
                            <td class="text-center"><a href=""
                                target="_blank">
                                <button type="button" class="btn btn-primary mb-2"><i
                                        class="fa fa-file"></i></button>
                            </a>
                            <br>
                        <div class="d-flex flex-row justify-content-center">
                            <a class="me-3 btn btn-success rounded-5" href="">Accepted</a>
                            <a class="btn btn-danger rounded-5" href="">Reject</a>
                        </div>
                    </td>
                            <td class="text-warning">In progress</td>
                            <td scope="row" class="text-center">
                              <a href="{{ route('pengajuan.edit', $item->id) }}"
                                  class="btn btn-warning mb-2"><i
                                      class=" fa fa-solid fa-pen"
                                      style="color:white;"></i></a>
                              <form action="{{route('pengajuan.destroy' , $item->id)}}"
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

    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
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
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
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
