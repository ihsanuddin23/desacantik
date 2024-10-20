<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function create()
    {
        // Show the form for creating a new Kependudukan
        return view('dashboard.demografi.pendidikan.add');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_pendidikan' => 'nullable|string|max:255',
            'nama_pendidikan' => 'nullable|string|max:255',
            'jumlah_volume_pendidikan' => 'nullable|string',
        ]);

        // Create a new Fasilitas Umum record
        Pendidikan::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Pendidikan berhasil ditambahkan.');
    }
    public function edit($id)
    {
        // Find the specific Fasilitas Umum by ID and pass it to the edit form
        $pendidikan = Pendidikan::findOrFail($id);
        return view('dashboard.demografi.pendidikan.edit', compact('pendidikan'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_pendidikan' => 'nullable|string|max:255',
            'nama_pendidikan' => 'nullable|string|max:255',
            'jumlah_volume_pendidikan' => 'nullable|string',
        ]);

        // Find the specific Fasilitas Umum and update it
        Pendidikan::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Pendidikan  berhasil diubah.');
    }
    public function destroy($id)
    {
        // Find the specific Fasilitas Umum and delete it
        Pendidikan::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Pendidikan berhasil dihapus.');
    }
}
