@extends('frontend2.themes')
<style>
    .dropdown-menu {
        padding: 0;
        border-radius: 0;
    }

    .dropdown-menu>li>a {
        padding: 10px 15px;
    }

    .dropdown-menu>li>a:hover {
        background-color: #f0f0f0;
    }

    #chart-container-laki {
        margin-top: 30px;
        height: 400px;
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #total-container h5 {
        font-size: 20px;
        color: #333;
    }

    /* Kartu utama */
    .card {
        margin-top: 20px;
        border-radius: 15px;
        /* Membuat sudut kartu lebih halus */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Menambahkan bayangan */
    }

    .card-header {
        border-bottom: 1px solid #ddd;
        /* Membuat garis bawah pada header */
        padding: 10px;
        border-radius: 10px
            /* Menambah padding agar header tidak terlalu padat */
    }

    .card-body {
        padding: 10px;
        /* Menambah padding agar lebih lega */
    }

    .custom-border th,
    .custom-border td {
        border: 2px solid #343a40 !important;
    }

    /* Menyesuaikan ukuran teks responsif pada header tabel */
    @media (max-width: 768px) {
        .table th {
            font-size: 16px;
            /* Ukuran font yang lebih besar untuk perangkat mobile */
        }
    }

    @media (min-width: 768px) and (max-width: 992px) {
        .table th {
            font-size: 18px;
            /* Ukuran font lebih besar di tablet */
        }
    }

    @media (min-width: 992px) {
        .table th {
            font-size: 15px;
            /* Ukuran font lebih besar untuk perangkat desktop */
        }
    }

    /* Menambahkan latar belakang bergantian pada baris */
    .custom-border tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    /* Hover effect untuk baris tabel */
    .custom-border tbody tr:hover {
        background-color: #e9ecef;
    }

    /* Memperindah header tabel */
    .custom-border th {
        background-color: #343a40;
        color: #ffffff;
        font-weight: bold;
        padding: 12px;
        word-wrap: break-word;
        /* Membuat teks panjang terpotong dengan baik */
        white-space: normal;
        /* Memungkinkan teks memanjang ke bawah jika terlalu panjang */

    }

    /* Mengubah warna border pada header */
    .custom-border th,
    .custom-border td {
        border-color: #343a40;
    }

    /* Tabel Responsif */
    .table-responsive {
        overflow-x: auto;
    }

    /* Memberikan padding lebih pada sel tabel */
    .custom-border td,
    .custom-border th {
        padding: 12px;
    }

    /* Memberikan bayangan halus pada tabel */
    .custom-border {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Menambahkan border-radius pada header dan body */
    .custom-border thead {
        border-radius: 10px 10px 0 0;
    }

    .custom-border tbody {
        border-radius: 0 0 10px 10px;
    }

    /* Menyesuaikan kolom dengan nama panjang */
    .custom-border th:nth-child(4),
    .custom-border th:nth-child(5) {
        width: 250px;
        /* Menyesuaikan lebar kolom dengan nama panjang */
        word-wrap: break-word;
        white-space: normal;
    }

    /* Menjadikan kolom Identitas RT dan Nama Ketua RT rata kiri */
    .custom-border td:nth-child(2),
    .custom-border td:nth-child(3),
    .custom-border th:nth-child(2),
    .custom-border th:nth-child(3) {
        text-align: left;
        /* Kolom Identitas RT dan Nama Ketua RT rata kiri */
    }

    /* Memperlebar kolom untuk Identitas RT dan Nama Ketua RT */
    .custom-border td:nth-child(2),
    .custom-border th:nth-child(2),
    .custom-border td:nth-child(3),
    .custom-border th:nth-child(3) {
        width: 380px;
        /* Memperlebar kolom Identitas RT dan Nama Ketua RT */
    }
</style>

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
                    {{-- Chart Pria --}}
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-header bg-primary text-white text-center">
                            <h3 class="m-0">Grafik Demografi Pendidikan di Desa Cikedokan</h3>
                        </div>
                        <div class="card-body">
                            <div id="total-container-pendidikan" class="text-center" style="margin: 20px 0;"></div>

                            <div id="chart-container-laki" style="margin-top: 20px; height: 400px; width: 100%;"></div>

                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Mengambil data dari Laravel dan memastikan format yang benar
                                    const pendidikanData = @json($pendidikanRtData); // Data yang dikirim dari Laravel

                                    // Pastikan data pendidikanData telah benar
                                    console.log(pendidikanData); // Debugging data yang diterima

                                    // Mendefinisikan data untuk chart, mulai dengan nilai default 0 (tanpa kategori 'Belum Sekolah')
                                    const pendidikanChartData = [{
                                            name: 'Tidak Tamat SD',
                                            y: 0
                                        },
                                        {
                                            name: 'Tamat SD/Sederajat',
                                            y: 0
                                        },
                                        {
                                            name: 'Tamat SMP/Sederajat',
                                            y: 0
                                        },
                                        {
                                            name: 'Tamat SMA/Sederajat',
                                            y: 0
                                        },
                                        {
                                            name: 'Tamat Akademi/Perguruan Tinggi',
                                            y: 0
                                        }
                                    ];

                                    // Menghitung jumlah untuk setiap kategori pendidikan berdasarkan data
                                    pendidikanData.forEach(data => {
                                        pendidikanChartData[0].y += data.tidak_tamat_sd || 0;
                                        pendidikanChartData[1].y += data.tamat_sd || 0;
                                        pendidikanChartData[2].y += data.tamat_smp || 0;
                                        pendidikanChartData[3].y += data.tamat_sma || 0;
                                        pendidikanChartData[4].y += data.tamat_perguruan_tinggi || 0;
                                    });

                                    // Menghitung total jumlah pendidikan
                                    const totalPendidikan = pendidikanChartData.reduce((sum, item) => sum + item.y, 0);

                                    // Menampilkan total pendidikan
                                    document.getElementById('total-container-pendidikan').innerHTML = `
                                        <h5>Total Pendidikan: ${totalPendidikan}</h5>
                                    `;

                                    // Membuat grafik menggunakan Highcharts
                                    Highcharts.chart('chart-container-laki', {
                                        chart: {
                                            type: 'column',
                                            backgroundColor: '#f8f9fa',
                                            borderRadius: 10,
                                            shadow: true
                                        },
                                        title: {
                                            text: 'Distribusi Pendidikan Laki-Laki',
                                            style: {
                                                fontSize: '22px',
                                                fontWeight: 'bold',
                                                color: '#333'
                                            }
                                        },
                                        xAxis: {
                                            type: 'category',
                                            title: {
                                                text: 'Kategori Pendidikan',
                                                style: {
                                                    fontSize: '18px',
                                                    fontWeight: 'bold',
                                                }
                                            },
                                            labels: {
                                                style: {
                                                    fontSize: '15px',
                                                    fontWeight: 'bold'
                                                }
                                            }
                                        },
                                        yAxis: {
                                            title: {
                                                text: 'Jumlah',
                                                style: {
                                                    fontSize: '18px',
                                                    fontWeight: 'normal',
                                                }
                                            }
                                        },
                                        series: [{
                                            name: 'Jumlah',
                                            data: pendidikanChartData,
                                            colorByPoint: true,
                                            dataLabels: {
                                                enabled: true,
                                                style: {
                                                    fontSize: '25px',
                                                    fontWeight: 'bold',
                                                }
                                            }
                                        }],
                                        tooltip: {
                                            useHTML: true,
                                            backgroundColor: '#343a40',
                                            borderRadius: 10,
                                            borderWidth: 2,
                                            borderColor: '#6c757d',
                                            style: {
                                                fontSize: '18px',
                                                fontWeight: 'bold',
                                                color: '#ffffff',
                                                padding: '10px',
                                            },
                                            formatter: function() {
                                                return `<b style="color: #ffc107;">${this.point.name}:</b> <span style="color: #fff;">${this.point.y}</span>`;
                                            },
                                            shadow: true
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Filter di bawah kanan h2 dengan tambahan jarak -->
                    <div class="mb-4 text-right" style="margin-top: 20px;">
                        <div class="form-group" style="width: 100px; display: inline-block; margin-left: 10px;">
                            <div class="dropdown">
                                <button class="btn btn-primary form-control dropdown-toggle" type="button"
                                    id="cetakDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Cetak</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="cetakDropdown">
                                    <li>
                                        <a href="{{ route('frontend.demografirt.print', ['identitasrt_id' => request('identitasrt_id')]) }}"
                                            id="printPdf" onclick="checkRTSelection(event, 'pdf')">
                                            <i class="fa fa-file-pdf-o text-danger mr-2"></i> Cetak PDF
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.demografirt.exportExcel', ['identitasrt_id' => request('identitasrt_id')]) }}"
                                            id="exportExcel" onclick="checkRTSelection(event, 'excel')">
                                            <i class="fa fa-file-excel-o text-success mr-2"></i> Cetak Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

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
                    {{-- Tabel --}}
                    <div class="container mt-4">
                        <div class="card shadow border-dark rounded-3">
                            <div class="card-header bg-dark text-light text-center rounded-top">
                                <h5 class="fw-bold" style="font-size: 20px;">Data Berdasarkan Filter Identitas RT</h5>
                            </div>
                            <div class="card-body p-4">
                                <!-- Tabel untuk menampilkan data berdasarkan filter Identitas RT -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped text-center custom-border">
                                        <thead class="table-dark">
                                            <tr class="fs-6">
                                                <th>No</th>
                                                <th>Identitas RT</th>
                                                <th>Nama Ketua RT</th>
                                                <th>Tidak Tamat SD</th>
                                                <th>Tamat SD/sederajat</th>
                                                <th>Tamat SMP/sederajat</th>
                                                <th>Tamat SMA/sederajat</th>
                                                <th>Tamat Akademi/Perguruan Tinggi</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($filteredData as $index => $item)
                                                <tr class="fs-6">
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <!-- Gabungkan Nomor RT, Nomor RW, dan Dusun menjadi satu kolom -->
                                                        RT {{ $item->identitasrt->nomor_rt }} -
                                                        RW {{ $item->identitasrt->nomor_rw }} -
                                                        DUSUN {{ $item->identitasrt->dusun }}
                                                    </td>

                                                    <td>{{ ucwords(strtolower($item->identitasrt->nama_ketua_rt)) }}</td>
                                                    <td>{{ $item->tidak_tamat_sd }}</td>
                                                    <td>{{ $item->tamat_sd }}</td>
                                                    <td>{{ $item->tamat_smp }}</td>
                                                    <td>{{ $item->tamat_sma }}</td>
                                                    <td>{{ $item->tamat_perguruan_tinggi }}</td>
                                                    <td>{{ $item->total }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
