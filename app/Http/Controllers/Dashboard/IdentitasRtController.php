<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\IdentitasRt;
use Illuminate\Http\Request;

class IdentitasRtController extends Controller
{
    public function create()
    {
        // Show the form for creating a new Identitas RT
        return view('dashboard.demografirt.identitasrt.add');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_rt' => 'nullable|string|max:255',
            'nomor_rw' => 'nullable|string|max:255',
            'dusun' => 'nullable|string|max:255',
            'nama_ketua_rt' => 'nullable|string|max:255',
            'jumlah_kk' => 'nullable|integer|min:0',
            'nama_ketua_rt' => 'nullable|string|max:255',
            'tanggal_lahir_ketua_rt' => 'nullable|date',
            'pendidikan_ketua_rt' => 'nullable|string|max:255',
            'pekerjaan_ketua_rt' => 'nullable|string|max:255',
            'nomor_telepon_ketua_rt' => 'nullable|string|max:15',
        ]);

        // Simpan data ke database
        IdentitasRt::create($request->all());

        // Redirect setelah sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')
            ->with('success', 'Identitas RT berhasil ditambahkan.');
    }
    public function edit($id)
    {
        // Cari data Identitas RT berdasarkan ID
        $identitasRt = IdentitasRt::findOrFail($id);

        // Tampilkan form edit dengan data yang ada
        return view('dashboard.demografirt.identitasrt.edit', compact('identitasRt'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nomor_rt' => 'nullable|string|max:255',
            'nomor_rw' => 'nullable|string|max:255',
            'dusun' => 'nullable|string|max:255',
            'nama_ketua_rt' => 'nullable|string|max:255',
            'jumlah_kk' => 'nullable|integer|min:0',
            'tanggal_lahir_ketua_rt' => 'nullable|date',
            'pendidikan_ketua_rt' => 'nullable|string|max:255',
            'pekerjaan_ketua_rt' => 'nullable|string|max:255',
            'nomor_telepon_ketua_rt' => 'nullable|string|max:15',
        ]);

        // Cari data Identitas RT berdasarkan ID
        $identitasRt = IdentitasRt::findOrFail($id);

        // Update data
        $identitasRt->update($request->all());

        // Redirect setelah sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')
            ->with('success', 'Identitas RT berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Cari data Identitas RT berdasarkan ID
        $identitasRt = IdentitasRt::findOrFail($id);

        // Hapus data
        $identitasRt->delete();

        // Redirect setelah sukses
        return redirect()->route('dashboard.dashboard.demografirt.index')
            ->with('success', 'Identitas RT berhasil dihapus.');
    }
    public function show($id)
    {
        // Cari data Identitas RT berdasarkan ID
        $identitasRt = IdentitasRt::findOrFail($id);

        // Tampilkan detail data di view
        return view('dashboard.demografirt.identitasrt.show', compact('identitasRt'));
    }
}
