<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SektorEkonomiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sektors = [
            ['nama_sektor' => 'Pertanian, kehutanan, perikanan'],
            ['nama_sektor' => 'Pertambangan dan penggalian'],
            ['nama_sektor' => 'Industri pengolahan'],
            ['nama_sektor' => 'Pengadaan listrik, gas, uap/air panas, dan udara dingin'],
            ['nama_sektor' => 'Treatment air, Treatment air limbah, Treatment dan pemulihan material sampah, dan aktivitas remediasi'],
            ['nama_sektor' => 'Konstruksi'],
            ['nama_sektor' => 'Perdagangan besar dan eceran, reparasi dan perawatan mobil dan sepeda motor'],
            ['nama_sektor' => 'Pengangkutan dan pergudangan'],
            ['nama_sektor' => 'Penyediaan akomodasi dan penyediaan makan minum'],
            ['nama_sektor' => 'Informasi dan komunikasi'],
            ['nama_sektor' => 'Aktivitas keuangan dan asuransi'],
            ['nama_sektor' => 'Real estat (kontrakan)'],
            ['nama_sektor' => 'Aktivitas profesional, ilmiah, dan teknis'],
            ['nama_sektor' => 'Aktivitas penyewaan dan sewa guna hak opsi, ketenagakerjaan, agen perjalanan, dan penunjang usaha lainnya'],
            ['nama_sektor' => 'Administrasi pemerintahan, pertahanan, dan jaminan sosial wajib'],
            ['nama_sektor' => 'Pendidikan'],
            ['nama_sektor' => 'Aktivitas kesehatan manusia dan aktivitas sosial'],
            ['nama_sektor' => 'Kesenian, hiburan, dan rekreasi'],
            ['nama_sektor' => 'Aktivitas jasa lainnya'],
            ['nama_sektor' => 'Aktivitas keluarga sebagai pemberi kerja'],
            ['nama_sektor' => 'Aktivitas badan internasional dan badan extra internasional lainnya'],
        ];

        DB::table('sektor_ekonomi')->insert($sektors);
    }
}
