<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use App\Models\PendidikanRT;
use Illuminate\Http\Request;

class PendidikanRtController extends Controller
{
    public function create()
    {

        // Mengambil data dari tabel identitasrt untuk dropdown
        $identitas = IdentitasRt::all();

        return view('dashboard.demografirt.pendidikanrt.add', compact('identitas'));
    }

    // Menyimpan data pendidikan ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'identitasrt_id' => 'required|exists:identitasrt,id',
            'laki_laki' => 'nullable|integer|min:0',
            'laki_belum_sekolah' => 'nullable|integer|min:0',
            'laki_belum_tamat_sd' => 'nullable|integer|min:0',
            'laki_tamat_sd' => 'nullable|integer|min:0',
            'laki_sltp' => 'nullable|integer|min:0',
            'laki_slta' => 'nullable|integer|min:0',
            'laki_diploma_1_2' => 'nullable|integer|min:0',
            'laki_diploma_3' => 'nullable|integer|min:0',
            'laki_diploma_4_strata_1' => 'nullable|integer|min:0',
            'laki_strata_2' => 'nullable|integer|min:0',
            'laki_strata_3' => 'nullable|integer|min:0',
            'laki_belum_mengisi' => 'nullable|integer|min:0',
            'perempuan' => 'nullable|integer|min:0',
            'perempuan_belum_sekolah' => 'nullable|integer|min:0',
            'perempuan_belum_tamat_sd' => 'nullable|integer|min:0',
            'perempuan_tamat_sd' => 'nullable|integer|min:0',
            'perempuan_sltp' => 'nullable|integer|min:0',
            'perempuan_slta' => 'nullable|integer|min:0',
            'perempuan_diploma_1_2' => 'nullable|integer|min:0',
            'perempuan_diploma_3' => 'nullable|integer|min:0',
            'perempuan_diploma_4_strata_1' => 'nullable|integer|min:0',
            'perempuan_strata_2' => 'nullable|integer|min:0',
            'perempuan_strata_3' => 'nullable|integer|min:0',
            'perempuan_belum_mengisi' => 'nullable|integer|min:0',
        ]);

        // Menyimpan data ke database
        PendidikanRt::create($request->all());

        // Redirect ke halaman dengan pesan sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $pendidikanrt = PendidikanRt::findOrFail($id);
        $identitas = IdentitasRt::all();

        return view('dashboard.demografirt.pendidikanrt.edit', compact('pendidikanrt', 'identitas'));
    }

    // Mengupdate data pendidikan di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'identitasrt_id' => 'required|exists:identitasrt,id',
            'laki_laki' => 'nullable|integer|min:0',
            'laki_belum_sekolah' => 'nullable|integer|min:0',
            'laki_belum_tamat_sd' => 'nullable|integer|min:0',
            'laki_tamat_sd' => 'nullable|integer|min:0',
            'laki_sltp' => 'nullable|integer|min:0',
            'laki_slta' => 'nullable|integer|min:0',
            'laki_diploma_1_2' => 'nullable|integer|min:0',
            'laki_diploma_3' => 'nullable|integer|min:0',
            'laki_diploma_4_strata_1' => 'nullable|integer|min:0',
            'laki_strata_2' => 'nullable|integer|min:0',
            'laki_strata_3' => 'nullable|integer|min:0',
            'laki_belum_mengisi' => 'nullable|integer|min:0',
            'perempuan' => 'nullable|integer|min:0',
            'perempuan_belum_sekolah' => 'nullable|integer|min:0',
            'perempuan_belum_tamat_sd' => 'nullable|integer|min:0',
            'perempuan_tamat_sd' => 'nullable|integer|min:0',
            'perempuan_sltp' => 'nullable|integer|min:0',
            'perempuan_slta' => 'nullable|integer|min:0',
            'perempuan_diploma_1_2' => 'nullable|integer|min:0',
            'perempuan_diploma_3' => 'nullable|integer|min:0',
            'perempuan_diploma_4_strata_1' => 'nullable|integer|min:0',
            'perempuan_strata_2' => 'nullable|integer|min:0',
            'perempuan_strata_3' => 'nullable|integer|min:0',
            'perempuan_belum_mengisi' => 'nullable|integer|min:0',
        ]);

        // Temukan data yang akan diupdate
        $pendidikan = PendidikanRt::findOrFail($id);

        // Update data
        $pendidikan->update($request->all());

        // Mengalihkan ke halaman dengan pesan sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')->with('success', 'Data pendidikan berhasil diupdate.');
    }
    public function show($id)
    {
        // Mengambil data pendidikan berdasarkan ID
        $pendidikanrt = PendidikanRt::findOrFail($id);
        $identitas = IdentitasRt::findOrFail($pendidikanrt->identitasrt_id);

        return view('dashboard.demografirt.pendidikanrt.show', compact('pendidikanrt', 'identitas'));
    }
}
