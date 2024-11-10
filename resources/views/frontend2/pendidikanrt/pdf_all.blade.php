<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Demografi Seluruh RT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Demografi Seluruh RT</h1>

    <table>
        <thead>
            <tr>
                <th class="center">RT</th>
                <th class="center">RW</th>
                <th class="center">Ketua RT</th>
                <th class="center">Total Penduduk</th>
                <th class="center">Tidak Tamat SD</th>
                <th class="center">Tamat SD</th>
                <th class="center">Tamat SMP</th>
                <th class="center">Tamat SMA</th>
                <th class="center">Tamat Perguruan Tinggi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPenduduk = 0;
                $totalTidakTamatSD = 0;
                $totalTamatSD = 0;
                $totalTamatSMP = 0;
                $totalTamatSMA = 0;
                $totalTamatPerguruanTinggi = 0;
                $totalRT = $identitasRts->count();
            @endphp

            @foreach ($identitasRts as $identitasRt)
                @php
                    $pendidikan = $pendidikanRts->firstWhere('identitasrt_id', $identitasRt->id);
                    $totalPenduduk += $pendidikan->total ?? 0;
                    $totalTidakTamatSD += $pendidikan->tidak_tamat_sd ?? 0;
                    $totalTamatSD += $pendidikan->tamat_sd ?? 0;
                    $totalTamatSMP += $pendidikan->tamat_smp ?? 0;
                    $totalTamatSMA += $pendidikan->tamat_sma ?? 0;
                    $totalTamatPerguruanTinggi += $pendidikan->tamat_perguruan_tinggi ?? 0;
                @endphp
                <tr>
                    <td class="center">{{ $identitasRt->nomor_rt }}</td>
                    <td class="center">{{ $identitasRt->nomor_rw }}</td>
                    <td>{{ $identitasRt->nama_ketua_rt }}</td>
                    <td class="center">{{ $pendidikan->total ?? 0 }}</td>
                    <td class="center">{{ $pendidikan->tidak_tamat_sd ?? 0 }}</td>
                    <td class="center">{{ $pendidikan->tamat_sd ?? 0 }}</td>
                    <td class="center">{{ $pendidikan->tamat_smp ?? 0 }}</td>
                    <td class="center">{{ $pendidikan->tamat_sma ?? 0 }}</td>
                    <td class="center">{{ $pendidikan->tamat_perguruan_tinggi ?? 0 }}</td>
                </tr>
            @endforeach

            <!-- Baris Total -->
            <tr>
                <th colspan="3" class="center">Total</th>
                <th class="center">{{ $totalPenduduk }}</th>
                <th class="center">{{ $totalTidakTamatSD }}</th>
                <th class="center">{{ $totalTamatSD }}</th>
                <th class="center">{{ $totalTamatSMP }}</th>
                <th class="center">{{ $totalTamatSMA }}</th>
                <th class="center">{{ $totalTamatPerguruanTinggi }}</th>
            </tr>
        </tbody>
    </table>

    <p><strong>Total RT:</strong> {{ $totalRT }}</p>
    <p style="text-align: right;">Tanggal Cetak: {{ $now->format('d-m-Y') }}</p>
</body
