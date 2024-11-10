<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Demografi RT {{ $identitasRt->nomor_rt }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1,
        h2 {
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
    <h1>Data Demografi RT {{ $identitasRt->nomor_rt }}</h1>
    <h2>Ketua RT: {{ $identitasRt->nama_ketua_rt }}</h2>

    <table>
        <thead>
            <tr>
                <th class="center">Kategori</th>
                <th class="center">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total Penduduk</td>
                <td class="center">{{ $pendidikanRtData->total }}</td>
            </tr>
            <tr>
                <td>Tidak Tamat SD</td>
                <td class="center">{{ $pendidikanRtData->tidak_tamat_sd }}</td>
            </tr>
            <tr>
                <td>Tamat SD</td>
                <td class="center">{{ $pendidikanRtData->tamat_sd }}</td>
            </tr>
            <tr>
                <td>Tamat SMP</td>
                <td class="center">{{ $pendidikanRtData->tamat_smp }}</td>
            </tr>
            <tr>
                <td>Tamat SMA</td>
                <td class="center">{{ $pendidikanRtData->tamat_sma }}</td>
            </tr>
            <tr>
                <td>Tamat Perguruan Tinggi</td>
                <td class="center">{{ $pendidikanRtData->tamat_perguruan_tinggi }}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: right;">Tanggal Cetak: {{ $now->format('d-m-Y') }}</p>
</body>

</html>
