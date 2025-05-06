@extends('layout.main')
@section('title', 'home')
@section('content')





        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel-1.jpg') }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Professional</p>
                        <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-2.jpg') }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Professional Builder</p>
                        <h1 class="animated fadeInLeft">We Build Your Home</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-3.jpg') }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Trusted</p>
                        <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">

            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Pekerja Profesional</h3>
                                <p>Pekerja disini semua nya semua profesional dan terampil menggunakan alat alat berat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="feature-text">
                                <h3>..... Berkualitas</h3>
                                <p>Di lematang ini menyediakan alat alat konstruksi yang berkualitas dan menyediakan
                                    alat-alat berkualitas tinggi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-text">
                                <h3>24/7 Support</h3>
                                <p>Kami menyediakan layanan .....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->



        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Office Contact</h2>
                            <p><i class="fa fa-map-marker-alt"></i>2Q96+4FW, Jl. Letkol Iskandar, 17 Ilir, Ilir Timur
                                I,
                                Palembang City, South Sumatra 30111</p>
                            <p><i class="fa fa-phone-alt"></i>+00000000</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Produk</h2>
                            <a href="">[Akan Mendatang]</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Visi Dan Misi</h2>
                            <a href="">Visi</a>
                            <a href="">Misi</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="newsletter">
                            <img src="img/ptlematang nobg.png" alt="">
                            <p class="mt-3">
                                PT. Lematang adalah jasa sewa alat berat yang berada di Palembang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <p class="text-center w-100">&copy; <a href="#">2025 Lematang</a>, All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

@endsection
