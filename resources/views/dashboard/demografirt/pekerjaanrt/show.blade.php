@extends('dashboard.master')
@section('title', 'Detail Pekerjaan RT')

@section('content')
    <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Pekerjaan RT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.dashboard.demografirt.index') }}">Pekerjaan RT</a></li>
                            <li class="breadcrumb-item active">Detail Pekerjaan RT</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pekerjaan RT</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>Nomor RT</th>
                                    <td>{{ $identitas->nomor_rt }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor RW</th>
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
                                <tr>
                                    <th>Tanggal Lahir Ketua RT</th>
                                    <td>{{ \Carbon\Carbon::parse($identitas->tanggal_lahir_ketua_rt)->format('d-m-Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Ketua RT</th>
                                    <td>{{ $identitas->pendidikan_ketua_rt }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ketua RT</th>
                                    <td>{{ $identitas->pekerjaan_ketua_rt }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon Ketua RT</th>
                                    <td>{{ $identitas->nomor_telepon_ketua_rt }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Penduduk</th>
                                    <td>{{ $pekerjaanRt->jumlah_penduduk }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Pertanian Kehutanan Perikanan</th>
                                    <td>{{ $pekerjaanRt->pertanian_kehutan_perikanan }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Pertambangan dan Penggalian</th>
                                    <td>{{ $pekerjaanRt->pertambangan_dan_penggalian }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Industri Pengolahan</th>
                                    <td>{{ $pekerjaanRt->industri_pengolahan }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Pengadaan Listrik, Gas, Uap</th>
                                    <td>{{ $pekerjaanRt->pengadaan_listrik_gas_uap }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Treatment Air Limbah dan Remediasi</th>
                                    <td>{{ $pekerjaanRt->treatment_air_limbah_dan_remediasi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Konstruksi</th>
                                    <td>{{ $pekerjaanRt->konstruksi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Perdagangan Besar dan Eceran</th>
                                    <td>{{ $pekerjaanRt->perdagangan_besar_eceran }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Pengangkutan dan Pergudangan</th>
                                    <td>{{ $pekerjaanRt->pengangkutan_dan_pergudangan }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Penyediaan Akomodasi dan Makan Minum</th>
                                    <td>{{ $pekerjaanRt->penyediaan_akomodasi_dan_makan_minum }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Informasi dan Komunikasi</th>
                                    <td>{{ $pekerjaanRt->informasi_dan_komunikasi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Keuangan dan Asuransi</th>
                                    <td>{{ $pekerjaanRt->aktivitas_keuangan_dan_asuransi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Real Estat</th>
                                    <td>{{ $pekerjaanRt->real_estat }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Profesional, Ilmiah, dan Teknis</th>
                                    <td>{{ $pekerjaanRt->aktivitas_profesional_ilmiah_teknis }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Penyewaan dan Opsi</th>
                                    <td>{{ $pekerjaanRt->aktivitas_penyewaan_dan_opsi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Administrasi Pemerintahan, Pertahanan</th>
                                    <td>{{ $pekerjaanRt->administrasi_pemerintahan_pertahanan }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Pendidikan</th>
                                    <td>{{ $pekerjaanRt->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Kesehatan dan Sosial</th>
                                    <td>{{ $pekerjaanRt->aktivitas_kesehatan_dan_sosial }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Kesenian, Hiburan dan Rekreasi</th>
                                    <td>{{ $pekerjaanRt->kesenian_hiburan_dan_rekreasi }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Jasa Lainnya</th>
                                    <td>{{ $pekerjaanRt->aktivitas_jasa_lainnya }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Keluarga Pemberi Kerja</th>
                                    <td>{{ $pekerjaanRt->aktivitas_keluarga_pemberi_kerja }}</td>
                                </tr>
                                <tr>
                                    <th>Aktivitas Badan Internasional dan BEI</th>
                                    <td>{{ $pekerjaanRt->aktivitas_badan_internasional_dan_bei }}</td>
                                </tr>
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
