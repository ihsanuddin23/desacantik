<?php

namespace App\Exports;

use App\Models\PendidikanRT;
use App\Models\IdentitasRt;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class PendidikanRTExport implements FromCollection, WithHeadings, WithStyles, WithTitle
{
    protected $identitasrt_id;

    public function __construct($identitasrt_id = null)
    {
        $this->identitasrt_id = $identitasrt_id;
    }

    public function collection()
    {
        // Ambil data sesuai dengan identitasrt_id atau seluruh data
        if ($this->identitasrt_id) {
            return PendidikanRT::where('identitasrt_id', $this->identitasrt_id)
                ->with('identitasRt')
                ->get()
                ->map(function ($pendidikan, $index) {
                    return [
                        'No' => $index + 1,
                        'Identitas RT' => $pendidikan->identitasRt->nomor_rt,
                        'Nama Ketua RT' => $pendidikan->identitasRt->nama_ketua_rt,
                        'Tidak Tamat SD' => $pendidikan->tidak_tamat_sd,
                        'Tamat SD/sederajat' => $pendidikan->tamat_sd,
                        'Tamat SMP/sederajat' => $pendidikan->tamat_smp,
                        'Tamat SMA/sederajat' => $pendidikan->tamat_sma,
                        'Tamat Akademi/Perguruan Tinggi' => $pendidikan->tamat_perguruan_tinggi,
                        'Total' => $pendidikan->total,
                    ];
                });
        } else {
            // Ambil seluruh RT yang ada, meskipun tidak ada data pendidikan
            return IdentitasRt::all()->map(function ($identitasRt, $index) {
                // Ambil data pendidikan untuk RT ini jika ada
                $pendidikan = PendidikanRT::where('identitasrt_id', $identitasRt->id)->first();

                // Jika tidak ada data pendidikan, kita atur data default
                if (!$pendidikan) {
                    $pendidikan = (object) [
                        'tidak_tamat_sd' => 0,
                        'tamat_sd' => 0,
                        'tamat_smp' => 0,
                        'tamat_sma' => 0,
                        'tamat_perguruan_tinggi' => 0,
                        'total' => 0
                    ];
                }

                return [
                    'No' => $index + 1,
                    'Identitas RT' => $identitasRt->nomor_rt,
                    'Nama Ketua RT' => $identitasRt->nama_ketua_rt,
                    'Tidak Tamat SD' => $pendidikan->tidak_tamat_sd,
                    'Tamat SD/sederajat' => $pendidikan->tamat_sd,
                    'Tamat SMP/sederajat' => $pendidikan->tamat_smp,
                    'Tamat SMA/sederajat' => $pendidikan->tamat_sma,
                    'Tamat Akademi/Perguruan Tinggi' => $pendidikan->tamat_perguruan_tinggi,
                    'Total' => $pendidikan->total,
                ];
            });
        }
    }

    public function headings(): array
    {
        return [
            ['Laporan Data Pendidikan RT'],
            [
                'No',
                'Identitas RT',
                'Nama Ketua RT',
                'Tidak Tamat SD',
                'Tamat SD/sederajat',
                'Tamat SMP/sederajat',
                'Tamat SMA/sederajat',
                'Tamat Akademi/Perguruan Tinggi',
                'Total',
            ],
        ];
    }

    public function title(): string
    {
        return 'Data Pendidikan RT';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setCellValue('A1', 'Laporan Data Pendidikan RT');
        $sheet->mergeCells('A1:I1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A2:I2')->getFont()->setBold(true);
        $sheet->getStyle('A2:I2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        $lastRow = $sheet->getHighestRow();
        $sheet->getStyle('A2:I' . $lastRow)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        // Auto-size columns to fit content
        foreach (range('A', 'I') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        return [
            1 => ['font' => ['bold' => true, 'size' => 14]],
            2 => ['font' => ['bold' => true, 'size' => 12]],
        ];
    }
}
