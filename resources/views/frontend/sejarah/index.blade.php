@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')

    @include('frontend.home.inc.featuredpost')
    @include('frontend.home.inc.petacidekokan')
    <style>
        .text-black {
            color: #000000 !important;
            /* Paksa teks tetap hitam */
        }
    </style>
    <!-- Card Baru di Bawah Peta Cikedokan -->
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light text-dark dark-mode-card">
                    <div class="card-header">
                        <h5 class="text-black">Sejarah Desa Cikedokan</h5> <!-- Judul Card -->
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Desa Cikedokan, Kecamatan Cikarang barat, Kabupaten Bekasi dapat ditempuh dengan menggunakan
                            kendaraan umum (angkot) jurusan Cikedokan Setu. Lokasi Kampung Cikedokan memang agak terpencil
                            dari kampung-kampung lainnya.<br><br>

                            Cikedokan, dikatakan berasal dari kata “Ci” yang artinya bening, dan “Kedok” berarti nyamar.
                            Jadi Cikedokan mempunyai arti penyamaran, hal ini disebabkan karena karuhun-karuhun yang datang
                            ke Cikedokan adalah mereka-mereka yang sedang menyamar, karena dikejar-kejar Belanda.<br><br>

                            Saung Ranggon menurut kuncen Bapak Tholib, dibangun kira-kira pada abad-16, oleh Pangeran
                            Rangga, putra Pangeran Jayakarta, yang datang dan kemudian menetap di daerah ini. Saung ini
                            kemudian terkenal dengan sebutan Saung Ranggon, ditemukan oleh Raden Abbas tahun 1821.<br><br>

                            Dalam bahasa Sunda, saung berarti saung/rumah yang berada di tengah ladang atau huma berfungsi
                            sebagai tempat menunggu padi atau tanaman palawija lainnya yang sebentar lagi akan
                            dipanen.<br><br>

                            Biasanya saung dibuat dengan ketinggian di atas 3 atau 4 meter di atas permukaan tanah. Hal ini
                            diperlukan untuk menjaga keselamatan bagi si penunggu dari gangguan hewan buas, seperti babi
                            hutan, harimau dan binatang buas lainnya.<br><br>

                            Pangeran Jayakarta merupakan tokoh dalam sejarah Betawi, khususnya Jakarta dan Bekasi pada masa
                            kedatangan Belanda yang mencoba menanamkan kekuasaan atas daerah Jakarta dan Bekasi dan
                            sekitarnya. Saung ini merupakan bagian dari basis perlawanan masyarakat Bekasi terhadap
                            pemerintah kolonial Hindia Belanda. Bangunan ini diakui oleh masyarakat Bekasi sebagai bangunan
                            tertua di sekitar Cikarang Barat dan mungkin sekali di seluruh Bekasi.<br><br>

                            Saung Ranggon berdiri di atas tanah seluas 500 m², dengan ukuran bangunan seluas 7,6 m x 7,2 m
                            dan tinggi bangunan dari permukaan tanah 2,5 m. Bentuk Saung Ranggon adalah rumah panggung,
                            menghadap ke arah selatan ditandai dengan penempatan tangga pintu utama dengan 7 buah anak
                            tangga.<br><br>

                            Bagian dalam Saung Ranggon hanya merupakan ruangan terbuka tanpa sekat, walaupun ada sebuah
                            kamar. Bentuk atap Julang Ngapak (atap yang terdiri dari dua bidang miring) dengan penutup dari
                            sirap kayu; dinding terbuat dari papan dan tidak mempunyai jendela. Ada ventilasi berupa bukaan
                            selebar 30 cm di sebelah kiri dan kanan.<br><br>

                            Rangka dan tiang-tiang terbuat dari kayu, bagian bawah bangunan terdapat tempat penyimpanan
                            benda pusaka menyerupai sumur (sekarang telah dilantai). Saung Ranggon dikelilingi pagar besi
                            setinggi 1,20 meter.<br><br>

                            Saung Ranggon saat ini merupakan hasil renovasi, tetapi tetap memperhatikan pelestarian bangunan
                            asli. Masyarakat Cikedokan menghormati Saung Ranggon sebagai bagian dari sejarah leluhur
                            mereka.<br><br>

                            Saung Ranggon awalnya digunakan sebagai tempat persembunyian dari penjajah Belanda, namun
                            sekarang juga berfungsi sebagai tempat penyimpanan pusaka. Banyak orang berziarah ke Saung
                            Ranggon, memohon keselamatan, kemakmuran, atau berkah.<br><br>

                            Pantangan yang ada saat memasuki Saung Ranggon adalah tidak boleh mengucapkan kata-kata kasar
                            atau "sompral". Saung ini ramai dikunjungi pada waktu-waktu tertentu, terutama malam Jumat
                            Kliwon, Sabtu Suro, Maulid Nabi, dan Rajaban.<br><br>

                            Setiap bulan Maulid diadakan hajat budaya, seperti cuci pusaka dan hiburan tradisional seperti
                            jaipongan dan wayang kulit khas Bekasi. Kegiatan ini diadakan di halaman rumah Tradisional Saung
                            Ranggon yang kini menjadi daya tarik wisata budaya.<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
