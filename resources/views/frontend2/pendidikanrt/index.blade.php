@extends('frontend2.themes')

@section('content')
    <div class="menu-layanan">
        <div class="container">
            <div class="bread-body">
                <div class="bread-content">
                    <a href="{{ route('frontend.home') }}"><i class="fa fa-home"></i> Home</a> <i
                        class="fa fa-angle-right"></i> Demografi
                </div>
            </div>
        </div>
    </div>


    <!-- Pengumuman -->
    <div class="container-default bg-gray" id="index-berita">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4" style="border-radius: 15px; padding: 20px; border: 1px solid black;">
                        <div class="card-body">
                            @include('frontend2.widget.peta.demografi')
                        </div>
                    </div>
                    {{-- Chart --}}
                    <div class="card mb-4 shadow-sm border-0 rounded">
                        <div class="card-header bg-primary text-white text-center">
                            <h3 class="m-0">Grafik Data Demografi Berdasar Pendidikan Dalam KK Pendidikan RT</h3>
                        </div>
                        <div class="card-body">
                            <div id="total-container" class="text-center" style="margin: 20px 0;"></div>

                            <div id="chart-container-laki" style="margin-top: 20px; height: 400px; width: 100%;"></div>
                            <div id="chart-container-perempuan" style="margin-top: 20px; height: 400px; width: 100%;"></div>

                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function() {
                                    const pendidikanData = @json($pendidikanRtData); // Data dari Laravel
                                    console.log(pendidikanData); // Debugging

                                    const lakiLakiData = [{
                                            name: 'Belum Sekolah',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Belum Tamat SD',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Tamat SD',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'SLTP',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'SLTA',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 1/2',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 3',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 4/Strata 1',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Strata 2',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Strata 3',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Belum Mengisi',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        }
                                    ];
                                    const perempuanData = [{
                                            name: 'Belum Sekolah',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Belum Tamat SD',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Tamat SD',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'SLTP',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'SLTA',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 1/2',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 3',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Diploma 4/Strata 1',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Strata 2',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Strata 3',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        {
                                            name: 'Belum Mengisi',
                                            y: 0,
                                            dataLabels: {
                                                style: {
                                                    fontSize: '16px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        }
                                    ];

                                    // Menghitung jumlah untuk laki-laki dan perempuan
                                    pendidikanData.forEach(data => {
                                        lakiLakiData[0].y += data.laki_belum_sekolah;
                                        lakiLakiData[1].y += data.laki_belum_tamat_sd;
                                        lakiLakiData[2].y += data.laki_tamat_sd;
                                        lakiLakiData[3].y += data.laki_sltp;
                                        lakiLakiData[4].y += data.laki_slta;
                                        lakiLakiData[5].y += data.laki_diploma_1_2;
                                        lakiLakiData[6].y += data.laki_diploma_3;
                                        lakiLakiData[7].y += data.laki_diploma_4_strata_1;
                                        lakiLakiData[8].y += data.laki_strata_2;
                                        lakiLakiData[9].y += data.laki_strata_3;
                                        lakiLakiData[10].y += data.laki_belum_mengisi;

                                        perempuanData[0].y += data.perempuan_belum_sekolah;
                                        perempuanData[1].y += data.perempuan_belum_tamat_sd;
                                        perempuanData[2].y += data.perempuan_tamat_sd;
                                        perempuanData[3].y += data.perempuan_sltp;
                                        perempuanData[4].y += data.perempuan_slta;
                                        perempuanData[5].y += data.perempuan_diploma_1_2;
                                        perempuanData[6].y += data.perempuan_diploma_3;
                                        perempuanData[7].y += data.perempuan_diploma_4_strata_1;
                                        perempuanData[8].y += data.perempuan_strata_2;
                                        perempuanData[9].y += data.perempuan_strata_3;
                                        perempuanData[10].y += data.perempuan_belum_mengisi;
                                    });

                                    const totalLakiLaki = lakiLakiData.reduce((sum, item) => sum + item.y, 0);
                                    const totalPerempuan = perempuanData.reduce((sum, item) => sum + item.y, 0);

                                    document.getElementById('total-container').innerHTML = `
                                        <h5>Total Laki-Laki: ${totalLakiLaki}</h5>
                                        <h5>Total Perempuan: ${totalPerempuan}</h5>
                                    `;

                                    // Mengurutkan data dari yang terkecil ke terbesar
                                    lakiLakiData.sort((a, b) => a.y - b.y);
                                    perempuanData.sort((a, b) => a.y - b.y);

                                    // Menyiapkan data untuk grafik
                                    const barDataLakiLaki = lakiLakiData.map(item => ({
                                        ...item,
                                        name: 'Laki-Laki - ' + item.name
                                    }));

                                    const barDataPerempuan = perempuanData.map(item => ({
                                        ...item,
                                        name: 'Perempuan - ' + item.name
                                    }));

                                    Highcharts.chart('chart-container-laki', {
                                        chart: {
                                            type: 'column'
                                        },
                                        title: {
                                            text: 'Pendidikan Laki-Laki',
                                            style: {
                                                fontSize: '22px'
                                            }
                                        },
                                        xAxis: {
                                            type: 'category',
                                            title: {
                                                text: 'Kategori Pendidikan',
                                                style: {
                                                    fontSize: '18px'
                                                }
                                            }
                                        },
                                        yAxis: {
                                            title: {
                                                text: 'Jumlah',
                                                style: {
                                                    fontSize: '18px'
                                                }
                                            }
                                        },
                                        xAxis: {
                                            type: 'category',
                                            title: {
                                                text: 'Kategori Pendidikan',
                                                style: {
                                                    fontSize: '14px'
                                                } // Ukuran teks judul sumbu x
                                            },
                                            labels: {
                                                style: {
                                                    fontSize: '14px', // Ukuran teks untuk label kategori pada sumbu x
                                                    fontWeight: 'bold' // Membuat teks lebih tebal untuk penekanan
                                                }
                                            }
                                        },
                                        series: [{
                                            name: 'Jumlah',
                                            data: lakiLakiData,
                                            colorByPoint: true,
                                            dataLabels: {
                                                enabled: true,
                                                style: {
                                                    fontSize: '16px'
                                                } // Atur ukuran teks data label di sini
                                            }
                                        }]
                                    });
                                    Highcharts.chart('chart-container-perempuan', {
                                        chart: {
                                            type: 'column'
                                        },
                                        title: {
                                            text: 'Pendidikan Laki-Laki',
                                            style: {
                                                fontSize: '22px'
                                            }
                                        },
                                        xAxis: {
                                            type: 'category',
                                            title: {
                                                text: 'Kategori Pendidikan',
                                                style: {
                                                    fontSize: '18px'
                                                }
                                            }
                                        },
                                        yAxis: {
                                            title: {
                                                text: 'Jumlah',
                                                style: {
                                                    fontSize: '18px'
                                                }
                                            }
                                        },
                                        xAxis: {
                                            type: 'category',
                                            title: {
                                                text: 'Kategori Pendidikan',
                                                style: {
                                                    fontSize: '14px'
                                                } // Ukuran teks judul sumbu x
                                            },
                                            labels: {
                                                style: {
                                                    fontSize: '14px', // Ukuran teks untuk label kategori pada sumbu x
                                                    fontWeight: 'bold' // Membuat teks lebih tebal untuk penekanan
                                                }
                                            }
                                        },
                                        series: [{
                                            name: 'Jumlah',
                                            data: lakiLakiData,
                                            colorByPoint: true,
                                            dataLabels: {
                                                enabled: true,
                                                style: {
                                                    fontSize: '16px'
                                                } // Atur ukuran teks data label di sini
                                            }
                                        }]
                                    });


                                });
                            </script>
                        </div>
                    </div>
                    <!-- Filter di bawah kanan h2 dengan tambahan jarak -->
                    <div class="mb-4 text-right" style="margin-top: 20px;">
                        <div class="form-group" style="width: 250px; display: inline-block;">
                            <select name="identitasrt_id" id="identitasrt_id" class="form-control"
                                onchange="filterByIdentitas()">
                                <option value="">Pilih Identitas RT</option>
                                @foreach ($identitasrt as $item)
                                    <option value="{{ $item->id }}"
                                        {{ request('identitasrt_id') == $item->id ? 'selected' : '' }}>
                                        RT {{ $item->nomor_rt }} - RW {{ $item->nomor_rw }} - Dusun {{ $item->dusun }} -
                                        Nama RT: {{ $item->nama_ketua_rt }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Heading di bagian atas -->
                    <h2 class="text-center mb-4">Data Demografi RT Desa Cikedokan</h2>

                    <!-- Sarana Pendidikan Table -->
                    <div class="pendidikan-rt">

                        @if ($pendidikanrt->isEmpty())
                            <p class="text-center">Tidak ada data Pendidikan RT.</p>
                        @else
                            <div class="card mb-4" style="border-radius: 15px; padding: 3px 20px; border: 1px solid black;">
                                <div class="card-body">
                                    <h2 class="card-title text-center"
                                        style="color: black; font-size: 2rem; font-weight: bold;">
                                        Data Pendidikan RT
                                    </h2>

                                    <div class="table-responsive">
                                        <table id="pendidikanTable" class="table table-bordered table-striped table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th rowspan="2" class="text-center" style="border: 1px solid black;">
                                                        NO</th>
                                                    <th rowspan="2" class="text-center" style="border: 1px solid black;">
                                                        KELOMPOK</th>
                                                    <th colspan="2" class="text-center" style="border: 1px solid black;">
                                                        JUMLAH</th>
                                                    <th colspan="2" class="text-center" style="border: 1px solid black;">
                                                        LAKI-LAKI</th>
                                                    <th colspan="2" class="text-center" style="border: 1px solid black;">
                                                        PEREMPUAN</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid black;">JUMLAH</th>
                                                    <th class="text-center" style="border: 1px solid black;">PERSENTASE
                                                    </th>
                                                    <th class="text-center" style="border: 1px solid black;">JUMLAH</th>
                                                    <th class="text-center" style="border: 1px solid black;">PERSENTASE
                                                    </th>
                                                    <th class="text-center" style="border: 1px solid black;">JUMLAH</th>
                                                    <th class="text-center" style="border: 1px solid black;">PERSENTASE
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $nomor = 1; // Inisialisasi nomor urut
                                                @endphp

                                                @if ($pendidikanrt->isEmpty() && request('identitasrt_id'))
                                                    <tr>
                                                        <td colspan="8" class="text-center">Data tidak tersedia untuk
                                                            RT
                                                            yang dipilih.</td>
                                                    </tr>
                                                @else
                                                    @foreach ($pendidikanrt as $data)
                                                        {{-- Belum Sekolah --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                TIDAK / BELUM SEKOLAH</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan tidak/belum sekolah
                                                                $total =
                                                                    $data->laki_belum_sekolah +
                                                                    $data->perempuan_belum_sekolah;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_belum_sekolah }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($data->laki_belum_sekolah / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_belum_sekolah }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($data->perempuan_belum_sekolah / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                        </tr>
                                                        {{-- Belum Tamat SD --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <!-- Tampilkan dan increment nomor -->
                                                            <td style="border: 1px solid black;">
                                                                BELUM TAMAT SD/SEDERAJAT</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan tidak/belum tamat SD
                                                                $total =
                                                                    $data->laki_belum_tamat_sd +
                                                                    $data->perempuan_belum_tamat_sd;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_belum_tamat_sd }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_belum_tamat_sd / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_belum_tamat_sd }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_belum_tamat_sd / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- Tamat SD --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <!-- Tampilkan dan increment nomor -->
                                                            <td style="border: 1px solid black;">
                                                                TAMAT SD / SEDERAJAT</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan tamat SD
                                                                $total =
                                                                    $data->laki_tamat_sd + $data->perempuan_tamat_sd;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_tamat_sd }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_tamat_sd / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_tamat_sd }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_tamat_sd / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- SLTP --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                SLTP/SEDERAJAT</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTP
                                                                $total = $data->laki_sltp + $data->perempuan_sltp;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_sltp }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_sltp / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_sltp }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_sltp / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- SLTA --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                SLTA / SEDERAJAT</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total = $data->laki_slta + $data->perempuan_slta;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_slta }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_slta / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_slta }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_slta / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- DIPLOMA I / II --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                DIPLOMA I / II</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_diploma_1_2 +
                                                                    $data->perempuan_diploma_1_2;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_diploma_1_2 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_diploma_1_2 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_diploma_1_2 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_diploma_1_2 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- AKADEMI/ DIPLOMA III/S. MUDA --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                AKADEMI/ DIPLOMA III/S. MUDA</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_diploma_3 + $data->perempuan_diploma_3;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_diploma_3 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_diploma_3 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_diploma_3 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_diploma_3 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- DIPLOMA IV/ STRATA I --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                DIPLOMA IV/ STRATA I</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_diploma_4_strata_1 +
                                                                    $data->perempuan_diploma_4_strata_1;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_diploma_4_strata_1 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_diploma_4_strata_1 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_diploma_4_strata_1 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_diploma_4_strata_1 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- STRATA II --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                STRATA II</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_strata_2 + $data->perempuan_strata_2;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_strata_2 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_strata_2 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_strata_2 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_strata_2 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- STRATA III --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                STRATA III</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_strata_3 + $data->perempuan_strata_3;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_strata_3 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_strata_3 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_strata_3 }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_strata_3 / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- Belum Mengisi --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                Belum Mengisi</td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan di SLTA
                                                                $total =
                                                                    $data->laki_belum_mengisi +
                                                                    $data->perempuan_belum_mengisi;
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_belum_mengisi }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_belum_mengisi / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan_belum_mengisi }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan_belum_mengisi / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- Total --}}
                                                        <tr>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $nomor++ }}</td>
                                                            <td style="border: 1px solid black;">
                                                                TOTAL RT {{ $data->identitasRt->nomor_rt ?? '000' }} RW
                                                                {{ $data->identitasRt->nomor_rw ?? '000' }} DUSUN
                                                                {{ $data->identitasRt->dusun ?? '1' }}
                                                            </td>

                                                            @php
                                                                // Hitung total laki-laki dan perempuan
                                                                $total = $data->laki_laki + $data->perempuan; // Asumsikan $data memiliki atribut laki_laki dan perempuan
                                                            @endphp

                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $total }}</td>

                                                            {{-- Persentase total laki-laki dan perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total_population > 0)
                                                                    {{ round(($total / $total_population) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk laki-laki --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->laki_laki }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->laki_laki / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>

                                                            {{-- Data dan persentase untuk perempuan --}}
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                {{ $data->perempuan }}</td>
                                                            <td class="text-center" style="border: 1px solid black;">
                                                                @if ($total > 0)
                                                                    {{ round(($data->perempuan / $total) * 100, 2) }}%
                                                                @else
                                                                    0%
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function filterByIdentitas() {
            var identitasrtId = document.getElementById("identitasrt_id").value;
            var url = new URL(window.location.href);

            if (identitasrtId) {
                url.searchParams.set('identitasrt_id', identitasrtId);
            } else {
                url.searchParams.delete('identitasrt_id');
            }

            window.location.href = url;
        }
    </script>

@endsection
