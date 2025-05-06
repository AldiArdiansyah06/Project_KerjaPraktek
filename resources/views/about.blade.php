@extends('layout.main')

@section('title', 'About')

@section('content')

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Tentang Kami</h1>
                        </div>
                        <p class="mb-4 pb-2">
                            Sistem ini dibuat sebagai platform pembelajaran mandiri karyawan PT Lematang untuk menunjang produktivitas kerja, efisiensi pelatihan, dan pengembangan keterampilan.
                        </p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Karyawan Aktif</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-certificate text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Sertifikat Mandiri</h6>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/') }}" class="btn btn-primary rounded-pill py-3 px-5">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
