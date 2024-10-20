@extends('frontend2.themes')

@section('content')

<style>
    .text-black {
        color: #000000 !important;
        /* Paksa teks tetap hitam */
    }
</style>

<div class="menu-layanan">
    <div class="container">
        <div class="bread-body">
            <div class="bread-content">
                <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> Visi & Misi
            </div>
        </div>
    </div>
</div>

<div class="section-post bg-gray">
    <div class="container-default bg-gray" id="index-berita">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content">
                        <div class="panel panel-default">
                            <div class="panel-title">
                                <h2 class="text-center">Desa Cikedokan</h2>
                                <p  class="text-center">Periode 2021 - 2027</p>
                            </div>
                            <hr />
                            <div class="panel-body">
                                <h2 class="text-center mb-4">Visi dan Misi</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex"> <!-- Tambahkan d-flex di sini -->
                                        <div class="card"> <!-- Tambahkan flex-fill di sini -->
                                            <div class="panel-body">
                                                <h5 class="panel-title">Visi</h5>
                                                <p>Terbangunnya Tata Kelola Pemerintah Desa yang Baik dan Bersih Guna
                                                    Mewudujkan Pembangunan Berkelanjutan Menuju Masyarakat yang Mandiri, Sehat dan Sejahtera.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 d-flex"> <!-- Tambahkan d-flex di sini -->
                                        <div class="card"> <!-- Tambahkan flex-fill di sini -->
                                            <div class="panel-body">
                                                <h5 class="panel-title">Misi</h5>
                                                <ul>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection