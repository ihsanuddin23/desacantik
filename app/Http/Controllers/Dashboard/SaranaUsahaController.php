<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SaranaUsaha; // Import the Usaha model
use Illuminate\Http\Request;

class SaranaUsahaController extends Controller
{
    public function create()
    {
        // Show the form for creating a new Kependudukan
        return view('dashboard.demografi.saranausaha.add');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_perusahaan' => 'nullable|string|max:255',
            'jumlah_volume_sarana_usaha' => 'nullable|numeric',
            'keterangan_sarana_usaha' => 'nullable|string',
        ]);

        // Create a new Fasilitas Umum record
        SaranaUsaha::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Usaha berhasil ditambahkan.');
    }
    public function edit($id)
    {
        // Find the specific Fasilitas Umum by ID and pass it to the edit form
        $saranausaha = SaranaUsaha::findOrFail($id);
        return view('dashboard.demografi.saranausaha.edit', compact('saranausaha'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_perusahaan' => 'nullable|string|max:255',
            'jumlah_volume_sarana_usaha' => 'nullable|numeric',
            'keterangan_sarana_usaha' => 'nullable|string',
        ]);

        // Find the specific Fasilitas Umum and update it
        SaranaUsaha::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Usaha berhasil diubah.');
    }
    public function destroy($id)
    {
        // Find the specific Fasilitas Umum and delete it
        SaranaUsaha::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Usaha berhasil dihapus.');
    }
}
