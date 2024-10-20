@extends('frontend2.themes')

@section('content')

<div class="menu-layanan">
  <div class="container">
    <div class="card body-layanan-mandiri">
      <div class="row">
        <div class="col-sm-6 text-center">
          <div class="heading-mandiri"><i class="fa fa-user"></i> LAYANAN MANDIRI</div>
          <div class="sub-heading-mandiri">Silakan datang atau hubungi operator desa untuk mendapatkan kode PIN anda.</div>
        </div>

        <div class="col-sm-6 mandiri-section">

          <form action="https://cikedokan.sidepe.com/layanan_mandiri/login" method="post" class="form-horizontal">

            <div class="form-group">
              <div class="col-sm-6">
                <input name="nik" type="text" placeholder="Masukkan NIK" class="form-control input-sm mandiri-login-form" required autocomplete="off">
              </div>

              <div class="col-sm-6">
                <input name="pin" type="password" placeholder="Masukkan PIN" class="form-control input-sm mandiri-login-form" autocomplete="off" required>
              </div>
            </div>
            <button type="submit" id="but" class="btn btn-sm btn-info btn-mandiri">MASUK LAYANAN MANDIRI</button>
            <a href="https://cikedokan.sidepe.com/layanan_mandiri/masuk/reset" class="btn btn-sm btn-danger btn-mandiri">RESET PIN</a>

          </form>
        </div>
      </div>
    </div>

  </div>
</div> <!-- end menu layanan -->
<div class="slide hidden-xs">
  <div class="container-default">
    <style type="text/css">
      .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
      }

      .carousel-fade .carousel-inner .active {
        opacity: 1;
      }

      .carousel-fade .carousel-inner .active.left,
      .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
      }

      .carousel-fade .carousel-inner .next.left,
      .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
      }

      .carousel-fade .carousel-control {
        z-index: 2;
      }

      @media all and (transform-3d),
      (-webkit-transform-3d) {

        .carousel-fade .carousel-inner>.item.next,
        .carousel-fade .carousel-inner>.item.active.right {
          opacity: 0;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.item.prev,
        .carousel-fade .carousel-inner>.item.active.left {
          opacity: 0;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.item.next.left,
        .carousel-fade .carousel-inner>.item.prev.right,
        .carousel-fade .carousel-inner>.item.active {
          opacity: 1;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
    </style>

    <!-- MAIN SLIDER -->
    <div class="main-slider">
      <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/pemberian-penghargaan-pbb-p2">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1701477542_penghargaan PBB.jpeg&w=600&h=400&q=100" alt="PEMBERIAN PENGHARGAAN PBB-P2" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/pemberian-penghargaan-pbb-p2">
                  PEMBERIAN PENGHARGAAN PBB-P2 </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/desa-cikedokan-juga-berhasil-meraih-penghargaan-sebagai-transformasi-digital-pemerintah-desa-terbai">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1700181562_WhatsApp Image 2023-11-16 at 20.18.48.jpg&w=600&h=400&q=100" alt="Desa CiKEDOKAN juga berhasil meraih penghargaan sebagai Transformasi Digital Pemerintah Desa Terbai" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/desa-cikedokan-juga-berhasil-meraih-penghargaan-sebagai-transformasi-digital-pemerintah-desa-terbai">
                  Desa CiKEDOKAN juga berhasil meraih penghargaan sebagai Transformasi Digital Pemerintah&#8230; </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1693399564_IMG_20230813_094734.jpg&w=600&h=400&q=100" alt="LAUNCHING KAMPUNG BERSIH" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                  LAUNCHING KAMPUNG BERSIH </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1693399586_IMG_20230813_094734.jpg&w=600&h=400&q=100" alt="LAUNCHING KAMPUNG BERSIH" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                  LAUNCHING KAMPUNG BERSIH </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-satu-muharam-1445h">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1692593090_Kompres 1.jpg&w=600&h=400&q=100" alt="GEBYAR SATU MUHARAM 1445H" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-satu-muharam-1445h">
                  GEBYAR SATU MUHARAM 1445H </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-bedug-cikedokan">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683680301_bedung gb3.jpeg&w=600&h=400&q=100" alt="GEBYAR BEDUG CIKEDOKAN" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-bedug-cikedokan">
                  GEBYAR BEDUG CIKEDOKAN </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/peduli-gempa-cianjur">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683676042_1.jpg&w=600&h=400&q=100" alt="PEDULI GEMPA CIANJUR" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/peduli-gempa-cianjur">
                  PEDULI GEMPA CIANJUR </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/penghargaan-juara-1-pbb-tingkat-kecamatan-pajak-bumi-dan-bangunan-th-2022">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683640369_pajak 1.jpeg&w=600&h=400&q=100" alt="PENGHARGAAN JUARA 1 PBB TINGKAT KECAMATAN (Pajak Bumi dan Bangunan) Th 2022" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/penghargaan-juara-1-pbb-tingkat-kecamatan-pajak-bumi-dan-bangunan-th-2022">
                  PENGHARGAAN JUARA 1 PBB TINGKAT KECAMATAN (Pajak Bumi dan Bangunan) Th 2022 </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/ovening-resto-taman-sawung-angklung">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683639409_1. Angklung.jpg&w=600&h=400&q=100" alt="OVENING RESTO TAMAN SAWUNG ANGKLUNG" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/ovening-resto-taman-sawung-angklung">
                  OVENING RESTO TAMAN SAWUNG ANGKLUNG </a>
              </div>
            </div>
          </div>
          <div class="item ">
            <a href="https://cikedokan.sidepe.com/berita/detail/berita/bimtek-aparatur-desa-se-desa-cikedokan-_-2022">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683636561_1a.jpg&w=600&h=400&q=100" alt="BIMTEK APARATUR DESA SE DESA CIKEDOKAN _ 2022" class="gambar-slide">
            </a>
            <div class="carousel-caption">
              <div class="slide-caption">
                <a href="https://cikedokan.sidepe.com/berita/detail/berita/bimtek-aparatur-desa-se-desa-cikedokan-_-2022">
                  BIMTEK APARATUR DESA SE DESA CIKEDOKAN _ 2022 </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MAIN SLIDER -->
  </div>
</div>

<div class="top-widget">
  <div class="container">
    <div class="">
      <div class="statistik-widget owl-carousel">
        <div class="item">
          <div class="stat-box bg-info">
            <div class="inner">
              <div class="stat-value">
                8.240 </div>
              <p class="stat-title">Penduduk</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-success">
            <div class="inner">
              <div class="stat-value">
                2.570 </div>
              <p class="stat-title">Keluarga</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-warning">
            <div class="inner">
              <div class="stat-value">
                4 </div>
              <p class="stat-title">Rumah Tangga</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-home"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-danger">
            <div class="inner">
              <div class="stat-value">
                3 </div>
              <p class="stat-title">Wilayah Dusun </p>
            </div>
            <div class="icon">
              <i class="ti-map-alt"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-warning">
            <div class="inner">
              <div class="stat-value">
                0.98 </div>
              <p class="stat-title">Indeks Ketahanan Sosial</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-purple">
            <div class="inner">
              <div class="stat-value">
                0.9 </div>
              <p class="stat-title">Indeks Ketahanan Ekonomi</p>
            </div>
            <div class="icon">
              <i class="fa fa-pie-chart"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-cyan">
            <div class="inner">
              <div class="stat-value">
                0.86 </div>
              <p class="stat-title">Indeks Ketahanan Lingkungan</p>
            </div>
            <div class="icon">
              <i class="fa fa-area-chart"></i>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="stat-box bg-blue">
            <div class="inner">
              <div class="stat-value">
                0.91 </div>
              <p class="stat-title">Skor Indeks Desa Membangun</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Button trigger modal cari nik -->
  <div class="nik-finder">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="caps-cari-nik">
            Apakah NIK/KK Anda Sudah Terdaftar Pada Sistem ?<br />
            Silakan Cek NIK/KK Anda Apakah sudah Terdaftar Atau Terdaftar Sebagai Penerima Bantuan
          </div>
        </div>
        <div class="col-md-6">
          <div class="field-cari-nik">
            <div class="input-group has-error">
              <input id="cariNik" type="text" class="form-control cari-nik" placeholder="CARI NIK/KK" autocomplete="off" />
              <div class="input-group-btn">
                <button class="btn btn-danger btn-cari-nik" type="button" id="cariNikButton"><i class="glyphicon glyphicon-search"></i> Cari NIK/KK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="visibility: hidden;">
      <button id="modalNikAdaButton" type="button" data-toggle="modal" data-target="#modalNikAda">Launch modal</button>
      <button id="modalNikTidakAdaButton" type="button" data-toggle="modal" data-target="#modalNikTidakAda">Launch modal</button>
    </div>
  </div>


  <!-- Pengumuman -->
  <div class="container-default bg-gray" id="index-berita">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="page-content homepage">

            <div class="row">
              <div class="col-md-12">
                <div class="web-banner">
                  <a href="https://cikedokan.sidepe.com/desa/upload/widget/home_banner.jpg" data-lightbox="images">
                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/home_banner.jpg" class="img-fluid">
                  </a>
                </div>
              </div>
            </div>


            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/pemberian-penghargaan-pbb-p2">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1701477542_penghargaan PBB.jpeg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="PEMBERIAN PENGHARGAAN PBB-P2">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/pemberian-penghargaan-pbb-p2">
                          PEMBERIAN PENGHARGAAN PBB-P2 </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Sabtu, 02 Desember 2023 07:38:52
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 58 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        Desa CIKEDOKAN Pajak Adalah Merupakan Salah Satu Andalan Bagi Pendapatan Asli Daerah (PAD). Berapapun Nominal-nya Yang Disetorkan Para Wajib Pajak, Menjadikan Kas Pemkab Bisa Didistribusikan Untuk Program-program Yang Menyentuh Berbagai Sendi Kehidupan Warganya. Hasil Dari Pengumpulan&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/desa-cikedokan-juga-berhasil-meraih-penghargaan-sebagai-transformasi-digital-pemerintah-desa-terbai">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1700181562_WhatsApp Image 2023-11-16 at 20.18.48.jpg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="Desa CiKEDOKAN juga berhasil meraih penghargaan sebagai Transformasi Digital Pemerintah Desa Terbai">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/desa-cikedokan-juga-berhasil-meraih-penghargaan-sebagai-transformasi-digital-pemerintah-desa-terbai">
                          Desa CiKEDOKAN Juga Berhasil Meraih&#8230; </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Jumat, 17 November 2023 07:38:59
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 53 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        SEMARANG - Pemerintah Kabupaten Bekasi Melalui Dinas Komunikasi Informatika Persandian Dan Statistik (Diskominfosantik) Menerima Penghargaan Dari Kementerian Komunikasi Dan Informatika Republik Indonesia, Dalam Ajang Festival TIK 2023, Yang Digelar Di Kota Semarang, Jawa Tengah,&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1693399564_IMG_20230813_094734.jpg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="LAUNCHING KAMPUNG BERSIH">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                          LAUNCHING KAMPUNG BERSIH </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Rabu, 30 Agustus 2023 19:45:27
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 37 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        LAUNCHING KAMPUNG BERSIH Wujud Keperdulian Bersama Dalam Menjaga Kebersihan Lingkungan Dengan Semangat Gotong Royong. Kerja Bakti Yang Dikemas Dalam àSABER  (SABTU BERSIH) Di Kampung Kamurang Desa Cukedokan Kecamatan Cikarang Barat - Bekasi, Sabtu ( 13/08/2023). Mereka Bahu Membahu&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1693399586_IMG_20230813_094734.jpg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="LAUNCHING KAMPUNG BERSIH">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/launching-kampung-bersih">
                          LAUNCHING KAMPUNG BERSIH </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Rabu, 30 Agustus 2023 19:45:27
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 0 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        LAUNCHING KAMPUNG BERSIH Wujud Keperdulian Bersama Dalam Menjaga Kebersihan Lingkungan Dengan Semangat Gotong Royong. Kerja Bakti Yang Dikemas Dalam àSABER  (SABTU BERSIH) Di Kampung Kamurang Desa Cukedokan Kecamatan Cikarang Barat - Bekasi, Sabtu ( 13/08/2023). Mereka Bahu Membahu&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-satu-muharam-1445h">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1692593090_Kompres 1.jpg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="GEBYAR SATU MUHARAM 1445H">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-satu-muharam-1445h">
                          GEBYAR SATU MUHARAM 1445H </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Senin, 21 Agustus 2023 11:27:02
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 34 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        Kepala Desa Cikedokan (Bpk H. Gorin Santoso) Akan Menggelar Gebyar Muharram 1445 Hijriah. Merawat Kerukunan Dan Kebersamaan Perkokoh Tali Silahturahmi. Gelaran Tersebut Berlangsung Di Halaman Kantor Desa Cikedokan.(19 – Juli  2023). Bapak Kepala Desa Cikedokan Menyampaikan Ada Berbagai&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-bedug-cikedokan">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683680301_bedung gb3.jpeg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="GEBYAR BEDUG CIKEDOKAN">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/gebyar-bedug-cikedokan">
                          GEBYAR BEDUG CIKEDOKAN </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Rabu, 10 Mei 2023 07:13:23
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 48 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        GEBYAR BEDUG TAHUNAN Tahun Ini, Kembali Hadir Acara "Gebyar Bedug" Yang Pasti Akan Membuat Semangat Dan Kegembiraan Anda Memuncak! Ayo Hadir Dan Bergabung Dalam "Gebyar Bedug" Tahunan Di Cikedokan! Acara Ini Selalu Dinanti-nanti Dan Pastinya Akan Memberikan Pengalaman Yang Tak Terlupakan&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/peduli-gempa-cianjur">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683676042_1.jpg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="PEDULI GEMPA CIANJUR">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/peduli-gempa-cianjur">
                          PEDULI GEMPA CIANJUR </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Rabu, 10 Mei 2023 06:47:15
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 39 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        GEMPA CIANJUR Kami Selaku PEMERINTAH DESA CIKEDOKAN Merasa Sangat Prihatin Dan Berduka Atas Dampak Yang Ditimbulkan Oleh Gempa Di Cianjur Ini. Semoga Masyarakat Cianjur Selalu Berada Dalam Perlindungan Tuhan Dan Diberikan Kekuatan Untuk Menghadapi Situasi Ini. Gempa Ini Telah Menyebabkan&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card login-card article-list-card">
              <div class="row no-gutters">
                <div class="col-md-6 col-xs-5">
                  <a href="https://cikedokan.sidepe.com/berita/detail/berita/penghargaan-juara-1-pbb-tingkat-kecamatan-pajak-bumi-dan-bangunan-th-2022">
                    <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1683640369_pajak 1.jpeg&w=600&h=350&q=100" class="img-responsive img-article-list" alt="PENGHARGAAN JUARA 1 PBB TINGKAT KECAMATAN (Pajak Bumi dan Bangunan) Th 2022">
                  </a>
                </div>
                <div class="col-md-6 col-xs-7">
                  <div class="row">
                    <div class="top-block-article-list">
                      <div class="brand-wrapper article-list-title">
                        <a href="https://cikedokan.sidepe.com/berita/detail/berita/penghargaan-juara-1-pbb-tingkat-kecamatan-pajak-bumi-dan-bangunan-th-2022">
                          PENGHARGAAN JUARA 1 PBB TINGKAT KECAMATAN&#8230; </a>
                      </div>
                      <div class="top-meta-article-list">
                        <div class="row">
                          <div class="col-md-8 col-xs-12">
                            <div class="post-date">
                              <i class="ti-calendar"></i> Selasa, 09 Mei 2023 20:52:44
                            </div>
                          </div>
                          <div class="col-md-4 col-xs-4 hidden-xs">
                            <div class="post-hit">
                              <i class="ti-eye"></i> 59 Dibaca
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body artice-list-body hidden-xs">
                      <p class="description-artice-list">
                        Desa Cikedokan Merasa Sangat Terhormat Untuk Menerima Penghargaan Ini Sebagai Juara Ke-1 Dalam Hal Pajak Di Tingkat Kecamatan. Terima Kasih Banyak Kepada Seluruh Tim Dan Pihak-pihak Terkait Yang Telah Memberikan Dukungan Dan Bantuan Kepada Pemerintah Desa Cikedokan. Kami Selaku Pemerintah&#8230; </p>
                    </div>

                    <div class="bottom-block-article-list hidden-xs">
                      <div class="bottom-meta-article-list">
                        <div class="row">
                          <div class="col-md-6 col-xs-5">
                            <div class="post-owner">
                              <i class="ti-user"></i> Pemdes Cikedokan
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-">
                            <div class="post-cat">
                              <i class="ti-agenda"></i>
                              <a href="https://cikedokan.sidepe.com/berita/kategori/berita" class="cat-label">Berita</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="loader-button text-center">
              <a href="https://cikedokan.sidepe.com/berita" class="btn btn-primary btn-mandiri btn-sm">Tampilkan Semua</span></a>
            </div>
            <hr />
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
          @include('frontend2.widget.sidebar.agenda')
          @include('frontend2.widget.sidebar.kategori')
          @include('frontend2.widget.sidebar.artikel_populer')
          @include('frontend2.widget.sidebar.arsip')
        </div>
        <!-- Sidebar -->
      </div>
    </div>
  </div>

  <!-- Perangkat Desa -->
  <div class="container-default bg-white">
    <div class="container">
      <style>
        .MultiCarousel {
          float: left;
          overflow: hidden;
          padding: 15px;
          width: 100%;
          position: relative;
        }

        .MultiCarousel .MultiCarousel-inner {
          transition: 1s ease all;
          float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item {
          float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item .block-aparatur {
          text-align: center;
          box-shadow: 0px 1px 5px #0000004f;
          border-radius: 10px;
          margin: 0 21px;
        }

        .MultiCarousel .MultiCarousel-inner .item .block-aparatur .data-team .nama-team {
          color: #007bb5;
          font-size: 11px;
        }

        .MultiCarousel .leftLst,
        .MultiCarousel .rightLst {
          position: absolute;
          width: 50px;
          height: 50px;
          background: #e87008;
          margin: auto 0;
          opacity: unset;
          top: calc(50% - 20px);
          border-radius: 0;
          border: unset;
          font-size: 30px;
        }

        .MultiCarousel .leftLst {
          left: 0;
        }

        .MultiCarousel .rightLst {
          right: 0;
        }

        .MultiCarousel .leftLst.over,
        .MultiCarousel .rightLst.over {
          pointer-events: none;
        }
      </style>
      <div class="section-full content-inner bg-white">
        <div class="container">
          <div class="section-head text-center ">
            <h2 class="title"><a href="https://cikedokan.sidepe.com/pemerintah">Perangkat desa</a></h2>
            <div class="dlab-separator-outer ">
              <div class="dlab-separator bg-primary style-skew"></div>
            </div>
            <p>Meningkatkan Ilmu Pengetahuan, Keterampilan, Kedisiplinan dan Etos Kerja Pemerintah desa</p>
          </div>
          <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,5" data-slide="1" id="MultiCarousel">
              <div class="MultiCarousel-inner">

                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/6316c0431860f.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">GORIN SANTOSO</div>
                      <div class="detail-team">
                        NIAP : 32160800269040121021</br>
                        Kepala Desa </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/628747d0d2401.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">SUPARDI</div>
                      <div class="detail-team">
                        NIAP : 32160800285082621021</br>
                        Sekretaris Desa </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/1653375367628c81878b283.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">SUDARMO ATMAJA</div>
                      <div class="detail-team">
                        NIAP : 32160800278101521021</br>
                        Kaur Keuangan </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/1653453482628db2aa8493c.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">JAJAT SUDRAJAT</div>
                      <div class="detail-team">
                        NIAP : 321608002 8001212102</br>
                        KAUR PERENCANAAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/628db47b24336.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">DENI KURNIAWAN</div>
                      <div class="detail-team">
                        NIAP : 331608002 750806 210</br>
                        Kaur TU Dan UMUM </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/1653623285629049f594a91.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">DEDE KUSNADI AMIR</div>
                      <div class="detail-team">
                        NIAP : 331608002 720415 210</br>
                        KASI PEMERINTAHAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/165362391262904c68aa285.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">AHMAD</div>
                      <div class="detail-team">
                        NIAP : 331608002 950201 210</br>
                        STAF PELAYANAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/165362446362904e8f09de1.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">ADI FIRMANSYAH</div>
                      <div class="detail-team">
                        NIAP : 331608002 760508 210</br>
                        STAF PERENCANAAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/1653884563629446938c375.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">EMAN SULAEMAN</div>
                      <div class="detail-team">
                        NIAP : 331608002 740110 210</br>
                        STAF KAUR TU DAN UMUM </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/165388505762944881f1863.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">ABDUL AZIZ</div>
                      <div class="detail-team">
                        NIAP : 331608002 930121 210</br>
                        KASI PELAYANAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/165388571362944b11042e0.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">SURI SUNARDI</div>
                      <div class="detail-team">
                        NIAP : 331608002 680921 210</br>
                        STAF KASI KESEJAHTERAAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/165388636562944d9deca5c.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">UPIT</div>
                      <div class="detail-team">
                        NIAP : 331608002 830508 210</br>
                        STAF KAUR KEUANGAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/6294717b6b134.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">M MIAN</div>
                      <div class="detail-team">
                        NIAP : 331608002 730602 210</br>
                        KASI KESEJAHTERAAN </div>
                    </div>
                  </div>
                </div>
                <div class="item">

                  <div class="block-aparatur">
                    <img src="https://cikedokan.sidepe.com/desa/upload/user_pict/16624329906316b6de95c2e.png" alt="User Image" class="center img-responsive" style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                    <div class="data-team">
                      <div class="nama-team">MUHAMAD MISTA</div>
                      <div class="detail-team">
                        NIAP : 32160800290090921021</br>
                        Staf Kasi Pemerintahan </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-danger leftLst"><i class="fa fa-angle-left"></i></button>
              <button class="btn btn-danger rightLst"><i class="fa fa-angle-right"></i></button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          var itemsMainDiv = ('.MultiCarousel');
          var itemsDiv = ('.MultiCarousel-inner');
          var itemWidth = "";
          var autoPlay = 3000;

          $('.leftLst, .rightLst').click(function() {
            var condition = $(this).hasClass("leftLst");
            if (condition)
              click(0, this);
            else
              click(1, this)
          });

          ResCarouselSize();

          $(window).resize(function() {
            ResCarouselSize();
          });

          //this function define the size of the items
          function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function() {
              id = id + 1;
              var itemNumbers = $(this).find(itemClass).length;
              btnParentSb = $(this).parent().attr(dataItems);
              itemsSplit = btnParentSb.split(',');
              $(this).parent().attr("id", "MultiCarousel" + id);


              if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
              } else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
              } else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
              } else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
              }
              $(this).css({
                'transform': 'translateX(0px)',
                'width': itemWidth * itemNumbers
              });
              $(this).find(itemClass).each(function() {
                $(this).outerWidth(itemWidth);
              });

              $(".leftLst").addClass("over");
              $(".rightLst").removeClass("over");

            });
          }


          //this function used to move the items
          function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
              translateXval = parseInt(xds) - parseInt(itemWidth * s);
              $(el + ' ' + rightBtn).removeClass("over");

              if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
              }
            } else if (e == 1) {
              var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
              translateXval = parseInt(xds) + parseInt(itemWidth * s);
              $(el + ' ' + leftBtn).removeClass("over");

              if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
              }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
          }

          //It is used to get some elements from btn
          function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
          }

        });
      </script>
    </div>
  </div>

  <!-- Laporan Warga -->

  <!-- Video -->

  <!-- Potensi -->
  <div class="container-default section-potensi">
    <div class="container">
      <script>
        jQuery(document).ready(function($) {
          var owl = $('.slidepotensi');
          owl.on('initialize.owl.carousel initialized.owl.carousel ' +
            'initialize.owl.carousel initialize.owl.carousel ' +
            'resize.owl.carousel resized.owl.carousel ' +
            'refresh.owl.carousel refreshed.owl.carousel ' +
            'update.owl.carousel updated.owl.carousel ' +
            'drag.owl.carousel dragged.owl.carousel ' +
            'translate.owl.carousel translated.owl.carousel ' +
            'to.owl.carousel changed.owl.carousel',
            function(e) {
              $('.' + e.type)
                .removeClass('secondary')
                .addClass('success');
              window.setTimeout(function() {
                $('.' + e.type)
                  .removeClass('success')
                  .addClass('secondary');
              }, 3000);
            });
          owl.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            lazyLoad: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            margin: 20,
            video: true,
            responsive: {
              0: {
                items: 1
              },
              480: {
                items: 2
              },
              800: {
                items: 3
              },
              980: {
                items: 4
              },
              1336: {
                items: 3
              }
            }
          });
        });
      </script>

      <div class="pengumumanslide">
        <div class="section-head text-center ">
          <h2 class="title" style="color:#fff;">Ayo Ke Cikedokan</h2>
          <div class="dlab-separator-outer ">
            <div class="dlab-separator bg-primary style-skew"></div>
          </div>
          <div class="subtitle">Saksikan keindahan dan keunikannya</div>
        </div>
        <div class="slidepotensi owl-carousel owl-theme">
          <div class="blog-image">
            <a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/umkm-desa-cikedokan-dewi-kurnia-fashion">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1665373649_sedang_1665131417_3.jpg&w=600&h=350&q=100" class="img-responsive img-potensi" alt="UMKM  Desa CikedoKan  DEWI KURNIA FASHION">
            </a>
            <div class="caption-pengumuman">
              <div class="title-pengumuman"><a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/umkm-desa-cikedokan-dewi-kurnia-fashion">UMKM Desa CikedoKan DEWI KURNIA FASHION</a></div>
            </div>
            <div class="meta-pengumuman">
              <div class="tgl-pengumuman">
                10 Oktober 2022 10:47:01 </div>
            </div>
          </div>
          <div class="blog-image">
            <a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/singkong-goreng-balado-yang-sehat-dan-bikin-tubuh-langsing">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1659367726_Singkong-Balado-resep.jpg&w=600&h=350&q=100" class="img-responsive img-potensi" alt=" Singkong Goreng Balado yang Sehat dan Bikin Tubuh Langsing">
            </a>
            <div class="caption-pengumuman">
              <div class="title-pengumuman"><a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/singkong-goreng-balado-yang-sehat-dan-bikin-tubuh-langsing">Singkong Goreng Balado yang Sehat dan Bikin&#8230;</a></div>
            </div>
            <div class="meta-pengumuman">
              <div class="tgl-pengumuman">
                01 Agustus 2022 22:28:46 </div>
            </div>
          </div>
          <div class="blog-image">
            <a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/dodol-khas-betawi">
              <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1659028012_dodol.jpg&w=600&h=350&q=100" class="img-responsive img-potensi" alt="Dodol Khas Betawi">
            </a>
            <div class="caption-pengumuman">
              <div class="title-pengumuman"><a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/dodol-khas-betawi">Dodol Khas Betawi</a></div>
            </div>
            <div class="meta-pengumuman">
              <div class="tgl-pengumuman">
                29 Juli 2022 00:06:52 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pembangunan -->

  <!-- Gallery Slide -->

  <!-- Laporan Warga -->
  <div class="container-default section-laporan">
    <div class="container">
      <script>
        jQuery(document).ready(function($) {
          var owl = $('.laporan_warga');
          owl.on('initialize.owl.carousel initialized.owl.carousel ' +
            'initialize.owl.carousel initialize.owl.carousel ' +
            'resize.owl.carousel resized.owl.carousel ' +
            'refresh.owl.carousel refreshed.owl.carousel ' +
            'update.owl.carousel updated.owl.carousel ' +
            'drag.owl.carousel dragged.owl.carousel ' +
            'translate.owl.carousel translated.owl.carousel ' +
            'to.owl.carousel changed.owl.carousel',
            function(e) {
              $('.' + e.type)
                .removeClass('secondary')
                .addClass('success');
              window.setTimeout(function() {
                $('.' + e.type)
                  .removeClass('success')
                  .addClass('secondary');
              }, 3000);
            });
          owl.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            lazyLoad: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            margin: 10,
            video: true,
            responsive: {
              0: {
                items: 1
              },
              480: {
                items: 2
              },
              800: {
                items: 3
              },
              980: {
                items: 4
              },
              1336: {
                items: 3
              }
            }
          });
        });
      </script>


      <div class="laporanslide">
        <div class="section-head text-center ">
          <h2 class="title"><a href="https://cikedokan.sidepe.com/laporan_warga">Laporan dan Aspirasi Warga</a></h2>
          <div class="dlab-separator-outer ">
            <div class="dlab-separator bg-primary style-skew"></div>
          </div>
        </div>
        <div class="laporan_warga owl-carousel owl-theme">
          <div class="body-laporan">
            <div class="judul-laporan-warga">
              <a href="https://cikedokan.sidepe.com/laporan_warga/read/16">
                Merubah Sppt induk sesuai Sert...
              </a>
            </div>
            <div class="isi-laporan-warga">
              Sppt Induk Sudah Di Pecah 3,terus Bagaimana Cara Nya Untuk Merubah Agar Sesuai Dengan Sertifikat </div>
            <div class="tgl-laporan-warga">
              <b>Dilaporkan :</b> 08 Maret 2023 12:06:26<br />
              <b>Oleh :</b> USIN<br />
              <b>Status :</b> Diteruskan
            </div>
            <div class="footer-laporan-warga">
              <img src="https://cikedokan.sidepe.com/themes/sederhana/assets/images/icons/reply-laporan.png" style="margin-right: 5px;float:left; width:24px; height: 25px;"> 1 Respon
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Komentar -->

  <!-- end container -->
  <div class="container-default section-apbdes">
    <div class="container-default section-module-apbdes">
      <div class="container">
        <div class="col-md-4">
          <div class="apbdes">
            <div class="bg-title">
              <div class="title-widget-apbdes-1">
                <div class="apbdes-title-text">APBDes 2024</div>
              </div>
            </div>

            <div class="body-apbdes">
              <p class="alert alert-danger">Data belum diinput</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="apbdes">
            <div class="bg-title">
              <div class="title-widget-apbdes-2">
                <div class="apbdes-title-text">APBDes 2023</div>
              </div>
            </div>

            <div class="body-apbdes">
              <p class="alert alert-danger">Data belum diinput</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="apbdes">
            <div class="bg-title">
              <div class="title-widget-apbdes-3">
                <div class="apbdes-title-text">Realisasi APBDes 2023</div>
              </div>
            </div>

            <div class="body-apbdes">
              <p class="alert alert-danger">Data belum diinput</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-default bg-white">
    <div class="container">
      <div class="section-sinergi">
        <div class="sinergi-slide">
          <div class="slidesinergi owl-carousel owl-theme">
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1656566932_34567.jpg" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1656566932_Brown-Aesthetic-Farm-Stay-Accommodation-Facebook-Cover(3).jpg" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843487_sdgsdg1.png" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843639_wertr.jpg" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843923_sedang_D6IaUK_SDGs+Desa.jpg" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1652664035_jaabr-desa-digital.png" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1652663985_jabar-digital.png" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1593537087_WhatsApp-Image-2020-06-29-at-13.21.49.jpeg" class="img-responsive center sinergi-image">
              </a>
            </div>
            <div class="blog-image">
              <a href="" target="_blank">
                <img src="https://cikedokan.sidepe.com/desa/upload/widget/1593537087_WhatsApp-Image-2020-06-29-at-13.21.44.jpeg" class="img-responsive center sinergi-image">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
  jQuery(document).ready(function($) {
    var owl = $('.slidesinergi');
    owl.on('initialize.owl.carousel initialized.owl.carousel ' +
      'initialize.owl.carousel initialize.owl.carousel ' +
      'resize.owl.carousel resized.owl.carousel ' +
      'refresh.owl.carousel refreshed.owl.carousel ' +
      'update.owl.carousel updated.owl.carousel ' +
      'drag.owl.carousel dragged.owl.carousel ' +
      'translate.owl.carousel translated.owl.carousel ' +
      'to.owl.carousel changed.owl.carousel',
      function(e) {
        $('.' + e.type)
          .removeClass('secondary')
          .addClass('success');
        window.setTimeout(function() {
          $('.' + e.type)
            .removeClass('success')
            .addClass('secondary');
        }, 3000);
      });
    owl.owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      lazyLoad: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      margin: 20,
      video: true,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        800: {
          items: 3
        },
        980: {
          items: 4
        },
        1336: {
          items: 5
        }
      }
    });
  });
</script>

<script>
  jQuery(document).ready(function($) {
    var owl = $('.statistik-widget');
    owl.on('initialize.owl.carousel initialized.owl.carousel ' +
      'initialize.owl.carousel initialize.owl.carousel ' +
      'resize.owl.carousel resized.owl.carousel ' +
      'refresh.owl.carousel refreshed.owl.carousel ' +
      'update.owl.carousel updated.owl.carousel ' +
      'drag.owl.carousel dragged.owl.carousel ' +
      'translate.owl.carousel translated.owl.carousel ' +
      'to.owl.carousel changed.owl.carousel',
      function(e) {
        $('.' + e.type)
          .removeClass('secondary')
          .addClass('success');
        window.setTimeout(function() {
          $('.' + e.type)
            .removeClass('success')
            .addClass('secondary');
        }, 3000);
      });
    owl.owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      lazyLoad: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      margin: 20,
      video: true,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        800: {
          items: 3
        },
        980: {
          items: 4
        },
        1336: {
          items: 4
        }
      }
    });
  });
</script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxsKE9ArOZcaNtsfXIMFqr4N-UCsmp-Ng&callback=initMap" defer></script>
<script>
  var map
  var kantorDesa

  function initMap() {
    var center = {
      lat: -6.341980746109547,
      lng: 107.07478181490707
    }

    var zoom = 15
    //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
    map = new google.maps.Map(document.getElementById("map-wilayah-desa"), {
      center,
      zoom
    });

    kantorDesa = new google.maps.Marker({
      position: center,
      map: map,
      title: 'Kantor Desa Cikedokan'
    });

    let polygon_desa = [
      [
        [-6.347587209761665, 107.06904817995833],
        [-6.341321968375335, 107.06964899477767],
        [-6.33658748927104, 107.07253726992415],
        [-6.337227286284058, 107.07765714297103],
        [-6.339070860492708, 107.08129847369003],
        [-6.3455209102340975, 107.07901748690414],
        [-6.348516064757159, 107.07411866411971]
      ]
    ];

    polygon_desa[0].map((arr, i) => {
      polygon_desa[i] = {
        lat: arr[0],
        lng: arr[1]
      }
    })

    //Style polygon
    var batasWilayah = new google.maps.Polygon({
      paths: polygon_desa,
      strokeColor: '#555555',
      strokeOpacity: 0.5,
      strokeWeight: 1,
      fillColor: '#007bb5',
      fillOpacity: 0.25
    });

    batasWilayah.setMap(map)
  }
</script>
@endsection