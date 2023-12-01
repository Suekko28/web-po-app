@extends('layouts.app')

@section('navbar')

<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-success text-uppercase animated slideInRight">4
                                    YEARS OF EXPERIENCE</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Consultant
                                    Consultant Lingkungan, Jasa Konsultasi Lingkungan beserta AMDAL & UKL UPLy</h1>
                                <a href="" class="btn btn-success py-3 px-5 animated slideInRight">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-success text-uppercase animated slideInRight">4
                                    YEARS OF EXPERIENCE</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">General Supplier
                                    Pemasok berbagai macam kebutuhan Industri pabrik, gedung-gedung dan perkantoran.
                                </h1>
                                <a href="" class="btn btn-success py-3 px-5 animated slideInRight">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row gx-3 h-100">
                    <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/about-2.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-success mb-2">About Us</p>
                <h1 class="text-black display-5 mb-4">Jasa Kesehatan Dan Keselamatan Kerja</h1>
                <p class="mb-4 lh-lg">PT. Mustika Arga Kencana berdiri awal tahun 2018 berdomisili di Bogor yang
                    bergerak di
                    bidang Jasa Kesehatan dan Keselamatan Kerja, Jasa Konsultasi Lingkungan, dan General Supplier.
                    Walaupun PT. Mustika Arga Kencana berdiri relatif baru, akan tetapi sumber daya yang di punyai di
                    dalamnya sangat mengerti di bidangnya, serta bekerja secara profesional. Mereka adalah gabungan dari
                    Para Ahli berpengalaman dan kompetensi di bidangnya masing-masing.


                </p>
                <div class="flex-shrink-0 bg-success p-4">
                    <h1 class="text-white display-2">Visi & Misi</h1>
                </div>
                <div class="ms-4 mt-3">
                    <p><i class="fa fa-check text-success me-2"></i>Menjadi Perusahaan dengan layanan terbaik dalam jasa
                        k-3 dan consultant lingkungan</p>
                    <p><i class="fa fa-check text-success me-2"></i>Memberikan layanan profesional dan prima untuk
                        kepuasan pelanggan serata melaksanakan perkembangan perusahaan secara berkelanjutan disegala
                        bidang</p>
                </div>

                <div class="row pt-2">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-success">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="">
                                <p class="mb-2">Email us</p>
                                <h5 class="mb-0">argakencana@murgana.co.id</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-success">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="">
                                <p class="mb-2">Call us</p>
                                <h5 class="mb-0">+6221-83718138</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <p class="text-white mb-0">Consultant Lingkungan, Jasa Konsultasi Lingkungan beserta AMDAL
                                & UKL UPL</p>
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
                            <p class="text-white mb-0">Pemasok berbagai macam kebutuhan Industri pabrik, gedung-gedung
                                dan perkantoran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center mb-5">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-phone-alt fa-2x text-success"></i>
                    </div>
                    <h4 class="mb-3">Phone Number</h4>
                    <p class="mb-2">+012 345 67890</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-envelope-open fa-2x text-success"></i>
                    </div>
                    <h4 class="mb-3">Email Address</h4>
                    <p class="mb-2">info@example.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-map-marker-alt fa-2x text-success"></i>
                    </div>
                    <h4 class="mb-3">Office Address</h4>
                    <p class="mb-2">+012 345 67890</p>
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