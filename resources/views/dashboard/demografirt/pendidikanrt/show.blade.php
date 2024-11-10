@extends('dashboard.master')
@section('title', 'Detail Pendidikan RT')

@section('content')
    <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Pendidikan RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Demografi RT</a></li>
                            <li class="breadcrumb-item active">Detail Pendidikan RT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pendidikan RT</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>RT</th>
                                        <td>{{ $identitas->nomor_rt }}</td>
                                    </tr>
                                    <tr>
                                        <th>RW</th>
                                        <td>{{ $identitas->nomor_rw }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dusun</th>
                                        <td>{{ $identitas->dusun }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ketua RT</th>
                                        <td>{{ $identitas->nama_ketua_rt }}</td>
                                    </tr>

                                    <!-- Data Pendidikan Laki-laki -->
                                    <tr>
                                        <th colspan="2" class="text-center">Data Pendidikan Laki-laki</th>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Pria</th>
                                        <td>{{ $pendidikanrt->laki_laki }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Sekolah</th>
                                        <td>{{ $pendidikanrt->laki_belum_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Tamat SD</th>
                                        <td>{{ $pendidikanrt->laki_belum_tamat_sd }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tamat SD</th>
                                        <td>{{ $pendidikanrt->laki_tamat_sd }}</td>
                                    </tr>
                                    <tr>
                                        <th>SLTP</th>
                                        <td>{{ $pendidikanrt->laki_sltp }}</td>
                                    </tr>
                                    <tr>
                                        <th>SLTA</th>
                                        <td>{{ $pendidikanrt->laki_slta }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 1 & 2</th>
                                        <td>{{ $pendidikanrt->laki_diploma_1_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 3</th>
                                        <td>{{ $pendidikanrt->laki_diploma_3 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 4 / Strata 1</th>
                                        <td>{{ $pendidikanrt->laki_diploma_4_strata_1 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Strata 2</th>
                                        <td>{{ $pendidikanrt->laki_strata_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Strata 3</th>
                                        <td>{{ $pendidikanrt->laki_strata_3 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Mengisi</th>
                                        <td>{{ $pendidikanrt->laki_belum_mengisi }}</td>
                                    </tr>

                                    <!-- Data Pendidikan Perempuan -->
                                    <tr>
                                        <th colspan="2" class="text-center">Data Pendidikan Perempuan</th>
                                    </tr>
                                    <tr>
                                        <th>Perempuan</th>
                                        <td>{{ $pendidikanrt->perempuan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Sekolah</th>
                                        <td>{{ $pendidikanrt->perempuan_belum_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Tamat SD</th>
                                        <td>{{ $pendidikanrt->perempuan_belum_tamat_sd }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tamat SD</th>
                                        <td>{{ $pendidikanrt->perempuan_tamat_sd }}</td>
                                    </tr>
                                    <tr>
                                        <th>SLTP</th>
                                        <td>{{ $pendidikanrt->perempuan_sltp }}</td>
                                    </tr>
                                    <tr>
                                        <th>SLTA</th>
                                        <td>{{ $pendidikanrt->perempuan_slta }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 1 & 2</th>
                                        <td>{{ $pendidikanrt->perempuan_diploma_1_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 3</th>
                                        <td>{{ $pendidikanrt->perempuan_diploma_3 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diploma 4 / Strata 1</th>
                                        <td>{{ $pendidikanrt->perempuan_diploma_4_strata_1 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Strata 2</th>
                                        <td>{{ $pendidikanrt->perempuan_strata_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Strata 3</th>
                                        <td>{{ $pendidikanrt->perempuan_strata_3 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Belum Mengisi</th>
                                        <td>{{ $pendidikanrt->perempuan_belum_mengisi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Tabel Riwayat Pendidikan -->
                            <h3>Data Pendidikan Lama:</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Data</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($history as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            @php
                                                                // Periksa apakah $item->data adalah JSON atau serialized
                                                                $data = $item->data;

                                                                // Jika $data adalah string JSON, decode menjadi array
                                                                if (
                                                                    is_string($data) &&
                                                                    is_array(json_decode($data, true))
                                                                ) {
                                                                    $data = json_decode($data, true); // Decode JSON menjadi array
                                                                }
                                                                // Jika $data adalah serialized string, unserialize menjadi array
                                                                elseif (
                                                                    is_string($data) &&
                                                                    @unserialize($data) !== false
                                                                ) {
                                                                    $data = unserialize($data); // Unserialize string menjadi array
                                                                } else {
                                                                    // Jika tidak ada format yang valid, pastikan $data adalah array
                                                                    $data = (array) $data; // Cast ke array
                                                                }
                                                            @endphp

                                                            @foreach ($data as $label => $value)
                                                                <tr>
                                                                    <td>{{ $label }}</td>
                                                                    <td>{{ number_format(floatval($value), 0, ',', '.') }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('dashboard.dashboard.demografirt.index') }}"
                            class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
