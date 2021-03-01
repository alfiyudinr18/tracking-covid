<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontEnd/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontEnd/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontEnd/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="#"><span>Covid-19</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="frontEnd/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            {{-- <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="#active"><a href="#">Home</a></li>
                    <li><a href="#services">Indonesia</a></li>
                    <li><a href="#about">Global</a></li>
                </ul>
            </nav><!-- .nav-menu --> --}}

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown"><span>Corona Virus</span></h2>
                </div>


            </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="services section-bg" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Statistics Coronavirus Indonesia</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 align-items-md-stretch" data-aos="zoom-in" data-aos-delay="50">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><img src="{{ asset('frontEnd/assets/img/positif.png') }}" alt="Image"
                                    class="img-fluid"></div>
                            <div class="col-md-12 text-center">
                                <h4 class="title">{{ $positif }}</h4>
                                <strong>Positif</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 align-items-md-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><img src="{{ asset('frontEnd/assets/img/sembuh.png') }}" alt="Image"
                                    class="img-fluid"></div>
                            <div class="col-md-12">
                                <h4 class="title">{{ $sembuh }}</h4>
                                <strong>Sembuh</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 align-items-md-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box icon-box-red">
                            <div class="icon"><img src="{{ asset('frontEnd/assets/img/mati.png') }}" alt="Image"
                                    class="img-fluid"></div>
                            <div class="col-md-12">
                                <h4 class="title">{{ $meninggal }}</h4>
                                <strong>Meninggal</strong>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        {{-- <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

            </div>
        </section><!-- End Why Us Section --> --}}

        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Data Indonesia</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($provinsi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_provinsi }}</td>
                                            <td>{{ $data->positif }}</td>
                                            <td>{{ $data->sembuh }}</td>
                                            <td>{{ $data->meninggal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Data Global</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive service my-custom-scrollbar table-wrapper-scroll-y">
                            <table class="table table-striped table-bordered table-hover mb-0 text-nowrap css-serial"
                                id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Negara</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($url as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data['attributes']['Country_Region'] }}</td>
                                            <td>{{ $data['attributes']['Confirmed'] }}</td>
                                            <td>{{ $data['attributes']['Recovered'] }}</td>
                                            <td>{{ $data['attributes']['Deaths'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Pencegahan Virus Covid-19</h2>
                    <p>Virus Covid-19 bukanlah Virus yang seperti pada umum nya, Virus ini adalah jenis Virus yang dapat
                        menyebar dengan cepat melalui udara.Dibawah ini adalah cara Pencegahan agar terjauh dari Virus
                        Covid-19.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('frontEnd/assets/img/wash_hands.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Mencuci Tangan dengan Benar.</h3>
                        <p class="font-italic">
                            Mencuci tangan dengan benar adalah cara paling sederhana namun efektif untuk mencegah
                            penyebaran virus 2019-nCoV. Cucilah tangan dengan air mengalir dan sabun, setidaknya selama
                            20 detik. Pastikan seluruh bagian tangan tercuci hingga bersih, termasuk punggung tangan,
                            pergelangan tangan, sela-sela jari, dan kuku. Setelah itu, keringkan tangan menggunakan
                            tisu, handuk bersih, atau mesin pengering tangan.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('frontEnd/assets/img/mask.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p class="font-italic">
                            Meski tidak sepenuhnya efektif mencegah paparan kuman, namun penggunaan masker ini tetap
                            bisa menurunkan risiko penyebaran penyakit infeksi, termasuk infeksi virus Corona.
                            Penggunaan masker lebih disarankan bagi orang yang sedang sakit untuk mencegah penyebaran
                            virus dan kuman, ketimbang pada orang yang sehat.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('frontEnd/assets/img/distance.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Menjaga Jarak</h3>
                        <p>Pembatasan fisik atau physical distancing adalah salah satu langkah penting untuk memutus
                            mata rantai penyebaran virus Corona. Hal ini dapat dilakukan dengan cara tidak bepergian
                            keluar rumah, kecuali untuk keperluan yang mendesak atau darurat, seperti berbelanja bahan
                            makanan atau berobat ketika sakit.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat Kami</h3>
                                    <p>Jl. Situ Tarate</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>info@smkassalaambandung.sch.id</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Nomor Kami</h3>
                                    <p>022 5420-220</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Features Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

            </div>
        </section>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontEnd/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontEnd/assets/js/main.js') }}"></script>

</body>

</html>
