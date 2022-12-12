@extends('master')
@section('title', 'Beranda')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Beranda</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Selamat Datang di Kampus Nexus!</li>
    </ol>
    <div class="row mb-4">
        <div class="container-sm mb-4">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets\img\2.jpg')}}" class="d-block w-100" alt="Gambar 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fasilitas Nexus</h5>
                            <p>Nikmati Fasilitas Nexus yang Luar Biasa!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('assets\img\3.jpg')}}" class="d-block w-100" alt="Gambar 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Perpustakaan Digital</h5>
                            <p>Perpustakaan Kami Menggunakan Teknologi Mikroservis</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('assets\img\4.jpg')}}" class="d-block w-100" alt="Gambar 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Temui Dosen Kami!</h5>
                            <p>Dosen Kampus Nexus Sangat Ramah dan Pengertian</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('assets\img\5.jpg')}}" class="d-block w-100" alt="Gambar 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Anda Stress??</h5>
                            <p>Sama Saya Juga!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Daftar Kelas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/lapkelas">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Transkrip Nilai</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/lapnilai">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Mata Kuliah</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/matkul">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection