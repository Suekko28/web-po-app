@extends('layouts.app-validate')

@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-success mb-2">Our Projects</p>
            <h1 class="display-5 mb-4">We Provide Best Industrial Services</h1>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">Jasa Riksa Uji K-3</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Jasa Pemeriksaan Kesehatan dan Keselamatan Kerja (K-3)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">Consultant</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Consultant Lingkungan, Jasa Konsultasi Lingkungan beserta AMDAL & UKL UPL</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="service-img">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">General Supplier</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">Pemasok berbagai macam kebutuhan Industri pabrik, gedung-gedung dan perkantoran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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