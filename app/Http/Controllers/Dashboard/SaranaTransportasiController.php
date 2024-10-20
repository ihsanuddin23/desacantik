<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SaranaTransportasi; // Import the SaranaTransportasi model
use Illuminate\Http\Request;

class SaranaTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show the form for creating a new Sarana Transportasi
        return view('dashboard.demografi.transportasi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_transportasi' => 'nullable|string|max:255',
            'kondisi_transportasi' => 'nullable|string|max:255',
            'jumlah_volume_transportasi' => 'nullable|numeric',
            'keterangan_transportasi' => 'nullable|string',
        ]);

        // Create a new Sarana Transportasi record 
        SaranaTransportasi::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Transportasi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the specific Sarana Transportasi by ID and pass it to the edit form
        $saranatransportasi = SaranaTransportasi::findOrFail($id);
        return view('dashboard.demografi.transportasi.edit', compact('saranatransportasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_transportasi' => 'nullable|string|max:255',
            'kondisi_transportasi' => 'nullable|string|max:255',
            'jumlah_volume_transportasi' => 'nullable|numeric',
            'keterangan_transportasi' => 'nullable|string',
        ]);

        // Find the specific Sarana Transportasi and update it
        SaranaTransportasi::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Transportasi berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the specific Sarana Transportasi and delete it
        SaranaTransportasi::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Transportasi berhasil dihapus.');
    }
}
