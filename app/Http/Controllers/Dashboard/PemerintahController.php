<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pemerintah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    public function index()
    {
        // Ambil semua data pemerintah dari database
        $pemerintah = Pemerintah::paginate(10);
        // Kirim data ke view dengan compact
        return view("dashboard.pemerintah.index", compact("pemerintah"));
    }
    public function create()
    {
        // Tampilkan view form untuk menambah data pemerintah
        return view("dashboard.pemerintah.add");
    }
    // Menyimpan data pemerintah ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'niap' => 'required|string|max:255|unique:pemerintah',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:50',
            'pendidikan_terakhir' => 'required|string|max:100',
            'nomor_sk' => 'nullable|string|max:255',
            'tanggal_sk' => 'nullable|date',
            'masa_jabatan' => 'required|string|max:100',
            'status' => 'required|string|max:50',
            'tupoksi_jabatan' => 'required|string|max:255',
        ]);

        // Menyimpan gambar
        $imageName = null;
        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('thumbnails'), $imageName);
        }

        // Menyimpan data ke database
        Pemerintah::create([
            'thumbnail' => $imageName, // Menyimpan nama file gambar
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'niap' => $request->niap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'masa_jabatan' => $request->masa_jabatan,
            'status' => $request->status,
            'tupoksi_jabatan' => $request->tupoksi_jabatan,
        ]);

        return redirect()->route('dashboard.pemerintah.index')->with('success', 'Data berhasil disimpan!');
    }
    public function edit($id)
    {
        // Ambil data pemerintah berdasarkan ID
        $pemerintah = Pemerintah::findOrFail($id);
        // Tampilkan view form untuk mengedit data pemerintah
        return view("dashboard.pemerintah.edit", compact("pemerintah"));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'niap' => ['required', 'string', 'max:255', Rule::unique('pemerintah')->ignore($id)],
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:50',
            'pendidikan_terakhir' => 'required|string|max:100',
            'nomor_sk' => 'nullable|string|max:255',
            'tanggal_sk' => 'nullable|date',
            'masa_jabatan' => 'required|string|max:100',
            'status' => 'required|string|max:50',
        ]);

        // Ambil data pemerintah berdasarkan ID
        $pemerintah = Pemerintah::findOrFail($id);

        // Menyimpan gambar baru jika ada
        $imageName = $pemerintah->thumbnail; // Jika tidak ada gambar baru, gunakan gambar yang sudah ada
        if ($request->hasFile('thumbnail')) {
            // Hapus gambar lama jika ada
            if ($imageName) {
                $oldImagePath = public_path('thumbnails/' . $imageName);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus gambar lama
                }
            }
            // Menyimpan gambar baru
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('thumbnails'), $imageName);
        }

        // Mengupdate data ke database
        $pemerintah->update([
            'thumbnail' => $imageName,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'niap' => $request->niap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'masa_jabatan' => $request->masa_jabatan,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.pemerintah.index')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id)
    {
        // Ambil data pemerintah berdasarkan ID
        $pemerintah = Pemerintah::findOrFail($id);

        // Hapus gambar yang terkait jika ada
        if ($pemerintah->thumbnail) {
            $oldImagePath = public_path('thumbnails/' . $pemerintah->thumbnail);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Menghapus gambar
            }
        }

        // Menghapus data pemerintah dari database
        $pemerintah->delete();

        return redirect()->route('dashboard.pemerintah.index')->with('success', 'Data berhasil dihapus!');
    }
}
