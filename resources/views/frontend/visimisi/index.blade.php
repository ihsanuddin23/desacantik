@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')

    @include('frontend.home.inc.featuredpost')

    <div class="vision-mission py-5">
        <div class="container">
            <!-- Card untuk Desa Cikedokan -->
            <div class="card bg-dark text-white mb-4">
                <div class="card-body text-center">
                    <h1 class="card-title">Desa Cikedokan</h1>
                    <p>Periode 2021 - 2027</p>
                </div>
            </div>

            <h2 class="text-center mb-4">Visi dan Misi</h2>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex"> <!-- Tambahkan d-flex di sini -->
                    <div class="card bg-dark text-white flex-fill"> <!-- Tambahkan flex-fill di sini -->
                        <div class="card-body">
                            <h5 class="card-title">Visi</h5>
                            <p class="card-text">Terbangunnya Tata Kelola Pemerintah Desa yang Baik dan Bersih Guna
                                Mewudujkan Pembangunan Berkelanjutan Menuju Masyarakat yang Mandiri, Sehat dan Sejahtera.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 d-flex"> <!-- Tambahkan d-flex di sini -->
                    <div class="card bg-dark text-white flex-fill"> <!-- Tambahkan flex-fill di sini -->
                        <div class="card-body">
                            <h5 class="card-title">Misi</h5>
                            <ul class="card-text">
                                <li>1. Optimalisasi Potensi Desa, Melalui Program Wisata Desa</li>
                                <li>2. Menciptakan Produk Hukum Setiap Tahunnya.</li>
                                <li>3. Mengurangi Angka Kemiskinan Melalui Program Optimalisasi Penyerapan Tenaga Kerja.
                                </li>
                                <li>4. Meningkatkan Sumber Daya Manusia yang Berkelanjutan.</li>
                                <li>5. Memelihara Stabilitas Kehidupan Masyarakat yang Aman, Tertib, Tentram dan Dinamis
                                </li>
                                <li>6. Menjaga Keseimbangan Alam dan Pelestarian Lingkungan Melalui Program dan Desa Bersih
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
