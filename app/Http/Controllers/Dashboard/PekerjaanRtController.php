<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use App\Models\PekerjaanRt;
use Illuminate\Http\Request;

class PekerjaanRtController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data dari tabel identitasrt untuk dropdown
        $identitas = IdentitasRt::all();

        return view('dashboard.demografirt.pekerjaanrt.add', compact('identitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'identitasrt_id' => 'required|exists:identitasrt,id',
            'jumlah_penduduk' => 'required|integer',
            'pertanian_kehutan_perikanan' => 'required|integer',
            'pertambangan_dan_penggalian' => 'required|integer',
            'industri_pengolahan' => 'required|integer',
            'pengadaan_listrik_gas_uap' => 'required|integer',
            'treatment_air_limbah_dan_remediasi' => 'required|integer',
            'konstruksi' => 'required|integer',
            'perdagangan_besar_eceran' => 'required|integer',
            'pengangkutan_dan_pergudangan' => 'required|integer',
            'penyediaan_akomodasi_dan_makan_minum' => 'required|integer',
            'informasi_dan_komunikasi' => 'required|integer',
            'aktivitas_keuangan_dan_asuransi' => 'required|integer',
            'real_estat' => 'required|integer',
            'aktivitas_profesional_ilmiah_teknis' => 'required|integer',
            'aktivitas_penyewaan_dan_opsi' => 'required|integer',
            'administrasi_pemerintahan_pertahanan' => 'required|integer',
            'pendidikan' => 'required|integer',
            'aktivitas_kesehatan_dan_sosial' => 'required|integer',
            'kesenian_hiburan_dan_rekreasi' => 'required|integer',
            'aktivitas_jasa_lainnya' => 'required|integer',
            'aktivitas_keluarga_pemberi_kerja' => 'required|integer',
            'aktivitas_badan_internasional_dan_bei' => 'required|integer',
        ]);

        // Simpan data ke dalam tabel
        $pekerjaanRt = new PekerjaanRt();
        $pekerjaanRt->identitasrt_id = $request->identitasrt_id;
        $pekerjaanRt->jumlah_penduduk = $validatedData['jumlah_penduduk'];
        $pekerjaanRt->pertanian_kehutan_perikanan = $validatedData['pertanian_kehutan_perikanan'];
        $pekerjaanRt->pertambangan_dan_penggalian = $validatedData['pertambangan_dan_penggalian'];
        $pekerjaanRt->industri_pengolahan = $validatedData['industri_pengolahan'];
        $pekerjaanRt->pengadaan_listrik_gas_uap = $validatedData['pengadaan_listrik_gas_uap'];
        $pekerjaanRt->treatment_air_limbah_dan_remediasi = $validatedData['treatment_air_limbah_dan_remediasi'];
        $pekerjaanRt->konstruksi = $validatedData['konstruksi'];
        $pekerjaanRt->perdagangan_besar_eceran = $validatedData['perdagangan_besar_eceran'];
        $pekerjaanRt->pengangkutan_dan_pergudangan = $validatedData['pengangkutan_dan_pergudangan'];
        $pekerjaanRt->penyediaan_akomodasi_dan_makan_minum = $validatedData['penyediaan_akomodasi_dan_makan_minum'];
        $pekerjaanRt->informasi_dan_komunikasi = $validatedData['informasi_dan_komunikasi'];
        $pekerjaanRt->aktivitas_keuangan_dan_asuransi = $validatedData['aktivitas_keuangan_dan_asuransi'];
        $pekerjaanRt->real_estat = $validatedData['real_estat'];
        $pekerjaanRt->aktivitas_profesional_ilmiah_teknis = $validatedData['aktivitas_profesional_ilmiah_teknis'];
        $pekerjaanRt->aktivitas_penyewaan_dan_opsi = $validatedData['aktivitas_penyewaan_dan_opsi'];
        $pekerjaanRt->administrasi_pemerintahan_pertahanan = $validatedData['administrasi_pemerintahan_pertahanan'];
        $pekerjaanRt->pendidikan = $validatedData['pendidikan'];
        $pekerjaanRt->aktivitas_kesehatan_dan_sosial = $validatedData['aktivitas_kesehatan_dan_sosial'];
        $pekerjaanRt->kesenian_hiburan_dan_rekreasi = $validatedData['kesenian_hiburan_dan_rekreasi'];
        $pekerjaanRt->aktivitas_jasa_lainnya = $validatedData['aktivitas_jasa_lainnya'];
        $pekerjaanRt->aktivitas_keluarga_pemberi_kerja = $validatedData['aktivitas_keluarga_pemberi_kerja'];
        $pekerjaanRt->aktivitas_badan_internasional_dan_bei = $validatedData['aktivitas_badan_internasional_dan_bei'];
        $pekerjaanRt->save();
        // Redirect ke halaman dengan pesan sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')->with('success', 'Data Pekerjaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pekerjaanRt = PekerjaanRt::findOrFail($id);

        $identitas = IdentitasRt::findOrFail($pekerjaanRt->identitasrt_id);

        // Mengirim data pekerjaanrt ke view
        return view('dashboard.demografirt.pekerjaanrt.show', compact('identitas', 'pekerjaanRt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
