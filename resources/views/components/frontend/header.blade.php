<nav class="navbar navbar-expand-lg" style="background-color: #000000 !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/frontend/logo/cikedokan.png') }}" alt="Logo" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav fw-bold" style="color: white !important;">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/" style="color: white !important;">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDesaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: white !important;">
                        Profil Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDesaDropdown">
                        <li><a class="dropdown-item" href="#">Profil Wilayah Desa</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/demografi">Demografi</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/visimisi">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/pemerintahdesa"
                        style="color: white !important;">Pemerintah Desa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dataDesaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: white !important;">
                        Data Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dataDesaDropdown">
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/identitasrt">Identitas RT</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/demografirt">Demografi RT</a></li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/sosialekonomirt">Sosial Ekonomi RT</a>
                        </li>
                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/karakteristikrt">Karakteristik RT</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        padding: 15px 0 !important;
        /* Mengatur padding untuk meningkatkan tinggi navbar */
    }

    .navbar-nav .nav-link {
        font-weight: bold !important;
        /* Menjadikan teks link lebih tebal */
    }

    .navbar-toggler {
        border: none !important;
        /* Menghilangkan border default */
    }

    .navbar-toggler-icon {
        background-color: white !important;
        /* Mengubah warna latar belakang ikon */
        width: 30px !important;
        /* Lebar ikon */
        height: 3px !important;
        /* Tinggi garis */
        position: relative !important;
        /* Untuk pengaturan posisi */
        display: inline-block !important;
        /* Mengatur tampilan sebagai inline-block */
        border-radius: 5px !important;
        /* Menambahkan border radius */
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
        content: "";
        /* Membuat garis tambahan */
        background-color: white !important;
        /* Warna garis */
        width: 30px !important;
        /* Lebar garis */
        height: 3px !important;
        /* Tinggi garis */
        position: absolute !important;
        /* Posisi absolut untuk menempatkan garis */
        left: 0 !important;
        /* Mengatur posisi ke kiri */
        transition: all 0.3s ease !important;
        /* Animasi transisi */
        border-radius: 5px !important;
        /* Menambahkan border radius */
    }

    .navbar-toggler-icon::before {
        top: -8px !important;
        /* Jarak garis atas */
    }

    .navbar-toggler-icon::after {
        top: 8px !important;
        /* Jarak garis bawah */
    }
</style>
