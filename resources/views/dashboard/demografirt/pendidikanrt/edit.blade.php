@extends('dashboard.master')
@section('title', 'Edit Pendidikan RT')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Edit Pendidikan RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Pendidikan
                                    RT</a></li>
                            <li class="breadcrumb-item active">Edit Pendidikan RT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Pendidikan RT</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.pendidikanrt.update', $pendidikanrt->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT') <!-- Tambahkan method PUT untuk edit -->

                                    <!-- Identitas RT -->
                                    <div class="form-group">
                                        <label for="identitasrt_id">Identitas RT</label>
                                        <select name="identitasrt_id" class="form-control" required>
                                            <option value="">Pilih Identitas RT</option>
                                            @foreach ($identitas as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $pendidikanrt->identitasrt_id == $item->id ? 'selected' : '' }}>
                                                    RT {{ $item->nomor_rt }} - RW {{ $item->nomor_rw }} - Dusun
                                                    {{ $item->dusun }} - Nama RT: {{ $item->nama_ketua_rt }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Data Pendidikan Laki-Laki -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="laki_laki">Laki Laki</label>
                                                <input type="number" class="form-control" id="laki_laki" name="laki_laki"
                                                    value="{{ $pendidikanrt->laki_laki }}" readonly required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_belum_sekolah">Laki-laki Belum Sekolah</label>
                                                <input type="number" class="form-control" id="laki_belum_sekolah"
                                                    name="laki_belum_sekolah"
                                                    value="{{ $pendidikanrt->laki_belum_sekolah }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_belum_tamat_sd">Laki-laki Belum Tamat SD</label>
                                                <input type="number" class="form-control" id="laki_belum_tamat_sd"
                                                    name="laki_belum_tamat_sd"
                                                    value="{{ $pendidikanrt->laki_belum_tamat_sd }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_tamat_sd">Laki-laki Tamat SD</label>
                                                <input type="number" class="form-control" id="laki_tamat_sd"
                                                    name="laki_tamat_sd" value="{{ $pendidikanrt->laki_tamat_sd }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_sltp">Laki-laki SLTP</label>
                                                <input type="number" class="form-control" id="laki_sltp" name="laki_sltp"
                                                    value="{{ $pendidikanrt->laki_sltp }}" oninput="calculateLakiLaki()"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_slta">Laki-laki SLTA</label>
                                                <input type="number" class="form-control" id="laki_slta" name="laki_slta"
                                                    value="{{ $pendidikanrt->laki_slta }}" oninput="calculateLakiLaki()"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_diploma_1_2">Laki-laki Diploma 1 & 2</label>
                                                <input type="number" class="form-control" id="laki_diploma_1_2"
                                                    name="laki_diploma_1_2" value="{{ $pendidikanrt->laki_diploma_1_2 }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_diploma_3">Laki-laki Diploma 3</label>
                                                <input type="number" class="form-control" id="laki_diploma_3"
                                                    name="laki_diploma_3" value="{{ $pendidikanrt->laki_diploma_3 }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_diploma_4_strata_1">Laki-laki Diploma 4 / Strata 1</label>
                                                <input type="number" class="form-control" id="laki_diploma_4_strata_1"
                                                    name="laki_diploma_4_strata_1"
                                                    value="{{ $pendidikanrt->laki_diploma_4_strata_1 }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_strata_2">Laki-laki Strata 2</label>
                                                <input type="number" class="form-control" id="laki_strata_2"
                                                    name="laki_strata_2" value="{{ $pendidikanrt->laki_strata_2 }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_strata_3">Laki-laki Strata 3</label>
                                                <input type="number" class="form-control" id="laki_strata_3"
                                                    name="laki_strata_3" value="{{ $pendidikanrt->laki_strata_3 }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="laki_belum_mengisi">Laki-laki Belum Mengisi</label>
                                                <input type="number" class="form-control" id="laki_belum_mengisi"
                                                    name="laki_belum_mengisi"
                                                    value="{{ $pendidikanrt->laki_belum_mengisi }}"
                                                    oninput="calculateLakiLaki()" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Data Pendidikan Laki-Laki -->

                                    <!-- Perempuan -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="perempuan">Perempuan</label>
                                                <input type="number" class="form-control" id="perempuan"
                                                    name="perempuan" value="{{ $pendidikanrt->perempuan }}" required
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Data Pendidikan Perempuan -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_belum_sekolah">Perempuan Belum Sekolah</label>
                                                <input type="number" class="form-control" id="perempuan_belum_sekolah"
                                                    name="perempuan_belum_sekolah"
                                                    value="{{ $pendidikanrt->perempuan_belum_sekolah }}"
                                                    oninput="calculatePerempuan()" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_belum_tamat_sd">Perempuan Belum Tamat SD</label>
                                                <input type="number" class="form-control" id="perempuan_belum_tamat_sd"
                                                    name="perempuan_belum_tamat_sd"
                                                    value="{{ $pendidikanrt->perempuan_belum_tamat_sd }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_tamat_sd">Perempuan Tamat SD</label>
                                                <input type="number" class="form-control" id="perempuan_tamat_sd"
                                                    name="perempuan_tamat_sd"
                                                    value="{{ $pendidikanrt->perempuan_tamat_sd }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_sltp">Perempuan SLTP</label>
                                                <input type="number" class="form-control" id="perempuan_sltp"
                                                    name="perempuan_sltp" value="{{ $pendidikanrt->perempuan_sltp }}"
                                                    required oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_slta">Perempuan SLTA</label>
                                                <input type="number" class="form-control" id="perempuan_slta"
                                                    name="perempuan_slta" value="{{ $pendidikanrt->perempuan_slta }}"
                                                    required oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_diploma_1_2">Perempuan Diploma 1 & 2</label>
                                                <input type="number" class="form-control" id="perempuan_diploma_1_2"
                                                    name="perempuan_diploma_1_2"
                                                    value="{{ $pendidikanrt->perempuan_diploma_1_2 }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_diploma_3">Perempuan Diploma 3</label>
                                                <input type="number" class="form-control" id="perempuan_diploma_3"
                                                    name="perempuan_diploma_3"
                                                    value="{{ $pendidikanrt->perempuan_diploma_3 }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_diploma_4_strata_1">Perempuan Diploma 4 / Strata
                                                    1</label>
                                                <input type="number" class="form-control"
                                                    id="perempuan_diploma_4_strata_1" name="perempuan_diploma_4_strata_1"
                                                    value="{{ $pendidikanrt->perempuan_diploma_4_strata_1 }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_strata_2">Perempuan Strata 2</label>
                                                <input type="number" class="form-control" id="perempuan_strata_2"
                                                    name="perempuan_strata_2"
                                                    value="{{ $pendidikanrt->perempuan_strata_2 }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_strata_3">Perempuan Strata 3</label>
                                                <input type="number" class="form-control" id="perempuan_strata_3"
                                                    name="perempuan_strata_3"
                                                    value="{{ $pendidikanrt->perempuan_strata_3 }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="perempuan_belum_mengisi">Perempuan Belum Mengisi</label>
                                                <input type="number" class="form-control" id="perempuan_belum_mengisi"
                                                    name="perempuan_belum_mengisi"
                                                    value="{{ $pendidikanrt->perempuan_belum_mengisi }}" required
                                                    oninput="calculatePerempuan()">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol Submit -->
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function calculateLakiLaki() {
            // Ambil nilai dari semua input
            const lakiBelumSekolah = parseInt(document.getElementById('laki_belum_sekolah').value) || 0;
            const lakiBelumTamatSD = parseInt(document.getElementById('laki_belum_tamat_sd').value) || 0;
            const lakiTamatSD = parseInt(document.getElementById('laki_tamat_sd').value) || 0;
            const lakiSLTP = parseInt(document.getElementById('laki_sltp').value) || 0;
            const lakiSLTA = parseInt(document.getElementById('laki_slta').value) || 0;
            const lakiDiploma1_2 = parseInt(document.getElementById('laki_diploma_1_2').value) || 0;
            const lakiDiploma3 = parseInt(document.getElementById('laki_diploma_3').value) || 0;
            const lakiDiploma4 = parseInt(document.getElementById('laki_diploma_4_strata_1').value) || 0;
            const lakiStrata2 = parseInt(document.getElementById('laki_strata_2').value) || 0;
            const lakiStrata3 = parseInt(document.getElementById('laki_strata_3').value) || 0;
            const lakiBelumMengisi = parseInt(document.getElementById('laki_belum_mengisi').value) || 0;

            // Hitung total
            const totalLakiLaki = lakiBelumSekolah + lakiBelumTamatSD + lakiTamatSD + lakiSLTP + lakiSLTA +
                lakiDiploma1_2 + lakiDiploma3 + lakiDiploma4 + lakiStrata2 +
                lakiStrata3 + lakiBelumMengisi;

            // Update field readonly
            document.getElementById('laki_laki').value = totalLakiLaki;
        }

        function calculatePerempuan() {
            // Ambil nilai dari semua input
            const perempuanBelumSekolah = parseInt(document.getElementById('perempuan_belum_sekolah').value) || 0;
            const perempuanBelumTamatSD = parseInt(document.getElementById('perempuan_belum_tamat_sd').value) || 0;
            const perempuanTamatSD = parseInt(document.getElementById('perempuan_tamat_sd').value) || 0;
            const perempuanSLTP = parseInt(document.getElementById('perempuan_sltp').value) || 0;
            const perempuanSLTA = parseInt(document.getElementById('perempuan_slta').value) || 0;
            const perempuanDiploma1_2 = parseInt(document.getElementById('perempuan_diploma_1_2').value) || 0;
            const perempuanDiploma3 = parseInt(document.getElementById('perempuan_diploma_3').value) || 0;
            const perempuanDiploma4 = parseInt(document.getElementById('perempuan_diploma_4_strata_1').value) || 0;
            const perempuanStrata2 = parseInt(document.getElementById('perempuan_strata_2').value) || 0;
            const perempuanStrata3 = parseInt(document.getElementById('perempuan_strata_3').value) || 0;
            const perempuanBelumMengisi = parseInt(document.getElementById('perempuan_belum_mengisi').value) || 0;

            // Hitung total
            const totalPerempuan = perempuanBelumSekolah + perempuanBelumTamatSD + perempuanTamatSD + perempuanSLTP +
                perempuanSLTA +
                perempuanDiploma1_2 + perempuanDiploma3 + perempuanDiploma4 + perempuanStrata2 +
                perempuanStrata3 + perempuanBelumMengisi;

            // Update field readonly
            document.getElementById('perempuan').value =
                totalPerempuan; // Pastikan ada elemen dengan id 'perempuan' untuk menampilkan total
        }
    </script>

@endsection
