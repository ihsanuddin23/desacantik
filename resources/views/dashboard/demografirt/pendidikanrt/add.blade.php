@extends('dashboard.master')
@section('title', 'Add Pendidikan RT')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Add New Pendidikan RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Pendidikan
                                    RT</a></li>
                            <li class="breadcrumb-item active">Add Pendidikan RT</li>
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
                                <h3 class="card-title">Form Add New Pendidikan RT</h3>
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
                                <!-- Modal -->
                                <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog"
                                    aria-labelledby="modalAlertLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm"> <!-- Modal kecil untuk tampilan lebih rapi -->
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #f8d7da; color: #721c24;">
                                                <!-- Tombol Close di pojok kanan -->
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <!-- Judul Peringatan yang di tengah -->

                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-danger text-center" role="alert">
                                                    <h4 class="modal-title text-center" id="modalAlertLabel">Peringatan!
                                                    </h4>
                                                    <strong>Maksimal input angka adalah 999.</strong> Silakan masukkan angka
                                                    yang lebih kecil.
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('dashboard.pendidikanrt.store') }}" method="POST">
                                    @csrf
                                    <!-- Identitas RT -->
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



                                    <!-- Judul Pendidikan -->
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah penduduk berusia 15-64 tahun</label>
                                    </div>

                                    <!-- Pendidikan Data (Field 1) -->
                                    <div class="form-group row">
                                        <label for="tidak_tamat_sd" class="col-md-3 col-form-label">"Tidak tamat SD"</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" id="tidak_tamat_sd"
                                                name="tidak_tamat_sd" required max="999">
                                        </div>
                                    </div>

                                    <!-- Pendidikan Data (Field 2) -->
                                    <div class="form-group row">
                                        <label for="tamat_sd" class="col-md-3 col-form-label">"Tamat SD/sederajat"</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" id="tamat_sd" name="tamat_sd"
                                                required max="999">
                                        </div>
                                    </div>

                                    <!-- Pendidikan Data (Field 3) -->
                                    <div class="form-group row">
                                        <label for="tamat_smp" class="col-md-3 col-form-label">"Tamat SMP/sederajat"</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" id="tamat_smp" name="tamat_smp"
                                                required max="999">
                                        </div>
                                    </div>

                                    <!-- Pendidikan Data (Field 4) -->
                                    <div class="form-group row">
                                        <label for="tamat_sma" class="col-md-3 col-form-label">"Tamat SMA/sederajat"</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" id="tamat_sma" name="tamat_sma"
                                                required max="999">
                                        </div>
                                    </div>

                                    <!-- Pendidikan Data (Field 5) -->
                                    <div class="form-group row">
                                        <label for="tamat_perguruan_tinggi" class="col-md-3 col-form-label">"Tamat
                                            Akademi/Perguruan Tinggi"</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" id="tamat_perguruan_tinggi"
                                                name="tamat_perguruan_tinggi" required max="999">
                                        </div>
                                    </div>
                                    <!-- Total Penduduk -->
                                    <div class="form-group row">
                                        <label for="total" class="col-md-3 col-form-label">Total</label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control " id="total" name="total"
                                                readonly required>
                                        </div>
                                    </div>

                                    <!-- Submit & Cancel Buttons -->
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Add Pendidikan RT</button>
                                        <a href="{{ route('dashboard.dashboard.demografirt.index') }}"
                                            class="btn btn-secondary">Cancel</a>
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
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll('input[type="number"]');
            const modalAlert = $('#modalAlert'); // Menggunakan jQuery untuk membuka modal

            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    // Cek jika nilai input melebihi 999
                    if (this.value > 999) {
                        // Set nilai input menjadi 999
                        this.value = 999;
                        // Tampilkan modal
                        modalAlert.modal('show');
                    }
                });
            });
        });
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('input', calculateTotal);
        });

        function calculateTotal() {
            const tidakTamatSD = parseInt(document.getElementById('tidak_tamat_sd').value) || 0;
            const tamatSD = parseInt(document.getElementById('tamat_sd').value) || 0;
            const tamatSMP = parseInt(document.getElementById('tamat_smp').value) || 0;
            const tamatSMA = parseInt(document.getElementById('tamat_sma').value) || 0;
            const tamatPerguruanTinggi = parseInt(document.getElementById('tamat_perguruan_tinggi').value) || 0;

            const total = tidakTamatSD + tamatSD + tamatSMP + tamatSMA + tamatPerguruanTinggi;

            document.getElementById('total').value = total;
        }
    </script>
@endsection
