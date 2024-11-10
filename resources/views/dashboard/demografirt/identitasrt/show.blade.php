@extends('dashboard.master')
@section('title', 'Detail Identitas RT')

@section('content')
    <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Identitas RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Demografi RT</a></li>
                            <li class="breadcrumb-item active">Detail Identitas RT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Identitas RT</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"> <!-- Menambahkan responsivitas -->
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>Nomor RT</th>
                                        <td>{{ $identitasRt->nomor_rt }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor RW</th>
                                        <td>{{ $identitasRt->nomor_rw }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dusun</th>
                                        <td>{{ $identitasRt->dusun }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ketua RT</th>
                                        <td>{{ ucwords(strtolower($identitasRt->nama_ketua_rt)) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah KK</th>
                                        <td>{{ $identitasRt->jumlah_kk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Laki-laki</th>
                                        <td>{{ $identitasRt->laki_laki }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Perempuan</th>
                                        <td>{{ $identitasRt->perempuan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir Ketua RT</th>
                                        <td>{{ $identitasRt->tanggal_lahir_ketua_rt? \Carbon\Carbon::parse($identitasRt->tanggal_lahir_ketua_rt)->locale('id')->isoFormat('D MMMM YYYY'): '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Ketua RT</th>
                                        <td>{{ $identitasRt->pendidikan_ketua_rt }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan Ketua RT</th>
                                        <td>{{ $identitasRt->pekerjaan_ketua_rt }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon Ketua RT</th>
                                        <td>{{ $identitasRt->nomor_telepon_ketua_rt_formatted }}</td>
                                    </tr>
                                </tbody>
                            </table>
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
