<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Usaha; // Import the Usaha model

use Illuminate\Http\Request;

class UsahaController extends Controller
{
    public function create()
    {
        // Show the form for creating a new Kependudukan
        return view('dashboard.demografi.usaha.add');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_usaha' => 'nullable|string|max:255',
            'jumlah_volume_usaha' => 'nullable|numeric',
            'keterangan_usaha' => 'nullable|string',
        ]);

        // Create a new Fasilitas Umum record
        Usaha::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Usaha berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Find the specific Fasilitas Umum by ID and pass it to the edit form
        $usaha = Usaha::findOrFail($id);
        return view('dashboard.demografi.usaha.edit', compact('usaha'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_usaha' => 'nullable|string|max:255',
            'jumlah_volume_usaha' => 'nullable|numeric',
            'keterangan_usaha' => 'nullable|string',
        ]);

        // Find the specific Fasilitas Umum and update it
        Usaha::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Usaha berhasil diubah.');
    }
    public function destroy($id)
    {
        // Find the specific Fasilitas Umum and delete it
        Usaha::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Usaha berhasil dihapus.');
    }
}
