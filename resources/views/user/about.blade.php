@extends('layouts.app-validate')

@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
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



<div class="container-fluid facts my-5 p-5">
    <div class="row g-5">
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="text-center border p-5">
                <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-success mb-0" data-toggle="counter-up">25</h1>
                <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="text-center border p-5">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-success mb-0" data-toggle="counter-up">135</h1>
                <span class="fs-5 fw-semi-bold text-white">Team Members</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="text-center border p-5">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-success mb-0" data-toggle="counter-up">957</h1>
                <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="text-center border p-5">
                <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-success mb-0" data-toggle="counter-up">1839</h1>
                <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
            <h1 class="display-5 mb-5">Dedicated Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                    <div class="d-flex">
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Rob Miller</h5>
                            <span class="text-primary">CEO & Founder</span>
  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                    <div class="d-flex">
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Rob Miller</h5>
                            <span class="text-primary">CEO & Founder</span>
  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                    <div class="d-flex">
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Rob Miller</h5>
                            <span class="text-primary">CEO & Founder</span>
  
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