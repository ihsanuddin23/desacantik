<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use App\Models\PendidikanRT;
use App\Models\PendidikanRtHistory;
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
            'identitasrt_id' => 'required|exists:identitasrt,id', // Validasi ID Identitas RT
            'total' => 'required|integer|max:999',
            'tidak_tamat_sd' => 'required|integer|max:999',
            'tamat_sd' => 'required|integer|max:999',
            'tamat_smp' => 'required|integer|max:999',
            'tamat_sma' => 'required|integer|max:999',
            'tamat_perguruan_tinggi' => 'required|integer|max:999',
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

    public function update(Request $request, $id)
    {
        // Temukan data PendidikanRt berdasarkan ID yang diberikan
        $pendidikanrt = PendidikanRt::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'identitasrt_id' => 'nullable|exists:identitasrt,id', // Jika editing, identitasrt_id bersifat opsional
            'total' => 'required|integer|max:999',
            'tidak_tamat_sd' => 'required|integer|max:999',
            'tamat_sd' => 'required|integer|max:999',
            'tamat_smp' => 'required|integer|max:999',
            'tamat_sma' => 'required|integer|max:999',
            'tamat_perguruan_tinggi' => 'required|integer|max:999',
            // tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        // Update data PendidikanRt dengan data yang sudah tervalidasi
        $pendidikanrt->update($validatedData);

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')->with('success', 'Pendidikan RT berhasil diperbarui.');
    }

    public function show($id)
    {
        // Mengambil data pendidikan berdasarkan ID
        $pendidikanrt = PendidikanRt::findOrFail($id);
        $identitas = IdentitasRt::findOrFail($pendidikanrt->identitasrt_id);


        // Mengambil data history (jika ada)
        $history = PendidikanRtHistory::where('pendidikanrt_id', $id)->get();

        return view('dashboard.demografirt.pendidikanrt.show', compact('pendidikanrt', 'identitas', 'history'));
    }
    public function destroy($id)
    {
        // Temukan data PendidikanRt berdasarkan ID yang diberikan
        $pendidikanrt = PendidikanRt::findOrFail($id);

        // Hapus data PendidikanRt dari database
        $pendidikanrt->delete();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')->with('success', 'Data pendidikan berhasil dihapus.');
    }
}
