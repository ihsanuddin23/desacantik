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

        @foreach ($pendidikanrt as $data)
            {{-- Belum Sekolah --}}
            <tr>
                <td class="text-center" style="border: 1px solid black;">
                    {{ $nomor++ }}</td>
                <!-- Tampilkan dan increment nomor -->
                <td style="border: 1px solid black;">
                    TIDAK / BELUM SEKOLAH</td>

                @php
                    // Hitung total laki-laki dan perempuan tidak/belum sekolah
                    $total = $data->laki_belum_sekolah + $data->perempuan_belum_sekolah;
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
                    @if ($total > 0)
                        {{ round(($data->laki_belum_sekolah / $total) * 100, 2) }}%
                    @else
                        0%
                    @endif
                </td>

                {{-- Data dan persentase untuk perempuan --}}
                <td class="text-center" style="border: 1px solid black;">
                    {{ $data->perempuan_belum_sekolah }}</td>
                <td class="text-center" style="border: 1px solid black;">
                    @if ($total > 0)
                        {{ round(($data->perempuan_belum_sekolah / $total) * 100, 2) }}%
                    @else
                        0%
                    @endif
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
