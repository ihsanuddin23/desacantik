@extends('frontend.master')

@section('title', config('app.sitesettings')::first()->site_title . ' - ' .
    config('app.sitesettings')::first()->tagline)

@section('content')

    @include('frontend.home.inc.featuredpost')
    @include('frontend.home.inc.petacidekokan')

    <!-- Combined Sarana Section -->
    <section class="sarana-section mt-5">
        <div class="container">
            <h2 class="text-center mb-4">Data Demografi Desa Cikedokan</h2>

            <!-- Sarana Transportasi Table -->
            <div class="sarana-transportasi">
                <h3 class="mb-4">Data Sarana Transportasi</h3>

                @if ($saranas->isEmpty())
                    <p class="text-center">Tidak ada data Sarana Transportasi.</p>
                @else
                    <div class="table-responsive">
                        <table id="transportasiTable" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Jenis Sarana Prasarana</th>
                                    <th style="width: 20%;">Kondisi</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($saranas as $sarana)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $sarana->jenis_sarana_prasarana_transportasi }}
                                        </td>
                                        <td class="bg-white text-dark">{{ $sarana->kondisi_transportasi }}</td>
                                        <td class="bg-white text-dark">{{ $sarana->jumlah_volume_transportasi }}</td>
                                        <td class="bg-white text-dark">{{ $sarana->keterangan_transportasi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <!-- Sarana Tempat Tinggal Table -->
            <div class="sarana-tempat-tinggal">
                <h3 class="mb-4">Data Sarana Tempat Tinggal</h3>

                @if ($saranatempattinggal->isEmpty())
                    <p class="text-center">Tidak ada data Sarana Tempat Tinggal.</p>
                @else
                    <div class="table-responsive">
                        <table id="tempatTinggalTable" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Jenis Sarana Prasarana</th>
                                    <th style="width: 20%;">Kondisi</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($saranatempattinggal as $sarana)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $sarana->jenis_sarana_prasarana_tempat_tinggal }}
                                        </td>
                                        <td class="bg-white text-dark">{{ $sarana->kondisi_tempat_tinggal }}</td>
                                        <td class="bg-white text-dark">{{ $sarana->jumlah_volume_tempat_tinggal }}</td>
                                        <td class="bg-white text-dark">{{ $sarana->keterangan_tempat_tinggal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <!-- Fasilitas Umum -->
            <div class="fasilitas-umum">
                <h3 class="mb-4">Data Fasilitas Umum</h3>

                @if ($fasilitasumum->isEmpty())
                    <p class="text-center">Tidak ada data fasilitas umum.</p>
                @else
                    <div class="table-responsive">
                        <table id="fasilitasUmum" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Jenis Sarana Prasarana</th>
                                    <th style="width: 40%;">Nama</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitasumum as $fasilitas)
                                    <tr>
                                        <td class="bg-white text-dark">
                                            {{ $fasilitas->jenis_sarana_prasarana_fasilitas_umum }}
                                        </td>
                                        <td class="bg-white text-dark">
                                            <ul style="list-style-type: none; padding-left: 0;">
                                                @php
                                                    $masjidArray = explode("\n", $fasilitas->nama_fasilitas_umum);
                                                @endphp
                                                @foreach ($masjidArray as $masjid)
                                                    <li>{{ trim($masjid) }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="bg-white text-dark">
                                            {{ $fasilitas->jumlah_volume_fasilitas_umum }}
                                        </td>
                                        <td class="bg-white text-dark">
                                            {{ $fasilitas->keterangan_fasilitas_umum }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>


            <!-- Kependudukan -->
            <div class="kependudukan">
                <h3 class="mb-4">Data Kependudukan</h3>

                @if ($kependudukan->isEmpty())
                    <p class="text-center">Tidak ada data Kependudukan.</p>
                @else
                    <div class="table-responsive">
                        <table id="kependudukan" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Kemasyarakatan</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kependudukan as $penduduk)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $penduduk->kemasyarakatan }}</td>
                                        <td class="bg-white text-dark">{{ $penduduk->jumlah_volume_kependudukan }}</td>
                                        <td class="bg-white text-dark">{{ $penduduk->keterangan_kependudukan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <!-- Usaha -->
            <div class="usaha">
                <h3 class="mb-4">Data Usaha</h3>

                @if ($usaha->isEmpty())
                    <p class="text-center">Tidak ada data Usaha.</p>
                @else
                    <div class="table-responsive">
                        <table id="usaha" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Nama Usaha</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usaha as $ush)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $ush->nama_usaha }}</td>
                                        <td class="bg-white text-dark">{{ $ush->jumlah_volume_usaha }}</td>
                                        <td class="bg-white text-dark">{{ $ush->keterangan_usaha }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <!-- Pendidikan -->
            <div class="pendidikan">
                <h3 class="mb-4">Data Pendidikan</h3>

                @if ($pendidikan->isEmpty())
                    <p class="text-center">Tidak ada data Pendidikan.</p>
                @else
                    <div class="table-responsive">
                        <table id="pendidikan" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Jenis Pendidikan</th>
                                    <th style="width: 30%;">Nama Pendidikan</th>
                                    <th style="width: 20%;">Jumlah Volume (m²)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendidikan as $pendidik)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $pendidik->jenis_pendidikan }}</td>
                                        <td class="bg-white text-dark">{{ $pendidik->nama_pendidikan }}</td>
                                        <td class="bg-white text-dark">{{ $pendidik->jumlah_volume_pendidikan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <!-- Sarana Usaha -->
            <div class="saranausaha">
                <h3 class="mb-4">Data Sarana Usaha</h3>

                @if ($saranausaha->isEmpty())
                    <p class="text-center">Tidak ada data Sarana Usaha.</p>
                @else
                    <div class="table-responsive">
                        <table id="saranausaha" class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 30%;">Jenis Perusahaan</th>
                                    <th style="width: 30%;">Jumlah Volume (m²)</th>
                                    <th style="width: 20%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($saranausaha as $su)
                                    <tr>
                                        <td class="bg-white text-dark">{{ $su->jenis_perusahaan }}</td>
                                        <td class="bg-white text-dark">{{ $su->jumlah_volume_sarana_usaha }}</td>
                                        <td class="bg-white text-dark">{{ $su->keterangan_usaha }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // $('#transportasiTable').DataTable(); // Initialize DataTable for Sarana Transportasi
            // $('#tempatTinggalTable').DataTable(); // Initialize DataTable for Sarana Tempat Tinggal
            // $('#fasilitasUmum').DataTable(); // Initialize DataTable for Fasilitas Umum
            // $('#kependudukan').DataTable(); // Initialize DataTable for Kependudukan
            // $('#usaha').DataTable(); // Initialize DataTable for Usaha
            // $('#pendidikan').DataTable(); // Initialize DataTable for Pendidikan
            // $    ('#saranausaha').DataTable(); // Initialize DataTable for Sarana Usaha
        });
    </script>
@endsection
