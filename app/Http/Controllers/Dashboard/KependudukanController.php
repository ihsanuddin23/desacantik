<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kependudukan; // Import the Kependudukan model
use Illuminate\Http\Request;

class KependudukanController extends Controller
{
    public function create()
    {
        // Show the form for creating a new Kependudukan
        return view('dashboard.demografi.kependudukan.add');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'kemasyarakatan' => 'nullable|string|max:255',
            'jumlah_volume_kependudukan' => 'nullable|numeric',
            'keterangan_kependudukan' => 'nullable|string',
        ]);

        // Create a new Fasilitas Umum record
        Kependudukan::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Kependudukan berhasil ditambahkan.');
    }
    public function edit($id)
    {
        // Find the specific Fasilitas Umum by ID and pass it to the edit form
        $kependudukan = Kependudukan::findOrFail($id);
        return view('dashboard.demografi.kependudukan.edit', compact('kependudukan'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'kemasyarakatan' => 'required|string|max:255',
            'jumlah_volume_kependudukan' => 'required|numeric',
            'keterangan_kependudukan' => 'nullable|string',
        ]);

        // Find the specific Fasilitas Umum and update it
        Kependudukan::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Kependudukan berhasil diubah.');
    }
    public function destroy($id)
    {
        // Find the specific Sarana Transportasi and delete it
        Kependudukan::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Kependudukan berhasil dihapus.');
    }
}
