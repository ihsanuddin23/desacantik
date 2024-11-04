@extends('frontend2.themes')

@section('content')
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
            <div class="main-slider" style="padding-top: 20px;">
                <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach ($recentposts as $key => $post)
                            <div class="item {{ $key == 0 ? 'active' : '' }}">
                                <a href="{{ route('frontend.post', ['slug' => $post->slug]) }}">
                                    <img src="{{ asset('uploads/post/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                        class="gambar-slide" style="width: 800px; height: 500px; object-fit: cover;">
                                </a>
                                <div class="carousel-caption">
                                    <div class="slide-caption">
                                        <a href="{{ route('frontend.post', ['slug' => $post->slug]) }}">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- END MAIN SLIDER -->
    </div>
    <div class="top-widget">
        <div class="container">
            <div class="">
                <div class="statistik-widget owl-carousel">
                    <div class="item">
                        <div class="stat-box bg-info">
                            <div class="inner">
                                <div class="stat-value">
                                    {{ number_format($totalPenduduk, 0, ',', '.') }}
                                </div>
                                <p class="stat-title">Penduduk</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="stat-box bg-info">
                            <div class="inner">
                                <div class="stat-value">{{ number_format($totalKK, 0, ',', '.') }}</div>
                                <p class="stat-title">Total Jumlah KK</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i> <!-- Ikon keluarga -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="stat-box bg-danger">
                            <div class="inner">
                                <div class="stat-value">
                                    {{ $totalDusun }}
                                </div>
                                <p class="stat-title">Wilayah Dusun</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stat-box bg-info">
                            <div class="inner">
                                <div class="stat-value">
                                    {{ $totalRt }}
                                </div>
                                <p class="stat-title">Jumlah RT</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="stat-box bg-success">
                            <div class="inner">
                                <div class="stat-value">
                                    {{ $totalRw }}
                                </div>
                                <p class="stat-title">Jumlah RW</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-widget">
        <!-- Pengumuman -->
        <div class="container-default bg-gray" id="index-berita">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="page-content homepage">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="web-banner">
                                        <a href="https://cikedokan.sidepe.com/desa/upload/widget/home_banner.jpg"
                                            data-lightbox="images">
                                            <img src="https://cikedokan.sidepe.com/desa/upload/widget/home_banner.jpg"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>


                            @foreach ($popularposts as $key => $post)
                                <div class="card login-card article-list-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-xs-5">
                                            <a href="{{ route('frontend.post', $post->slug) }}">
                                                <img src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                                    class="img-responsive img-article-list" alt="{{ $post->title }}"
                                                    style="width: 300px; height: 200px; object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-xs-7">
                                            <div class="row">
                                                <div class="top-block-article-list">
                                                    <div class="brand-wrapper article-list-title">
                                                        <a href="{{ route('frontend.post', $post->slug) }}">
                                                            {{ $post->title }}
                                                        </a>
                                                    </div>
                                                    <div class="top-meta-article-list">
                                                        <div class="row">
                                                            <div class="col-md-8 col-xs-12">
                                                                <div class="post-date">
                                                                    <i class="fa fa-calendar"></i>
                                                                    {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('l, d F Y H:i') }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-xs-4 hidden-xs">
                                                                <div class="post-hit">
                                                                    <i class="fa fa-eye"></i>
                                                                    {{ $post->views }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body artice-list-body hidden-xs">
                                                    <p class="description-artice-list">
                                                        {{ Str::limit(strip_tags($post->excerpt), 100) }}
                                                    </p>
                                                    <p>
                                                        {{ Str::limit(strip_tags($post->content), 150) }}
                                                    </p>
                                                </div>

                                                <div class="bottom-block-article-list hidden-xs">
                                                    <div class="bottom-meta-article-list">
                                                        <div class="row">
                                                            <div class="col-md-6 col-xs-5">
                                                                <div class="post-owner">
                                                                    <i class="fa fa-user"></i> {{ $post->user->name }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-">
                                                                <div class="post-cat">
                                                                    <i class="fa fa-newspaper-o"></i>
                                                                    <a href="{{ route('frontend.category', $post->category->slug) }}"
                                                                        class="cat-label">
                                                                        {{ $post->category->slug }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                            <div class="clearfix"></div>

                            <div class="loader-button text-center">
                                <a href="{{ route('frontend.berita') }}"
                                    class="btn btn-primary btn-mandiri btn-sm">Tampilkan Semua</span></a>
                            </div>
                            <hr />
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        @include('frontend2.widget.sidebar.agenda')
                        @include('frontend2.widget.sidebar.kategori')
                        @include('frontend2.widget.sidebar.artikel_populer')
                        @include('frontend2.widget.sidebar.pengunjung')
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
                            <h2 class="title"><a href="https://cikedokan.sidepe.com/pemerintah">Perangkat desa</a>
                            </h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-primary style-skew"></div>
                            </div>
                            <p>Meningkatkan Ilmu Pengetahuan, Keterampilan, Kedisiplinan dan Etos Kerja Pemerintah desa
                            </p>
                        </div>
                        <div class="row">
                            <div class="MultiCarousel" data-items="1,3,5,5" data-slide="1" id="MultiCarousel">
                                <div class="MultiCarousel-inner">
                                    @foreach ($pemerintahdesa as $data)
                                        <div class="item">
                                            <div class="block-aparatur">
                                                <img src="{{ asset('thumbnails/' . $data->thumbnail) }}" alt="User Image"
                                                    class="center img-responsive"
                                                    style="max-height: 220px; min-height: 220px; border-top-left-radius: 10px; border-top-right-radius: 10px" />
                                                <div class="data-team">
                                                    <div class="nama-team">{{ $data->name }}</div>
                                                    <div class="detail-team">
                                                        NIAP : {{ $data->niap }}<br />
                                                        {{ $data->jabatan }} <!-- Added JABATAN -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                            <a
                                href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/umkm-desa-cikedokan-dewi-kurnia-fashion">
                                <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1665373649_sedang_1665131417_3.jpg&w=600&h=350&q=100"
                                    class="img-responsive img-potensi" alt="UMKM  Desa CikedoKan  DEWI KURNIA FASHION">
                            </a>
                            <div class="caption-pengumuman">
                                <div class="title-pengumuman"><a
                                        href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/umkm-desa-cikedokan-dewi-kurnia-fashion">UMKM
                                        Desa CikedoKan DEWI KURNIA FASHION</a></div>
                            </div>
                            <div class="meta-pengumuman">
                                <div class="tgl-pengumuman">
                                    10 Oktober 2022 10:47:01 </div>
                            </div>
                        </div>
                        <div class="blog-image">
                            <a
                                href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/singkong-goreng-balado-yang-sehat-dan-bikin-tubuh-langsing">
                                <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1659367726_Singkong-Balado-resep.jpg&w=600&h=350&q=100"
                                    class="img-responsive img-potensi"
                                    alt=" Singkong Goreng Balado yang Sehat dan Bikin Tubuh Langsing">
                            </a>
                            <div class="caption-pengumuman">
                                <div class="title-pengumuman"><a
                                        href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/singkong-goreng-balado-yang-sehat-dan-bikin-tubuh-langsing">Singkong
                                        Goreng Balado yang Sehat dan Bikin&#8230;</a></div>
                            </div>
                            <div class="meta-pengumuman">
                                <div class="tgl-pengumuman">
                                    01 Agustus 2022 22:28:46 </div>
                            </div>
                        </div>
                        <div class="blog-image">
                            <a href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/dodol-khas-betawi">
                                <img src="https://cikedokan.sidepe.com/timthumb.php?src=https://cikedokan.sidepe.com/desa/upload/artikel/sedang_1659028012_dodol.jpg&w=600&h=350&q=100"
                                    class="img-responsive img-potensi" alt="Dodol Khas Betawi">
                            </a>
                            <div class="caption-pengumuman">
                                <div class="title-pengumuman"><a
                                        href="https://cikedokan.sidepe.com/berita/detail/potensi-dan-produk-desa/dodol-khas-betawi">Dodol
                                        Khas Betawi</a></div>
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
                        <h2 class="title"><a href="https://cikedokan.sidepe.com/laporan_warga">Laporan dan Aspirasi
                                Warga</a></h2>
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
                                Sppt Induk Sudah Di Pecah 3,terus Bagaimana Cara Nya Untuk Merubah Agar Sesuai Dengan
                                Sertifikat </div>
                            <div class="tgl-laporan-warga">
                                <b>Dilaporkan :</b> 08 Maret 2023 12:06:26<br />
                                <b>Oleh :</b> USIN<br />
                                <b>Status :</b> Diteruskan
                            </div>
                            <div class="footer-laporan-warga">
                                <img src="https://cikedokan.sidepe.com/themes/sederhana/assets/images/icons/reply-laporan.png"
                                    style="margin-right: 5px;float:left; width:24px; height: 25px;"> 1 Respon
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
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1656566932_34567.jpg"
                                        class="img-responsive center sinergi-image" alt="Image 1">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1656566932_Brown-Aesthetic-Farm-Stay-Accommodation-Facebook-Cover(3).jpg"
                                        class="img-responsive center sinergi-image" alt="Image 2">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843487_sdgsdg1.png"
                                        class="img-responsive center sinergi-image" alt="Image 3">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843639_wertr.jpg"
                                        class="img-responsive center sinergi-image" alt="Image 4">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1654843923_sedang_D6IaUK_SDGs+Desa.jpg"
                                        class="img-responsive center sinergi-image" alt="Image 5">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1652664035_jaabr-desa-digital.png"
                                        class="img-responsive center sinergi-image" alt="Image 6">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1652663985_jabar-digital.png"
                                        class="img-responsive center sinergi-image" alt="Image 7">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1593537087_WhatsApp-Image-2020-06-29-at-13.21.49.jpeg"
                                        class="img-responsive center sinergi-image" alt="Image 8">
                                </a>
                            </div>
                            <div class="blog-image">
                                <a href="" target="_blank">
                                    <img src="https://cikedokan.sidepe.com/desa/upload/widget/1593537087_WhatsApp-Image-2020-06-29-at-13.21.44.jpeg"
                                        class="img-responsive center sinergi-image" alt="Image 9">
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
