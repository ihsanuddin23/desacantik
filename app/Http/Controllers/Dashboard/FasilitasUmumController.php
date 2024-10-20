<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FasilitasUmum; // Import the FasilitasUmum model
use Illuminate\Http\Request;

class FasilitasUmumController extends Controller
{
    public function index()
    {
        // Retrieve all Fasilitas Umum records and pass them to the view
        $fasilitasumum = FasilitasUmum::all();
        return view('dashboard.fasilitasumum.index', compact('fasilitasumum'));
    }
    public function create()
    {
        // Show the form for creating a new Fasilitas Umum
        return view('dashboard.demografi.fasilitasumum.add');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_fasilitas_umum' => 'nullable|string|max:255',
            'nama_fasilitas_umum' => 'nullable|string|max:255',
            'jumlah_volume_fasilitas_umum' => 'nullable|numeric',
            'keterangan_fasilitas_umum' => 'nullable|string',
        ]);

        // Create a new Fasilitas Umum record
        FasilitasUmum::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Fasilitas Umum berhasil ditambahkan.');
    }
    public function edit($id)
    {
        // Find the specific Fasilitas Umum by ID and pass it to the edit form
        $fasilitasumum = FasilitasUmum::findOrFail($id);
        return view('dashboard.demografi.fasilitasumum.edit', compact('fasilitasumum'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_fasilitas_umum' => 'required|string|max:255',
            'nama_fasilitas_umum' => 'nullable|string|max:255',
            'jumlah_volume_fasilitas_umum' => 'required|numeric',
            'keterangan_fasilitas_umum' => 'nullable|string',
        ]);

        // Find the specific Fasilitas Umum and update it
        FasilitasUmum::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Fasilitas Umum berhasil diubah.');
    }
    public function destroy($id)
    {
        // Find the specific Fasilitas Umum and delete it
        FasilitasUmum::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Fasilitas Umum berhasil dihapus.');
    }
}
