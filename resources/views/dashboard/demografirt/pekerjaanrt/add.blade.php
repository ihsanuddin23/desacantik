@extends('dashboard.master')
@section('title', 'Add Pekerjaan RT')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Add New Pekerjaan RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Pekerjaan
                                    RT</a></li>
                            <li class="breadcrumb-item active">Add Pekerjaan RT</li>
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
                                <h3 class="card-title">Form Add New Perkerjaan RT</h3>
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
                                <form action="{{ route('dashboard.pekerjaanrt.store') }}" method="POST">
                                    @csrf

                                    <!-- Select Identitas RT -->
                                    <div class="form-group row">
                                        <label for="identitasrt_id" class="col-md-3 col-form-label">Identitas RT</label>
                                        <div class="col-md-4">
                                            <select name="identitasrt_id" class="form-control" required>
                                                <option value="">Pilih Identitas RT</option>
                                                @foreach ($identitas as $item)
                                                    <option value="{{ $item->id }}">
                                                        RT {{ $item->nomor_rt }} - RW {{ $item->nomor_rw }} - Dusun
                                                        {{ $item->dusun }} - Nama RT:
                                                        {{ ucwords(strtolower($item->nama_ketua_rt)) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah_penduduk" class="col-md-3 col-form-label">Jumlah Penduduk</label>
                                        <div class="col-md-4">
                                            <input type="text" name="jumlah_penduduk" id="jumlah_penduduk"
                                                class="form-control" value="{{ old('jumlah_penduduk') }}" readonly>
                                        </div>
                                    </div>

                                    <!-- Pertanian, Kehutanan, Perikanan -->
                                    <div class="form-group row">
                                        <label for="pertanian_kehutan_perikanan" class="col-md-3 col-form-label">Pertanian,
                                            Kehutanan, Perikanan</label>
                                        <div class="col-md-4">
                                            <input type="number" name="pertanian_kehutan_perikanan" class="form-control"
                                                value="{{ old('pertanian_kehutan_perikanan') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Pertambangan dan Penggalian -->
                                    <div class="form-group row">
                                        <label for="pertambangan_dan_penggalian"
                                            class="col-md-3 col-form-label">Pertambangan dan Penggalian</label>
                                        <div class="col-md-4">
                                            <input type="number" name="pertambangan_dan_penggalian" class="form-control"
                                                value="{{ old('pertambangan_dan_penggalian') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Industri Pengolahan -->
                                    <div class="form-group row">
                                        <label for="industri_pengolahan" class="col-md-3 col-form-label">Industri
                                            Pengolahan</label>
                                        <div class="col-md-4">
                                            <input type="number" name="industri_pengolahan" class="form-control"
                                                value="{{ old('industri_pengolahan') }} oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Pengadaan Listrik, Gas, Uap -->
                                    <div class="form-group row">
                                        <label for="pengadaan_listrik_gas_uap" class="col-md-3 col-form-label">Pengadaan
                                            Listrik, Gas, Uap</label>
                                        <div class="col-md-4">
                                            <input type="number" name="pengadaan_listrik_gas_uap" class="form-control"
                                                value="{{ old('pengadaan_listrik_gas_uap') }}" oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Treatment Air Limbah dan Remediasi -->
                                    <div class="form-group row">
                                        <label for="treatment_air_limbah_dan_remediasi"
                                            class="col-md-3 col-form-label">Treatment Air Limbah dan Remediasi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="treatment_air_limbah_dan_remediasi"
                                                class="form-control"
                                                value="{{ old('treatment_air_limbah_dan_remediasi') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Konstruksi -->
                                    <div class="form-group row">
                                        <label for="konstruksi" class="col-md-3 col-form-label">Konstruksi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="konstruksi" class="form-control"
                                                value="{{ old('konstruksi') }}" oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Perdagangan Besar dan Eceran -->
                                    <div class="form-group row">
                                        <label for="perdagangan_besar_eceran" class="col-md-3 col-form-label">Perdagangan
                                            Besar dan Eceran</label>
                                        <div class="col-md-4">
                                            <input type="number" name="perdagangan_besar_eceran" class="form-control"
                                                value="{{ old('perdagangan_besar_eceran') }}" oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Pengangkutan dan Pergudangan -->
                                    <div class="form-group row">
                                        <label for="pengangkutan_dan_pergudangan"
                                            class="col-md-3 col-form-label">Pengangkutan dan Pergudangan</label>
                                        <div class="col-md-4">
                                            <input type="number" name="pengangkutan_dan_pergudangan"
                                                class="form-control" value="{{ old('pengangkutan_dan_pergudangan') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Penyediaan Akomodasi dan Makan Minum -->
                                    <div class="form-group row">
                                        <label for="penyediaan_akomodasi_dan_makan_minum"
                                            class="col-md-3 col-form-label">Penyediaan Akomodasi dan Makan Minum</label>
                                        <div class="col-md-4">
                                            <input type="number" name="penyediaan_akomodasi_dan_makan_minum"
                                                class="form-control"
                                                value="{{ old('penyediaan_akomodasi_dan_makan_minum') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Informasi dan Komunikasi -->
                                    <div class="form-group row">
                                        <label for="informasi_dan_komunikasi" class="col-md-3 col-form-label">Informasi
                                            dan Komunikasi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="informasi_dan_komunikasi" class="form-control"
                                                value="{{ old('informasi_dan_komunikasi') }}" oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <!-- Aktivitas Keuangan dan Asuransi -->
                                    <div class="form-group row">
                                        <label for="aktivitas_keuangan_dan_asuransi"
                                            class="col-md-3 col-form-label">Aktivitas Keuangan dan Asuransi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_keuangan_dan_asuransi"
                                                class="form-control" value="{{ old('aktivitas_keuangan_dan_asuransi') }}"
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="real_estat" class="col-md-3 col-form-label">Real Estat</label>
                                        <div class="col-md-4">
                                            <input type="number" name="real_estat" class="form-control"
                                                value="{{ old('real_estat') }}" oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_profesional_ilmiah_teknis"
                                            class="col-md-3 col-form-label">Aktivitas Profesional Ilmiah dan Teknis</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_profesional_ilmiah_teknis"
                                                class="form-control"
                                                value="{{ old('aktivitas_profesional_ilmiah_teknis') }}"
                                                oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_penyewaan_dan_opsi"
                                            class="col-md-3 col-form-label">Aktivitas Penyewaan dan Opsi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_penyewaan_dan_opsi"
                                                class="form-control" value="{{ old('aktivitas_penyewaan_dan_opsi') }}"
                                                required oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="administrasi_pemerintahan_pertahanan"
                                            class="col-md-3 col-form-label">Administrasi Pemerintahan dan
                                            Pertahanan</label>
                                        <div class="col-md-4">
                                            <input type="number" name="administrasi_pemerintahan_pertahanan"
                                                class="form-control"
                                                value="{{ old('administrasi_pemerintahan_pertahanan') }}"
                                                oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pendidikan" class="col-md-3 col-form-label">Pendidikan</label>
                                        <div class="col-md-4">
                                            <input type="number" name="pendidikan" class="form-control"
                                                value="{{ old('pendidikan') }}" oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_kesehatan_dan_sosial"
                                            class="col-md-3 col-form-label">Aktivitas Kesehatan dan Sosial</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_kesehatan_dan_sosial"
                                                class="form-control" value="{{ old('aktivitas_kesehatan_dan_sosial') }}"
                                                oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kesenian_hiburan_dan_rekreasi"
                                            class="col-md-3 col-form-label">Kesenian, Hiburan, dan Rekreasi</label>
                                        <div class="col-md-4">
                                            <input type="number" name="kesenian_hiburan_dan_rekreasi"
                                                class="form-control" value="{{ old('kesenian_hiburan_dan_rekreasi') }}"
                                                oninput="calculateTotal()" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_jasa_lainnya" class="col-md-3 col-form-label">Aktivitas Jasa
                                            Lainnya</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_jasa_lainnya" class="form-control"
                                                value="{{ old('aktivitas_jasa_lainnya') }}" required
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_keluarga_pemberi_kerja"
                                            class="col-md-3 col-form-label">Aktivitas Keluarga Pemberi Kerja</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_keluarga_pemberi_kerja"
                                                class="form-control"
                                                value="{{ old('aktivitas_keluarga_pemberi_kerja') }}" required
                                                oninput="calculateTotal()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="aktivitas_badan_internasional_dan_bei"
                                            class="col-md-3 col-form-label">Aktivitas Badan Internasional dan BEI</label>
                                        <div class="col-md-4">
                                            <input type="number" name="aktivitas_badan_internasional_dan_bei"
                                                class="form-control"
                                                value="{{ old('aktivitas_badan_internasional_dan_bei') }}"
                                                oninput="calculateTotal()" required>
                                        </div>
                                    </div>


                                    <!-- Submit & Cancel -->
                                    <div class="form-group row">
                                        <div class="col-md-4 offset-md-3">
                                            <button type="submit" class="btn btn-primary">Add Pekerjaan RT</button>
                                            <a href="{{ route('dashboard.dashboard.demografirt.index') }}"
                                                class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        // Fungsi untuk menghitung total dari semua input angka dan mengupdate field 'jumlah_penduduk'
        function calculateTotal() {
            var total = 0;

            // Daftar input fields yang akan dihitung
            var fields = [
                'pertanian_kehutan_perikanan',
                'pertambangan_dan_penggalian',
                'industri_pengolahan',
                'pengadaan_listrik_gas_uap',
                'treatment_air_limbah_dan_remediasi',
                'konstruksi',
                'perdagangan_besar_eceran',
                'pengangkutan_dan_pergudangan',
                'penyediaan_akomodasi_dan_makan_minum',
                'informasi_dan_komunikasi',
                'aktivitas_keuangan_dan_asuransi',
                'real_estat',
                'aktivitas_profesional_ilmiah_teknis',
                'aktivitas_penyewaan_dan_opsi',
                'administrasi_pemerintahan_pertahanan',
                'pendidikan',
                'aktivitas_kesehatan_dan_sosial',
                'kesenian_hiburan_dan_rekreasi',
                'aktivitas_jasa_lainnya',
                'aktivitas_keluarga_pemberi_kerja',
                'aktivitas_badan_internasional_dan_bei'
            ];

            // Loop melalui setiap field dan tambahkan nilainya ke total
            fields.forEach(function(field) {
                // Ambil nilai dari input dan pastikan angka (parseInt dengan nilai default 0 jika kosong)
                var value = parseInt(document.getElementsByName(field)[0].value) || 0;
                total += value;
            });

            // Update nilai total di field 'jumlah_penduduk'
            document.getElementById('jumlah_penduduk').value = total;
        }

        // Pastikan menghitung ulang total setiap kali ada perubahan pada input
        window.onload = function() {
            // Panggil fungsi untuk pertama kali agar menghitung ketika halaman dimuat
            calculateTotal();

            // Tambahkan event listener untuk setiap input yang ingin dihitung
            var fields = [
                'pertanian_kehutan_perikanan',
                'pertambangan_dan_penggalian',
                'industri_pengolahan',
                'pengadaan_listrik_gas_uap',
                'treatment_air_limbah_dan_remediasi',
                'konstruksi',
                'perdagangan_besar_eceran',
                'pengangkutan_dan_pergudangan',
                'penyediaan_akomodasi_dan_makan_minum',
                'informasi_dan_komunikasi',
                'aktivitas_keuangan_dan_asuransi',
                'real_estat',
                'aktivitas_profesional_ilmiah_teknis',
                'aktivitas_penyewaan_dan_opsi',
                'administrasi_pemerintahan_pertahanan',
                'pendidikan',
                'aktivitas_kesehatan_dan_sosial',
                'kesenian_hiburan_dan_rekreasi',
                'aktivitas_jasa_lainnya',
                'aktivitas_keluarga_pemberi_kerja',
                'aktivitas_badan_internasional_dan_bei'
            ];

            // Menambahkan event listener untuk setiap field
            fields.forEach(function(field) {
                var element = document.getElementsByName(field)[0];
                if (element) {
                    element.addEventListener('input', calculateTotal);
                }
            });
        }
    </script>

@endsection
